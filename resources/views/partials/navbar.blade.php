<div id="cssmenu">
    <figure class="swing">
            <img src="{{asset('images/logoFull.png')}}">
    </figure>
    <ul>
        <li><a href="">Home</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Career</a></li>
        <li><a href="">Vision</a></li>

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
</div>


