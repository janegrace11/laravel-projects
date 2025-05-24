<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController; 

// Home route
Route::get('/', function () {
    return redirect()->route('login');
});


Route::middleware(['auth'])->group(function () {
    Route::resource('products', ProductController::class);
});

// Authentication routes
Route::get('/login', function () {
    return view('authentication.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login.post'); 

Route::get('/register', function () {
    return view('authentication.register');
})->name('register'); 

Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
