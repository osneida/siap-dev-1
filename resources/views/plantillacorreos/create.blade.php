@extends('layouts.layout')

@section('title',"Crear Texto")

@section('content')
<div class="card">
    <h4 class="card-header">
        Crear Texto
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
        <form method="POST" action="{{ url('/plantillacorreos')}}">
        {!! csrf_field() !!} <!-- para evitar ataques maliciosos en el metodo POST-->
            <div class="form-group">
                <label for="memo">Texto:</label>
                <textarea class="form-control" name="memo" id="memo">{{ old('memo') }}</textarea>
            </div>   
            <div class="form-group">
                <label for="user">Usuario que creará y/o actualizará el Texto:</label>
                <input type="text" class="form-control" name="user" id="user" length="30" value="jvergara" >
            </div>        
            <button type="submit" class="btn btn-primary">Guardar Texto</button>                    
            <a href="{{route('plantillacorreos.index')}}" class="btn btn-link">Regresar al listado de Textos Creados</a>
        </form>
    </div>
</div>
@endsection