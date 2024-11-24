<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\BlogPostFormRequest;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $title = "Zie hier een overzicht van onze blogs";
        return view('blogs.index', ['heading' => $title]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogPostFormRequest $request): RedirectResponse
    {
        $validatedProperties = $request->validated();
        $newBlog = Blog::create($validatedProperties);
        return redirect()
            ->route('blogs.create')
            ->with('success', "Jouw post werd succesvol verzonden met de volgende gegevens: Titel: $newBlog->title Omschrijving: $newBlog->description");
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
//        $blogPost = Blog::findOrFail($id);
        return view('blogs.show', ['blogPost' => $blog]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('blogs.edit', ['blogPost' => $blog]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogPostFormRequest $request, Blog $blog)
    {
        $validatedProperties = $request->validated();
        Blog::update($validatedProperties);
        return redirect()
            ->route('blogs.show', ['blog' => $blog])
            ->with('succes', 'De blogpost werd succesvol gewijzigd');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
