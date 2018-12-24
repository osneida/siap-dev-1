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
        <form method="POST" action="{{ url("/estacionesDatosTecnicos/{$estacion->id}")}}">
        {{ method_field('PUT') }}
        {!! csrf_field() !!} <!-- para evitar ataques maliciosos en el metodo POST-->
        <div class="container col-md-12 col-md-offset-0" id="form1" name="form1">
<h4 class="card-header">Datos Técnicos:</h4>
            <div class="alert alert-danger" style="display:none;" id="msjs_error4">
                <h5>Por favor corrige los errores debajo:</h5>
                <ul>                    
                    <div class="alert alert-danger">
                       <li id="nro_tanques_individuales_error_num" style="display:none;">El campo Tanques Individuales debe ser un número entero</li>                        
                       <li id="nro_tanques_compartidos_error_num" style="display:none;">El campo Tanques Compartidos debe ser un número entero</li>                                               
                       <li id="capacidad_tanques_error_num" style="display:none;">El campo Capacidad de Tanques debe ser un número entero</li>                                               
                       <li id="numero_islas_error_num" style="display:none;">El campo Islas debe ser un número entero</li>                                               
                       <li id="numero_despachadores_error_num" style="display:none;">El campo Despachadores debe ser un número entero</li>                                               
                       <li id="numero_empleados_error_num" style="display:none;">El campo Empleados debe ser un número entero</li>                                                                      
                       <li id="estatus_estacion_error_num" style="display:none;">El campo Estatus Estación debe ser un número entero</li>                                                                                             
                       <li id="responsable_obra_diseno_error_len" style="display:none;">El campo Responsable de la Obra en Diseño debe tener como máximo 64 caracteres</li>                        
                       <li id="numero_permiso_diseno_error_len" style="display:none;">El campo Nro. del Permiso para la Obra en Diseño debe tener como máximo 16 caracteres</li>                        
                       <li id="aditivo_gasolina1_error_len" style="display:none;">El campo Aditivo Gasolina 1 debe tener como máximo 32 caracteres</li>                        
                       <li id="aditivo_gasolina2_error_len" style="display:none;">El campo Aditivo Gasolina 2 debe tener como máximo 32 caracteres</li>                        
                       <li id="aditivo_diesel_error_len" style="display:none;">El campo Aditivo Diesel debe tener como máximo 32 caracteres</li>                                               
                       <li id="forma_recepcion_error_len" style="display:none;">El campo Forma Recepción debe tener como máximo 16 caracteres</li>                        
                       <li id="promedio_mensual_ventas_error_num" style="display:none;">El campo Promedio Mensual de Ventas en Litros debe ser un número entero</li>                                                                                             
                    </div>                    
                </ul>
            </div>
            <div class="row">
                <div class="col-sm-3">
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
                <div class="col-sm-3">
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
                <div class="col-sm-3">
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
                <div class="col-sm-1">
                    <label for="numero_islas">Islas:</label>
                    <select class="form-control" name="numero_islas" id="numero_islas">
                        @for($i=1;$i<=20;$i++)
                            <option value="{{$i}}"  {{ $estacion->numero_islas == $i ? 'selected="selected"' : '' }}>{{$i}}</option>
                        @endfor
                    </select>
                </div>
                <div class="col-sm-2">
                    <label for="numero_despachadores">Despachadores:</label>
                    <input type="number" class="form-control" name="numero_despachadores" id="numero_despachadores" placeholder="Cantidad" value="{{ old('numero_despachadores',$estacion->numero_despachadores) }}">
                </div>
                
            </div>

            <div class="row">
                <div class="col-sm-2">
                    <label for="numero_empleados">Empleados:</label>
                    <input type="number" class="form-control" name="numero_empleados" id="numero_empleados" placeholder="Cantidad" value="{{ old('numero_empleados',$estacion->numero_empleados) }}">
                </div>            
                <div class="col-sm-4">
                    <label for="fecha_inicio_operacion">Fecha de Inicio de la Operación:</label>
                    <input type="date" class="form-control" name="fecha_inicio_operacion" id="fecha_inicio_operacion" placeholder="Fecha de Inicio de la Operación" value="{{ old('fecha_inicio_operacion',$estacion->fecha_inicio_operacion) }}">
                </div>
                <div class="col-sm-2">
                    <label for="estatus_estacion">Estatus Estación:</label>
                    <input type="number" class="form-control" name="estatus_estacion" id="estatus_estacion" placeholder="Estatus" value="{{ old('estatus_estacion',$estacion->estatus_estacion) }}">
                </div>
                <div class="col-sm-4">
                    <label for="responsable_obra_diseno">Responsable de la Obra en Diseño:</label>
                    <input type="text" class="form-control" name="responsable_obra_diseno" id="responsable_obra_diseno" placeholder="Director Responsable de la Obra en Diseño" value="{{ old('responsable_obra_diseno',$estacion->responsable_obra_diseno) }}">
                </div>

            </div>

            <div class="row">
                <div class="col-sm-4">
                    <label for="numero_permiso_diseno">Nro. del Permiso para la Obra en Diseño:</label>
                    <input type="text" class="form-control" name="numero_permiso_diseno" id="numero_permiso_diseno" placeholder="Número del Permiso para la Obra en Diseño" value="{{ old('numero_permiso_diseno',$estacion->numero_permiso_diseno) }}">
                </div>
                <div class="col-sm-2">
                    <label for="aditivo_gasolina1">Aditivo Gasolina 1:</label>
                    @if(!empty($tanques))
                        <input type="text" class="form-control" name="aditivo_gasolina1" id="aditivo_gasolina1" placeholder="Aditivo Gasolina 1" value="{{ old('aditivo_gasolina1',$tanques->aditivo_gasolina1) }}">                    
                    @else
                        <input type="text" class="form-control" name="aditivo_gasolina1" id="aditivo_gasolina1" placeholder="Aditivo Gasolina 1" value="{{ old('aditivo_gasolina1') }}">                                        
                    @endif                    
                </div>
                <div class="col-sm-2">
                    <label for="aditivo_gasolina2">Aditivo Gasolina 2:</label>
                    @if(!empty($tanques))
                        <input type="text" class="form-control" name="aditivo_gasolina2" id="aditivo_gasolina2" placeholder="Aditivo Gasolina 2" value="{{ old('aditivo_gasolina2',$tanques->aditivo_gasolina2) }}">
                    @else
                        <input type="text" class="form-control" name="aditivo_gasolina2" id="aditivo_gasolina2" placeholder="Aditivo Gasolina 2" value="{{ old('aditivo_gasolina2') }}">                                        
                    @endif                    
                </div>
                <div class="col-sm-2">
                    <label for="aditivo_diesel">Aditivo Diesel:</label>
                    @if(!empty($tanques))
                        <input type="text" class="form-control" name="aditivo_diesel" id="aditivo_diesel" placeholder="Aditivo Diesel" value="{{ old('aditivo_diesel',$tanques->aditivo_diesel) }}">
                    @else
                        <input type="text" class="form-control" name="aditivo_diesel" id="aditivo_diesel" placeholder="Aditivo Diesel" value="{{ old('aditivo_diesel') }}">                                        
                    @endif                    
                </div>
                <div class="col-sm-2">
                    <label for="forma_recepcion">Forma Recepción:</label>
                    <select class="form-control" name="forma_recepcion" id="forma_recepcion">
                        <?php $tipos_forma_recepcion = [
                        'carrotanque' => 'Carrotanque',
                        'ductos' => 'Ductos',
                        'buquetanque' => 'Buquetanque',
                        'autotanque' => 'Autotanques'
                        ];
                        ?>
                        @foreach($tipos_forma_recepcion as $clave => $valor)
                            <option value="{{$clave}}"  {{ $estacion->forma_recepcion == $clave ? 'selected="selected"' : '' }}>{{$valor}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <label for="promedio_mensual_ventas">Promedio Mensual de Ventas en Litros:</label>
                <select class="form-control" name="promedio_mensual_ventas" id="promedio_mensual_ventas">
                    @for($i=5000;$i<=30000;$i=$i+5000)
                        {{ $desc=$i }}
                        @if($i>=30000) {{$desc='30000 o mas'}} @endif
                        <option value="{{$i}}"  {{ $estacion->promedio_mensual_ventas == $i ? 'selected="selected"' : '' }}>{{$desc}}</option>
                    @endfor
                </select>
                </div>
                <div class="col-sm-4">
                    <label for="tienda_conveniencias">Tienda Conveniencias:</label>
                    <select class="form-control" name="tienda_conveniencias" id="tienda_conveniencias">
                        @if($estacion->tienda_conveniencias!='') {{ $bool=1 }} @else {{ $bool=0 }} @endif
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
                <div class="col-sm-4">
                    <label for="cobro_uso_banos">Cobro del Uso de Baños:</label>
                    <select class="form-control" name="cobro_uso_banos" id="cobro_uso_banos">
                        @if($estacion->cobro_uso_banos!='') {{ $bool=1 }} @else {{ $bool=0 }} @endif
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
            </div>   
            <div class="row">
                <div class="col-sm-6">
                    <br>                    
                    <button type="submit" class="btn btn-primary">Actualizar Datos Técnicos</button>                    
                    <a href="{{route('estacionesDatosTecnicos.index')}}" class="btn btn-link">Regresar a la Lista de Estaciones</a>
                </div>
            </div>              

        </div>
        </form>
    </div>
</div>
@endsection
