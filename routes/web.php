<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\RazorpayPaymentController;
use App\Http\Controllers\TemporaryController;

// Ashish Patel Demo
// Frontend Welcome Page Route
Route::get('/', [TemporaryController::class, 'welcome'])->name('welcome');
Route::get('about', [TemporaryController::class, 'about'])->name('about');
Route::get('courses', [TemporaryController::class, 'courses'])->name('courses');
Route::get('course/description', [TemporaryController::class, 'courseDescription'])->name('course/description');
Route::get('teachers', [TemporaryController::class, 'teachers'])->name('teachers');
Route::get('teacher/description', [TemporaryController::class, 'teacherDescription'])->name('teacher/description');
Route::get('contact', [TemporaryController::class, 'contact'])->name('contact');
Route::get('gallery', [TemporaryController::class, 'gallery'])->name('gallery');
Route::get('registration', [TemporaryController::class, 'registration'])->name('registration');
Route::get('checkout', [TemporaryController::class, 'checkout'])->name('checkout');

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

// Fallback Address
Route::fallback(function () {
    return view('frontend.pages.fallback');
});