@extends('layouts.layout')

@section('title',"Crear Tipo de Riesgo")

@section('content')
<div class="card">
    <h4 class="card-header">
        Crear  tipo  de Riesgo
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
        <form method="POST" action="{{ url('/tiporiesgos')}}">
        {!! csrf_field() !!} <!-- para evitar ataques maliciosos en el metodo POST-->
            <div class="form-group">
                <label for="nombre_tipo_riesgo">Nombre riesgo:</label>
                <input type="text" class="form-control" name="nombre_tipo_riesgo" id="nombre_riesgo" placeholder="Nombre riesgo">
            </div>
            <button type="submit" class="btn btn-primary">Guardar Riesgo</button>
            <a href="{{route('tiporiesgos.index')}}" class="btn btn-link">Regresar al listado de riesgos Creados</a>
        </form>
    </div>
</div>
@endsection
