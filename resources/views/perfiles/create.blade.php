
@extends('layouts.layout')

@section('title',"Crear Perfil")

@section('content')
<div class="card">
    <h4 class="card-header">
        Crear Perfil
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
        <form method="POST" action="{{ url('/perfiles')}}">
        {!! csrf_field() !!} <!-- para evitar ataques maliciosos en el metodo POST-->
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Nombre de Perfil" value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label for="codigo">Código:</label>
                <input type="text" class="form-control" name="codigo" id="codigo" placeholder="codigo"value="{{ old('codigo') }}">
            </div>           
            <div class="form-group">
                <label for="estatus">Estatus:</label>
                <select class="form-control" name="estatus">
                    <option selected="true" value="true">Activo</option>
                    <option value="false">Inactivo</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Perfil</button>
            <a href="{{route('perfiles.index')}}" class="btn btn-link">Regresar al listado de Textos Creados</a>
        </form>
    </div>
</div>
@endsection
