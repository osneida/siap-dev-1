@extends('layouts.layout')

@section('title',"Id #{$estacion->id}")

@section('content')
<div class="card">
    <h3 class="card-header">
        Detalle de las Estaciones (Instalaciones)
    </h3>    
    <div class="container col-md-12 col-md-offset-0">

       <h4 class="card-header">Instalaciones:</h4>

            <div class="row">
                <div class="col-sm-6">
                    <label for="superficie_total_predio">Superficie Total de Predio (mts2):</label>
                    {{ $estacion->superficie_total_predio }}                    
                </div>
                <div class="col-sm-6">
                    <label for="superficie_construccion">Superficie de Construcción (mts2):</label>
                    {{ $estacion->superficie_construccion }}
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <label for="numero_pisos">Número de Pisos:</label>
                    {{ $estacion->numero_pisos }}
                </div>
                <div class="col-sm-6">
                    <label for="escaleras">Escaleras:</label>
                    {{ $estacion->escaleras }}
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <label for="cuarto_electrico">Cuarto Eléctrico:</label>
                    @if($estacion->cuarto_electrico!='') {{ $bool='Si' }} @else {{ $bool='No' }} @endif
                </div>
                <div class="col-sm-6">
                    <label for="cuarto_sucio">Cuarto Sucio:</label>
                    @if($estacion->cuarto_sucio!='') {{ $bool='Si' }} @else {{ $bool='No' }} @endif
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label for="cuarto_maquinas">Cuarto de Máquinas:</label>
                    @if($estacion->cuarto_maquinas!='') {{ $bool='Si' }} @else {{ $bool='No' }} @endif
                </div>
                <div class="col-sm-6">
                    <label for="bodega">Bodega:</label>
                    {{ $estacion->bodega }}
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <label for="planta_electrica">Planta Eléctrica (vatios):</label>
                    {{ $estacion->planta_electrica }}                    
                </div>
                <div class="col-sm-6">
                    <label for="compresor">Compresor (Caballos de Fuerza):</label>
                    {{ $estacion->compresor }}                    
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label for="hidroneumaticos">Hidroneumáticos:</label>
                    {{ $estacion->hidroneumaticos }}                    
                </div>
                <div class="col-sm-6">
                    <label for="numero_banos">Número de Baños:</label>
                    {{ $estacion->numero_banos }}                    
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label for="puestos_estacionamiento">Puestos de Estacionamiento:</label>
                    {{ $estacion->puestos_estacionamiento }}                    
                </div>
                <div class="col-sm-6">
                    <label for="puestos_estacionamiento_disc">Puestos de Estacionamiento (Discapacitados):</label>
                    {{ $estacion->puestos_estacionamiento_disc }}                    
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label for="cisterna_aguas_blancas">Cisterna Aguas Blancas:</label>
                    @if($estacion->cisterna_aguas_blancas!='') {{ $bool='Si' }} @else {{ $bool='No' }} @endif
                </div>
                <div class="col-sm-6">
                    <label for="extintores">Extintores:</label>
                    {{ $estacion->extintores }}                    
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label for="area_facturacion">Área de Facturación:</label>
                    @if($estacion->area_facturacion!='') {{ $bool='Si' }} @else {{ $bool='No' }} @endif
                </div>
                <div class="col-sm-6">
                    <label for="surtidor_aire">Surtidor de Aire:</label>
                    {{ $estacion->surtidor_aire }}                    
                </div>
            </div>            
            <div class="row">
                <div class="col-sm-6">
                    <label for="surtidor_agua">Surtidor de Agua:</label>
                    {{ $estacion->surtidor_agua }}                    
                </div>
            </div>
    </div>
    <a href="{{route('estacionesInstalaciones.index')}}" class="btn btn-link">Regresar</a>
</div>
@endsection
