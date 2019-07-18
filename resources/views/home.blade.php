@extends('layouts.app')

@section('content')
<div class="container">
        <div class="flex-center position-ref full-height">
                <div class="content">
                    <div class="title">
                        CheckList - DPD
                    </div>
    
                    <div class="links">
                        <a href="{{ route('listar-rack') }}">Rack</a>
                        <a href="https://laracasts.com">A/A</a>
                        <a href="https://laravel-news.com">Accesorios</a>
                        <a href="https://blog.laravel.com">Ingresos</a>
                    </div>
                </div>
            </div>
</div>
@endsection
