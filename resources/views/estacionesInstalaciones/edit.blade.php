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
        <form method="POST" action="{{ url("/estacionesInstalaciones/{$estacion->id}")}}">
        {{ method_field('PUT') }}
        {!! csrf_field() !!} <!-- para evitar ataques maliciosos en el metodo POST-->
        <div class="container col-md-12 col-md-offset-0" id="form1" name="form1">
            <h4 class="card-header">Instalaciones:</h4>
            <div class="alert alert-danger" style="display:none;" id="msjs_error5">
                <h5>Por favor corrige los errores debajo:</h5>
                <ul>                    
                    <div class="alert alert-danger">
                       <li id="superficie_total_predio_error_num" style="display:none;">El campo Superficie Total de Predio debe ser un número entero</li>
                       <li id="superficie_construccion" style="display:none;">El campo Superficie de Construcción de Predio debe ser un número entero</li>
                       <li id="numero_pisos_num" style="display:none;">El campo Pisos debe ser un número entero</li>
                       <li id="escaleras_num" style="display:none;">El campo Escaleras debe ser un número entero</li>
                       <li id="bodega_num" style="display:none;">El campo Bodega debe ser un número entero</li>
                       <li id="hidroneumaticos_num" style="display:none;">El campo Hidroneumáticos debe ser un número entero</li>
                       <li id="planta_electrica_num" style="display:none;">El campo Planta Eléctrica debe ser un número entero</li>                       
                       <li id="compresor_num" style="display:none;">El campo Compresor debe ser un número entero</li>
                       <li id="numero_banos_num" style="display:none;">El campo Baños debe ser un número entero</li>
                       <li id="puestos_estacionamiento_num" style="display:none;">El campo Puestos de Estacionamiento debe ser un número entero</li>
                       <li id="puestos_estacionamiento_disc_num" style="display:none;">El campo Estacionamiento (Discapacitados) debe ser un número entero</li>
                       <li id="extintores_num" style="display:none;">El campo Extintores debe ser un número entero</li>
                       <li id="surtidor_aire_num" style="display:none;">El campo Surtidor de Aire debe ser un número entero</li>
                       <li id="surtidor_agua_num" style="display:none;">El campo Surtidor de Agua debe ser un número entero</li>
                    </div>                    
                </ul>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <label for="superficie_total_predio">Superficie Total de Predio:</label>
                    <input type="number" class="form-control" name="superficie_total_predio" id="superficie_total_predio" placeholder="En metros cuadrados" value="{{ old('superficie_total_predio',$estacion->superficie_total_predio) }}">
                </div>
                <div class="col-sm-3">
                    <label for="superficie_construccion">Superficie de Construcción:</label>
                    <input type="number" class="form-control" name="superficie_construccion" id="superficie_construccion" placeholder="En metros cuadrados" value="{{ old('superficie_construccion',$estacion->superficie_construccion) }}">
                </div>
                <div class="col-sm-2">
                    <label for="numero_pisos">Pisos:</label>
                    <input type="number" class="form-control" name="numero_pisos" id="numero_pisos" placeholder="Número de Pisos" value="{{ old('numero_pisos',$estacion->numero_pisos) }}">
                </div>
                <div class="col-sm-2">
                    <label for="escaleras">Escaleras:</label>
                    <input type="number" class="form-control" name="escaleras" id="escaleras" placeholder="Cantidad" value="{{ old('escaleras',$estacion->escaleras) }}">
                </div>
                <div class="col-sm-2">
                    <label for="bodega">Bodegas:</label>
                    <input type="number" class="form-control" name="bodega" id="bodega" placeholder="Cantidad" value="{{ old('bodega',$estacion->bodega) }}">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2">
                    <label for="hidroneumaticos">Hidroneumáticos:</label>
                    <input type="number" class="form-control" name="hidroneumaticos" id="hidroneumaticos" placeholder="Cantidad" value="{{ old('hidroneumaticos',$estacion->hidroneumaticos) }}">
                </div>
                
                <div class="col-sm-2">
                    <label for="cuarto_electrico">Cuarto Eléctrico:</label>
                    <select class="form-control" name="cuarto_electrico" id="cuarto_electrico">
                        @if($estacion->cuarto_electrico!='') {{ $bool=1 }} @else {{ $bool=0 }} @endif
                        <?php $opciones = [
                            true => 'Si',
                            false => 'No',
                        ];
                        ?>
                        @foreach($opciones as $clave => $valor)
                            <option value="{{$clave}}"  {{ $bool == $clave ? 'selected="selected"' : '' }}>{{$valor}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-2">
                    <label for="cuarto_sucio">Cuarto Sucio:</label>
                    <select class="form-control" name="cuarto_sucio" id="cuarto_sucio">
                        @if($estacion->cuarto_sucio!='') {{ $bool=1 }} @else {{ $bool=0 }} @endif
                        <?php $opciones = [
                            true => 'Si',
                            false => 'No',
                        ];
                        ?>
                        @foreach($opciones as $clave => $valor)
                            <option value="{{$clave}}"  {{ $bool == $clave ? 'selected="selected"' : '' }}>{{$valor}}</option>
                        @endforeach
                    </select>
                </div>            
                <div class="col-sm-3">
                    <label for="cuarto_maquinas">Cuarto de Máquinas:</label>
                    <select class="form-control" name="cuarto_maquinas" id="cuarto_maquinas">
                        @if($estacion->cuarto_maquinas!='') {{ $bool=1 }} @else {{ $bool=0 }} @endif
                        <?php $opciones = [
                            true => 'Si',
                            false => 'No',
                        ];
                        ?>
                        @foreach($opciones as $clave => $valor)
                            <option value="{{$clave}}"  {{ $bool == $clave ? 'selected="selected"' : '' }}>{{$valor}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-3">
                    <label for="planta_electrica">Planta Eléctrica:</label>
                    <input type="number" class="form-control" name="planta_electrica" id="planta_electrica" placeholder="En Vatios" value="{{ old('planta_electrica',$estacion->planta_electrica) }}">
                </div>

            </div>
            <div class="row">
                <div class="col-sm-3">
                    <label for="compresor">Compresor:</label>
                    <input type="number" class="form-control" name="compresor" id="compresor" placeholder="En Caballos de Fuerza" value="{{ old('compresor',$estacion->compresor) }}">
                </div>
                <div class="col-sm-2">
                    <label for="numero_banos">Baños:</label>
                    <input type="number" class="form-control" name="numero_banos" id="numero_banos" placeholder="Cantidad" value="{{ old('numero_banos',$estacion->numero_banos) }}">
                </div>
                <div class="col-sm-3">
                    <label for="puestos_estacionamiento">Puestos de Estacionamiento:</label>
                    <input type="number" class="form-control" name="puestos_estacionamiento" id="puestos_estacionamiento" placeholder="Cantidad" value="{{ old('puestos_estacionamiento',$estacion->puestos_estacionamiento) }}">
                </div>
                <div class="col-sm-4">
                    <label for="puestos_estacionamiento_disc">Estacionamiento (Discapacitados):</label>
                    <input type="number" class="form-control" name="puestos_estacionamiento_disc" id="puestos_estacionamiento_disc" placeholder="Cantidad" value="{{ old('puestos_estacionamiento_disc',$estacion->puestos_estacionamiento_disc) }}">
                </div>

            </div>
            <div class="row">
                <div class="col-sm-3">
                    <label for="cisterna_aguas_blancas">Cisterna Aguas Blancas:</label>
                    <select class="form-control" name="cisterna_aguas_blancas" id="cisterna_aguas_blancas">
                        @if($estacion->cisterna_aguas_blancas!='') {{ $bool=1 }} @else {{ $bool=0 }} @endif
                        <?php $opciones = [
                            true => 'Si',
                            false => 'No',
                        ];
                        ?>
                        @foreach($opciones as $clave => $valor)
                            <option value="{{$clave}}"  {{ $bool == $clave ? 'selected="selected"' : '' }}>{{$valor}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-2">
                    <label for="extintores">Extintores:</label>
                    <input type="number" class="form-control" name="extintores" id="extintores" placeholder="Cantidad" value="{{ old('extintores') }}">
                </div>
                <div class="col-sm-3">
                    <label for="area_facturacion">Área de Facturación:</label>
                    <select class="form-control" name="area_facturacion" id="area_facturacion">
                        @if($estacion->area_facturacion!='') {{ $bool=1 }} @else {{ $bool=0 }} @endif
                        <?php $opciones = [
                            true => 'Si',
                            false => 'No',
                        ];
                        ?>
                        @foreach($opciones as $clave => $valor)
                            <option value="{{$clave}}"  {{ $bool == $clave ? 'selected="selected"' : '' }}>{{$valor}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-2">
                    <label for="surtidor_aire">Surtidor de Aire:</label>
                    <input type="number" class="form-control" name="surtidor_aire" id="surtidor_aire" placeholder="Cantidad" value="{{ old('surtidor_aire',$estacion->surtidor_aire) }}">
                </div>
                <div class="col-sm-2">
                    <label for="surtidor_agua">Surtidor de Agua:</label>
                    <input type="number" class="form-control" name="surtidor_agua" id="surtidor_agua" placeholder="Cantidad" value="{{ old('surtidor_agua',$estacion->surtidor_agua) }}">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-7">
                    <br>                    
                    <button type="submit" class="btn btn-primary">Guardar Instalaciones</button>
                    <a href="{{route('estacionesInstalaciones.index')}}" class="btn btn-link">Regresar a la Lista de Estaciones</a>
                </div>                
            </div>              

        </div>
        </form>
    </div>
</div>
@endsection
