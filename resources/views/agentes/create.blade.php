@extends('layouts.layout')

@section('title',"Crear  Tipo de Agente de riesgo")

@section('content')
<div class="card">
    <h4 class="card-header">
        Crear  Agente de riesgo
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
        <form method="POST" action="{{ url('/agentes')}}">
        {!! csrf_field() !!} <!-- para evitar ataques maliciosos en el metodo POST-->
            <div class="form-group">
                <label for="descripcion_agente_de_riesgo">Nombre de Agente de riesgo:</label>
                <input type="text" class="form-control" name="descripcion_agente_de_riesgo" id="descripcion_agente_de_riesgo" placeholder="Nombre Agente">
            </div>
            <button type="submit" class="btn btn-primary">Guardar Agente de riesgo</button>
            <a href="{{route('agentes.index')}}" class="btn btn-link">Regresar al listado de  Agentes de riesgo Creados</a>
        </form>
    </div>
</div>
@endsection