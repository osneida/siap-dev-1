@extends('layouts.layout')

@section('title',"Crear  Riesgo")

@section('content')
<div class="card">
    <h4 class="card-header">
        Crear  Riesgo
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
        <form method="POST" action="{{ url('/riesgos')}}">
        {!! csrf_field() !!} <!-- para evitar ataques maliciosos en el metodo POST-->
            <div class="form-group">
                <label for="nombre_riesgo">Nombre riesgo:</label>
                <input type="text" class="form-control" name="nombre_riesgo" id="nombre_riesgo" placeholder="Nombre del riesgo">
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label for="tiporiesgo">Tipo de riesgo:</label>
                    <select class="form-control" style="width:100%;">
                        <option>Seleccione una opción</option>
                        @foreach($tiporiesgos as $tiporiesgo)
                        <option>{{$tiporiesgo->nombre_tipo_riesgo}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Guardar Riesgo</button>
            <a href="{{route('riesgos.index')}}" class="btn btn-link">Regresar al listado de riesgos Creados</a>
        </form>
    </div>
</div>
@endsection
