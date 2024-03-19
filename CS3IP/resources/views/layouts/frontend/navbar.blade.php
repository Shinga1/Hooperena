<nav>

   
    <ul class="links active">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/about') }}">About</a></li>
        <li><a href="{{ url('/news') }}">News</a></li>
    </ul>

    <ul class="right active">
        @guest
            <li><a href="{{ url('/register') }}">Register</a></li>
            <li><a class="login" href="{{ url('/login') }}">Login</a></li>
        @endguest
        @auth
            <li><a class="logout" href="{{ url('/logout') }}">Logout</a></li>
        @endauth
    </ul>
</nav>
