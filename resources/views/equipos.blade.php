@extends('layouts.app')

@section('content')
<div class="container">
        
        @if ($message = Session::get('success'))

        <div class="alert alert-success alert-block">
        
            <button type="button" class="close" data-dismiss="alert">×</button>	
        
                <strong>{{ $message }}</strong>
        
        </div>
        
        @endif
            <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">rack</th>
                        <th scope="col">equipo</th>
                        <th scope="col">Disco</th>
                        <th scope="col">Memoria</th>
                        <th scope="col">Fancoluer</th>
                        <th scope="col">Powersuplay</th>
                        <th scope="col">Energia</th>
                        <th scope="col">Espancion</th>
                    
                        <th scope="col">Observaciones</th>
                        
                        <th scope="col">enviar</th>
                      </tr>
                    </thead>
                    @foreach ($equipos as $item)
                    <form method="GET" action="{{ route('checklist') }}">
                            @csrf
                    <tbody>
                      <tr>   
                        <td>   
                        @foreach ($rack as $itemrack)
                        {{ $itemrack->descripcion }}                      
                        <input type="hidden" class="form-control" id="rack_id" name="rack_id" value="{{ $itemrack->id }}">
                        @endforeach
                        </td>
                        <td>
                        {{ $item->nombre }}
                        <input type="hidden" class="form-control" id="equipo_id" name="equipo_id" value="{{ $item->id }}">
                        </td>
                        <td>
                                <div class="form-check">
                                        <label class="form-check-label" for="sta_disco">
                                          <input type="radio" class="form-check-input" id="sta_disco" name="sta_disco" value="1" checked>ok
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <label class="form-check-label" for="sta_disco">
                                          <input type="radio" class="form-check-input" id="sta_disco" name="sta_disco" value="2">Falla
                                        </label>
                                      </div>
                        </td>

                        <td>
                                <div class="form-check">
                                        <label class="form-check-label" for="sta_memoria">
                                          <input type="radio" class="form-check-input" id="sta_memoria" name="sta_memoria" value="1" checked>ok
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <label class="form-check-label" for="sta_memoria">
                                          <input type="radio" class="form-check-input" id="sta_memoria" name="sta_memoria" value="2">Falla
                                        </label>
                                      </div>
                        </td>

                        <td>
                                <div class="form-check">
                                        <label class="form-check-label" for="sta_fancouler">
                                          <input type="radio" class="form-check-input" id="sta_fancouler" name="sta_fancouler" value="1" checked>ok
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <label class="form-check-label" for="sta_fancouler">
                                          <input type="radio" class="form-check-input" id="sta_fancouler" name="sta_fancouler" value="2">Falla
                                        </label>
                                      </div>
                        </td>

                        <td>
                                <div class="form-check">
                                        <label class="form-check-label" for="sta_powersuplay">
                                          <input type="radio" class="form-check-input" id="sta_powersuplay" name="sta_powersuplay" value="1" checked>ok
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <label class="form-check-label" for="sta_powersuplay">
                                          <input type="radio" class="form-check-input" id="sta_powersuplay" name="sta_powersuplay" value="2">Falla
                                        </label>
                                      </div>
                        </td>

                        <td>
                                <div class="form-check">
                                        <label class="form-check-label" for="sta_energia">
                                          <input type="radio" class="form-check-input" id="sta_energia" name="sta_energia" value="1" checked>ok
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <label class="form-check-label" for="sta_energia">
                                          <input type="radio" class="form-check-input" id="sta_energia" name="sta_energia" value="2">Falla
                                        </label>
                                      </div>
                        </td>

                        <td>
                                <div class="form-check">
                                        <label class="form-check-label" for="sta_espancion_discos">
                                          <input type="radio" class="form-check-input" id="sta_espancion_discos" name="sta_espancion_discos" value="1" checked>ok
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <label class="form-check-label" for="sta_espancion_discos">
                                          <input type="radio" class="form-check-input bg-success" id="sta_espancion_discos" name="sta_espancion_discos" value="2">Falla
                                        </label>
                                      </div>
                        </td>

                        {{-- <td>
                                <div class="form-check">
                                        <input type="text" class="form-control" id="token" name="" value="{{ \App\Http\Controllers\RackController::generarCodigo() }}" readonly>
                                      </div>
                        </td> --}}

                        <td>
                                <div class="form-group">
                                        <label for="observaciones">Observaciones:</label>
                                        <textarea class="form-control" rows="3" id="comment" name="observaciones"></textarea>
                                      </div>    
                        </td>
                        <td>
                        <button id="btn" type="submit" class="btn btn-primary">enviar</button>
                        </td>
                        </tr>
                    </tbody>
                </form>
                    @endforeach
                  </table>    
        
</div>
@endsection
