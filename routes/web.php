<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::resource('blogs', BlogController::class)
    ->except('index')
    ->middleware('auth');
//Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::match(['get', 'post'],'/register', [AuthController::class, 'register'])
    ->name('register')
    ->middleware('guest');

Route::match(['get', 'post'],'/login', [AuthController::class, 'login'])
    ->name('login')
    ->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])
    ->name('logout')
    ->middleware('auth');
