@extends('layouts.layout')

@section('title',"Id #{$propietario->id}")

@section('content')
<div class="card">
    <h4 class="card-header">
        Id #{{ $propietario->id }}
    </h4>
    <div class="card-body">
        <div class="form-group">
            Código: <b>{{$propietario->codigo}}</b>
        </div>
        <div class="form-group">
            Nombre Completo: <b>{{$propietario->nombre}} {{$propietario->apellido_paterno}} {{$propietario->apellido_materno}}</b>
        </div>
        <div class="form-group">
            Correo Electrónico: <b>{{$propietario->email}}</b>
        </div>
        <div class="form-group">
            Dirección: <b>{{$propietario->direccion}}</b>
        </div>
        <div class="form-group">
            Teléfono 1: <b>{{$propietario->telefono1}}</b>
        </div>
        <div class="form-group">
            Teléfono 2: <b>{{$propietario->telefono2}}</b>
        </div>
        <div class="form-group">
            Celular 1: <b>{{$propietario->celular1}}</b>
        </div>
        <div class="form-group">
            Celular 2: <b>{{$propietario->celular2}}</b>
        </div>
        <div class="form-group">
            Fecha de Alta: <b>{{$propietario->created_at}}</b>
        </div>
        <div class="form-group">
            Fecha de Última Modificación: <b>{{$propietario->updated_at}}</b>
        </div>
        <div class="form-group">
            Fecha de Baja: <b>{{$propietario->fecha_baja}}</b>
        </div>
        <div class="form-group">
<?php
if($propietario->estatus) $estatus='Activo';
else $estatus='Inactivo';
?>
            Estatus: <b>{{$estatus}}</b>
        </div>
        <a href="{{route('propietarios.index')}}" class="btn btn-link">Regresar</a>
    </div>
</div>
@endsection
