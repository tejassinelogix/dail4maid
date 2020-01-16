<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
        <script src="{{ asset('js/main.js') }}" defer></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">

                    <select class="form-control" id="Locale" name="Locale">
                        <option value="0">Select Language</option>
                        <option value="en">English</option>
                        <option value="in">Hindi</option>
                        <option value="ar">Arabic</option>
                    </select>
                        
                    @auth
                        <a href="{{ url('/home') }}">{{ __('msg.Home') }}</a>
                    @else
                        <a href="{{ route('login') }}">{{ __('msg.Login') }}</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">{{ __('msg.Register') }}</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    {{ __('msg.Welcome') }}
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">{{ __('msg.Marathi') }}</a>
                    <a href="https://laracasts.com">{{ __('msg.Hindi') }}</a>
                    <a href="https://laravel-news.com">{{ __('msg.English') }}</a>
                    <a href="https://nova.laravel.com">{{ __('msg.Geography') }}</a>
                    <a href="https://forge.laravel.com">{{ __('msg.Science') }}</a>
                </div>
            </div>
        </div>

  
    </body>
</html>
