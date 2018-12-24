@extends('layouts.layout')

@section('title',"mostrar Procedimiento de las Política:")

@section('content')
<div class="card">
    <h2 class="card-header"> </h2>
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
      
        

        <form method="POST" action="{{ url("/procedimiento/{$procedimiento->id}") }}">
         {{ method_field('PUT') }}


        {!! csrf_field() !!} <!-- para evitar ataques maliciosos en el metodo POST-->

        @include('layouts.procedimientos.header_e')

        <div class="container col-md-10 col-md-offset-1">

           <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Descripción o Nombre de la Política</h3>
                  </div>
                  <div class="panel-body">  

                    <div class="row">
                        <div class="col-sm-12">

                            {{ $procedimiento->descripcion }}

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

                            {{ $procedimiento->objetivo }}
                           
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

                                {{ $procedimiento->alcance }}
                               
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
                                {{ $procedimiento->definicion }}
                            </div>
                        </div> 
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Política:</label>
                                {{ $procedimiento->definicion_procedimiento }}
                            </div>
                        </div>  
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Misión:</label>
                                {{ $procedimiento->definicion_mision }}
                            </div>
                        </div>    
                         <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Visión:</label>
                                {{ $procedimiento->definicion_vision }}
                            </div>
                        </div>   
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Obejetivo:</label>
                               {{ $procedimiento->definicion_objetivo }}
                            </div>
                        </div> 
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-11">
                                    <label for="alcance">Nota: </label>
                                    {{ $procedimiento->nota_objetivo }}
                                 </div>    
                            </div>
                        </div> 
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Partes Interesadas:</label>
                                {{ $procedimiento->definicion_pt_interesada }}
                            </div>
                        </div> 
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Compromiso:</label>
                                {{ $procedimiento->definicion_compromiso }}
                            </div>
                        </div> 
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Proceso:</label>
                                {{ $procedimiento->definicion_proceso }}
                            </div>
                        </div> 
                        <br>
                         <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Proveedor:</label>
                                {{ $procedimiento->definicion_proveedor }}
                            </div>
                        </div>                        
                        <br>
                         <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Proveedor Externo:</label>
                                {{ $procedimiento->definicion_proveedor_ext }}
                            </div>
                        </div>  
                        <br>
                         <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Contratista: </label>
                                {{ $procedimiento->definicion_contratista }}
                            </div>
                        </div>  
                        <br>
                         <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Subcontratista:</label>
                                {{ $procedimiento->subcontratista }}
                            </div>
                        </div>   
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Prestador de Servicio:</label>
                                {{ $procedimiento->prestador_servicio }}
                            </div>
                        </div>                                                
                  </div>
            </div>
            <br>
            <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">4. Responsabilidades</h3>
                  </div>
                  <div class="panel-body">  
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Alta Dirección:</label>
                                {{ $procedimiento->responsabilidad_ad }}
                            </div>
                        </div>   
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Gerente:</label>
                                {{ $procedimiento->responsabilidad_g }}
                            </div>
                        </div>  
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Jefe de Piso: </label>
                                {{ $procedimiento->responsabilidad_jp }}
                            </div>
                        </div>  
                  </div> 
            </div>  

<br>
             <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">5. Desarrollo</h3>
                  </div>

                  <div class="panel-body"> 

                        <div class="row">
                            <div class="col-sm-12">
                            <h2 class="panel-title">5.1 Generalidades</h2>
                              <p class="text-justify"> {{ $procedimiento->generalidad }} </p>
                               
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                            <h2 class="panel-title">5.2 Revisión y análisis de la información</h2>
                               <p class="text-justify"> {{ $procedimiento->revision_analisis }}</p>
                               
                            </div>
                        </div>

<br>
                        <div class="row">
                            <div class="col-sm-12">
                            <h2 class="panel-title">5.3 Elaboración y redacción de la Política del Sistema Integral de Administración en Petrolíferos. </h2>
                               <p class="text-justify"> {{ $procedimiento->elaboracion_procedimiento }} </p>
                               
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                            <h2 class="panel-title">5.4 Aprobación de la Política </h2>
                               <p class="text-justify"> {{ $procedimiento->aprobacion }}</p>
                               
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                            <h2 class="panel-title">5.5 Comunicación y distribución de la Política del Sistema Integral de Administración en Petrolíferos </h2>
                               <p class="text-justify"> {{ $procedimiento->comunicacion_dist }}</p>
                               
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                            <h2 class="panel-title">5.6 Revisión de la Política del Sistema Integral de Administración en Petrolíferos </h2>
                               <p class="text-justify">{{ $procedimiento->revision }}</p>
                               
                            </div>
                        </div>


                </div>
            </div>
<br>
           <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">6. Registros</h3>
                  </div>
                  <div class="panel-body">  

                    <div class="row">
                        <div class="col-sm-12">

                          {{ $procedimiento->registro }}
                           
                        </div>
                    </div>
                </div>
            </div>
<br>
           <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">7. Referencias Internas</h3>
                  </div>
                  <div class="panel-body">  

                    <div class="row">
                        <div class="col-sm-12">

                            {{ $procedimiento->referencia_interna }}
                           
                        </div>
                    </div>
                </div>
            </div>
            <br>
           <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">8. Referencias Externas</h3>
                  </div>
                  <div class="panel-body">  

                    <div class="row">
                        <div class="col-sm-12">

                            <p class="text-justify">{{ $procedimiento->referencia_extena }}</p>
                           
                        </div>
                    </div>
                </div>
            </div>

    
        <div class="container col-md-10 col-md-offset-1">

            <br>
            
            
            <a href="{{route('procedimientos.index')}}" class="btn btn-link">Regresar al listado de Políticas</a>
        </div>
        </form>
    </div>
</div>
@endsection
