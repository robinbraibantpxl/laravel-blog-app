<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')
    ->name('home');

Route::view('/about', 'about')
    ->name('about');

Route::name('blogs')
    ->prefix('blogs')
    ->group(function() {
        Route::get('/', function () {
            request()->route()->name('');
            $title = "Zie hier een overzicht van onze blogs";
            return view('blogs.index', ['heading' => $title]);
        })->name('');

        Route::get('/create', function () {
            return view('blogs.create');
        })->name('.create');

        Route::post('/', function (Request $request) {
            $request->validate(['title' => 'Required']);
            $request->validate(['description' => ['required', 'min:10']]);
            $title = $request->input('title');
            $description = $request->input('description');
            return redirect()
                ->route('blogs.create')
                ->with('success', "Jouw post werd succesvol verzonden met de volgende gegevens: Titel: $title Omschrijving: $description");
        })->name('.store');
    });
