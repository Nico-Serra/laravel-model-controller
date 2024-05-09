<header>

    <nav class="nav justify-content-center  bg-light py-3">
        <a class="nav-link text-dark {{ Route::currentRouteName() === 'guests.home' ? 'nav_active' : '' }}" aria-current="page"
            href="{{ route('guests.home') }}">Home</a>
        <a class="nav-link text-dark {{ Route::currentRouteName() === 'guests.movies' ? 'nav_active' : '' }}" aria-current="page"
            href="{{ route('guests.movies') }}">Movies</a>
        <a class="nav-link text-dark {{ Route::currentRouteName() === 'guests.about' ? 'nav_active' : '' }}" aria-current="page"
            href="{{ route('guests.about') }}">About</a>
    </nav>



</header>
