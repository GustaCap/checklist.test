@extends('layouts.app')



@section('content')
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-7">
      {{--  Mensaje de ok  --}}
      @if ($message = Session::get('success'))

      <div class="alert alert-success alert-block">
      
          <button type="button" class="close" data-dismiss="alert">×</button>	
      
              <strong>{{ $message }}</strong>
      
      </div>
      @endif
      {{--  Mensaje de Error  --}}
      @if ($message = Session::get('danger'))

      <div class="alert alert-danger alert-block">
      
          <button type="button" class="close" data-dismiss="alert">×</button>	
      
              <strong>{{ $message }}</strong>
      
      </div>
      
      @endif
      
        @foreach ($equipos as $item)

        
        <form method="POST" action="{{ route('checklist') }}">
            @csrf

            <div class="row">
              <div class="col-md-8">
                  @foreach ($rack as $itemrack)
                  @php
                      $rack_id = $itemrack->id;
                  @endphp
                            
                  <input type="hidden" class="form-control" id="rack_id" name="rack_id" value="{{ $rack_id }}">
                  @endforeach
                  {{--  equipo id  --}}
                  @php
                  $equipo_id = $item->id;
              @endphp
              <input type="hidden" class="form-control" id="equipo_id" name="equipo_id" value="{{ $equipo_id }}">

              {{--  usuario id  --}}
              @php
                  $user_id = auth()->user()->id;
              @endphp
              <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{ $user_id }}">

              </div>
            </div>

            {{--  <div class="table-responsive-md">  --}}

                <table class="table table-bordered table-sm text-center mt-5">
                  <thead>
                    <tr>
                      <th colspan="8">Equipo: {{ $item->nombre }}</th>
                    </tr>
                    <tr>
                      <th>Disco</th>
                      <th>Mem</th>
                      <th>FC</th>
                      <th>PS</th>
                      <th>Ene</th>
                      <th>Esp</th>
                      <th>Cont</th>
                      <th>FX</th>
                      </tr>
                  </thead>
            <tbody>
              <tr>
               
                <td>
                   <div class="radio1">
                    <input type="radio" name="disco" value="1" id="radio-one" class="form-radio" checked><label for="radio-one"></label>
                </div>

                  <div class="radio2">
                      <input type="radio" name="disco" value="2" id="radio-two" class="form-radio2 mb-3"><label for="radio-tow"></label>
                  </div>
                    
                </td>
                <td>
                  <div class="radio1">
                    <input type="radio" name="memoria" value="1" id="radio-one" class="form-radio" checked><label for="radio-one"></label>
                </div>

                  <div class="radio2">
                      <input type="radio" name="memoria" value="2" id="radio-two" class="form-radio2"><label for="radio-tow"></label>
                  </div>
                </td>
                <td>
                  <div class="radio1">
                    <input type="radio" name="fancooler" value="1" id="radio-one" class="form-radio" checked><label for="radio-one"></label>
                </div>

                  <div class="radio2">
                      <input type="radio" name="fancooler" value="2" id="radio-two" class="form-radio2"><label for="radio-tow"></label>
                  </div>
                </td>
                <td>
                  <div class="radio1">
                    <input type="radio" name="powersupply" value="1" id="radio-one" class="form-radio" checked><label for="radio-one"></label>
                </div>

                  <div class="radio2">
                      <input type="radio" name="powersupply" value="2" id="radio-two" class="form-radio2"><label for="radio-tow"></label>
                  </div>
                </td>
                <td>
                  <div class="radio1">
                    <input type="radio" name="energia" value="1" id="radio-one" class="form-radio" checked><label for="radio-one"></label>
                </div>

                  <div class="radio2">
                      <input type="radio" name="energia" value="2" id="radio-two" class="form-radio2"><label for="radio-tow"></label>
                  </div>
                </td>
                <td>
                  <div class="radio1">
                    <input type="radio" name="expansion" value="1" id="radio-one" class="form-radio" checked><label for="radio-one"></label>
                </div>

                  <div class="radio2">
                      <input type="radio" name="expansion" value="2" id="radio-two" class="form-radio2"><label for="radio-tow"></label>
                  </div>
                </td>
                <td>
                  <div class="radio1">
                    <input type="radio" name="controladora" value="1" id="radio-one" class="form-radio" checked><label for="radio-one"></label>
                </div>

                  <div class="radio2">
                      <input type="radio" name="controladora" value="2" id="radio-two" class="form-radio2"><label for="radio-tow"></label>
                  </div>
                </td>
                <td>
                  <div class="radio1">
                    <input type="radio" name="sw_fibra" value="1" id="radio-one" class="form-radio" checked><label for="radio-one"></label>
                </div>

                  <div class="radio2">
                      <input type="radio" name="sw_fibra" value="2" id="radio-two" class="form-radio2"><label for="radio-tow"></label>
                  </div>
                </td>            
            </tr>
            <tr>
                <td colspan="4">
                    <div class="form-group">
                            <textarea class="form-control mt-3" rows="3" id="comment" name="observaciones" placeholder="Observaciones" required></textarea>
                          </div>    
            </td>
            <td colspan="4">
            <button id="btn" type="submit" class="btn btn-blok btn-primary mt-5">enviar</button>
            </td>
            </tr>
            {{--  fin del cuerpo de la tabla  --}}
            </tbody>
          {{--  fin de la tabla  --}}
          </table>
            {{--  fin del form  --}}
            </form>
            {{--  fin del foreach  --}}
            @endforeach
            
    </div>
    
  </div>
     
  {{--  fin del container  --}}

</div>
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="boton-back">
        <a href="{{ route('listar-rack') }}" class="btn btn-outline-primary mt-4 mb-5">Regresar</a>
    </div>   
  </div>
</div>

@endsection


