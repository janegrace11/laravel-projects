<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController; 

// Home route
Route::get('/', function () {
    return view('welcome');
});

// Product routes
Route::resource('products', ProductController::class);

// Authentication routes
Route::get('/login', function () {
    return view('authentication.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login.post'); // Add this line

Route::get('/register', function () {
    return view('authentication.register');
})->name('register'); // Added GET route for registration page

Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::get('/logout', [AuthController::class, 'logout']);
