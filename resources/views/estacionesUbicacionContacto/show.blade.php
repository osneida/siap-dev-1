@extends('layouts.layout')

@section('title',"Id #{$estacion->id}")

@section('content')
<div class="card">
    <h3 class="card-header">
        Detalle de las Estaciones (Ubicación y Contacto)
    </h3>    
    <div class="container col-md-12 col-md-offset-0">

        <h4 class="card-header">Ubicación y contacto:</h4>

        <div class="row">
                <div class="col-sm-6">
                    <label for="estado_id">Estado:</label>
                      {{ $estado->descripcion }}
                </div>
                <div class="col-sm-6">
                    <label for="municipio_id">Municipio:</label>
                    {{ $estacion->municipio_id }}
                </div>

        </div>
        <div class="row">
            <div class="col-sm-6">
                <label for="entidad_federal_id">Entidad Federal:</label>
                {{ $estacion->entidad_federal_id }}
            </div>
            <div class="col-sm-6">
                <label for="calle">Calle:</label>
                {{ $estacion->calle }}                
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <label for="colonia">Colonia:</label>
                {{ $estacion->colonia }}
            </div>
            <div class="col-sm-6">
                <label for="codigo_postal">Cód.Postal:</label>
                {{ $estacion->codigo_postal }}
            </div>
        </div>            

        <div class="row">
            <div class="col-sm-6">
                <label for="referencia1">Referencia Dirección 1:</label>
                {{ $estacion->referencia1 }}
            </div>
            <div class="col-sm-6">
                <label for="referencia2">Referencia Dirección 2:</label>
                {{ $estacion->referencia2 }}
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <label for="telefono1">Número de Teléfono 1:</label>
                {{ $estacion->telefono1 }}
            </div>
            <div class="col-sm-6">
                <label for="telefono2">Número de Teléfono 2:</label>
                {{ $estacion->telefono2 }}                
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <label for="celular1">Número de Celular 1:</label>
                {{ $estacion->celular1 }}
            </div>
            <div class="col-sm-6">
                <label for="celular2">Número de Celular 2:</label>
                {{ $estacion->celular2 }}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <label for="email_estacion">Correo Electrónico de la Estación:</label>
                {{ $estacion->email_estacion }}
            </div>
            <div class="col-sm-6">
                <label for="sitioweb">Sitio Web de la Estación:</label>
                {{ $estacion->sitioweb }}
            </div>
        </div>
    </div>
    <a href="{{route('estacionesUbicacionContacto.index')}}" class="btn btn-link">Regresar</a>
</div>
@endsection
