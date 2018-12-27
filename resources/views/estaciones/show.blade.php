@extends('layouts.layout')

@section('title',"Id #{$estacion->id}")

@section('content')
<div class="card">
    <h3 class="card-header">
        Detalle de las Estaciones        
    </h3>
    <div class="container col-md-12 col-md-offset-0">

        <h4 class="card-header">Datos Generales:</h4>
            <div class="row">
                <div class="col-sm-6">
                    <label for="codigo">Código:</label>
                    {{ $estacion->codigo }}
                </div>
                <div class="col-sm-6">
                    <label for="nro_estacion">Número Estación:</label>
                    {{ $estacion->nro_estacion }}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label for="nombre">Nombre:</label>
                    {{ $estacion->nombre }}
                </div>
                <div class="col-sm-6">
                    <label for="nombre">Estación de Servicio:</label>
                    {{ $estacion->nombre }}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label for="descripcion">Descripción:</label>
                    {{ $estacion->descripcion }}
                </div>
                <div class="col-sm-6">
                    <label for="id_propietario">Propietario:</label>                
                        @foreach($propietario as $propietario)
                        {{$propietario->nombre}} {{$propietario->apellido_paterno}} {{$propietario->apellido_materno}}
                        @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label for="id_grupo">Grupo:</label>
                    {{ $estacion->id_grupo }}
                </div>
                <div class="col-sm-6">
                    <label for="nombre_responsable">Nombre del Responsable Técnico:</label>
                    {{ $estacion->nombre_responsable }}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label for="email_responsable">Correo Electrónico del Responsable:</label>
                    {{ $estacion->email_responsable }}
                </div>
                <div class="col-sm-6">
                    <label for="rfc_estacion">Número RFC de la Estación:</label>
                    {{ $estacion->rfc_estacion }}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label for="nro_estacion">Número de Estación PEMEX:</label>
                    {{ $estacion->nro_estacion }}
                </div>
                <div class="col-sm-6">
                    <label for="nroper_cre">Número Permiso de la CRE:</label>
                    {{ $estacion->nroper_cre }}
                </div>
        </div>
            <div class="row">
                <div class="col-sm-6">
                    <label for="logo">Logo:
                    <img src='{{ $estacion->logo }}'>
                    </label>
                </div>
                <div class="col-sm-6">
                    <label for="foto">Foto del Representante Legal:
                    <img src='{{ $estacion->foto }}'>
                    </label>
                </div>
            </div>            

    </div>    
    <a href="{{route('estaciones.index')}}" class="btn btn-link">Regresar</a>
</div>
@endsection
