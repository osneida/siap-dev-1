@extends('layouts.layout')

@section('title',"Editar Agente de riesgo")

@section('content')
<div class="card">
    <h4 class="card-header">
        Editar Agente de riesgo 
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
        <form method="POST" action="{{ url("/agentes/{$agente->id}")}}">
        {{ method_field('PUT') }}
        {!! csrf_field() !!} <!-- para evitar ataques maliciosos en el metodo POST-->
            <div class="form-group">
                <label for="descripcion_agente_de_riesgo">Nombre Efecto probable sobre la salud</label>
                <input type="text" class="form-control" name="descripcion_agente_de_riesgo" id="descripcion_agente_de_riesgo" placeholder=" Nombre del Agente de riesgo">
            </div>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Agente de riesgo</button>
            <a href="{{route('agentes.index')}}" class="btn btn-link">Regresar al listado de Agentes de riesgo Creados</a>
        </form>
    </div>
</div>
@endsection