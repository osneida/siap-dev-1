@extends('layouts.layout')

@section('title',"Editar Propietario")

@section('content')
<div class="card">
    <h4 class="card-header">
        Editar Propietario
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
        <form method="POST" action="{{ url("/propietarios/{$propietario->id}")}}">
        {{ method_field('PUT') }}
        {!! csrf_field() !!} <!-- para evitar ataques maliciosos en el metodo POST-->
            <div class="form-group">
                <label for="codigo">Código:</label>
                <input type="text" class="form-control" name="codigo" id="codigo" placeholder="ABCD1234"value="{{ old('codigo',$propietario->codigo) }}">
            </div>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Pedro"value="{{ old('nombre',$propietario->nombre) }}">
            </div>
            <div class="form-group">
                <label for="apellido_paterno">Apellido Paterno:</label>
                <input type="text" class="form-control" name="apellido_paterno" id="apellido_paterno" placeholder="Perez"value="{{ old('apellido_paterno',$propietario->apellido_paterno) }}">
            </div>
            <div class="form-group">
                <label for="apellido_materno">Apellido Materno:</label>
                <input type="text" class="form-control" name="apellido_materno" id="apellido_materno" placeholder="Rodríguez"value="{{ old('apellido_materno',$propietario->apellido_materno) }}">
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Pedro@example.com" value="{{ old('email',$propietario->email) }}">
            </div>
            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Av Ppal Montalban, Res Parque Dos, Apto 1C10, Caracas"value="{{ old('direccion',$propietario->direccion) }}">
            </div>
            <div class="form-group">
                <label for="telefono1">Teléfono Local 1:</label>
                <input type="text" class="form-control" name="telefono1" id="telefono1" placeholder="02124718934"value="{{ old('telefono1',$propietario->telefono1) }}">
            </div>
            <div class="form-group">
                <label for="telefono2">Teléfono Local 2:</label>
                <input type="text" class="form-control" name="telefono2" id="telefono2" placeholder="02123399479"value="{{ old('telefono2',$propietario->telefono2) }}">
            </div>
            <div class="form-group">
                <label for="celular1">Teléfono Celular 1:</label>
                <input type="text" class="form-control" name="celular1" id="celular1" placeholder="04166183989"value="{{ old('celular1',$propietario->celular1) }}">
            </div>
            <div class="form-group">
                <label for="celular2">Teléfono Celular 2:</label>
                <input type="text" class="form-control" name="celular2" id="celular2" placeholder="04127375282"value="{{ old('celular2',$propietario->celular2) }}">
            </div>
            <div class="form-group">
                <label for="estatus">Estatus:</label>
                <select class="form-control" name="estatus">
<?php
if($propietario->estatus)
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
            <button type="submit" class="btn btn-primary">Actualizar Propietario</button>
            <a href="{{route('propietarios.index')}}" class="btn btn-link">Regresar al listado de Propietarios Creados</a>
        </form>
    </div>
</div>
@endsection
