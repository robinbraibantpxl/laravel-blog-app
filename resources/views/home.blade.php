@extends('layout')

@section('title', 'Blog App')

@section('content')
    <h1>Home Page</h1>
    <p>This is the homepage</p>

{{--    @if($blogs->isNotEmpty())--}}
{{--        @foreach($blogs as $blog)--}}
{{--            <div class="post-item">--}}
{{--                <h2>{{$blog->title}}</h2>--}}
{{--                <p>{{$blog->description}}</p>--}}
{{--            </div>--}}
{{--        @endforeach--}}
{{--    @else--}}
{{--        <p>Er zijn momenteel nog geen blogs beschikbaar</p>--}}
{{--    @endif--}}


    @forelse($blogs as $blog)
        <div class="post-item">
            <a href="{{ route('blogs.show', ['blog' => $blog->id]) }}">
                <h2>{{$blog->title}}</h2>
            </a>
            <p>{{$blog->description}}</p>
            <small>Geschreven door <b>{{$blog->user->name}}</b></small>
        </div>
    @empty
        <p>Er zijn momenteel nog geen blogs beschikbaar</p>
    @endforelse

@endsection
