<nav>

   
    <ul class="links active">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/about') }}">About</a></li>
            <li><a href="{{ url('/news') }}">News</a></li>
    </ul>

    <ul class="rightactive">
        @guest
            <li><a href="{{ url('/register') }}">Register</a></li>
            <li><a class="login" href="{{ url('/login') }}">Login</a></li>
        @endguest
        @if(auth()->check())
            <p>{{ auth()->user()->name }}</p>
            <a href="{{ route('logout') }}">Logout</a>
        @endif
    </ul>
</nav>
