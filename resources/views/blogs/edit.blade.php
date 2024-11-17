@extends('layout')

@section('title', 'Update Blog - ' . $blogPost->title)

@section('content')
    <h1>Update blog "{{ $blogPost->title }}"</h1>

    <form method="post" action="{{ route('blogs.update', ['blog' => $blogPost->id]) }}">
        @csrf
        @method('PUT')
        <label for="title">Titel</label>
        <input type="text" name="title" id="title" value="{{ old('title', $blogPost->title) }}" class="@error('title') error-border @enderror"/>
        @error('title')
        <div class="error">
            {{ $message }}
        </div>
        @enderror
        <label for="description">Omschrijving</label>
        <textarea name="description" id="description" class="@error('description') error-border @enderror">{{ old('description', $blogPost->description) }}</textarea>
        @error('description')
        <div class="error">
            {{ $message }}
        </div>
        @enderror
        <button type="submit">Update</button>
    </form>
@endsection
