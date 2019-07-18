@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($rack as $item)
    <ul>
    <li> {{ $item->descripcion }} <a href="{{ route ('equipos-rack', $item->id) }}" class="btn btn-outline-success">checklist</a></li>
    </ul>

    @endforeach
</div>
@endsection