<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\EmailVerificationController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/signup', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/email/verify/resend', [UserController::class, 'resendVerification'])
    ->middleware('auth:sanctum');
Route::get('/email/verify/{id}/{hash}', [UserController::class, 'verify'])
    ->middleware(['signed'])->name('verification.verify');
