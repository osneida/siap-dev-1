@extends('layouts.layout')

@section('title',"Editar Usuario")

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
        <form method="POST" action="{{ url("/usuarios/{$usuarios->id}")}}">
        {{ method_field('PUT') }}
        {!! csrf_field() !!} <!-- para evitar ataques maliciosos en el metodo POST-->
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Nombre de usuario"value="{{ old('name',$usuarios->name) }}">
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Pedro@example.com" value="{{ old('email',$usuarios->email) }}">
            </div>
 
            <div class="form-group">
                <label for="estatus">Estatus:</label>
                <select class="form-control" name="estatus">
<?php
if($usuarios->estatus)
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
            <button type="submit" class="btn btn-primary">Actualizar Usuario</button>
            <a href="{{route('usuarios.index')}}" class="btn btn-link">Regresar al listado de Usuarios Creados</a>
        </form>
    </div>
</div>
@endsection
