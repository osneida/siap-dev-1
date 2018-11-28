@extends('layouts.layout')

@section('title',"Editar Texto")

@section('content')
<div class="card">
    <h4 class="card-header">
        Editar Texto
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
        <form method="POST" action="{{ url("/Plantillacorreo/{$Plantillacorreo->id}")}}">
        {{ method_field('PUT') }}        
        {!! csrf_field() !!} <!-- para evitar ataques maliciosos en el metodo POST-->
            <div class="form-group">
                <label for="memo">Texto:</label>
                <textarea class="form-control" name="memo" id="memo">{{ old('memo',$Plantillacorreo->memo) }}</textarea>
            </div>        
            <div class="form-group">
                <label for="user">Usuario que creó y/o actualizó el Texto:</label>
                <input type="user" class="form-control" name="user" id="user" disabled="yes" length="30" value="{{ old('user',$Plantillacorreo->user) }}">
            </div>        
            <button type="submit" class="btn btn-primary">Actualizar Texto</button>                    
            <a href="{{route('plantillacorreos.index')}}" class="btn btn-link">Regresar al listado de Textos Creados</a>
        </form>        
    </div>
</div>
@endsection