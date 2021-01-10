{{-- 
    MAIN SITE HEADER
 --}}

<header class="main-header">
    <div class="overall">
        <div class="container">
            <a href="/">DC Power<sup>SM</sup> Visa<sup>®</sup></a>
            <a href="/">
                Additional DC Sites
                <i class="fas fa-caret-down"></i>
            </a>
        </div>
    </div>
    <div class="container flex">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}" alt="dc comics">
        </a>

        <nav class="navbar-nav flex">
            <ul class="flex">
                <li>
                    <a href="/">Characters</a>
                </li>
                <li>
                    <a href="/">Comics</a>
                </li>
                <li>
                    <a href="/">Movies</a>
                </li>
                <li>
                    <a href="/">Tv</a>
                </li>
                <li>
                    <a href="/">Games</a>
                </li>
                <li>
                    <a href="/">Collectibles</a>
                </li>
                <li>
                    <a href="/">Videos</a>
                </li>
                <li>
                    <a href="/">Fans</a>
                </li>
                <li>
                    <a href="/">News</a>
                </li>
                <li>
                    <a href="/">
                        Shop
                        <i class="fas fa-caret-down"></i>
                    </a>
                </li>
            </ul>
        </nav>
        
        <div class="search">
            <input type="text" placeholder="Search">
            <i class="fas fa-search"></i>
        </div>
    </div>
</header>