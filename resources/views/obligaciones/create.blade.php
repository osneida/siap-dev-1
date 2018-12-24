@extends('layouts.layout')

@section('title',"Crear Obligación")

@section('content')
<div class="card">
    <h4 class="card-header">
        Crear Obligación
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
        <form method="POST" action="{{ url('/obligaciones')}}">
        {!! csrf_field() !!} <!-- para evitar ataques maliciosos en el metodo POST-->
            <div class="form-group">
                <label for="codigo">Nombre:</label>
                <input type="text" class="form-control" name="codigo" id="codigo" placeholder="codigo"value="{{ old('codigo') }}">
            </div>
            <div class="form-group">
                <label for="title">Nombre:</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Nombre o Titulo"value="{{ old('title') }}">
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <label for="tipoobligacion1">Depende de:</label>
                <!-- <input type="text" class="form-control" name="tipoobligacion1"     id="tipoobligacion1" placeholder="Tipo de Obligación"value="{{ old('tipoobligacion1') }}">-->
                <!--   <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default dropdown-toggle"   data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="true">
                    Seleccione una opción
                    </button>
                    <ul class="dropdown-menu">
                    @foreach($tipoobligaciones as $tipoobligacion)
                    <li><a href="{{$tipoobligacion->id}}">{{$tipoobligacion->nombre}}</a></li>
                    @endforeach
                    </ul>
                    </div>-->
                    <select class="form-control" style="width:100%;">
                        <option>Ninguna</option>
                        @foreach($obligaciones as $obligacion)
                        <option>{{$obligacion->title}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-sm-6">
                    <label for="estatus">Estatus:</label>
                    <select class="form-control" name="estatus">
                        <option selected="true" value="true">Activo</option>
                        <option value="false">Inactivo</option>
                    </select>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-6">
                    <label for="tipoobligacion1">Tipo de Obligación:</label>
                <!-- <input type="text" class="form-control" name="tipoobligacion1"     id="tipoobligacion1" placeholder="Tipo de Obligación"value="{{ old('tipoobligacion1') }}">-->
                <!--   <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default dropdown-toggle"   data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="true">
                    Seleccione una opción
                    </button>
                    <ul class="dropdown-menu">
                    @foreach($tipoobligaciones as $tipoobligacion)
                    <li><a href="{{$tipoobligacion->id}}">{{$tipoobligacion->nombre}}</a></li>
                    @endforeach
                    </ul>
                    </div>-->
                    <select class="form-control" style="width:100%;">
                        <option>Seleccione una opción</option>
                        @foreach($tipoobligaciones as $tipoobligacion)
                        <option>{{$tipoobligacion->nombre}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-sm-6">
                    <label for="estatus">Estatus:</label>
                    <select class="form-control" name="estatus">
                        <option selected="true" value="true">Activo</option>
                        <option value="false">Inactivo</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Obligacion</button>
            <a href="{{route('obligaciones.index')}}" class="btn btn-link">Regresar al listado de Obligaciones Creadas</a>
        </form>
    </div>
</div>
@endsection
