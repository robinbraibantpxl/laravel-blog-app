<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function home(): View
    {
        return view('home');
    }

    public function about(): View {
        return view('about');
    }
}
