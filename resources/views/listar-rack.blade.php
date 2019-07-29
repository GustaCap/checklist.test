@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-6">
                <table class="table table-bordered">
                        <thead>
                          <tr class="text-center bg-primary">
                            
                            <th scope="col">Rack</th>
                            
                            <th scope="col">Acción</th>
                            
                          </tr>
                        </thead>
                        @foreach ($rack as $item)
                        <tbody>
                          <tr>
                           
                            <td>
                               
                                    <img src="http://www.webezi.com.au/Portals/0/Rack_Server.jpg" alt="" width="50%">{{ $item->descripcion }}
                               
                            </td>

                           
                            <td style="vertical-align:middle;" class="text-center">
                                    <a href="{{ route ('equipos-rack', $item->id) }}" class="btn btn-outline-success">checklist</a> 
                            </td>
                          </tr>
                        </tbody>
                        @endforeach
                      </table>
        </div>
    </div>
       
    {{--  @foreach ($rack as $item)
    <ul>
    <li> {{ $item->descripcion }} <a href="{{ route ('equipos-rack', $item->id) }}" class="btn btn-outline-success">checklist</a></li>
    </ul>  --}}

    {{--  @endforeach  --}}
</div>
@endsection