<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Dial 4 Maid Admin">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="public/backend/images/icon.png">
    <link rel="stylesheet" href="{{ URL::to('public/backend/assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ URL::to('public/backend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('public/backend/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('public/backend/assets/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ URL::to('public/backend/assets/scss/style.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body class="loginBg">
    
<!--<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     CSRF Token 
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

     Scripts 
    <script src="{{ asset('public/js/app.js') }}" defer></script>

     Fonts 
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

     Styles 
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
</head>
<body>-->
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
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
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('superadmin.login') }}">{{ __('msg.Login') }}</a>
                            </li>
                            <!-- <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('admin.register') }}">{{ __('msg.Register') }}</a>
                                @endif
                            </li> -->
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('superadmin.logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('msg.Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
<!--                        <li><a href="{{ url('/locale/en') }}"><img src="{{asset('public/images/eng.png')}}" style="width: 30px; height: 25px;margin: 5px;"></a></li>
                        <li><a href="{{ url('/locale/in') }}"><img src="{{asset('public/images/hin.png')}}" style="width: 30px; height: 25px;margin: 5px;"></a></li>
                        <li><a href="{{ url('/locale/ar') }}"><img src="{{asset('public/images/ar.png')}}" style="width: 30px; height: 25px;margin: 5px;"></a></li>-->
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
<!--</body>
</html>-->

    <script src="{{ URL::to('public/backend/assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ URL::to('public/backend/assets/js/popper.min.js') }}"></script>
    <script src="{{ URL::to('public/backend/assets/js/plugins.js') }}"></script>
    <script src="{{ URL::to('public/backend/assets/js/main.js') }}"></script>
    
</body>
</html>