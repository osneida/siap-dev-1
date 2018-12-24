@extends('layouts.layout')

@section('title',"Editar Riesgo")

@section('content')
<div class="card">
    <h4 class="card-header">
        Editar Riesgo 
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
        <form method="POST" action="{{ url("/riesgos/{$riesgo->id}")}}">
        {{ method_field('PUT') }}
        {!! csrf_field() !!} <!-- para evitar ataques maliciosos en el metodo POST-->
            <div class="form-group">
                <label for="nombre_riesgo">Nombre Riesgo</label>
                <input type="text" class="form-control" name="nombre_riesgo" id="nombre_riesgo" placeholder=" Nombre del Riesgo">
            </div>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Riesgo</button>
            <a href="{{route('riesgos.index')}}" class="btn btn-link">Regresar al listado de Riesgos Creados</a>
        </form>
    </div>
</div>
@endsection