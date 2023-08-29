<nav class="nav">
    <ul class="nav-container">
        @auth

            <li><a class="nav-container__item {{ request()->routeIs('home') ? 'nav-container__iten-active' : '' }}"
                    href=" {{ route('home') }} ">Home</a></li>
            <li><a class="nav-container__item {{ request()->routeIs('about') ? 'nav-container__iten-active' : '' }}"
                    href=" {{ route('about') }} ">About</a></li>
            <li><a class="nav-container__item {{ request()->routeIs('contact') ? 'nav-container__iten-active' : '' }}"
                    href=" {{ route('contact') }}">Contact</a></li>
            <li><a class="nav-container__item {{ request()->routeIs('phones.*') ? 'nav-container__iten-active' : '' }}"
                    href=" {{ route('phones.index') }}">Phones</a></li>
            <li><a class="nav-container__item {{ request()->routeIs('posts.*') ? 'nav-container__iten-active' : '' }}"
                    href=" {{ route('posts.index') }} ">Blog</a></li>

            {{-- LOGOUT FORM link --}}
            <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="nav-container__item" type="submit">Logout</button>
                </form>
            </li>
        @endauth
        @guest
            <li><a class="nav-container__item {{ request()->routeIs('posts.*') ? 'nav-container__iten-active' : '' }}"
                    href=" {{ route('posts.index') }} ">Blog</a></li>
            <li><a class="nav-container__item {{ request()->routeIs('register') ? 'nav-container__iten-active' : '' }}"
                    href=" {{ route('register') }} ">Register</a></li>
            <li><a class="nav-container__item {{ request()->routeIs('login') ? 'nav-container__iten-active' : '' }}"
                    href=" {{ route('login') }} ">Login</a></li>

        @endguest
    </ul>

</nav>
