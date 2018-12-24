@extends('layouts.layout')

@section('title',"Editar Responsable")

@section('content')
<div class="card">
    <h4 class="card-header">
        Editar Responsable
    </h4>
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
        <form method="POST" action="{{ url("/responsables/{$responsable->id}")}}">
        {{ method_field('PUT') }}        
        {!! csrf_field() !!} <!-- para evitar ataques maliciosos en el metodo POST-->
            <div class="form-group">
                <label for="codigo">Código:</label>
                <input type="text" class="form-control" name="codigo" id="codigo" placeholder="ABCD1234"value="{{ old('codigo',$responsable->codigo) }}">
            </div>   
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Pedro"value="{{ old('nombre',$responsable->nombre) }}">
            </div>
            <div class="form-group">
                <label for="apellido_paterno">Apellido Paterno:</label>
                <input type="text" class="form-control" name="apellido_paterno" id="apellido_paterno" placeholder="Perez"value="{{ old('apellido_paterno',$responsable->apellido_paterno) }}">
            </div>
            <div class="form-group">
                <label for="apellido_materno">Apellido Materno:</label>
                <input type="text" class="form-control" name="apellido_materno" id="apellido_materno" placeholder="Rodríguez"value="{{ old('apellido_materno',$responsable->apellido_materno) }}">
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Pedro@example.com" value="{{ old('email',$responsable->email) }}">
            </div>
            <div class="form-group">
                <label for="estacion">Estación:</label>
                <input type="text" class="form-control" name="estacion" id="estacion" placeholder="Estación 1234"value="{{ old('estacion',$responsable->estacion) }}">
            </div>        
            <div class="form-group">
                <label for="estatus">Estatus:</label>
                <select class="form-control" name="estatus">
<?php
if($responsable->estatus) 
{
    $estatus_activo='selected';
    $estatus_inactivo='';
}
else
{
    $estatus_activo='';
    $estatus_inactivo='selected';
}    
?>        
                    <option {{ $estatus_activo }} value="true">Activo</option>
                    <option {{ $estatus_inactivo }} value="false">Inactivo</option>                    
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Responsable</button>                    
            <a href="{{route('responsables.index')}}" class="btn btn-link">Regresar al listado de Responsables Creados</a>
        </form>        
    </div>
</div>
@endsection