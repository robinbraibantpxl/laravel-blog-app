


@extends('layout')

@section('title')
    {{ $blogPost->title }}
@endsection

@section('content')
    <div class="post-item">
        <div class="post-content">
            <h2>{{ $blogPost->title }}</h2>
            <p>{{ $blogPost->description }}</p>
            @can('update', $blogPost)
            <a href="{{ route('blogs.edit', ['blog' => $blogPost->id]) }}">Wijzig Blog</a>
            @endcan
        </div>
        @can('delete', $blogPost)
        <form method="post" action="{{ route('blogs.destroy', ['blog' => $blogPost->id]) }}">
            @csrf
            @method('DELETE')
            <button class="delete" type="submit">Verwijder Blog</button>
        </form>
        @endcan
        <small>Geschreven door <b>{{$blogPost->user->name}}</b></small>
    </div>
@endsection
