<!doctype html>
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
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    @livewireStyles

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" width="32" height="32"><defs><linearGradient id="linear-gradient" x1="44" y1="0.763" x2="44" y2="63.889" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#38d6a4"/><stop offset="0.171" stop-color="#32caae"/><stop offset="0.478" stop-color="#22abc8"/><stop offset="0.884" stop-color="#0879f2"/><stop offset="0.999" stop-color="#0069ff"/></linearGradient><linearGradient id="linear-gradient-2" x1="19.21" y1="0.763" x2="19.21" y2="63.889" xlink:href="#linear-gradient"/><linearGradient id="linear-gradient-3" x1="42.5" y1="0.763" x2="42.5" y2="63.889" xlink:href="#linear-gradient"/></defs><g id="_26-social_media" data-name="26-social media"><path d="M57,62a1,1,0,0,1-.479-.122l-6.6-3.6A24.566,24.566,0,0,1,44,59c-11.028,0-20-7.178-20-16s8.972-16,20-16,20,7.178,20,16c0,4.805-2.629,9.257-7.24,12.31l1.216,5.473A1,1,0,0,1,57,62Zm-6.949-5.79a1,1,0,0,1,.479.122l5.016,2.736-.89-4.008a1,1,0,0,1,.453-1.07C59.488,51.306,62,47.3,62,43c0-7.72-8.075-14-18-14S26,35.28,26,43s8.075,14,18,14a22.609,22.609,0,0,0,5.8-.757A1.01,1.01,0,0,1,50.051,56.21Z" style="fill:url(#linear-gradient)"/><path d="M2,48a1,1,0,0,1-.874-1.485L4.262,40.87A14.107,14.107,0,0,1,0,31c0-8.822,8.972-16,20-16,7.914,0,15.1,3.735,18.294,9.516a1,1,0,1,1-1.75.968C33.691,20.33,27.2,17,20,17,10.075,17,2,23.28,2,31a12.3,12.3,0,0,0,4.188,8.956,1,1,0,0,1,.193,1.217l-2.3,4.14,6.654-2.047a1,1,0,0,1,.684.035A22.171,22.171,0,0,0,20,45c.646,0,1.291-.026,1.917-.078a1,1,0,1,1,.166,1.992C21.4,46.972,20.7,47,20,47a24.257,24.257,0,0,1-9.021-1.717L2.294,47.956A1.027,1.027,0,0,1,2,48Z" style="fill:url(#linear-gradient-2)"/><path d="M57.2,29a1,1,0,0,1-.724-1.689A11.972,11.972,0,0,0,60,19c0-7.72-8.075-14-18-14a22.171,22.171,0,0,0-8.581,1.7,1.012,1.012,0,0,1-.684.035L26.081,4.687l2.3,4.14a1,1,0,0,1-.193,1.217,14.1,14.1,0,0,0-2.727,3.441,1,1,0,0,1-1.748-.97A15.8,15.8,0,0,1,26.262,9.13L23.126,3.485a1,1,0,0,1,1.168-1.441l8.685,2.673A24.257,24.257,0,0,1,42,3c11.028,0,20,7.178,20,16a13.936,13.936,0,0,1-4.074,9.689A1,1,0,0,1,57.2,29Z" style="fill:url(#linear-gradient-3)"/></g></svg>
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/rooms">Rooms</a>
                        </li>
                        <!-- Authentication Links -->
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
            @yield('content')
    </div>
@livewireScripts
</body>
</html>
