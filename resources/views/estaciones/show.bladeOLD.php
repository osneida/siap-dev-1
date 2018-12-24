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
    <div class="row"></div>
    <div class="container col-md-12 col-md-offset-0">

        <h4 class="card-header">Ubicación y contacto:</h4>

        <div class="row">
                <div class="col-sm-6">
                    <label for="estado_id">Estado:</label>
                    {{ $estacion->estado_id }}
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

    <div class="row"></div>

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
    <a href="{{route('estaciones.index')}}" class="btn btn-link">Regresar</a>
</div>
@endsection
