@extends('layouts.layout')

@section('title',"mostrar Política:")

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
      
        

        <form method="POST" action="{{ url("/politica/{$politica->id}") }}">
         {{ method_field('PUT') }}


        {!! csrf_field() !!} <!-- para evitar ataques maliciosos en el metodo POST-->

        @include('layouts.header_e')

        <div class="container col-md-10 col-md-offset-1">

           <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Descripción o Nombre de la Política</h3>
                  </div>
                  <div class="panel-body">  

                    <div class="row">
                        <div class="col-sm-12">

                            {{ $politica->descripcion }}

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

                            {{ $politica->objetivo }}
                           
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

                                {{ $politica->alcance }}
                               
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
                                {{ $politica->definicion }}
                            </div>
                        </div> 
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Política:</label>
                                {{ $politica->definicion_politica }}
                            </div>
                        </div>  
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Misión:</label>
                                {{ $politica->definicion_mision }}
                            </div>
                        </div>    
                         <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Visión:</label>
                                {{ $politica->definicion_vision }}
                            </div>
                        </div>   
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Obejetivo:</label>
                               {{ $politica->definicion_objetivo }}
                            </div>
                        </div> 
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-11">
                                    <label for="alcance">Nota: </label>
                                    {{ $politica->nota_objetivo }}
                                 </div>    
                            </div>
                        </div> 
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Partes Interesadas:</label>
                                {{ $politica->definicion_pt_interesada }}
                            </div>
                        </div> 
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Compromiso:</label>
                                {{ $politica->definicion_compromiso }}
                            </div>
                        </div> 
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Proceso:</label>
                                {{ $politica->definicion_proceso }}
                            </div>
                        </div> 
                        <br>
                         <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Proveedor:</label>
                                {{ $politica->definicion_proveedor }}
                            </div>
                        </div>                        
                        <br>
                         <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Proveedor Externo:</label>
                                {{ $politica->definicion_proveedor_ext }}
                            </div>
                        </div>  
                        <br>
                         <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Contratista: </label>
                                {{ $politica->definicion_contratista }}
                            </div>
                        </div>  
                        <br>
                         <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Subcontratista:</label>
                                {{ $politica->subcontratista }}
                            </div>
                        </div>   
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Prestador de Servicio:</label>
                                {{ $politica->prestador_servicio }}
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
                                {{ $politica->responsabilidad_ad }}
                            </div>
                        </div>   
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Gerente:</label>
                                {{ $politica->responsabilidad_g }}
                            </div>
                        </div>  
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alcance">Jefe de Piso: </label>
                                {{ $politica->responsabilidad_jp }}
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
                              <p class="text-justify"> {{ $politica->generalidad }} </p>
                               
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                            <h2 class="panel-title">5.2 Revisión y análisis de la información</h2>
                               <p class="text-justify"> {{ $politica->revision_analisis }}</p>
                               
                            </div>
                        </div>

<br>
                        <div class="row">
                            <div class="col-sm-12">
                            <h2 class="panel-title">5.3 Elaboración y redacción de la Política del Sistema Integral de Administración en Petrolíferos. </h2>
                               <p class="text-justify"> {{ $politica->elaboracion_politica }} </p>
                               
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                            <h2 class="panel-title">5.4 Aprobación de la Política </h2>
                               <p class="text-justify"> {{ $politica->aprobacion }}</p>
                               
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                            <h2 class="panel-title">5.5 Comunicación y distribución de la Política del Sistema Integral de Administración en Petrolíferos </h2>
                               <p class="text-justify"> {{ $politica->comunicacion_dist }}</p>
                               
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                            <h2 class="panel-title">5.6 Revisión de la Política del Sistema Integral de Administración en Petrolíferos </h2>
                               <p class="text-justify">{{ $politica->revision }}</p>
                               
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

                          {{ $politica->registro }}
                           
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

                            {{ $politica->referencia_interna }}
                           
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

                            <p class="text-justify">{{ $politica->referencia_extena }}</p>
                           
                        </div>
                    </div>
                </div>
            </div>

    
        <div class="container col-md-10 col-md-offset-1">

            <br>
            
            
            <a href="{{route('politicas.index')}}" class="btn btn-link">Regresar al listado de Políticas</a>
        </div>
        </form>
    </div>
</div>
@endsection
