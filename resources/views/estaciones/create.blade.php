@extends('layouts.layout')

@section('title',"Registrar Estación:")

@section('content')

<script> label { margin-top: 5px !important; } </script>

<div role="tabpanel" class="panel with-nav-tabs panel-default" >
    <div role="tabpanel" class="panel-heading" style="padding-bottom: 0px !important;">

        @if ($errors->any())
            <div class="alert alert-danger">
                <h5>Por favor corrige los errores debajo:</h5>
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h3 class="card-header">Registrar Estación:</h3>

        <ul class="nav nav-tabs" role="tablist" id="myForm">
            <li role="presentation" class="active"><a href="#form1" aria-controls="form1" data-togle="tab" role="tab">Datos Generales</a></li>
            <li role="presentation"><a href="#form2" aria-controls="form2" data-togle="tab" role="tab">Ubicación y contacto:</a></li>
            <li role="presentation"><a href="#form3" aria-controls="form3" data-togle="tab" role="tab">Constitución y Representación:</a></li>
            <li role="presentation"><a href="#form4" aria-controls="form3" data-togle="tab" role="tab">Datos Técnicos:</a></li>
            <li role="presentation"><a href="#form5" aria-controls="form4" data-togle="tab" role="tab">Instalaciones:</a></li>
        </ul>
    </div>
    <form method="POST" action="{{ url('/estaciones')}}" enctype="multipart/form-data">
        {!! csrf_field() !!} <!-- para evitar ataques maliciosos en el metodo POST-->
        <div class="tab-content">

            <div role="tabpanel" class="tab-pane active" id="form1">

                <h4 class="card-header">Datos Generales:</h4>
                
                <div class="row">
                    <div class="col-sm-12">
                        <label for="descripcion">Nombre de la Estación de Servicio:</label>
                        <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Nombre de la Estación de Servicio"value="{{ old('descripcion') }}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <label for="nroper_cre">Número Permiso CRE:</label>
                        <input type="text" class="form-control" name="nroper_cre" id="nroper_cre" placeholder="Número de Permiso ante la CRE"value="{{ old('nroper_cre') }}">
                    </div>
                    <div class="col-sm-6">
                        <label for="rfc_estacion">Número RFC:</label>
                        <input type="text" class="form-control" name="rfc_estacion" id="rfc_estacion" placeholder="Número RFC de la Estación"value="{{ old('rfc_estacion') }}">
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-6">
                        <label for="id_propietario">Propietario:</label>                
                        <select class="form-control" name="id_propietario">
                            <option value="">--Seleccione--</option>
                            @foreach($propietario as $propietario)
                            <option value="{{$propietario->id}}">{{$propietario->nombre}} {{$propietario->apellido_paterno}} {{$propietario->apellido_materno}}</option>
                            @endforeach
                        </select>                    
                    </div>
                    <div class="col-sm-6">
                        <label for="id_grupo">Grupo:</label>
                        <select class="form-control" id="id_grupo">
                            <option value="">--Seleccione--</option>
                        </select>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-6">
                        <label for="nombre_responsable">Nombre Responsable:</label>
                        <input type="text" class="form-control" name="nombre_responsable" id="nombre_responsable" placeholder="Nombre del Responsable"value="{{ old('nombre_responsable') }}">
                    </div>
                    <div class="col-sm-6">
                        <label for="email_responsable">Correo Electrónico Responsable:</label>
                        <input type="email" class="form-control" name="email_responsable" id="email_responsable" placeholder="nombre@dominio.com" value="{{ old('email_responsable') }}">
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-5">
                        <label for="nro_estacion">Número Estación:</label>
                        <input type="text" class="form-control" name="nro_estacion" id="nro_estacion" placeholder="Número de Estación PEMEX"value="{{ old('nro_estacion') }}">
                    </div>
                    <div class="col-sm-3">
                        <label for="codigo">Código:</label>
                        <input type="text" class="form-control" name="codigo" id="codigo" placeholder="Código"value="{{ old('codigo') }}">
                    </div>
                    <div class="col-sm-4">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombres"value="{{ old('nombre') }}">
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-6">
                        <label for="logo">Logo:</label>
                        <input type="file" class="form-control-file" name="logo" id="logo" value="{{ old('logo') }}">
                    </div>
                    <div class="col-sm-6">
                        <label for="foto">Foto del Representante Legal:</label>
                        <input type="file" class="form-control-file" name="foto" id="foto"  value="{{ old('foto') }}">
                    </div>
                </div>            
                           
            </div>

            <div role="tabpanel" class="tab-pane" id="form2">
                
                <h4 class="card-header">Ubicación y contacto:</h4>
                
                <div class="row">
                    <div class="col-sm-4">
                        <label for="estado_id">Estado:</label>
                        <select class="form-control" id="estado_id" name="estado_id">
                            <option value="">--Seleccione--</option>
                             @foreach($estados as $estado)
                                 <option value="{{$estado['id']}}"  {{ $id_estado == $estado['id'] ? 'selected="selected"' : '' }}></option>
                             @endforeach                        
                        </select>                    
                    </div>
                    <div class="col-sm-4">
                        <label for="municipio_id">Municipio:</label>
                        <select class="form-control" id="municipio_id" name="municipio_id">
                            <option value="">--Seleccione--</option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <label for="entidad_federal_id">Entidad Federal:</label>
                        <select class="form-control" id="entidad_federal_id">
                            <option value="">--Seleccione--</option>
                        </select>                
                    </div>                
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <label for="calle">Calle:</label>
                        <input type="text" class="form-control" name="calle" id="calle" placeholder="Calle"value="{{ old('calle') }}">
                    </div>
                    <div class="col-sm-2">
                        <label for="colonia">Colonia:</label>
                        <input type="text" class="form-control" name="colonia" id="colonia" placeholder="Colonia"value="{{ old('colonia') }}">
                    </div>
                    <div class="col-sm-2">
                        <label for="codigo_postal">Cód.Postal:</label>
                        <input type="text" class="form-control" name="codigo_postal" id="codigo_postal" placeholder="Código Postal" value="{{ old('codigo_postal') }}">
                    </div>
                    <div class="col-sm-4">
                        <label for="referencia1">Referencia Dirección 1:</label>
                        <input type="text" class="form-control" name="referencia1" id="referencia1" placeholder="Referencia Dirección 1" value="{{ old('referencia1') }}">
                    </div>
                </div>            
                <div class="row">
                    <div class="col-sm-4">
                        <label for="referencia2">Referencia Dirección 2:</label>
                        <input type="text" class="form-control" name="referencia2" id="referencia2" placeholder="Referencia Dirección 2" value="{{ old('referencia2') }}">
                    </div>
                    <div class="col-sm-2">
                        <label for="telefono1">Nro. Teléfono 1:</label>
                        <input type="text" class="form-control" name="telefono1" id="telefono1" placeholder="Nro. Teléfono 1" value="{{ old('telefono1') }}">
                    </div>
                    <div class="col-sm-2">
                        <label for="telefono2">Nro. Teléfono 2:</label>
                        <input type="text" class="form-control" name="telefono2" id="telefono2" placeholder="Nro. Teléfono 2" value="{{ old('telefono2') }}">
                    </div>
                    <div class="col-sm-2">
                        <label for="celular1">Nro. Celular 1:</label>
                         <input type="text" class="form-control" name="celular1" id="celular1" placeholder="Nro. Celular 1" value="{{ old('celular1') }}">
                    </div>
                    <div class="col-sm-2">
                        <label for="celular2">Nro. Celular 2:</label>
                        <input type="text" class="form-control" name="celular2" id="celular2" placeholder="Nro. Celular 2" value="{{ old('celular2') }}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <label for="email_estacion">Correo Electrónico de la Estación:</label>
                        <input type="email" class="form-control" name="email_estacion" id="email_estacion" placeholder="nombre@dominio.com" value="{{ old('email_estacion') }}">
                    </div>
                    <div class="col-sm-6">
                        <label for="sitioweb">Sitio Web de la Estación:</label>
                        <input type="text" class="form-control" name="sitioweb" id="sitioweb" placeholder="Sitio Web de la Estación" value="{{ old('sitioweb') }}">
                    </div>
                </div>      

                <div class="row"><br></div>
   
            </div>

            <div role="tabpanel" class="tab-pane" id="form3">
  
                <h4 class="card-header">Constitución y Representación Legal:</h4>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="nro_instrumento">Nro. Instrumento:</label>
                        <input type="text" class="form-control" name="nro_instrumento" id="nro_instrumento" placeholder="Nro. Instrumento" value="{{ old('nro_instrumento') }}">
                    </div>
                    <div class="col-sm-3">
                        <label for="fecha_constitucion">Fecha Constitución:</label>
                        <input type="date" class="form-control datepicker" name="fecha_constitucion" id="fecha_constitucion" placeholder="Fecha Constitución" value="{{ old('fecha_constitucion') }}">
                    </div>
                    <div class="col-sm-3">
                        <label for="notario_constitucion">Notario Constitución:</label>
                        <input type="text" class="form-control" name="notario_constitucion" id="notario_constitucion" placeholder="Nombre y Apellido" value="{{ old('notario_constitucion') }}">
                    </div>
                    <div class="col-sm-3">
                        <label for="ciudad_constitucion">Ciudad:</label>
                        <input type="text" class="form-control" name="ciudad_constitucion" id="ciudad_constitucion" placeholder="Ciudad Constitución" value="{{ old('ciudad_constitucion') }}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <label for="nombre_replegal">Representante Legal:</label>
                        <input type="text" class="form-control" name="nombre_replegal" id="nombre_replegal" placeholder="Nombre y Apellido" value="{{ old('nombre_replegal') }}">
                    </div>
                    <div class="col-sm-3">
                        <label for="fecha_emision_replegal">Fecha de Emisión (Rep. Legal):</label>
                        <input type="date" class="form-control" name="fecha_emision_replegal" id="fecha_emision_replegal" placeholder="Fecha Emisión" value="{{ old('fecha_emision_replegal') }}">
                    </div>
                    <div class="col-sm-3">
                        <label for="nro_inst_replegal">Nro. Instrumento (Repr. Legal):</label>
                        <input type="text" class="form-control" name="nro_inst_replegal" id="nro_inst_replegal" placeholder="Nro. Instrumento (Repr. Legal)" value="{{ old('nro_inst_replegal') }}">
                    </div>
                    <div class="col-sm-3">
                        <label for="fecha_replegal">Fecha Representación:</label>
                        <input type="date" class="form-control" name="fecha_replegal" id="fecha_replegal" placeholder="Fecha Representación" value="{{ old('fecha_replegal') }}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <label for="notario_replegal">Notario (Rep. Legal):</label>
                        <input type="text" class="form-control" name="notario_replegal" id="notario_replegal" placeholder="Nombre y Apellido" value="{{ old('notario_replegal') }}">
                    </div>
                    <div class="col-sm-6">
                        <label for="ciudad_replegal">Ciudad (Rep. Legal):</label>
                        <input type="text" class="form-control" name="ciudad_replegal" id="ciudad_replegal" placeholder="Ciudad" value="{{ old('ciudad_replegal') }}">
                    </div>
                </div>

                <div class="row"><br></div>

            </div>   

            <div role="tabpanel" class="tab-pane" id="form4">
                <h4 class="card-header">Datos Técnicos:</h4>

                <div class="row">
                    <div class="col-sm-4">
                        <label for="numero_permiso_diseno">Nro. del Permiso para la Obra en Diseño:</label>
                        <input type="text" class="form-control" name="numero_permiso_diseno" id="numero_permiso_diseno" placeholder="Número del Permiso para la Obra en Diseño" value="{{ old('numero_permiso_diseno') }}">
                    </div>

                    <div class="col-sm-4">
                        <label for="estatus_estacion">Estatus Estación:</label>
                        <input type="number" class="form-control" name="estatus_estacion" id="estatus_estacion" placeholder="Estatus" value="{{ old('estatus_estacion') }}">
                    </div>
                    <div class="col-sm-4">
                        <label for="numero_empleados">Empleados:</label>
                        <input type="number" class="form-control" name="numero_empleados" id="numero_empleados" placeholder="Cantidad" value="{{ old('numero_empleados') }}">
                    </div>                
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <label for="fecha_inicio_operacion">Fecha de Inicio de la Operación:</label>
                        <input type="date" class="form-control" name="fecha_inicio_operacion" id="fecha_inicio_operacion" placeholder="Fecha de Inicio de la Operación" value="{{ old('fecha_inicio_operacion') }}">
                    </div>
                    
                    <div class="col-sm-8">
                        <label for="responsable_obra_diseno">Responsable de la Obra en Diseño:</label>
                        <input type="text" class="form-control" name="responsable_obra_diseno" id="responsable_obra_diseno" placeholder="Director Responsable de la Obra en Diseño" value="{{ old('responsable_obra_diseno') }}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <label for="numero_islas">Islas:</label>
                        <select class="form-control" name="numero_islas" id="numero_islas">
                            @for($i=1;$i<=20;$i++)
                                <option value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <label for="numero_despachadores">Despachadores:</label>
                        <input type="number" class="form-control" name="numero_despachadores" id="numero_despachadores" placeholder="Cantidad" value="{{ old('numero_despachadores') }}">
                    </div>
                    <div class="col-sm-4">
                        <label for="promedio_mensual_ventas">Promedio Mensual de Ventas en Litros:</label>
                        <select class="form-control" name="promedio_mensual_ventas" id="promedio_mensual_ventas">
                        @for($i=5000;$i<=30000;$i=$i+5000)
                            {{ $desc=$i }}
                            @if($i>=30000) {{$desc='30000 o mas'}} @endif
                            <option value="{{$i}}">{{$desc}}</option>
                        @endfor
                    </select>
                    </div>                  
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <label for="forma_recepcion">Forma Recepción:</label>
                        <select class="form-control" name="forma_recepcion" id="forma_recepcion">
                            <?php $tipos_forma_recepcion = [
                            'carrotanque' => 'Carrotanque',
                            'ductos' => 'Ductos',
                            'buquetanque' => 'Buquetanque',
                            'autotanque' => 'Autotanques'
                            ];
                            ?>
                            @foreach($tipos_forma_recepcion as $clave => $valor)
                                <option value="{{$clave}}">{{$valor}}</option>
                            @endforeach
                        </select>
                    </div> 
                    <div class="col-sm-4">
                        <label for="tienda_conveniencias">Tienda Conveniencias:</label>
                        <select class="form-control" name="tienda_conveniencias" id="tienda_conveniencias">
                            <?php $opciones = [
                                true => 'Si',
                                false => 'No',
                            ];
                            ?>
                            @foreach($opciones as $clave => $valor)
                                <option value="{{$clave}}">{{$valor}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <label for="cobro_uso_banos">Cobro del Uso de Baños:</label>
                        <select class="form-control" name="cobro_uso_banos" id="cobro_uso_banos">
                            <?php $opciones = [
                                true => 'Si',
                                false => 'No',
                            ];
                            ?>
                            @foreach($opciones as $clave => $valor)
                                <option value="{{$clave}}">{{$valor}}</option>
                            @endforeach
                        </select>
                    </div>
                </div> 

                <div class="row"><br></div>

            </div>

            <div role="tabpanel" class="tab-pane" id="form5">

                <h4 class="card-header">Instalaciones:</h4>

                <div class="col-sm-8">

                <div class="row">                
                    <div class="col-sm-4">
                        <label for="superficie_total_predio">Superficie Total de Predio:</label>
                        <input type="number" class="form-control" name="superficie_total_predio" id="superficie_total_predio" placeholder="En metros cuadrados" value="{{ old('superficie_total_predio') }}">
                    </div>
                    <div class="col-sm-4">
                        <label for="superficie_construccion">Superficie Construcción:</label>
                        <input type="number" class="form-control" name="superficie_construccion" id="superficie_construccion" placeholder="En metros cuadrados" value="{{ old('superficie_construccion') }}">
                    </div>
                    <div class="col-sm-4">
                        <label for="numero_pisos">Pisos:</label>
                        <input type="number" class="form-control" name="numero_pisos" id="numero_pisos" placeholder="Número de Pisos" value="{{ old('numero_pisos') }}">
                    </div>
                </div>

                <div class="row">                     
                    <div class="col-sm-4">
                        <label for="escaleras">Escaleras:</label>
                        <input type="number" class="form-control" name="escaleras" id="escaleras" placeholder="Cantidad" value="{{ old('escaleras') }}">
                    </div>
                    <div class="col-sm-4">
                        <label for="bodega">Bodegas:</label>
                        <input type="number" class="form-control" name="bodega" id="bodega" placeholder="Cantidad" value="{{ old('bodega') }}">
                    </div>
                    <div class="col-sm-4">
                        <label for="numero_banos">Baños:</label>
                        <input type="number" class="form-control" name="numero_banos" id="numero_banos" placeholder="Cantidad" value="{{ old('numero_banos') }}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <label for="extintores">Extintores:</label>
                        <input type="number" class="form-control" name="extintores" id="extintores" placeholder="Cantidad" value="{{ old('extintores') }}">
                    </div>
                    <div class="col-sm-4">
                        <label for="surtidor_aire">Surtidor de Aire:</label>
                        <input type="number" class="form-control" name="surtidor_aire" id="surtidor_aire" placeholder="Cantidad" value="{{ old('surtidor_aire') }}">
                    </div>
                    <div class="col-sm-4">
                        <label for="surtidor_agua">Surtidor de Agua:</label>
                        <input type="number" class="form-control" name="surtidor_agua" id="surtidor_agua" placeholder="Cantidad" value="{{ old('surtidor_agua') }}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <label for="hidroneumaticos">Hidroneumáticos:</label>
                        <input type="number" class="form-control" name="hidroneumaticos" id="hidroneumaticos" placeholder="Cantidad" value="{{ old('hidroneumaticos') }}">
                    </div>
                    <div class="col-sm-4">
                        <label for="compresor">Compresor:</label>
                        <input type="number" class="form-control" name="compresor" id="compresor" placeholder="En Caballos de Fuerza" value="{{ old('compresor') }}">
                    </div>
                     <div class="col-sm-4">
                        <label for="planta_electrica">Planta Eléctrica:</label>
                        <input type="number" class="form-control" name="planta_electrica" id="planta_electrica" placeholder="En Vatios" value="{{ old('planta_electrica') }}">
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-4">
                        <label for="puestos_estacionamiento">Puestos de Estacionamiento:</label>
                        <input type="number" class="form-control" name="puestos_estacionamiento" id="puestos_estacionamiento" placeholder="Cantidad" value="{{ old('puestos_estacionamiento') }}">
                    </div>
                    <div class="col-sm-4">
                        <label for="puestos_estacionamiento_disc">Estacionamiento (Discapacitados):</label>
                        <input type="number" class="form-control" name="puestos_estacionamiento_disc" id="puestos_estacionamiento_disc" placeholder="Cantidad" value="{{ old('puestos_estacionamiento_disc') }}">
                    </div>
                    <div class="col-sm-4">
                        <label for="area_facturacion">Área de Facturación:</label>
                        <select class="form-control" name="area_facturacion" id="area_facturacion">
                            <?php $opciones = [ true => 'Si', false => 'No', ]; ?>
                            @foreach($opciones as $clave => $valor)
                                <option value="{{$clave}}">{{$valor}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                </div>

                <div class="col-sm-4">

                    <div class="row">    
                        <div class="col-sm-8">
                            <label for="cuarto_electrico">Cuarto Eléctrico:</label>
                            <select class="form-control" name="cuarto_electrico" id="cuarto_electrico">
                                <?php $opciones = [
                                    true => 'Si',
                                    false => 'No',
                                ];
                                ?>
                                @foreach($opciones as $clave => $valor)
                                    <option value="{{$clave}}">{{$valor}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-8">
                            <label for="cuarto_sucio">Cuarto Sucio:</label>
                            <select class="form-control" name="cuarto_sucio" id="cuarto_sucio">
                                <?php $opciones = [
                                    true => 'Si',
                                    false => 'No',
                                ];
                                ?>
                                @foreach($opciones as $clave => $valor)
                                    <option value="{{$clave}}">{{$valor}}</option>
                                @endforeach
                            </select>
                        </div>            
                    </div>


                    <div class="row">
                        <div class="col-sm-8">
                            <label for="cuarto_maquinas">Cuarto de Máquinas:</label>
                            <select class="form-control" name="cuarto_maquinas" id="cuarto_maquinas">
                                <?php $opciones = [
                                    true => 'Si',
                                    false => 'No',
                                ];
                                ?>
                                @foreach($opciones as $clave => $valor)
                                    <option value="{{$clave}}">{{$valor}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-8">
                            <label for="cuarto_sucio">Cuarto Sucio:</label>
                            <select class="form-control" name="cuarto_sucio" id="cuarto_sucio">
                                <?php $opciones = [
                                    true => 'Si',
                                    false => 'No',
                                ];
                                ?>
                                @foreach($opciones as $clave => $valor)
                                    <option value="{{$clave}}">{{$valor}}</option>
                                @endforeach
                            </select>
                        </div>            
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-8">
                            <label for="cisterna_aguas_blancas">Cisterna Aguas Blancas:</label>
                            <select class="form-control" name="cisterna_aguas_blancas" id="cisterna_aguas_blancas">
                                <?php $opciones = [
                                    true => 'Si',
                                    false => 'No',
                                ];
                                ?>
                                @foreach($opciones as $clave => $valor)
                                    <option value="{{$clave}}">{{$valor}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>
                    
            </div>

        </div>   

        <div class="row"><br></div>

        <div class="col-sm-10">
        <div role="tabpanel" class="panel-heading" style="padding-bottom: 0px !important;">
            <div class="row">
                <br>                 
                <button type="submit" class="btn btn-primary">Guardar Estación</button>
                <a href="{{route('estaciones.index')}}" class="btn btn-link">Regresar a la Lista de Estaciones</a>
            </div>
        </div></div>   

    </form>

</div>

<script>
$('#myForm a').click(function (e) {
      e.preventDefault();
      $(this).tab('show');
    })
</script>

@endsection
    
