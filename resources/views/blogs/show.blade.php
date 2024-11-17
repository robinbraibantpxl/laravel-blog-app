


@extends('layout')

@section('title')
    {{ $blogPost->title }}
@endsection

@section('content')
    <div class="post-item">
        <div class="post-content">
            <h2>{{ $blogPost->title }}</h2>
            <p>{{ $blogPost->description }}</p>
        </div>
    </div>
@endsection
