<nav>
    <ul class="nav">
        <li>
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Homepage</a>
        </li>
{{--        <li>--}}
{{--            <a href="{{ route('blogs.index') }}" class="{{ request()->routeIs('blogs') ? 'active' : '' }}">Blogs overview</a>--}}
{{--        </li>--}}
        <li>
            <a href="{{ route('blogs.create') }}" class="{{ request()->routeIs('blogs.create') ? 'active' : '' }}">New blog</a>

        </li>
        <li>
            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About us</a>

        </li>
    </ul>
</nav>
