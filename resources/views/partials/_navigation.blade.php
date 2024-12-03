<nav>
    <ul class="nav">
        <li>
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
        </li>
        <li>
            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">Over ons</a>
        </li>
        @auth
            <li>
                <a href="{{ route('blogs.create') }}" class="{{ request()->routeIs('blogs.create') ? 'active' : '' }}">Nieuwe blog</a>
            </li>
            <li>
                <a href="{{ route('logout') }}">Afmelden</a>
            </li>
            <li class="username">Aangemeld als {{ Auth::user()->name }}</li>
        @else
            <li>
                <a href="{{ route('register') }}" class="{{ request()->routeIs('register') ? 'active' : '' }}">Registreer</a>
            </li>
            <li>
                <a href="{{ route('login') }}" class="{{ request()->routeIs('login') ? 'active' : '' }}">Inloggen</a>
            </li>
        @endauth
    </ul>
</nav>
