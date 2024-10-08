<nav>
    <ul class="nav">
        <li>
{{--            @if(request()->routeIs('home'))--}}
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Homepage</a>
{{--            @else--}}
{{--                <a href="{{ route('home') }}" class="">Homepage</a>--}}
{{--            @endif--}}
        </li>
        <li>
            <a href="{{ route('blogs') }}">Blogs overview</a>
        </li>
        <li>
            <a href="{{ route('blogs.create') }}">New blog</a>

        </li>
        <li>
            <a href="{{ route('about') }}">About us</a>

        </li>
    </ul>
</nav>
