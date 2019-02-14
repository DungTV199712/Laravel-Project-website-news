<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="stylesheet"
          href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
          crossorigin="anonymous">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">


    <!-- Styles -->
    <link href="{{ asset('css/text.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-collapse navbar-laravel">
        <div class="container">
            <!-- Just an image -->
            <nav class="navbar navbar-light">
                <a class="navbar-brand" href="#">
                    <img src="https://images.homify.com/c_fill,f_auto,q_auto,w_740/v1523397118/p/photo/image/2515727/navicon.jpg"
                         width="40px" height="40px">
                </a>
            </nav>
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-nav-scroll">
                <ul class="navbar-nav bd-navbar-nav flex-row">
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Product
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/Host/product/New">News</a>
                            <a class="dropdown-item" href="/Host/product/Hot">Hots</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/Host/product/Sold">Best Sold</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/Host/document"
                           onclick="ga('send', 'event', 'Navbar', 'Community links', 'Docs');">Documentation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active " href="/docs/4.3/examples/"
                           onclick="ga('send', 'event', 'Navbar', 'Community links', 'Examples');">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="https://expo.getbootstrap.com/"
                           onclick="ga('send', 'event', 'Navbar', 'Community links', 'Expo');" target="_blank"
                           rel="noopener">Expo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="https://blog.getbootstrap.com/"
                           onclick="ga('send', 'event', 'Navbar', 'Community links', 'Blog');" target="_blank"
                           rel="noopener">Service</a>
                    </li>
                </ul>
            </div>
            <form class="form-inline my-2 my-lg-0" style="margin-left: 200px">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                </ul>

                <ul class="navbar-nav ml-auto">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>


    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>
