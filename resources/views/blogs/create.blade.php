@extends('layout')

@section('title', 'New Blog')

@section('content')
    <h1>Maak een nieuw blog item aan.</h1>

    <form method="post" action="{{ route('blogs.store') }}">
        @csrf
        <label for="title">Titel</label>
        <input type="text" name="title" id="title">
        <label for="description">Omschrijving</label>
        <textarea name="description" id="description"></textarea>
        <button type="submit">Verzend</button>
    </form>
@endsection
