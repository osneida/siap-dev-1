@extends('layouts.layout')

@section('title',"Id #{$usuario->id}")

@section('content')
<div class="card">
    <h4 class="card-header">
        Id #{{ $usuario->id }}
    </h4>
    <div class="card-body">
        <div class="form-group">
            Nombre Usuario: <b>{{$usuario->name}}</b>
        </div>
        <div class="form-group">
            Correo Electrónico: <b>{{$usuario->email}}</b>
        </div>
        <div class="form-group">
            Fecha de Alta: <b>{{$usuario->created_at}}</b>
        </div>
        <div class="form-group">
            Fecha de Última Modificación: <b>{{$usuario->updated_at}}</b>
        </div>
        <div class="form-group">
<?php
if($usuario->estatus) $estatus='Activo';
else $estatus='Inactivo';
?>
            Estatus: <b>{{$estatus}}</b>
        </div>
        <a href="{{route('usuarios.index')}}" class="btn btn-link">Regresar</a>
    </div>
</div>
@endsection
