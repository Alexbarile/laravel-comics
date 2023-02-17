<header>
    <div class="bg-blue">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul>
                        <li>DC POWER&#153; VISA&#174;</li>
                        <li>ADDITIONAL DC SITES</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3 mb-2">
        <div class="row d-flex justify-content-between align-items-center">
    
            <!-- logo -->
    
            <div class="col">
                <a href="#" class="logo">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="DC">
                </a>
            </div>
    
            <!-- navbar -->
    
            <nav class="col">
                <ul class="d-flex">
                    <li class="p-3 {{ Route::currentRouteName() == 'characters' ? 'active' : ''}}">
                        <a href="{{ route('characters')}}">Characters</a>
                    </li>
                    <li class="p-3 {{ Route::currentRouteName() == 'comics' ? 'active' : ''}}">
                        <a href="{{ route('comics')}}">Comics</a>
                    </li>
                    <li class="p-3 {{ Route::currentRouteName() == 'movies' ? 'active' : ''}}">
                        <a href="">Movies</a>
                    </li>
                    <li class="p-3 {{ Route::currentRouteName() == 'tv' ? 'active' : ''}}">
                        <a href="">Tv</a>
                    </li>
                    <li class="p-3 {{ Route::currentRouteName() == 'games' ? 'active' : ''}}">
                        <a href="">Games</a>
                    </li>
                    <li class="p-3 {{ Route::currentRouteName() == 'collectibles' ? 'active' : ''}}">
                        <a href="">Collectibles</a>
                    </li>
                    <li class="p-3 {{ Route::currentRouteName() == 'videos' ? 'active' : ''}}">
                        <a href="">Videos</a>
                    </li>
                    <li class="p-3 {{ Route::currentRouteName() == 'fans' ? 'active' : ''}}">
                        <a href="">Fans</a>
                    </li>
                    <li class="p-3 {{ Route::currentRouteName() == 'news' ? 'active' : ''}}">
                        <a href="">News</a>
                    </li>
                    <li class="p-3 {{ Route::currentRouteName() == 'shop' ? 'active' : ''}}">
                        <a href="">Shop</a>
                    </li>
                    <li class="p-3">
                        <input type='text' placeholder="Search">
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>