@extends('layouts.layout')

@section('title',"Texto {$tipoobligacion->id}")

@section('content')
<div class="card">
    <h4 class="card-header">
        Id #{{ $tipoobligacion->id }}
    </h4>    
    <div class="card-body">
        <div class="form-group">
            <label for="codigo">Código:</label>{{$tipoobligacion->codigo }}
        </div>
        <div class="form-group">
            <label for="nombre">Nombre:</label>{{$tipoobligacion->nombre }}
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>{{ $tipoobligacion->descripcion }}
        </div>
        <div class="form-group">
            <label for="estatus">Estatus:</label>{{ $tipoobligacion->estatus }}
        </div>    
        <a href="{{route('tipoobligaciones.index')}}" class="btn btn-link">Regresar</a>
    </div>
</div>    
@endsection