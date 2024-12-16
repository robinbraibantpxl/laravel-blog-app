<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

use App\Http\Requests\BlogPostFormRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

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
//        Auth::user()->blogs()->create($validatedProperties);
//        $id = Auth::user()->id;
//        $newBlog = Blog::create($validatedProperties);
        $newBlog = $request->user()->blogs()->create($validatedProperties);
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
    public function edit(Request $request, Blog $blog)
    {
        if ($request->user()->cannot('update', $blog)) {
            abort(403);
        }

        return view('blogs.edit', ['blogPost' => $blog]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogPostFormRequest $request, Blog $blog)
    {
        Gate::authorize("update", $blog);
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
        Gate::authorize("delete", $blog);
        $destroyed = Blog::destroy($blog->id);
        return redirect()
            ->route('home')
            ->with('succes', 'De blogpost werd succesvol verwijderd');
    }
}
