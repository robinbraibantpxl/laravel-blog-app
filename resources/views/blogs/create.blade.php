@extends('layout')

@section('title', 'New Blog')

@section('content')
    <h1>Maak een nieuw blog item aan.</h1>

    <form method="post" action="{{ route('blogs.store') }}">
        @csrf
        <label for="title">Titel</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}" class="@error('title') error-border @enderror"/>
        @error('title')
            <div class="error">
                {{ $message }}
            </div>
        @enderror
        <label for="description">Omschrijving</label>
        <textarea name="description" id="description" class="@error('description') error-border @enderror">{{ old('description') }}</textarea>
        @error('description')
            <div class="error">
                {{ $message }}
            </div>
        @enderror
        <button type="submit">Verzend</button>
    </form>
@endsection
