@extends('layouts.layout')

@section('title',"Crear Usuario")

@section('content')
<div class="card">
    <h4 class="card-header">
        Crear Usuario
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
        <form method="POST" action="{{ url('/usuarios') }}">
        {!! csrf_field() !!} <!-- para evitar ataques maliciosos en el metodo POST-->
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Nombre de Usuario" value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="nombre@dominio.com" value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <label for="estatus">Estatus:</label>
                <select class="form-control" name="estatus">
                    <option selected="true" value="true">Activo</option>
                    <option value="false">Inactivo</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Usuario</button>
            <a href="{{route('usuarios.index')}}" class="btn btn-link">Regresar al listado de Usuarios Creados</a>
        </form>
    </div>
</div>
@endsection
