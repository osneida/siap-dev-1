@extends('layouts.layout')

@section('title',"Crear  Tipo de Efecto probable sobre la salud")

@section('content')
<div class="card">
    <h4 class="card-header">
        Crear  Tipo de Efecto probable sobre la salud
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
        <form method="POST" action="{{ url('/efectos')}}">
        {!! csrf_field() !!} <!-- para evitar ataques maliciosos en el metodo POST-->
            <div class="form-group">
                <label for="descripcion_efectos_probables_sobre_la_salud">Nombre de efecto probable sobre la salud:</label>
                <input type="text" class="form-control" name="descripcion_efectos_probables_sobre_la_salud" id="descripcion_efectos_probables_sobre_la_salud" placeholder="Nombre tipo efecto">
            </div>
            <button type="submit" class="btn btn-primary">Guardar Efecto</button>
            <a href="{{route('efectos.index')}}" class="btn btn-link">Regresar al listado de Efectos Creados</a>
        </form>
    </div>
</div>
@endsection