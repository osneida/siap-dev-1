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
        <form method="POST" action="{{ url("/estacionesConstitucionRepLegal/{$estacion->id}")}}" enctype="multipart/form-data">
        {{ method_field('PUT') }}
        {!! csrf_field() !!} <!-- para evitar ataques maliciosos en el metodo POST-->
        <div class="container col-md-12 col-md-offset-0" id="form1" name="form1">
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
                    <input type="text" class="form-control" name="nro_instrumento" id="nro_instrumento" placeholder="Nro. Instrumento" value="{{ old('nro_instrumento',$estacion->nro_instrumento) }}">
                </div>
                <div class="col-sm-3">
                    <label for="fecha_constitucion">Fecha Constitución:</label>
                    <input type="date" class="form-control datepicker" name="fecha_constitucion" id="fecha_constitucion" placeholder="Fecha Constitución" value="{{ old('fecha_constitucion',$estacion->fecha_constitucion) }}">
                </div>
                <div class="col-sm-3">
                    <label for="notario_constitucion">Notario Constitución:</label>
                    <input type="text" class="form-control" name="notario_constitucion" id="notario_constitucion" placeholder="Nombre y Apellido" value="{{ old('notario_constitucion',$estacion->notario_constitucion) }}">
                </div>
                <div class="col-sm-3">
                    <label for="ciudad_constitucion">Ciudad:</label>
                    <input type="text" class="form-control" name="ciudad_constitucion" id="ciudad_constitucion" placeholder="Ciudad Constitución" value="{{ old('ciudad_constitucion',$estacion->ciudad_constitucion) }}">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <label for="nombre_replegal">Representante Legal:</label>
                    <input type="text" class="form-control" name="nombre_replegal" id="nombre_replegal" placeholder="Nombre y Apellido" value="{{ old('nombre_replegal',$estacion->nombre_replegal) }}">
                </div>
                <div class="col-sm-3">
                    <label for="fecha_emision_replegal">Fecha de Emisión (Rep. Legal):</label>
                    <input type="date" class="form-control" name="fecha_emision_replegal" id="fecha_emision_replegal" placeholder="Fecha Emisión" value="{{ old('fecha_emision_replegal',$estacion->fecha_emision_replegal) }}">
                </div>
                <div class="col-sm-3">
                    <label for="nro_inst_replegal">Nro. Instrumento (Repr. Legal):</label>
                    <input type="text" class="form-control" name="nro_inst_replegal" id="nro_inst_replegal" placeholder="Nro. Instrumento (Repr. Legal)" value="{{ old('nro_inst_replegal',$estacion->nro_inst_replegal) }}">
                </div>
                <div class="col-sm-3">
                    <label for="fecha_replegal">Fecha Representación:</label>
                    <input type="date" class="form-control" name="fecha_replegal" id="fecha_replegal" placeholder="Fecha Representación" value="{{ old('fecha_replegal',$estacion->fecha_replegal) }}">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <label for="notario_replegal">Notario (Rep. Legal):</label>
                    <input type="text" class="form-control" name="notario_replegal" id="notario_replegal" placeholder="Nombre y Apellido" value="{{ old('notario_replegal',$estacion->notario_replegal) }}">
                </div>
                <div class="col-sm-6">
                    <label for="ciudad_replegal">Ciudad (Rep. Legal):</label>
                    <input type="text" class="form-control" name="ciudad_replegal" id="ciudad_replegal" placeholder="Ciudad" value="{{ old('ciudad_replegal',$estacion->ciudad_replegal) }}">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-7">
                    <br>                    
                    <button type="submit" class="btn btn-primary">Actualizar Constitución y Representación Legal</button>                    
                    <a href="{{route('estacionesConstitucionRepLegal.index')}}" class="btn btn-link">Regresar a la Lista de Estaciones</a>
                </div>
            </div>              

        </div>
        </form>
    </div>
</div>
@endsection
