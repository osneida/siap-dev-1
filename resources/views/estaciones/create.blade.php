@extends('layouts.layout')

@section('title',"Crear Estación:")

@section('content')

<script src="{{ asset('/js/efecto.js') }}"></script>
<div class="card">
    <h3 class="card-header">Crear Estación:</h3>
    <div class="card-body">
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
        <form method="POST" action="{{ url('/estaciones')}}" enctype="multipart/form-data">
        {!! csrf_field() !!} <!-- para evitar ataques maliciosos en el metodo POST-->
        <div class="container col-md-12 col-md-offset-0" id="form1" name="form1">
            <h4 class="card-header">Datos Generales:</h4>
            <div class="alert alert-danger" style="display:none;" id="msjs_error">
                <h5>Por favor corrige los errores debajo:</h5>
                <ul>                    
                    <div class="alert alert-danger">
                       <li id="codigo_error" style="display:none;">Rellene el campo Código</li> 
                       <li id="codigo_error_len" style="display:none;">El campo Código debe tener entre 3 y 8 caracteres</li> 
                       <li id="nombre_error" style="display:none;">Rellene el campo Nombre de la Estación de Servicio</li>                        
                       <li id="nombre_error_len" style="display:none;">El campo Nombre de la Estación de Servicio es obligatorio y debe tener como máximo 32 caracteres</li> 
                       <li id="descripcion_error" style="display:none;">Rellene el campo Descripción</li>                        
                       <li id="descripcion_error_len" style="display:none;">El campo Descripcion debe tener como máximo 32 caracteres</li> 
                       <li id="nombre_responsable_error" style="display:none;">Rellene el campo Responsable Técnico</li>                        
                       <li id="nombre_responsable_error_len" style="display:none;">El campo Descripcion debe tener como máximo 32 caracteres</li> 
                       <li id="email_responsable_error" style="display:none;">Rellene el campo Email del Responsable</li>                        
                       <li id="email_responsable_error_len" style="display:none;">El campo Email del Responsable debe tener como máximo 32 caracteres</li>                        
                       <li id="email_responsable_error_email" style="display:none;">El campo Email del Responsable deberá ser una dirección de correo electrónico válida</li> 
                       <li id="rfc_estacion_error" style="display:none;">Rellene el campo Nro. RFC de la Estación</li>                        
                       <li id="rfc_estacion_error_len" style="display:none;">El campo Nro. RFC de la Estación debe tener como máximo 16 caracteres</li>                        
                       <li id="nro_estacion_error_len" style="display:none;">El campo Nro. Estación PEMEX debe tener como máximo 16 caracteres</li>                        
                       <li id="nroper_cre_error" style="display:none;">Rellene el campo Nro. Permiso de la CRE</li>                        
                       <li id="nroper_cre_error_len" style="display:none;">El campo Nro. Permiso de la CRE debe tener como máximo 16 caracteres</li>                        
                       <li id="logo_error_ancho" style="display:none;">El campo Logo debe tener un ancho no mayor a 600 pixeles</li>
                       <li id="logo_error_alto" style="display:none;">El campo Logo debe tener un alto no mayor a 600 pixeles</li>
                       <li id="logo_error_extension" style="display:none;">El campo Logo debe ser un tipo de archivo jpg, jpeg o png</li>
                       <li id="foto_error_ancho" style="display:none;">El campo Foto del Representante Legal debe tener un ancho no mayor a 600 pixeles</li>
                       <li id="foto_error_alto" style="display:none;">El campo Foto del Representante Legal debe tener un alto no mayor a 600 pixeles</li>
                       <li id="foto_error_extension" style="display:none;">El campo Foto del Representante Legal debe ser un tipo de archivo jpg, jpeg o png</li>
                    </div>                    
                </ul>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <label for="codigo">Código:</label>
                    <input type="text" class="form-control" name="codigo" id="codigo" placeholder="Código" value="{{ old('codigo') }}" required="true">
                </div>
                <div class="col-sm-4">
                    <label for="nombre">Nombre de la Estación de Servicio:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre de la Estación de Servicio" value="{{ old('nombre') }}" required="true">
                </div>
                <div class="col-sm-6">
                    <label for="descripcion">Descripción:</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Descripción de la Estación de Servicio" value="{{ old('descripcion') }}" required="true">
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
                <div class="col-sm-3">
                    <label for="nombre_responsable">Responsable Técnico:</label>
                    <input type="text" class="form-control" name="nombre_responsable" id="nombre_responsable" placeholder="Nombre y Apellido"value="{{ old('nombre_responsable') }}" required="true">
                </div>
                <div class="col-sm-3">
                    <label for="email_responsable">Email del Responsable:</label>
                    <input type="email" class="form-control" name="email_responsable" id="email_responsable" placeholder="nombre@dominio.com" value="{{ old('email_responsable') }}" required="true">
                </div>
                <div class="col-sm-3">
                    <label for="rfc_estacion">Nro. RFC de la Estación:</label>
                    <input type="text" class="form-control" name="rfc_estacion" id="rfc_estacion" placeholder="Nro. RFC de la Estación" value="{{ old('rfc_estacion') }}" required="true">
                </div>
                <div class="col-sm-3">
                    <label for="nro_estacion">Nro. Estación PEMEX:</label>
                    <input type="text" class="form-control" name="nro_estacion" id="nro_estacion" placeholder="Nro. Estación PEMEX" value="{{ old('nro_estacion') }}">
                </div>

            </div>
            
            <div class="row">
                <div class="col-sm-3">
                    <label for="nroper_cre">Nro. Permiso de la CRE:</label>
                    <input type="text" class="form-control" name="nroper_cre" id="nroper_cre" placeholder="Nro. Permiso ante la CRE" value="{{ old('nroper_cre') }}" required="true">
                </div>
                <div class="col-sm-4">
                    <label for="logo">Logo:</label>
                    <input type="file" class="form-control-file" name="logo" id="logo" value="{{ old('logo') }}">
                </div>
                <div class="col-sm-4">
                    <label for="foto">Foto del Representante Legal:</label>
                    <input type="file" class="form-control-file" name="foto" id="foto"  value="{{ old('foto') }}">
                </div>
            </div>            
            <div class="row">
                <div class="col-sm-5">
                    <br>                    
                    <button type="button" class="btn btn-primary" onclick="ocultarmostrar('#form1','#form2')">Siguiente</button>
                    <a href="{{route('estaciones.index')}}" class="btn btn-link">Regresar a la Lista de Estaciones</a>
                </div>
            </div>              

        </div>

        <div class="container col-md-12 col-md-offset-0" id="form2" name="form2" style="display:none;">
            
            <h4 class="card-header">Ubicación y contacto:</h4>
            <div class="alert alert-danger" style="display:none;" id="msjs_error2">
                <h5>Por favor corrige los errores debajo:</h5>
                <ul>                    
                    <div class="alert alert-danger">
                       <li id="estado_id_error_len" style="display:none;">El campo Estado debe tener como máximo 16 caracteres</li>                        
                       <li id="municipio_id_error_len" style="display:none;">El campo Municipio debe tener como máximo 16 caracteres</li>                        
                       <li id="entidad_federal_id_error_len" style="display:none;">El campo Entidad Federal debe tener como máximo 16 caracteres</li>                        
                       <li id="calle_error_len" style="display:none;">El campo Calle debe tener como máximo 64 caracteres</li>                        
                       <li id="colonia_error_len" style="display:none;">El Colonia debe tener como máximo 32 caracteres</li>                        
                       <li id="codigo_postal_error_len" style="display:none;">El campo Cod.Postal debe tener como máximo 5 caracteres</li>                        
                       <li id="referencia1_error_len" style="display:none;">El campo Referencia Dirección 1 debe tener como máximo 128 caracteres</li>
                       <li id="referencia2_error_len" style="display:none;">El campo Referencia Dirección 2 debe tener como máximo 128 caracteres</li>                       
                       <li id="telefono1_error_len" style="display:none;">El campo Nro. Teléfono 1 debe tener como máximo 16 caracteres</li>                        
                       <li id="telefono2_error_len" style="display:none;">El campo Nro. Teléfono 2 debe tener como máximo 16 caracteres</li>                                               
                       <li id="celular1_error_len" style="display:none;">El campo Nro. Celular 1 debe tener como máximo 16 caracteres</li>                        
                       <li id="celular2_error_len" style="display:none;">El campo Nro. Celular 2 debe tener como máximo 16 caracteres</li>                                               
                       <li id="email_estacion_error_len" style="display:none;">El campo Correo Electrónico de la Estación debe tener como máximo 32 caracteres</li>                        
                       <li id="email_estacion_error_email" style="display:none;">El campo Correo Electrónico de la Estación deberá ser una dirección de correo electrónico válida</li> 
                       <li id="sitioweb_error_len" style="display:none;">El campo Sitio Web debe tener como máximo 32 caracteres</li>                        
                    </div>                    
                </ul>
            </div>            
            <div class="row">
                <div class="col-sm-4">
                    <label for="estado_id">Estado:</label>
                    <select class="form-control" id="estado_id">                        
                        <option value="">--Seleccione--</option>
                        @foreach($estados as $estado)
                        <option value="{{$estado->id}}">{{$estado->descripcion}}</option>
                        @endforeach                        
                    </select>                    
                </div>
                <div class="col-sm-4">
                    <label for="municipio_id">Municipio:</label>
                    <select class="form-control" id="municipio_id">
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
            <div class="row">
                <div class="col-sm-7">
                    <br>                    
                    <button type="button" class="btn btn-primary" onclick="ocultarmostrar('#form2','#form1')">Anterior</button>                    
                    <button type="button" class="btn btn-primary" onclick="ocultarmostrar('#form2','#form3')">Siguiente</button>
                    <a href="{{route('estaciones.index')}}" class="btn btn-link">Regresar a la Lista de Estaciones</a>
                </div>
            </div>            
        </div>

        <div class="container col-md-12 col-md-offset-0" id="form3" name="form3" style="display:none;">

            <h4 class="card-header">Constitución y Representación Legal:</h4>
            <div class="alert alert-danger" style="display:none;" id="msjs_error3">
                <h5>Por favor corrige los errores debajo:</h5>
                <ul>                    
                    <div class="alert alert-danger">
                       <li id="nro_instrumento_error_len" style="display:none;">El campo Nro. Instrumento debe tener como máximo 16 caracteres</li>                        
                       <li id="notario_constitucion_error_len" style="display:none;">El campo Notario Constitución debe tener como máximo 32 caracteres</li>                        
                       <li id="ciudad_constitucion_error_len" style="display:none;">El campo Ciudad debe tener como máximo 32 caracteres</li>                        
                       <li id="nombre_replegal_error_len" style="display:none;">El campo Representante Legal debe tener como máximo 32 caracteres</li>                        
                       <li id="nro_inst_replegal_error_len" style="display:none;">El Nro. Instrumento (Repr. Legal) debe tener como máximo 16 caracteres</li>                        
                       <li id="notario_replegal_error_len" style="display:none;">El campo Notario (Rep. Legal) debe tener como máximo 32 caracteres</li>                        
                       <li id="ciudad_replegal_error_len" style="display:none;">El campo Ciudad (Rep. Legal) debe tener como máximo 32 caracteres</li>
                    </div>                    
                </ul>
            </div>
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
            <div class="row">
                <div class="col-sm-7">
                    <br>                    
                    <button type="button" class="btn btn-primary" onclick="ocultarmostrar('#form3','#form2')">Anterior</button>                    
                    <button type="button" class="btn btn-primary" onclick="ocultarmostrar('#form3','#form4')">Siguiente</button>
                    <a href="{{route('estaciones.index')}}" class="btn btn-link">Regresar a la Lista de Estaciones</a>
                </div>
            </div>        

        </div> 
        <div class="container col-md-12 col-md-offset-0" id="form4" name="form4" style="display:none;">        

            <h4 class="card-header">Datos Técnicos:</h4>
            <div class="alert alert-danger" style="display:none;" id="msjs_error4">
                <h5>Por favor corrige los errores debajo:</h5>
                <ul>                    
                    <div class="alert alert-danger">
                       <li id="nro_tanques_individuales_error_num" style="display:none;">El campo Tanques Individuales debe ser un número entero</li>                        
                       <li id="nro_tanques_compartidos_error_num" style="display:none;">El campo Tanques Compartidos debe ser un número entero</li>                                               
                       <li id="capacidad_tanques_error_num" style="display:none;">El campo Capacidad de Tanques debe ser un número entero</li>                                               
                       <li id="numero_islas_error_num" style="display:none;">El campo Islas debe ser un número entero</li>                                               
                       <li id="numero_despachadores_error_num" style="display:none;">El campo Despachadores debe ser un número entero</li>                                               
                       <li id="numero_empleados_error_num" style="display:none;">El campo Empleados debe ser un número entero</li>                                                                      
                       <li id="estatus_estacion_error_num" style="display:none;">El campo Estatus Estación debe ser un número entero</li>                                                                                             
                       <li id="responsable_obra_diseno_error_len" style="display:none;">El campo Responsable de la Obra en Diseño debe tener como máximo 64 caracteres</li>                        
                       <li id="numero_permiso_diseno_error_len" style="display:none;">El campo Nro. del Permiso para la Obra en Diseño debe tener como máximo 16 caracteres</li>                        
                       <li id="aditivo_gasolina1_error_len" style="display:none;">El campo Aditivo Gasolina 1 debe tener como máximo 32 caracteres</li>                        
                       <li id="aditivo_gasolina2_error_len" style="display:none;">El campo Aditivo Gasolina 2 debe tener como máximo 32 caracteres</li>                        
                       <li id="aditivo_diesel_error_len" style="display:none;">El campo Aditivo Diesel debe tener como máximo 32 caracteres</li>                                               
                       <li id="forma_recepcion_error_len" style="display:none;">El campo Forma Recepción debe tener como máximo 16 caracteres</li>                        
                       <li id="promedio_mensual_ventas_error_num" style="display:none;">El campo Promedio Mensual de Ventas en Litros debe ser un número entero</li>                                                                                             
                    </div>                    
                </ul>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <label for="nro_tanques_individuales">Tanques Individuales:</label>
                    <select class="form-control" name="nro_tanques_individuales" id="nro_tanques_individuales">
    <?php
                    for($i=1;$i<=10;$i++)
                    {
                        echo "<option value=".$i.">".$i."</option>";
                    }
    ?>
                    </select>
                </div>
                <div class="col-sm-3">
                    <label for="nro_tanques_compartidos">Tanques Compartidos:</label>
                    <select class="form-control" name="nro_tanques_compartidos" id="nro_tanques_compartidos">
    <?php
                    for($i=1;$i<=10;$i++)
                    {
                        echo "<option value=".$i.">".$i."</option>";
                    }
    ?>
                    </select>
                </div>
                <div class="col-sm-3">
                    <label for="capacidad_tanques">Capacidad de Tanques:</label>
                    <select class="form-control" name="capacidad_tanques" id="capacidad_tanques">
    <?php
                    for($i=10000;$i<=90000;$i=$i+10000)
                    {
                        echo "<option value=".$i.">".$i."</option>";
                    }
                    $i='100000 o mas';
                    echo "<option value=100000>".$i."</option>";
    ?>
                    </select>

                </div>   
                <div class="col-sm-1">
                    <label for="numero_islas">Islas:</label>
                    <select class="form-control" name="numero_islas" id="numero_islas">
        <?php
                    for($i=1;$i<=20;$i++)
                    {
                        echo "<option value=".$i.">".$i."</option>";
                    }
        ?>
                    </select>                    
                </div>
                <div class="col-sm-2">
                    <label for="numero_despachadores">Despachadores:</label>
                    <input type="text" class="form-control" name="numero_despachadores" id="numero_despachadores" placeholder="Cantidad" value="{{ old('numero_despachadores') }}">
                </div>
                
            </div>

            <div class="row">
                <div class="col-sm-2">
                    <label for="numero_empleados">Empleados:</label>
                    <input type="text" class="form-control" name="numero_empleados" id="numero_empleados" placeholder="Cantidad" value="{{ old('numero_empleados') }}">
                </div>            
                <div class="col-sm-4">
                    <label for="fecha_inicio_operacion">Fecha de Inicio de la Operación:</label>
                    <input type="date" class="form-control" name="fecha_inicio_operacion" id="fecha_inicio_operacion" placeholder="Fecha de Inicio de la Operación" value="{{ old('fecha_inicio_operacion') }}">
                </div>
                <div class="col-sm-2">
                    <label for="estatus_estacion">Estatus Estación:</label>
                    <input type="text" class="form-control" name="estatus_estacion" id="estatus_estacion" placeholder="Estatus" value="{{ old('estatus_estacion') }}">
                </div>
                <div class="col-sm-4">
                    <label for="responsable_obra_diseno">Responsable de la Obra en Diseño:</label>
                    <input type="text" class="form-control" name="responsable_obra_diseno" id="responsable_obra_diseno" placeholder="Director Responsable de la Obra en Diseño" value="{{ old('responsable_obra_diseno') }}">
                </div>

            </div>

            <div class="row">
                <div class="col-sm-4">
                    <label for="numero_permiso_diseno">Nro. del Permiso para la Obra en Diseño:</label>
                    <input type="text" class="form-control" name="numero_permiso_diseno" id="numero_permiso_diseno" placeholder="Número del Permiso para la Obra en Diseño" value="{{ old('numero_permiso_diseno') }}">
                </div>
                <div class="col-sm-2">
                    <label for="aditivo_gasolina1">Aditivo Gasolina 1:</label>
                    <input type="text" class="form-control" name="aditivo_gasolina1" id="aditivo_gasolina1" placeholder="Aditivo Gasolina 1" value="{{ old('aditivo_gasolina1') }}">
                </div>
                <div class="col-sm-2">
                    <label for="aditivo_gasolina2">Aditivo Gasolina 2:</label>
                    <input type="text" class="form-control" name="aditivo_gasolina2" id="aditivo_gasolina2" placeholder="Aditivo Gasolina 2" value="{{ old('aditivo_gasolina2') }}">
                </div>
                <div class="col-sm-2">
                    <label for="aditivo_diesel">Aditivo Diesel:</label>
                    <input type="text" class="form-control" name="aditivo_diesel" id="aditivo_diesel" placeholder="Aditivo Diesel" value="{{ old('aditivo_diesel') }}">
                </div>
                <div class="col-sm-2">
                    <label for="forma_recepcion">Forma Recepción:</label>
                    <select class="form-control" name="forma_recepcion" id="forma_recepcion">
                        <option value="carrotanque">Carrotanque</option>
                        <option value="ductos">Ductos</option>
                        <option value="buquetanque">Buquetanque</option>
                        <option value="autotanque">Autotanques</option>                        
                    </select>                     
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <label for="promedio_mensual_ventas">Promedio Mensual de Ventas en Litros:</label>
                <select class="form-control" name="promedio_mensual_ventas" id="promedio_mensual_ventas">
<?php
                for($i=5000;$i<=25000;$i=$i+5000)
                {
                    echo "<option value=".$i.">".$i."</option>";
                }
                $i='30000 o mas';
                echo "<option value=30000>".$i."</option>";
?>
                </select>
                </div>
                <div class="col-sm-4">
                    <label for="tienda_conveniencias">Tienda Conveniencias:</label>
                    <select class="form-control" name="tienda_conveniencias" id="tienda_conveniencias">
                        <option value="true">Si</option>
                        <option value="false">No</option>                    
                    </select>
                </div>
                <div class="col-sm-4">
                    <label for="cobro_uso_banos">Cobro del Uso de Baños:</label>
                    <select class="form-control" name="cobro_uso_banos" id="cobro_uso_banos">
                        <option value="true">Si</option>
                        <option value="false">No</option>                    
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-7">
                    <br>                    
                    <button type="button" class="btn btn-primary" onclick="ocultarmostrar('#form4','#form3')">Anterior</button>                    
                    <button type="button" class="btn btn-primary" onclick="ocultarmostrar('#form4','#form5')">Siguiente</button>
                    <a href="{{route('estaciones.index')}}" class="btn btn-link">Regresar a la Lista de Estaciones</a>
                </div>
            </div>
        </div>
        <div class="container col-md-12 col-md-offset-0" id="form5" name="form5" style="display:none;">

            <h4 class="card-header">Instalaciones:</h4>
            <div class="alert alert-danger" style="display:none;" id="msjs_error5">
                <h5>Por favor corrige los errores debajo:</h5>
                <ul>                    
                    <div class="alert alert-danger">
                       <li id="superficie_total_predio_error_num" style="display:none;">El campo Superficie Total de Predio debe ser un número entero</li>
                       <li id="superficie_construccion" style="display:none;">El campo Superficie de Construcción de Predio debe ser un número entero</li>
                       <li id="numero_pisos_num" style="display:none;">El campo Pisos debe ser un número entero</li>
                       <li id="escaleras_num" style="display:none;">El campo Escaleras debe ser un número entero</li>
                       <li id="bodega_num" style="display:none;">El campo Bodega debe ser un número entero</li>
                       <li id="hidroneumaticos_num" style="display:none;">El campo Hidroneumáticos debe ser un número entero</li>
                       <li id="planta_electrica_num" style="display:none;">El campo Planta Eléctrica debe ser un número entero</li>                       
                       <li id="compresor_num" style="display:none;">El campo Compresor debe ser un número entero</li>
                       <li id="numero_banos_num" style="display:none;">El campo Baños debe ser un número entero</li>
                       <li id="puestos_estacionamiento_num" style="display:none;">El campo Puestos de Estacionamiento debe ser un número entero</li>
                       <li id="puestos_estacionamiento_disc_num" style="display:none;">El campo Estacionamiento (Discapacitados) debe ser un número entero</li>
                       <li id="extintores_num" style="display:none;">El campo Extintores debe ser un número entero</li>
                       <li id="surtidor_aire_num" style="display:none;">El campo Surtidor de Aire debe ser un número entero</li>
                       <li id="surtidor_agua_num" style="display:none;">El campo Surtidor de Agua debe ser un número entero</li>
                    </div>                    
                </ul>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <label for="superficie_total_predio">Superficie Total de Predio:</label>
                    <input type="text" class="form-control" name="superficie_total_predio" id="superficie_total_predio" placeholder="En metros cuadrados" value="{{ old('superficie_total_predio') }}">
                </div>
                <div class="col-sm-3">
                    <label for="superficie_construccion">Superficie de Construcción:</label>
                    <input type="text" class="form-control" name="superficie_construccion" id="superficie_construccion" placeholder="En metros cuadrados" value="{{ old('superficie_construccion') }}">
                </div>
                <div class="col-sm-2">
                    <label for="numero_pisos">Pisos:</label>
                    <input type="text" class="form-control" name="numero_pisos" id="numero_pisos" placeholder="Número de Pisos" value="{{ old('numero_pisos') }}">
                </div>
                <div class="col-sm-2">
                    <label for="escaleras">Escaleras:</label>
                    <input type="text" class="form-control" name="escaleras" id="escaleras" placeholder="Cantidad" value="{{ old('escaleras') }}">
                </div>
                <div class="col-sm-2">
                    <label for="bodega">Bodegas:</label>
                    <input type="text" class="form-control" name="bodega" id="bodega" placeholder="Cantidad" value="{{ old('bodega') }}">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2">
                    <label for="hidroneumaticos">Hidroneumáticos:</label>
                    <input type="text" class="form-control" name="hidroneumaticos" id="hidroneumaticos" placeholder="Cantidad" value="{{ old('hidroneumaticos') }}">
                </div>
                
                <div class="col-sm-2">
                    <label for="cuarto_electrico">Cuarto Eléctrico:</label>
                    <select class="form-control" name="cuarto_electrico" id="cuarto_electrico">
                        <option value="true">Si</option>
                        <option value="false">No</option>                    
                    </select>                    
                </div>
                <div class="col-sm-2">
                    <label for="cuarto_sucio">Cuarto Sucio:</label>
                    <select class="form-control" name="cuarto_sucio" id="cuarto_sucio">
                        <option value="true">Si</option>
                        <option value="false">No</option>                    
                    </select>
                </div>            
                <div class="col-sm-3">
                    <label for="cuarto_maquinas">Cuarto de Máquinas:</label>
                    <select class="form-control" name="cuarto_maquinas" id="cuarto_maquinas">
                        <option value="true">Si</option>
                        <option value="false">No</option>                    
                    </select>
                </div>
                <div class="col-sm-3">
                    <label for="planta_electrica">Planta Eléctrica:</label>
                    <input type="text" class="form-control" name="planta_electrica" id="planta_electrica" placeholder="En Vatios" value="{{ old('planta_electrica') }}">
                </div>

            </div>
            <div class="row">
                <div class="col-sm-3">
                    <label for="compresor">Compresor:</label>
                    <input type="text" class="form-control" name="compresor" id="compresor" placeholder="En Caballos de Fuerza" value="{{ old('compresor') }}">
                </div>
                <div class="col-sm-2">
                    <label for="numero_banos">Baños:</label>
                    <input type="text" class="form-control" name="numero_banos" id="numero_banos" placeholder="Cantidad" value="{{ old('numero_banos') }}">
                </div>
                <div class="col-sm-3">
                    <label for="puestos_estacionamiento">Puestos de Estacionamiento:</label>
                    <input type="text" class="form-control" name="puestos_estacionamiento" id="puestos_estacionamiento" placeholder="Cantidad" value="{{ old('puestos_estacionamiento') }}">
                </div>
                <div class="col-sm-4">
                    <label for="puestos_estacionamiento_disc">Estacionamiento (Discapacitados):</label>
                    <input type="text" class="form-control" name="puestos_estacionamiento_disc" id="puestos_estacionamiento_disc" placeholder="Cantidad" value="{{ old('puestos_estacionamiento_disc') }}">
                </div>

            </div>
            <div class="row">
                <div class="col-sm-3">
                    <label for="cisterna_aguas_blancas">Cisterna Aguas Blancas:</label>
                    <select class="form-control" name="cisterna_aguas_blancas" id="cisterna_aguas_blancas">
                        <option value="true">Si</option>
                        <option value="false">No</option>                    
                    </select>
                </div>
                <div class="col-sm-2">
                    <label for="extintores">Extintores:</label>
                    <input type="text" class="form-control" name="extintores" id="extintores" placeholder="Cantidad" value="{{ old('extintores') }}">
                </div>
                <div class="col-sm-3">
                    <label for="area_facturacion">Área de Facturación:</label>
                    <select class="form-control" name="area_facturacion" id="area_facturacion">
                        <option value="true">Si</option>
                        <option value="false">No</option>                    
                    </select>
                </div>
                <div class="col-sm-2">
                    <label for="surtidor_aire">Surtidor de Aire:</label>
                    <input type="text" class="form-control" name="surtidor_aire" id="surtidor_aire" placeholder="Cantidad" value="{{ old('surtidor_aire') }}">
                </div>
                <div class="col-sm-2">
                    <label for="surtidor_agua">Surtidor de Agua:</label>
                    <input type="text" class="form-control" name="surtidor_agua" id="surtidor_agua" placeholder="Cantidad" value="{{ old('surtidor_agua') }}">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-7">
                    <br>                    
                    <button type="button" class="btn btn-primary" onclick="ocultarmostrar('#form5','#form4')">Anterior</button>                    
                    <button type="submit" class="btn btn-primary">Guardar Estación</button>
                    <a href="{{route('estaciones.index')}}" class="btn btn-link">Regresar a la Lista de Estaciones</a>
                </div>                
            </div>
        </div>
        </form>
    </div>
</div>
@endsection
