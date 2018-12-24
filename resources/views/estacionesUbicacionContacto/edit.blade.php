@extends('layouts.layout')

@section('title',"Editar Estación:")

@section('content')

<div class="card">
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
        <form method="POST" action="{{ url("/estacionesUbicacionContacto/{$estacion->id}")}}" enctype="multipart/form-data">
        {{ method_field('PUT') }}
        {!! csrf_field() !!} <!-- para evitar ataques maliciosos en el metodo POST-->
        <div class="container col-md-12 col-md-offset-0" id="form1" name="form1">
            <h4 class="card-header">Editar Ubicación y contacto:</h4>
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
                    <select class="form-control" id="estado_id" name="estado_id">
                        <option value="">--Seleccione--</option>
                         @foreach($estados as $estado)
                             <option value="{{$estado['id']}}"  {{ $id_estado == $estado['id'] ? 'selected="selected"' : '' }}>{{$estado->descripcion}}</option>
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
                    <input type="text" class="form-control" name="calle" id="calle" placeholder="Calle"value="{{ old('calle',$estacion->calle) }}">
                </div>
                <div class="col-sm-2">
                    <label for="colonia">Colonia:</label>
                    <input type="text" class="form-control" name="colonia" id="colonia" placeholder="Colonia"value="{{ old('colonia',$estacion->colonia) }}">
                </div>
                <div class="col-sm-2">
                    <label for="codigo_postal">Cód.Postal:</label>
                    <input type="text" class="form-control" name="codigo_postal" id="codigo_postal" placeholder="Código Postal" value="{{ old('codigo_postal',$estacion->codigo_postal) }}">
                </div>
                <div class="col-sm-4">
                    <label for="referencia1">Referencia Dirección 1:</label>
                    <input type="text" class="form-control" name="referencia1" id="referencia1" placeholder="Referencia Dirección 1" value="{{ old('referencia1',$estacion->referencia1) }}">
                </div>
            </div>            
            <div class="row">
                <div class="col-sm-4">
                    <label for="referencia2">Referencia Dirección 2:</label>
                    <input type="text" class="form-control" name="referencia2" id="referencia2" placeholder="Referencia Dirección 2" value="{{ old('referencia2',$estacion->referencia2) }}">
                </div>
                <div class="col-sm-2">
                    <label for="telefono1">Nro. Teléfono 1:</label>
                    <input type="text" class="form-control" name="telefono1" id="telefono1" placeholder="Nro. Teléfono 1" value="{{ old('telefono1',$estacion->telefono1) }}">
                </div>
                <div class="col-sm-2">
                    <label for="telefono2">Nro. Teléfono 2:</label>
                    <input type="text" class="form-control" name="telefono2" id="telefono2" placeholder="Nro. Teléfono 2" value="{{ old('telefono2',$estacion->telefono2) }}">
                </div>
                <div class="col-sm-2">
                    <label for="celular1">Nro. Celular 1:</label>
                     <input type="text" class="form-control" name="celular1" id="celular1" placeholder="Nro. Celular 1" value="{{ old('celular1',$estacion->celular1) }}">
                </div>
                <div class="col-sm-2">
                    <label for="celular2">Nro. Celular 2:</label>
                    <input type="text" class="form-control" name="celular2" id="celular2" placeholder="Nro. Celular 2" value="{{ old('celular2',$estacion->celular2) }}">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <label for="email_estacion">Correo Electrónico de la Estación:</label>
                    <input type="email" class="form-control" name="email_estacion" id="email_estacion" placeholder="nombre@dominio.com" value="{{ old('email_estacion',$estacion->email_estacion) }}">
                </div>
                <div class="col-sm-6">
                    <label for="sitioweb">Sitio Web de la Estación:</label>
                    <input type="text" class="form-control" name="sitioweb" id="sitioweb" placeholder="Sitio Web de la Estación" value="{{ old('sitioweb',$estacion->sitioweb) }}">
                </div>
            </div>       
            <div class="row">
                <div class="col-sm-5">
                    <br>                    
                    <button type="submit" class="btn btn-primary">Actualizar Ubicación y Contacto</button>                    
                    <a href="{{route('estacionesUbicacionContacto.index')}}" class="btn btn-link">Regresar a la Lista de Estaciones</a>
                </div>
            </div>              

        </div>
        </form>
    </div>
</div>
@endsection
