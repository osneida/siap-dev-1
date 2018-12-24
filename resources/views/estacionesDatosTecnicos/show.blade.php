@extends('layouts.layout')

@section('title',"Id #{$estacion->id}")

@section('content')
<div class="card">
    <h3 class="card-header">
        Detalle de las Estaciones (Datos Técnicos)
    </h3>    
    <div class="container col-md-12 col-md-offset-0">
        <h4 class="card-header">Datos Técnicos:</h4>
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
                    <label for="numero_islas">Número de Islas:</label>
                    {{ $estacion->numero_islas }}
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <label for="numero_despachadores">Número de Despachadores:</label>
                    {{ $estacion->numero_despachadores }}
                </div>
                <div class="col-sm-6">
                    <label for="numero_empleados">Número de Empleados:</label>
                    {{ $estacion->numero_empleados }}
                </div>            
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label for="fecha_inicio_operacion">Fecha de Inicio de la Operación:</label>
                    @if($estacion->fecha_inicio_operacion!='') {{ date('d-m-Y', strtotime($estacion->fecha_inicio_operacion))}} @endif
                </div>
                <div class="col-sm-6">
                    <label for="estatus_estacion">Estatus de la Estación:</label>
                    {{ $estacion->estatus_estacion }}                    
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <label for="responsable_obra_diseno">Director Responsable de la Obra en Diseño:</label>
                    {{ $estacion->responsable_obra_diseno }}
                </div>
                <div class="col-sm-6">
                    <label for="numero_permiso_diseno">Número del Permiso para la Obre en Diseño:</label>
                    {{ $estacion->numero_permiso_diseno }}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label for="aditivo_gasolina1">Aditivo de Gasolina 1:</label>
                    {{ $tanque->aditivo_gasolina1 }}                    
                </div>
                <div class="col-sm-6">
                    <label for="aditivo_gasolina2">Aditivo de Gasolina 2:</label>
                    {{ $tanque->aditivo_gasolina2 }}                    
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label for="aditivo_diesel">Aditivo Diesel:</label>
                    {{ $tanque->aditivo_diesel }} 
                    @endforeach
                    
                </div>
                <div class="col-sm-6">
                    <label for="forma_recepcion">Forma Recepción:</label>
                    {{ $estacion->forma_recepcion }}                    
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label for="promedio_mensual_ventas">Promedio Mensual de Ventas en Litros:</label>
                    {{ $estacion->promedio_mensual_ventas }}                    
                </div>
                <div class="col-sm-6">
                    <label for="tienda_conveniencias">Tienda Conveniencias:</label>
                    @if($estacion->tienda_conveniencias!='') {{ $bool='Si' }} @else {{ $bool='No' }} @endif
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label for="cobro_uso_banos">Cobro del Uso de Baños:</label>
                    @if($estacion->cobro_uso_banos!='') {{ $bool='Si' }} @else {{ $bool='No' }} @endif
                </div>
            </div>
    </div>
    <a href="{{route('estacionesDatosTecnicos.index')}}" class="btn btn-link">Regresar</a>
</div>
@endsection
