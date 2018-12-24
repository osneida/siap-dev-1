@extends('layouts.layout')

@section('title',"Crear Responsable")

@section('content')
<div class="card">
    <h4 class="card-header">
        Crear Responsable
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
        <form method="POST" action="{{ url('/responsables')}}">
        {!! csrf_field() !!} <!-- para evitar ataques maliciosos en el metodo POST-->
            <div class="form-group">
                <label for="codigo">Código:</label>
                <input type="text" class="form-control" name="codigo" id="codigo" placeholder="ABCD1234"value="{{ old('codigo') }}">
            </div>   
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Pedro"value="{{ old('nombre') }}">
            </div>
            <div class="form-group">
                <label for="apellido_paterno">Apellido Paterno:</label>
                <input type="text" class="form-control" name="apellido_paterno" id="apellido_paterno" placeholder="Perez"value="{{ old('apellido_paterno') }}">
            </div>
            <div class="form-group">
                <label for="apellido_materno">Apellido Materno:</label>
                <input type="text" class="form-control" name="apellido_materno" id="apellido_materno" placeholder="Rodríguez"value="{{ old('apellido_materno') }}">
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Pedro@example.com" value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <label for="estacion">Estación:</label>
                <input type="text" class="form-control" name="estacion" id="estacion" placeholder="Estación 1234"value="{{ old('estacion') }}">
            </div>        
            <div class="form-group">
                <label for="estatus">Estatus:</label>
                <select class="form-control" name="estatus">
                    <option selected="true" value="true">Activo</option>
                    <option value="false">Inactivo</option>                    
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Responsable</button>                    
            <a href="{{route('responsables.index')}}" class="btn btn-link">Regresar al listado de Responsables Creados</a>
        </form>
    </div>
</div>
@endsection
