@extends('layouts.layout')

@section('title',"Id #{$estacion->id}")

@section('content')
<div class="card">
    <h3 class="card-header">
        Detalle de las Estaciones (Constitución y Representación Legal)
    </h3>    
    <div class="container col-md-12 col-md-offset-0">

       <h4 class="card-header">Constitución y Representación Legal:</h4>

        <div class="row">
                <div class="col-sm-6">
                    <label for="nro_instrumento">Nro. Instrumento:</label>
                    {{ $estacion->nro_instrumento }}
                </div>
                <div class="col-sm-6">
                    <label for="fecha_constitucion">Fecha Constitución:</label>
                    @if($estacion->fecha_constitucion!='') {{ date('d-m-Y', strtotime($estacion->fecha_constitucion))}} @endif
                </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <label for="notario_constitucion">Nombre Notario:</label>
                {{ $estacion->notario_constitucion }}
            </div>
            <div class="col-sm-6">
                <label for="ciudad_constitucion">Ciudad:</label>
                {{ $estacion->ciudad_constitucion }}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <label for="nombre_replegal">Nombre Representante Legal:</label>
                {{ $estacion->nombre_replegal }}
            </div>
            <div class="col-sm-6">
                <label for="fecha_emision_replegal">Fecha de Emisión:</label>
                @if($estacion->fecha_emision_replegal!='') {{ date('d-m-Y', strtotime($estacion->fecha_emision_replegal))}} @endif
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <label for="nro_inst_replegal">Nro. Instrumento:</label>
                {{ $estacion->nro_inst_replegal }}
            </div>
            <div class="col-sm-6">
                <label for="fecha_replegal">Fecha Representación:</label>
                @if($estacion->fecha_replegal!='') {{ date('d-m-Y', strtotime($estacion->fecha_replegal))}} @endif
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <label for="notario_replegal">Nombre Notario:</label>
                {{ $estacion->notario_replegal }}
            </div>
            <div class="col-sm-6">
                <label for="ciudad_replegal">Ciudad del Representante Legal:</label>
                {{ $estacion->ciudad_replegal }}
            </div>
        </div>
    </div>
    <a href="{{route('estacionesConstitucionRepLegal.index')}}" class="btn btn-link">Regresar</a>
</div>
@endsection
