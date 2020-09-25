<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="/css/main.css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <img src="/img/yellowemojis.jpg" alt="memes logo">
                <div class="title m-b-md">
                    Insta Memers

                </div>
              <div class="links">
                    <a href="{{URL::to('/')}}">home</a>
                    <a href="{{URL::to('/about')}}">About Us</a>
                    <a href="{{URL::to('/gallery')}}">Saved Photos</a>
                    <a href="{{URL::to('/contact')}}">Contact</a>

                </div>

            </div>
        </div>
    </body>
</html>