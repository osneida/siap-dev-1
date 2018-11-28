@extends('layouts.layout')

@section('title',"Crear Propietario")

@section('content')
<div class="card">
    <h4 class="card-header">
        Crear Propietario
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
        <form method="POST" action="{{ url('/propietarios')}}">
        {!! csrf_field() !!} <!-- para evitar ataques maliciosos en el metodo POST-->
            <div class="form-group">
                <label for="codigo">Código:</label>
                <input type="text" class="form-control" name="codigo" id="codigo" placeholder="codigo"value="{{ old('codigo') }}">
            </div>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombres"value="{{ old('nombre') }}">
            </div>
            <div class="form-group">
                <label for="apellido_paterno">Apellido Paterno:</label>
                <input type="text" class="form-control" name="apellido_paterno" id="apellido_paterno" placeholder="Apellido paterno"value="{{ old('apellido_paterno') }}">
            </div>
            <div class="form-group">
                <label for="apellido_materno">Apellido Materno:</label>
                <input type="text" class="form-control" name="apellido_materno" id="apellido_materno" placeholder="Apellido materno"value="{{ old('apellido_materno') }}">
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="nombre@dominio.com" value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" class="form-control" name="direccion" id="direccion" placeholder="dirección"value="{{ old('direccion') }}">
            </div>
            <div class="form-group">
                <label for="telefono1">Teléfono Local 1:</label>
                <input type="text" class="form-control" name="telefono1" id="telefono1" placeholder="teléfono 1"value="{{ old('telefono1') }}">
            </div>
            <div class="form-group">
                <label for="telefono2">Teléfono Local 2:</label>
                <input type="text" class="form-control" name="telefono2" id="telefono2" placeholder="teléfono 2"value="{{ old('telefono2') }}">
            </div>
            <div class="form-group">
                <label for="celular1">Teléfono Celular 1:</label>
                <input type="text" class="form-control" name="celular1" id="celular1" placeholder="Celular 1"value="{{ old('celular1') }}">
            </div>
            <div class="form-group">
                <label for="celular2">Teléfono Celular 2:</label>
                <input type="text" class="form-control" name="celular2" id="celular2" placeholder="Celular 2"value="{{ old('celular2') }}">
            </div>
            <div class="form-group">
                <label for="estatus">Estatus:</label>
                <select class="form-control" name="estatus">
                    <option selected="true" value="true">Activo</option>
                    <option value="false">Inactivo</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Propietario</button>
            <a href="{{route('propietarios.index')}}" class="btn btn-link">Regresar al listado de Textos Creados</a>
        </form>
    </div>
</div>
@endsection
