@extends('layouts.layout')

@section('title',"Crear una Matriz de Comunicación")

@section('content')
<div class="card">
    <h2 class="card-header">Crear una Matriz de Comunicación</h2>
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
        <form method="POST" action="{{ url('/comunicaciones')}}">
        {!! csrf_field() !!} <!-- para evitar ataques maliciosos en el metodo POST-->
        @include('layouts.header')

        <div class="container col-md-10 col-md-offset-1">
     
            
 @include('layouts.tablaEditableCrear')

            @include('layouts.footer')

           <legend>Instrucción de Llenado del formato ES-FG-005</legend> 
           <p>En este formato se debe colocar la siguiente información:</p>
           <lu>
               <li>a. Número consecutivo.</li>
               <li>b. Indicar el aspecto a comunicar en la estación de servicio.</li>
               <li>c. Indique el cargo de la(s) persona(s) encargada de emitir la comunicación.</li>
               <li>d. Indique el cargo, organización, entidad, otros que recibe la comunicación.  </li>
               <li>e. Indique el medio o canal por donde se emite la comunicación</li>
               <li>f. Indique el tipo de comunicación, I: interna o E: externa.  </li>
               <li>g. Indique, en los casos que aplica, el código y nombre del registro que contiene la información. </li>
               <li>h. Indique la frecuencia a la cual será emitida la comunicación.</li>
             </lu>
         <hr>    

         
    <hr>
            <div class="container col-md-10 col-md-offset-1">

            <br>
            
            <button type="submit" class="btn btn-primary">Guardar Matriz de Comunicación</button>
            <a href="{{route('comunicaciones.index')}}" class="btn btn-link">Regresar al listado de Matriz de Comunicación</a>
        </div>

        </form>
    </div>
    <br><br>
</div>
<br><br>
@endsection
