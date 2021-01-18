<div class="nav-toggle">
    <div class="nav-toggle-bar"></div>
</div>

<nav id="nav" class="nav">
    <ul>
        <li><a>About</a></li>
        <li><a>Portfolio</a></li>
        <li><a>Services</a></li>
        <li><a>Contact</a></li>
        @if (Route::has('login'))

            @auth
                <li><a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a></li>
            @else
                <li><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a></li>

                @if (Route::has('register'))
                    <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a></li>
                @endif
            @endauth

        @endif
    </ul>

</nav>




