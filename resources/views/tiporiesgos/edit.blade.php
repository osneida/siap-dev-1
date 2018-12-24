@extends('layouts.layout')

@section('title',"Editar Tipo Riesgo")

@section('content')
<div class="card">
    <h4 class="card-header">
        Editar Tipo de Riesgo 
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
        <form method="POST" action="{{ url("/tiporiesgos/{$tiporiesgo->id}")}}">
        {{ method_field('PUT') }}
        {!! csrf_field() !!} <!-- para evitar ataques maliciosos en el metodo POST-->
            <div class="form-group">
                <label for="nombre_tipo_riesgo">Nombre Tipo de Riesgo</label>
                <input type="text" class="form-control" name="nombre_tipo_riesgo" id="nombre_tipo_riesgo" placeholder="Nombre Tipo de Riesgo">
            </div>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Riesgo</button>
            <a href="{{route('tiporiesgos.index')}}" class="btn btn-link">Regresar al listado de Tipo de Riesgos Creados</a>
        </form>
    </div>
</div>
@endsection
