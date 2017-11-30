<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <style>
        .content {
            background-image: url(/img/dzienniczek.jpg);
            background-repeat: no-repeat;
            background-size: 100% 100%;
            padding-top: 100px;
            padding-bottom: 300px;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-toggleable-sm navbar-inverse bg-inverse p-0">
            <div class="container">
                <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="/" class="navbar-brand mr-3">Dzienniczek</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    </ul>

                    <ul class="navbar-nav ml-auto">
                        @if(\Illuminate\Support\Facades\Auth::check())
                            <li class="nav-item dropdown mr-3">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-user"></i> Witaj {{ \Illuminate\Support\Facades\Auth::user()->name }}</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">
                                        <i class="fa fa-user-circle"></i> Profil
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="fa fa-gear"></i> Ustawienia
                                    </a>
                                </div>
                            </li>
                        @endif
                        @guest
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link">
                                    <i class="fa fa-user"></i> Zaloguj
                                </a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{  route('logout') }}" class="nav-link">
                                    <i class="fa fa-user-times"></i> Wyloguj
                                </a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/tether.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
