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
    <body class="viewport imagen">
<div class="container">
    <div class="flex-center mx-auto centrado">
            <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="card card-login">
                            <div class="card-header text-center card-login">
                                    <img class="img-fluid imagen-shadow" src="{{ asset('/images/logobcv.png') }}" width="70%">
                            </div>
                            {{--  <div class="card-header">{{ __('Login') }}</div>  --}}
                            
                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
            
                                    <div class="form-group row">
                                        {{--  <label for="email_bcv" class="col-md-4 col-form-label text-md-right">{{ __('Dirección E-Mail') }}</label>  --}}
            
                                        <div class="col-md-12">
                                            <input id="email_bcv" type="email" class="border-rounded form-control transparencia focus @error('email_bcv') is-invalid @enderror" name="email_bcv" value="{{ old('email') }}" required autocomplete="email_bcv" autofocus placeholder="Email">
            
                                            @error('email_bcv')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                    </div>
            
                                    <div class="form-group row">
                                        {{--  <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>  --}}
            
                                        <div class="col-md-12">
                                            <input id="password" type="password" class="border-rounded form-control transparencia focus @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
            
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    {{--  <div class="form-group row">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            
                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>  --}}
            
                                    <div class="form-group row mb-0">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary btn-block border-rounded ">
                                                {{ __('Login') }}
                                            </button>
            
                                            {{--  @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif  --}}
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
</div>
<footer>
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3 mt-5">© 2019 Copyright:
          <p><em><strong>Todos los derechos reservados. Desarrollado por: BCV - DPD</strong></em></p>
        </div>
        <!-- Copyright -->
</footer>
</body>
</html>

