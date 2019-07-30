@extends('layouts.app')


@section('content')

<div class="container">
        <div class="flex-center mar-top">
            <div class="row justify-content-center">
                <div class="col-md-3 col-sm-10">
                    <div class="card wh bg">
                        {{--  <div class="num">
                           <p>1</p>
                        </div>  --}}
                        <div class="card-body ra">
                            <a href="{{ route('listar-rack') }}">Rack</a>
                            <p>Inspección servidores por rack</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-10">
                        <div class="card wh bg">
                                {{--  <div class="num">
                                        <p>2</p>
                                     </div>  --}}
                                     <div class="card-body aa">
                                            <a href="">A/A</a>
                                            <p>Inspección de aires acondicionados</p>
                                        </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-10">
                            <div class="card wh bg">
                                    {{--  <div class="num">
                                            <p>3</p>
                                         </div>  --}}
                                         <div class="card-body ac">
                                                <a href="">Accesorios</a>
                                                <p>Inspección de lamparas, linternas, llaves de rack, etc.</p>
                                            </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-10">
                                <div class="card wh bg">
                                        {{--  <div class="num">
                                                <p>4</p>
                                             </div>  --}}
                                             <div class="card-body in">
                                                    <a href="">Ingreso</a>
                                                    <p>Registro de ingresos al DataCenter</p>
                                                </div>
                                </div>
                            </div>
            </div>
        </div>
              
</div>
{{--  <a href="{{ route('listar-rack') }}">Rack</a>  --}}
@endsection
