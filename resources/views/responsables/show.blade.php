@extends('layouts.layout')

@section('title',"Id #{$responsable->id}")

@section('content')
<div class="card">
    <h4 class="card-header">
        Id #{{ $responsable->id }}
    </h4>    
    <div class="card-body">
        <div class="form-group">
            Código: <b>{{$responsable->codigo}}</b>
        </div>
        <div class="form-group">
            Nombre Completo: <b>{{$responsable->nombre}} {{$responsable->apellido_paterno}} {{$responsable->apellido_materno}}</b>
        </div>    
        <div class="form-group">
            Correo Electrónico: <b>{{$responsable->email}}</b>
        </div>
        <div class="form-group">
            Estación: <b>{{$responsable->estacion}}</b>
        </div>
        <div class="form-group">
            Fecha de Alta: <b>{{$responsable->created_at}}</b>
        </div>
        <div class="form-group">
            Fecha de Última Modificación: <b>{{$responsable->updated_at}}</b>
        </div>
        <div class="form-group">
            Fecha del Primer Envío de Correo Electrónico: <b>{{$responsable->fecha_primer_envio_correo}}</b>
        </div>
        <div class="form-group">
            Fecha del Último Envío de Correo Electrónico: <b>{{$responsable->fecha_ultimo_envio_correo}}</b>
        </div>
        <div class="form-group">
            Fecha de Baja: <b>{{$responsable->fecha_baja}}</b>
        </div>               
        <div class="form-group">
<?php
if($responsable->estatus) $estatus='Activo';
else $estatus='Inactivo';
?>
            Estatus: <b>{{$estatus}}</b>
        </div>
        <a href="{{route('responsables.index')}}" class="btn btn-link">Regresar</a>
    </div>
</div>    
@endsection