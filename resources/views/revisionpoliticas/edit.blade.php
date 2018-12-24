    @extends('layouts.layout')

    @section('title',"Crear la Revisión de una Política")

    @section('content')
    <div class="card">
        <h2 class="card-header">Crear la Revisión de una Política</h2>
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
            <form method="POST" action="{{ url('/revisionpoliticas')}}">

            <form method="POST" action="{{ url("/revisionpoliticas/{$revisionpolitica->id}") }}">
         	{{ method_field('PUT') }}
            {!! csrf_field() !!} <!-- para evitar ataques maliciosos en el metodo POST-->


            @include('layouts.header')


            <div class="container col-md-10 col-md-offset-1">
         
              
            @include('layouts.tablaCrearRevision') 

            <legend>Resultado de la Revisión</legend> 
            @include('layouts.tablaAsistentes') 

                      <div class="panel panel-default">
                      <div class="panel-heading"> <h3 class="panel-title">(*) Nuevo Texto</h3>   </div>               
                      <div class="panel-body">  

                        <div class="row">
                            <div class="col-sm-12">

                                <textarea class="form-control" rows="15" id="texto_modificado"  name="texto_modificado" placeholder="j. Indique el nuevo texto del documento modificado.">{{ old('texto_modificado',$revisionpolitica->texto_modificado) }}</textarea>
                               
                            </div>
                        </div>
               </div>
                </div>

              <hr>
                @include('layouts.footer')

               <legend>Instrucción de Llenado del formato ES-FG-005</legend> 
               <p>En este formato se debe colocar la siguiente información:</p>
               <lu class="list-unstyled">
                   <li>a. Número consecutivo.</li>
                   <li>b. Indique el nombre del documento sometido a revisión. (Ejemplo Política, Misión, Visión)</li>
                   <li>c. Indique el número de revisión del documento vigente.</li>
                   <li>d. Indique el nombre de la persona responsable por llevar a cabo la revisión del documento.   </li>
                   <li>e. Indique la fecha programada de la revisión (Ejemplo: Diciembre 2019).</li>
                   <li>f. Indique, según corresponda, si el documento será modificado seleccionando si o no. Si el documento no sufre modificación se mantiene la versión vigente.   </li>
                   <li>-- Este renglón es llenado una vez se conozca el resultado de la revisión.</li>
                   <li>g. Indique las observaciones que se consideren pertinente. </li>
                   <li>h. h. Coloque el nombre de los participantes en la revisión.</li>
                   <li>i. Coloque la firma de los participantes en la revisión.</li>
                   <li>j. Indique el nuevo texto del documento modificado.</li>
                 </lu>
             <hr>
                <div class="container col-md-10 col-md-offset-1">

                <br>
                
                <button type="submit" class="btn btn-primary">Guardar la Revisión</button>
                <a href="{{route('revisionpoliticas.index')}}" class="btn btn-link">Regresar al listado de Revisiones</a>
            </div>

            </form>
        </div>
        <br><br>
    </div>
    <br><br>
    @endsection
