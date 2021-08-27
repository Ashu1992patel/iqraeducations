<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\RazorpayPaymentController;

// Frontend Welcome Page Route
Route::get('/', function () {
    return view('frontendview.welcome');
    // return view('welcome');
});

//  Socialite Route Starts...
Route::get('/auth/redirect', function () {
    return Socialite::driver('github')->redirect();
});

Route::get('/auth/callback', function () {
    $user = Socialite::driver('github')->user();

    // OAuth 2.0 providers...
    $token = $user->token;
    $refreshToken = $user->refreshToken;
    $expiresIn = $user->expiresIn;

    // OAuth 1.0 providers...
    $token = $user->token;
    $tokenSecret = $user->tokenSecret;

    // All providers...
    $user->getId();
    $user->getNickname();
    $user->getName();
    $user->getEmail();
});
//  Socialite Route Ends...


// Jetstream Routes
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



// Start Payment Gateway Example
// you can get testing card for razorpay from here: https://razorpay.com/docs/payment-gateway/test-card-upi-details/
// localhost:8000/razorpay-payment
// https://meetanshi.com/blog/best-indian-payment-gateways/
Route::get('razorpay-payment', [RazorpayPaymentController::class, 'index']);
Route::post('razorpay-payment', [RazorpayPaymentController::class, 'store'])->name('razorpay.payment.store');
// Ends...
