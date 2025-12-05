<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Exception;

class EmailVerificationController extends Controller
{
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
}
