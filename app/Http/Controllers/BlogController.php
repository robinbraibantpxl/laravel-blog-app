<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        request()->route()->name('');
        $title = "Zie hier een overzicht van onze blogs";
        return view('blogs.index', ['heading' => $title]);
    }

    //CREATE
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
        public function store(Request $request): RedirectResponse
        {
            $request->validate(['title' => 'Required']);
            $request->validate(['description' => ['required', 'min:10']]);

            $title = $request->input('title');
            $description = $request->input('description');

            $newBlog = new Blog();
            $newBlog->title = $title;
            $newBlog->description = $description;
            $newBlog->save();

            return redirect()
                ->route('blogs.create')
                ->with('success', "Jouw post werd succesvol verzonden met de volgende gegevens: Titel: $newBlog->title Omschrijving: $newBlog->description");
        }

        /**
         * Display the specified resource.
         */
        public function show(string $id)
        {
            //
        }

    //UPDATE
        /**
         * Show the form for editing the specified resource.
         */
        public function edit(string $id)
        {
            //
        }

        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, string $id)
        {
            //
        }
    //ENDUPDATE

    //DELETE
        /**
         * Remove the specified resource from storage.
         */
        public function destroy(string $id)
        {
            //
        }
    //ENDDELETE
}
