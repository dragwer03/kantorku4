<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Landing Page Route
Route::get('/', function () {
    return view('landing'); // Landing page for the website
})->name('landing');

// Sign Up Page
Route::get('/signup', function () {
    return view('signup'); // Display the signup form
})->name('signup');

// Handle Sign Up Form Submission
Route::post('/signup', [AuthController::class, 'store'])->name('signup.store');

// Login Page
Route::get('/login', function () {
    return view('login'); // Display the login form
})->name('login');

// Handle Login Form Submission
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');

// Logout Route
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard Page (Protected)
Route::get('/dashboard', function () {
    return view('dashboard'); // Dashboard view
})->middleware('auth')->name('dashboard');