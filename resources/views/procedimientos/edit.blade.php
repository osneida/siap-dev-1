@extends('layouts.layout')

@section('title',"Modificar Procedimiento de Política:")

@section('content')
<div class="card">
    <h2 class="card-header">Modificar Procedimiento Política:</h2>
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
      
        

        <form method="POST" action="{{ url("/procedimientos/{$procedimiento->id}") }}">
         {{ method_field('PUT') }}


        {!! csrf_field() !!} <!-- para evitar ataques maliciosos en el metodo POST-->

        @include('layouts.procedimientos.header_e')

        <div class="container col-md-10 col-md-offset-1">

           <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Descripción o Nombre del Procedimiento</h3>
                  </div>
                  <div class="panel-body">  

                    <div class="row">
                        <div class="col-sm-12">

                            <textarea class="form-control" rows="3" id="descripcion"  name="descripcion" placeholder="Descripción o Nombre de la Política" >{{ $procedimiento->descripcion }}</textarea>

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

                            <textarea class="form-control" rows="5" id="objetivo"  name="objetivo" placeholder="Objetivo" >{{ old('objetivo',$procedimiento->objetivo) }}</textarea>
                           
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

                                <textarea class="form-control" rows="5" id="alcance" name="alcance" placeholder="alcance" >{{ old('alcance',$procedimiento->alcance) }}</textarea>
                               
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
                                <textarea class="form-control" rows="2" id="definicion" name="definicion" placeholder="Definición General" >{{ old('definicion',$procedimiento->definicion) }}</textarea>
                            </div>
                        </div> 

                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Política</label>
                                <textarea class="form-control" rows="2"  name="definicion_procedimiento" id="definicion_procedimiento" placeholder="Definición de Política" >{{ old('definicion_procedimiento',$procedimiento->definicion_procedimiento) }}</textarea>
                            </div>
                        </div>  

                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Misión</label>
                                <textarea class="form-control" rows="2" name="definicion_mision" id="definicion_mision" placeholder="Definición de Misión" >{{ old('definicion_mision',$procedimiento->definicion_mision) }}</textarea>
                            </div>
                        </div>    

                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Visión</label>
                                <textarea class="form-control" rows="2" id="definicion_vision" name="definicion_vision" placeholder="Definición de Visión">{{ old('definicion_vision',$procedimiento->definicion_vision) }}</textarea>
                            </div>
                        </div>   

                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Obejetivo</label>
                                <textarea class="form-control" rows="2" id="definicion_objetivo" name="definicion_objetivo" placeholder="Definición de Objetivo">{{ old('definicion_objetivo',$procedimiento->definicion_objetivo) }}</textarea>
                            </div>
                        </div> 

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-11">
                                    <label for="alcance">Nota</label>
                                    <textarea class="form-control" rows="2" id="nota_objetivo" name="nota_objetivo"  placeholder="Nota sobre el Objetivo" >{{ old('nota_objetivo',$procedimiento->nota_objetivo) }}</textarea>
                                 </div>    
                            </div>
                        </div> 

                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Partes Interesadas</label>
                                <textarea class="form-control" rows="2" id="definicion_pt_interesada" name="definicion_pt_interesada" placeholder="Definición de Partes interesadas" >{{ old('definicion_pt_interesada',$procedimiento->definicion_pt_interesada) }}</textarea>
                            </div>
                        </div> 

                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Compromiso</label>
                                <textarea class="form-control" rows="2" id="definicion_compromiso" name="definicion_compromiso" placeholder="Definición de Compromiso" >{{ old('definicion_compromiso',$procedimiento->definicion_compromiso) }}</textarea>
                            </div>
                        </div> 

                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Proceso</label>
                                <textarea class="form-control" rows="2" id="definicion_proceso" name="definicion_proceso" placeholder="Definición de Proceso"  >{{ old('definicion_proceso',$procedimiento->definicion_proceso) }}</textarea>
                            </div>
                        </div> 
 
                         <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Proveedor</label>
                                <textarea class="form-control" rows="2" id="definicion_proveedor" name="definicion_proveedor" placeholder="Definición de Proveedor" >{{ old('definicion_proveedor',$procedimiento->definicion_proveedor) }}</textarea>
                            </div>
                        </div>                        

                         <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Proveedor Externo</label>
                                <textarea class="form-control" rows="2" id="definicion_proveedor_ext" name="definicion_proveedor_ext" placeholder="Definición de Proveedor Externo" >{{ old('definicion_proveedor_ext',$procedimiento->definicion_proveedor_ext) }}</textarea>
                            </div>
                        </div>  

                         <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Contratista </label>
                                <textarea class="form-control" rows="2" id="definicion_contratista" name="definicion_contratista" placeholder="Definición de Contratista " >{{ old('definicion_contratista',$procedimiento->definicion_contratista) }}</textarea>
                            </div>
                        </div>  

                         <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Subcontratista</label>
                                <textarea class="form-control" rows="2" id="subcontratista" name="subcontratista" placeholder="Definición de Subcontratista">{{ old('subcontratista',$procedimiento->subcontratista) }}</textarea>
                            </div>
                        </div>   

                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Prestador de Servicio</label>
                                <textarea class="form-control" rows="2" id="prestador_servicio" name="prestador_servicio" placeholder="Definición Prestador de Servicio">{{ old('prestador_servicio',$procedimiento->prestador_servicio) }}</textarea>
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
                                <textarea class="form-control" rows="2" id="responsabilidad_ad" name="responsabilidad_ad" placeholder="Responsabilidad de la Alta Dirección">{{ old('responsabilidad_ad',$procedimiento->responsabilidad_ad) }}</textarea>
                            </div>
                        </div>   

                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Gerente</label>
                                <textarea class="form-control" rows="2" id="responsabilidad_g" name="responsabilidad_g" placeholder="Responsabilidad del Gerente" >{{ old('responsabilidad_g',$procedimiento->responsabilidad_g) }}</textarea>
                            </div>
                        </div>  

                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Jefe de Piso </label>
                                <textarea class="form-control" rows="2" id="responsabilidad_jp" name="responsabilidad_jp" placeholder="Responsabilidad del Jefe de Piso">{{ old('responsabilidad_jp',$procedimiento->responsabilidad_jp) }}</textarea>
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
                                <textarea class="form-control" rows="5" id="generalidad" name="generalidad" placeholder="Generalidad">{{ old('generalidad',$procedimiento->generalidad) }}</textarea>
                               
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                            <h2 class="panel-title">5.2 Revisión y análisis de la información</h2>
                                <textarea class="form-control" rows="5" id="revision_analisis" name="revision_analisis" placeholder="Revisión y análisis de la información" >{{ old('revision_analisis',$procedimiento->revision_analisis) }}</textarea>
                               
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-12">
                            <h2 class="panel-title">5.3 Elaboración y redacción de la Política del Sistema Integral de Administración en Petrolíferos. </h2>
                                <textarea class="form-control" rows="5" id="elaboracion_procedimiento" name="elaboracion_procedimiento" placeholder="Elaboración y redacción de la Política del Sistema Integral de Administración en Petrolíferos. ">{{ old('elaboracion_procedimiento',$procedimiento->elaboracion_procedimiento) }}</textarea>
                               
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                            <h2 class="panel-title">5.4 Aprobación de la Política </h2>
                                <textarea class="form-control" rows="5" id="aprobacion" name="aprobacion" placeholder="Aprobación de la Política" >{{ old('aprobacion',$procedimiento->aprobacion) }}</textarea>
                               
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                            <h2 class="panel-title">5.5 Comunicación y distribución de la Política del Sistema Integral de Administración en Petrolíferos </h2>
                                <textarea class="form-control" rows="5" id="comunicacion_dist" name="comunicacion_dist" placeholder="Comunicación y distribución de la Política del Sistema Integral de Administración en Petrolíferos  " >{{ old('comunicacion_dist',$procedimiento->comunicacion_dist) }}</textarea>
                               
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                            <h2 class="panel-title">5.6 Revisión de la Política del Sistema Integral de Administración en Petrolíferos </h2>
                                <textarea class="form-control" rows="5" id="revision" name="revision" placeholder="Revisión de la Política del Sistema Integral de Administración en Petrolíferos" >{{ old('revision',$procedimiento->revision) }}</textarea>
                               
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

                            <textarea class="form-control" rows="5" id="registro" name="registro" placeholder="Registro" >{{ old('registro',$procedimiento->registro) }}</textarea>
                           
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

                            <textarea class="form-control" rows="5" id="referencia_interna" name="referencia_interna" placeholder="Referencia interna">{{ old('referencia_interna',$procedimiento->referencia_interna) }}</textarea>
                           
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

                            <textarea class="form-control" rows="5" id="referencia_extena" name="referencia_extena" placeholder="Referencia Extena" >{{ old('referencia_extena',$procedimiento->referencia_extena) }}</textarea>
                           
                        </div>
                    </div>
                </div>
            </div>

    
        <div class="container col-md-10 col-md-offset-1">

            <br>
            
            <button type="submit" class="btn btn-primary">Guardar Política</button>
            
            <a href="{{route('procedimientos.index')}}" class="btn btn-link">Regresar al listado de Políticas</a>
        </div>
        </form>
    </div>
</div>
@endsection
