<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond&display=swap" rel="stylesheet"> 

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('font/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('font/css/fontawesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('font/css/regular.min.css')}}">
        <link rel="stylesheet" href="{{asset('font/css/solid.min.css')}}">
        <link rel="stylesheet" href="{{asset('font/css/brands.min.css')}}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
       
    </head>
    <body class="viewport">
        <div class="flex-center position-ref full-height imagen">
            <div class="content">
                <div class="title m-b-md">
                    <div class="img-fluid">
                        <img src="{{ asset('/images/logobcv.png') }}" alt="" width="20%">
                    </div>
                    CheckList DPD
                </div>

                
                        @if (Route::has('login')) 
                        <div class="links">
                            {{--  pregutno si esta logueado  --}}
                            @auth
                                <a href="{{ url('/home') }}">Home</a>
                            @else
                                <a href="{{ route('login') }}">Login</a>
        
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">Registro</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                    {{--  <a href="https://laravel.com/docs">Login</a>
                    <a href="https://laracasts.com">Registro</a>
                      --}}
                
            </div>
        </div>
    </body>
</html>
