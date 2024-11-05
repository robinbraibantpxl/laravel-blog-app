<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function home(): View
    {
        $allBlogs = Blog::all();
        return view('home', ['blogs' => $allBlogs]);
    }

    public function about(): View {
        return view('about');
    }
}
