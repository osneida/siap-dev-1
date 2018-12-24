@extends('layouts.layout')

@section('title',"Crear Política:")

@section('content')
<div class="card">
    <h2 class="card-header">Crear Política:</h2>
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
        <form method="POST" action="{{ url('/politicas')}}">
        {!! csrf_field() !!} <!-- para evitar ataques maliciosos en el metodo POST-->
        @include('layouts.header')

        <div class="container col-md-10 col-md-offset-1">

           <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Descripción o Nombre de la Política</h3>
                  </div>
                  <div class="panel-body">  

                    <div class="row">
                        <div class="col-sm-12">

                            <textarea class="form-control" rows="3" id="descripcion"  name="descripcion" placeholder="Descripción o Nombre de la Política" value="{{ old('descripcion') }}"></textarea>
                           
                        </div>
                    </div>
            </div></div>        

           <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">1. Objetivo</h3>
                  </div>
                  <div class="panel-body">  

                    <div class="row">
                        <div class="col-sm-12">

                            <textarea class="form-control" rows="5" id="objetivo"  name="objetivo" placeholder="Objetivo" value="{{ old('objetivo') }}"></textarea>
                           
                        </div>
                    </div>
            </div></div>


             <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">2. Alcance</h3>
                  </div>
                  <div class="panel-body">  
                        <div class="row">
                            <div class="col-sm-12">

                                <textarea class="form-control" rows="5" id="alcance" name="alcance" placeholder="alcance" value="{{ old('alcance') }}"></textarea>
                               
                            </div>
                        </div>
                </div>
            </div>
            <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title"> 3. Definiciones</h3>
                  </div>
                  <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <textarea class="form-control" rows="2" id="definicion" name="definicion" placeholder="Definición General" value="{{ old('definicion') }}"></textarea>
                            </div>
                        </div> 

                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Política</label>
                                <textarea class="form-control" rows="2"  name="definicion_politica" id="definicion_politica" placeholder="Definición de Política" value="{{ old('definicion_politica') }}"></textarea>
                            </div>
                        </div>  

                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Misión</label>
                                <textarea class="form-control" rows="2" name="definicion_mision" id="definicion_mision" placeholder="Definición de Misión" value="{{ old('definicion_mision') }}"></textarea>
                            </div>
                        </div>    

                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Visión</label>
                                <textarea class="form-control" rows="2" id="definicion_vision" name="definicion_vision" placeholder="Definición de Visión" value="{{ old('definicion_vision') }}"></textarea>
                            </div>
                        </div>   

                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Obejetivo</label>
                                <textarea class="form-control" rows="2" id="definicion_objetivo" name="definicion_objetivo" placeholder="Definición de Objetivo" value="{{ old('definicion_objetivo') }}"></textarea>
                            </div>
                        </div> 

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-11">
                                    <label for="alcance">Nota</label>
                                    <textarea class="form-control" rows="2" id="nota_objetivo" name="nota_objetivo"  placeholder="Nota sobre el Objetivo" value="{{ old('nota_objetivo') }}"></textarea>
                                 </div>    
                            </div>
                        </div> 

                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Partes Interesadas</label>
                                <textarea class="form-control" rows="2" id="definicion_pt_interesada" name="definicion_pt_interesada" placeholder="Definición de Partes interesadas" value="{{ old('definicion_pt_interesada') }}"></textarea>
                            </div>
                        </div> 

                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Compromiso</label>
                                <textarea class="form-control" rows="2" id="definicion_compromiso" name="definicion_compromiso" placeholder="Definición de Compromiso" value="{{ old('definicion_compromiso') }}"></textarea>
                            </div>
                        </div> 

                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Proceso</label>
                                <textarea class="form-control" rows="2" id="definicion_proceso" name="definicion_proceso" placeholder="Definición de Proceso" value="{{ old('definicion_proceso') }}"></textarea>
                            </div>
                        </div> 
 
                         <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Proveedor</label>
                                <textarea class="form-control" rows="2" id="definicion_proveedor" name="definicion_proveedor" placeholder="Definición de Proveedor" value="{{ old('definicion_proveedor') }}"></textarea>
                            </div>
                        </div>                        

                         <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Proveedor Externo</label>
                                <textarea class="form-control" rows="2" id="definicion_proveedor_ext" name="definicion_proveedor_ext" placeholder="Definición de Proveedor Externo" value="{{ old('definicion_proveedor_ext') }}"></textarea>
                            </div>
                        </div>  

                         <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Contratista </label>
                                <textarea class="form-control" rows="2" id="definicion_contratista" name="definicion_contratista" placeholder="Definición de Contratista " value="{{ old('definicion_contratista') }}"></textarea>
                            </div>
                        </div>  

                         <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Subcontratista</label>
                                <textarea class="form-control" rows="2" id="subcontratista" name="subcontratista" placeholder="Definición de Subcontratista" value="{{ old('subcontratista') }}"></textarea>
                            </div>
                        </div>   

                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Prestador de Servicio</label>
                                <textarea class="form-control" rows="2" id="prestador_servicio" name="prestador_servicio" placeholder="Definición Prestador de Servicio" value="{{ old('prestador_servicio') }}"></textarea>
                            </div>
                        </div>                                                
                  </div>
            </div>
      
            <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">4. Responsabilidades</h3>
                  </div>
                  <div class="panel-body">  
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Alta Dirección</label>
                                <textarea class="form-control" rows="2" id="responsabilidad_ad" name="responsabilidad_ad" placeholder="Responsabilidad de la Alta Dirección" value="{{ old('responsabilidad_ad') }}"></textarea>
                            </div>
                        </div>   

                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Gerente</label>
                                <textarea class="form-control" rows="2" id="responsabilidad_g" name="responsabilidad_g" placeholder="Responsabilidad del Gerente" value="{{ old('responsabilidad_g') }}"></textarea>
                            </div>
                        </div>  

                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Jefe de Piso </label>
                                <textarea class="form-control" rows="2" id="responsabilidad_jp" name="responsabilidad_jp" placeholder="Responsabilidad del Jefe de Piso" value="{{ old('responsabilidad_jp') }}"></textarea>
                            </div>
                        </div>  
                  </div> 
            </div>  


             <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">5. Desarrollo</h3>
                  </div>

                  <div class="panel-body"> 

                        <div class="row">
                            <div class="col-sm-12">
                            <h2 class="panel-title">5.1 Generalidades</h2>
                                <textarea class="form-control" rows="5" id="generalidad" name="generalidad" placeholder="Generalidad" value="{{ old('generalidad') }}"></textarea>
                               
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                            <h2 class="panel-title">5.2 Revisión y análisis de la información</h2>
                                <textarea class="form-control" rows="5" id="revision_analisis" name="revision_analisis" placeholder="Revisión y análisis de la información" value="{{ old('revision_analisis') }}"></textarea>
                               
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-12">
                            <h2 class="panel-title">5.3 Elaboración y redacción de la Política del Sistema Integral de Administración en Petrolíferos. </h2>
                                <textarea class="form-control" rows="5" id="elaboracion_politica" name="elaboracion_politica" placeholder="Elaboración y redacción de la Política del Sistema Integral de Administración en Petrolíferos. " value="{{ old('elaboracion_politica') }}"></textarea>
                               
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                            <h2 class="panel-title">5.4 Aprobación de la Política </h2>
                                <textarea class="form-control" rows="5" id="aprobacion" name="aprobacion" placeholder="Aprobación de la Política" value="{{ old('aprobacion') }}"></textarea>
                               
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                            <h2 class="panel-title">5.5 Comunicación y distribución de la Política del Sistema Integral de Administración en Petrolíferos </h2>
                                <textarea class="form-control" rows="5" id="comunicacion_dist" name="comunicacion_dist" placeholder="Comunicación y distribución de la Política del Sistema Integral de Administración en Petrolíferos  " value="{{ old('comunicacion_dist') }}"></textarea>
                               
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                            <h2 class="panel-title">5.6 Revisión de la Política del Sistema Integral de Administración en Petrolíferos </h2>
                                <textarea class="form-control" rows="5" id="revision" name="revision" placeholder="Revisión de la Política del Sistema Integral de Administración en Petrolíferos" value="{{ old('revision') }}"></textarea>
                               
                            </div>
                        </div>


                </div>
            </div>

           <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">6. Registros</h3>
                  </div>
                  <div class="panel-body">  

                    <div class="row">
                        <div class="col-sm-12">

                            <textarea class="form-control" rows="5" id="registro" name="registro" placeholder="Registro" value="{{ old('registro') }}"></textarea>
                           
                        </div>
                    </div>
                </div>
            </div>

           <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">7. Referencias Internas</h3>
                  </div>
                  <div class="panel-body">  

                    <div class="row">
                        <div class="col-sm-12">

                            <textarea class="form-control" rows="5" id="referencia_interna" name="referencia_interna" placeholder="Referencia interna" value="{{ old('referencia_interna') }}"></textarea>
                           
                        </div>
                    </div>
                </div>
            </div>

           <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">8. Referencias Externas</h3>
                  </div>
                  <div class="panel-body">  

                    <div class="row">
                        <div class="col-sm-12">

                            <textarea class="form-control" rows="5" id="referencia_extena" name="referencia_extena" placeholder="Referencia Extena" value="{{ old('referencia_extena') }}"></textarea>
                           
                        </div>
                    </div>
                </div>
            </div>

    
        <div class="container col-md-10 col-md-offset-1">

            <br>
            
            <button type="submit" class="btn btn-primary">Guardar Política</button>
            <a href="{{route('politicas.index')}}" class="btn btn-link">Regresar al listado de Políticas</a>
        </div>
        </form>
    </div>
</div>
@endsection
