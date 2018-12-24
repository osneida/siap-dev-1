@extends('layouts.layout')

@section('title',"Crear Medida de control")

@section('content')
<div class="card">
    <h4 class="card-header">
        Crear  Medida de control
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
        <form method="POST" action="{{ url('/medidas')}}">
        {!! csrf_field() !!} <!-- para evitar ataques maliciosos en el metodo POST-->
            <div class="form-group">
                <label for="descripcion_medidas_de_control_que_debe_cumplir_el_trabajador">Nombre del la Medida de control:</label>
                <input type="text" class="form-control" name="descripcion_medidas_de_control_que_debe_cumplir_el_trabajador" id="descripcion_medidas_de_control_que_debe_cumplir_el_trabajador" placeholder="Nombre de la medeida de control">
            </div>
            <button type="submit" class="btn btn-primary">Guardar Medida de control</button>
            <a href="{{route('medidas.index')}}" class="btn btn-link">Regresar al listado las Medidas de control</a>
            

        </form>
    </div>
</div>
@endsection