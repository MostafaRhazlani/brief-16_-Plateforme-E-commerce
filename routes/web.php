<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login.form');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::post('/register/user', [AuthController::class, 'register'])->name('register');
Route::post('/login/user', [AuthController::class, 'login'])->name('login');
