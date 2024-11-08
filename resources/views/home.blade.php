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
            <h2>{{$blog->title}}</h2>
            <p>{{$blog->description}}</p>
        </div>
    @empty
        <p>Er zijn momenteel nog geen blogs beschikbaar</p>
    @endforelse

@endsection
