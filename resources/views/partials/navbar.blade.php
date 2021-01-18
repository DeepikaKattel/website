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
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </ul>

</nav>




