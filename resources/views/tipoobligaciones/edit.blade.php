@extends('layouts.layout')

@section('title',"Editar Texto")

@section('content')
<div class="card">
    <h4 class="card-header">
        Editar Texto
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
        <form method="POST" action="{{ url("/tipoobligaciones/{$tipoobligacion->id}")}}">
        {{ method_field('PUT') }}        
        {!! csrf_field() !!} <!-- para evitar ataques maliciosos en el metodo POST-->   
            <div class="form-group">
                <label for="codigo">Código:</label>
                <input type="text" class="form-control" name="codigo" id="codigo" placeholder="codigo"value="{{ old('user',$tipoobligacion->codigo) }}">
            </div>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombres"value="{{ old('user',$tipoobligacion->nombre) }}">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Descripción"value="{{ old('user',$tipoobligacion->descripcion) }}">
            </div>
            <div class="form-group">
                <label for="estatus">Estatus:</label>
                <select class="form-control" name="estatus">
                    <option selected="true" value="true">Activo</option>
                    <option value="false">Inactivo</option>
                </select>
            </div>    
            <button type="submit" class="btn btn-primary">Actualizar Texto</button>                    
            <a href="{{route('tipoobligaciones.index')}}" class="btn btn-link">Regresar al listado de Tipos de Obligaciones Creados</a>
        </form>        
    </div>
</div>
@endsection