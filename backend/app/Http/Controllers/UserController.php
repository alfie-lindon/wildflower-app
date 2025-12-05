<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Exception;

class UserController extends Controller
{
    public function index(Request $request)
    {
        try{
            $rows = \DB::table('users')->get();
            return response()->json([
                'rows' => $rows
            ]);
        }catch(Exception $e){
            $message = $e->getMessage();
            return response()->json([
                'message' => env ('APP_DEBUG') ? $message : "Something went wrong."
            ]);
        }
    }

    public function register(RegisterRequest $request)
    {
        try{
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => $request->password
            ]);

            //Send verification email (built in by laravel)
            $user->sendEmailVerificationNotification();

            // Auto login after creation
            Auth::login($user);

            // Genarate token by sanctum
            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'message' => 'User registered. Please check your email for verification.',
                'user' => $user,
                'token' => $token,
            ], 201);

        }catch(Exception $e){
            $message = $e->getMessage();
            return response()->json([
                'message' => env ('APP_DEBUG') ? $message : "Something went wrong."
            ]);
        }
    }

    public function resendVerification(Request $request){
        try{
            $request->user()->sendEmailVerificationNotification();

            return response()->json([
                'message' => 'Verification email resent'
            ]);
        }catch(Exception $e){
            $message = $e->getMessage();
            return response()->json([
                'message' => env ('APP_DEBUG') ? $message : "Something went wrong."
            ]);
        }
    }

    public function verify(Request $request){
        try{
            $user = User::findOrFail($request->id);

            if (! hash_equals($request->hash, sha1($user->getEmailForVerification()))) {
                return response()->json(['message' => 'Invalid verification link'], 400);
            }

            if ($user->hasVerifiedEmail()) {
                return response()->json(['message' => 'Email already verified']);
            }

            $user->markEmailAsVerified();

            return redirect('http://localhost:5173/login?verified=1');
        }catch(Exception $e){
            $message = $e->getMessage();
            return response()->json([
                'message' => env ('APP_DEBUG') ? $message : "Something went wrong."
            ]);
        }
    }

    public function login(LoginRequest $request){
        try{
            $credentials = $request->only('email', 'password');

            if(!Auth::attempt($credentials)){
                return response()->json([
                    'message' => "Invalid credentials."
                ]);
            }

            // Find email
            $user = User::where('email', $credentials['email'])->first();
            if(!$user->hasVerifiedEmail()){
                return response()->json([
                    'message' => "Email not Verified."
                ]);
            }

            // Create token for login
            $token = $user->createToken('auth_token')->plainTextToken;
            return response()->json([
                'message' => 'Login successful',
                'user' => $user,
                'token' => $token, // Optionally return a token
            ], 200);

        }catch(Exception $e){
            $message = $e->getMessage();
            return response()->json([
                'message' => env ('APP_DEBUG') ? $message : "Something went wrong."
            ]);
        }
    }

    public function logout(Request $request){
        try{
            $user = $request->user();
            $user->currentAccessToken()->delete();
            return response()->json([
                'message' => 'Logout successful'
            ], 200);
        }catch(Exception $e){
            $message = $e->getMessage();
            return response()->json([
                'message' => env('APP_DEBUG') ? $message : "Something went wrong"
            ]);
        }
    }
}
