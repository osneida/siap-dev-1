@extends('layouts.layout')

@section('title',"Id #{$estacion->id}")

@section('content')
<div class="card">
    <h3 class="card-header">
        Detalle de las Estaciones (Tanques)
    </h3>    
    <div class="container col-md-12 col-md-offset-0">
        <h4 class="card-header">Tanques:</h4>
            <div class="row">
                <div class="col-sm-6">
                    <label for="nro_tanques_individuales">Nro. Tanques Individuales:</label>
                    @foreach($tanque as $tanque)
                    {{ $tanque->nro_tanques_individuales }}

                </div>
                <div class="col-sm-6">
                    <label for="nro_tanques_compartidos">Nro. Tanques Compartidos:</label>
                    {{ $tanque->nro_tanques_compartidos }}
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <label for="capacidad_tanques">Capacidad de Tanques:</label>
                    {{ $tanque->capacidad_tanques }}
                </div>
                <div class="col-sm-6">
                    <label for="aditivo_gasolina1">Aditivo de Gasolina 1:</label>
                    {{ $tanque->aditivo_gasolina1 }}                    
                </div>
            </div>
            <div class="row">                
                <div class="col-sm-6">
                    <label for="aditivo_gasolina2">Aditivo de Gasolina 2:</label>
                    {{ $tanque->aditivo_gasolina2 }}                    
                </div>
                <div class="col-sm-6">
                    <label for="aditivo_diesel">Aditivo Diesel:</label>
                    {{ $tanque->aditivo_diesel }} 
                    @endforeach
                    
                </div>
            </div>
    </div>
    <a href="{{route('estacionesTanques.index')}}" class="btn btn-link">Regresar</a>
</div>
@endsection
