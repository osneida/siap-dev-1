@extends('layouts.layout')

@section('title',"Editar Estación:")

@section('content')

<div class="card">
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
        <form method="POST" action="{{ url("/estacionesTanques/{$estacion->id}")}}">
        {{ method_field('PUT') }}
        {!! csrf_field() !!} <!-- para evitar ataques maliciosos en el metodo POST-->
        <div class="container col-md-12 col-md-offset-0" id="form1" name="form1">
            <h4 class="card-header">Tanques:</h4>
            <div class="row">
                <div class="col-sm-4">
                    <label for="nro_tanques_individuales">Tanques Individuales:</label>
                    <select class="form-control" name="nro_tanques_individuales" id="nro_tanques_individuales">
                    @if(!empty($tanques))
                        @for($i=1;$i<=10;$i++)
                            <option value="{{$i}}"  {{ $tanques->nro_tanques_individuales == $i ? 'selected="selected"' : '' }}>{{$i}}</option>
                        @endfor
                    @else    
                        @for($i=1;$i<=10;$i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    @endif
                    </select>
                </div>
                <div class="col-sm-4">
                    <label for="nro_tanques_compartidos">Tanques Compartidos:</label>
                    <select class="form-control" name="nro_tanques_compartidos" id="nro_tanques_compartidos">
                    @if(!empty($tanques))
                        @for($i=1;$i<=10;$i++)
                            <option value="{{$i}}"  {{ $tanques->nro_tanques_compartidos == $i ? 'selected="selected"' : '' }}>{{$i}}</option>
                        @endfor
                    @else    
                        @for($i=1;$i<=10;$i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    @endif
                    </select>
                </div>
                <div class="col-sm-4">
                    <label for="capacidad_tanques">Capacidad de Tanques:</label>
                    <select class="form-control" name="capacidad_tanques" id="capacidad_tanques">
                    @if(!empty($tanques))
                        @for($i=10000;$i<=100000;$i=$i+10000)
                            {{ $desc=$i }}
                            @if($i>=100000) {{$desc='100000 o mas'}} @endif
                            <option value="{{$i}}"  {{ $tanques->capacidad_tanques == $i ? 'selected="selected"' : '' }}>{{$desc}}</option>
                        @endfor
                    @else
                        @for($i=10000;$i<=100000;$i=$i+10000)
                            {{ $desc=$i }}
                            @if($i>=100000) {{$desc='100000 o mas'}} @endif
                            <option value="{{ $i }}">{{ $desc }}</option>
                        @endfor
                    @endif                        
                    </select>

                </div>   
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <label for="aditivo_gasolina1">Aditivo Gasolina 1:</label>
                    @if(!empty($tanques))
                        <input type="text" class="form-control" name="aditivo_gasolina1" id="aditivo_gasolina1" placeholder="Aditivo Gasolina 1" value="{{ old('aditivo_gasolina1',$tanques->aditivo_gasolina1) }}">                    
                    @else
                        <input type="text" class="form-control" name="aditivo_gasolina1" id="aditivo_gasolina1" placeholder="Aditivo Gasolina 1" value="{{ old('aditivo_gasolina1') }}">                                        
                    @endif                    
                </div>
                <div class="col-sm-4">
                    <label for="aditivo_gasolina2">Aditivo Gasolina 2:</label>
                    @if(!empty($tanques))
                        <input type="text" class="form-control" name="aditivo_gasolina2" id="aditivo_gasolina2" placeholder="Aditivo Gasolina 2" value="{{ old('aditivo_gasolina2',$tanques->aditivo_gasolina2) }}">
                    @else
                        <input type="text" class="form-control" name="aditivo_gasolina2" id="aditivo_gasolina2" placeholder="Aditivo Gasolina 2" value="{{ old('aditivo_gasolina2') }}">                                        
                    @endif                    
                </div>
                <div class="col-sm-4">
                    <label for="aditivo_diesel">Aditivo Diesel:</label>
                    @if(!empty($tanques))
                        <input type="text" class="form-control" name="aditivo_diesel" id="aditivo_diesel" placeholder="Aditivo Diesel" value="{{ old('aditivo_diesel',$tanques->aditivo_diesel) }}">
                    @else
                        <input type="text" class="form-control" name="aditivo_diesel" id="aditivo_diesel" placeholder="Aditivo Diesel" value="{{ old('aditivo_diesel') }}">                                        
                    @endif                    
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <br>                    
                    <button type="submit" class="btn btn-primary">Actualizar Tanques</button>                    
                    <a href="{{route('estacionesTanques.index')}}" class="btn btn-link">Regresar a la Lista de Estaciones</a>
                </div>
            </div>              

        </div>
        </form>
    </div>
</div>
@endsection
