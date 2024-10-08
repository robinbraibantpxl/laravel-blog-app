<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')
    ->name('home');

Route::get('/blogs', function (){
    request()->route()->name('blogs');
    $title = "Zie hier een overzicht van onze blogs";
   return view('blogs.index', ['heading' => $title]);
})->name('blogs');

Route::get('/blogs/create', function (){
    return view('blogs.create');
})->name('blogs.create');

Route::post('/blogs', function (Request $request){

    return redirect()->route('blogs.create');
})->name('blogs.store');

Route::view('/about', 'about')
    ->name('about');
