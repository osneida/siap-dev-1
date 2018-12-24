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

        <form method="POST" action="{{ url("/politicas/{$politica->id}") }}">
         


        {!! csrf_field() !!} <!-- para evitar ataques maliciosos en el metodo POST-->
        @include('layouts.header_e')

        <div class="container col-md-10 col-md-offset-1">

            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="fecha_creacion"></label>
                        

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="numero_revision"></label>
                        

                </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                         <label for="fecha">Fecha:</label>
                         <input type="text" readonly class="form-control datepicker" name="fecha_aprobacion" id="fecha_aprobacion" placeholder="a. Indique la fecha de aprobación de la Política del S.I.A.P " value="{{ old('fecha_aprobacion',$politica->fecha_aprobacion) }}">
                    </div>
                </div>
            </div>
           <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Política</h3>
                  </div>
                  <div class="panel-body">  

                    <div class="row">
                        <div class="col-sm-12">

                            <textarea readonly class="form-control" rows="15" id="politica"  name="politica" placeholder="b. Indique el texto de la Política del S.I.A.P.">{{ old('politica',$politica->politica) }}</textarea>
                           
                        </div>
                    </div>
            </div></div>        


           <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Responsable</h3>
                  </div>
                  <div class="panel-body">  

                    <div class="row">
                        <div class="col-sm-12">

                            <td><input type="text" class="form-control" id="responsable"  name="responsable" placeholder="c. Indique el nombre y firma de la persona representante de la Alta Dirección de la estación de servicio" value="{{ old('responsable',$politica->responsable) }}"></td>
                           
                        </div>
                    </div>
                </div>
            </div>

   
         <hr>  
    
        <div class="container col-md-10 col-md-offset-1">

            <br>
            
           
            <a href="{{route('politicas.index')}}" class="btn btn-link">Regresar al listado de Políticas</a>
        </div>
        </form>
    </div>
</div>
@endsection

   