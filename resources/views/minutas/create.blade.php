@extends('layouts.layout')

@section('title',"Crear Minuta")

@section('content')
<div class="card">
    <h2 class="card-header">Crear una Minuta:</h2>
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
        <form method="POST" action="{{ url('/minutas')}}">
        {!! csrf_field() !!} <!-- para evitar ataques maliciosos en el metodo POST-->
        @include('layouts.header')


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
                         <input type="text" class="form-control datepicker" name="fecha" id="fecha" placeholder="a. Indique la fecha de la minuta de Junta" value="{{ old('fecha') }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                           
                                <label for="convocadapor" >Responsable de la Junta</label>
                                <input type="text" class="form-control" id="convocadapor" name="convocadapor" placeholder="b. Indique el nombre de la persona responsable que convocó la junta de trabajo" value="{{ old('convocadapor') }}">
                            
                        </div>


  
                        <div class="col-md-6">
                            <div class="form-group">
                               <label for="lugar_junta" >Lugar</label>
                                <input type="text" class="form-control" id="lugar_junta" name="lugar_junta"  placeholder="c. Indique el lugar donde se efectuó la junta de trabajo (Ejemplo: Sala de Juntas)" value="{{ old('lugar_junta') }}">
      
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                           
                                <label for="proposito" >Asunto</label>
                                <input type="text" class="form-control" id="proposito" name="proposito"  placeholder="d. Indique el propósito de la junta de trabajo" value="{{ old('proposito') }}">
                            
                        </div>


  
                        <div class="col-md-6">
                        <div class="row">
                           <div class="col-md-6">
                           
                                <label for="hora_inicio" >Hora Inicio</label>
                                <input type="text" class="form-control" id="hora_inicio" name="hora_inicio"  placeholder="e. hora de inicio de la junta" value="{{ old('hora_inicio') }}">
                            
                          </div>
                              <div class="col-md-6">
                           
                                <label for="hora_fin" >Hora Fin</label>
                                <input type="text" class="form-control" id="hora_fin" name="hora_fin"  placeholder="f. hora de fin de la junta" value="{{ old('hora_fin') }}">
                            
                        </div>
                        </div>
                        </div>
                        
                    </div>
                </div>
            </div>


        <br>

     
 <legend>Lista de Asistentes</legend>
<div class="row vdivide">
    <div class="col-sm-6 text-center">
                       <table class="table table-responsive table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Cargo</th>
                    <th>Firma</th>
                
                </tr>

            </thead>
            <tbody>
                <tr>
                    <td><input type="text" class="form-control" id="participante"  name="participante" placeholder="g. Nombre de los participantes" value="{{ old('participante') }}"></td>
                    <td><input type="text" class="form-control" id="cargo_participante"  name="cargo_participante" placeholder="h. Coloque el cargo de los participantes en la junta de trabajo" value="{{ old('cargo_participante') }}"></td>
                    <td><label>__________________</label></td>
                   
                </tr>
                <tr>
                    <td><input type="text" class="form-control" id="participante2"  name="participante2" placeholder="g. Nombre de los participantes" value="{{ old('participante2') }}"></td>
                    <td><input type="text" class="form-control" id="cargo_participante2"  name="cargo_participante2" placeholder="h. Coloque el cargo de los participantes en la junta de trabajo" value="{{ old('cargo_participante2') }}"></td>
                    <td><label>__________________</label></td>
                    
                </tr>
                <tr>
                    <td><input type="text" class="form-control" id="participante3"  name="participante3" placeholder="g. Nombre de los participantes" value="{{ old('participante3') }}"></td>
                    <td><input type="text" class="form-control" id="cargo_participante3"  name="cargo_participante3" placeholder="h. Coloque el cargo de los participantes en la junta de trabajo" value="{{ old('cargo_participante3') }}"></td>
                    <td><label>__________________</label></td>
                   
                </tr>                

            </tbody>
        </table>

    
    </div>

    <div class="col-sm-6 text-center">
                       <table class="table table-responsive table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Cargo</th>
                    <th>Firma</th>
                   
                </tr>

            </thead>
            <tbody>
                <tr>
                    <td><input type="text" class="form-control" id="participante4"  name="participante4" placeholder="g. Nombre de los participantes" value="{{ old('participante4') }}"></td>
                    <td><input type="text" class="form-control" id="cargo_participante4"  name="cargo_participante4" placeholder="h. Coloque el cargo de los participantes en la junta de trabajo" value="{{ old('cargo_participante4') }}"></td>
                    <td><label>__________________</label></td>
                   
                </tr>
                <tr>
                    <td><input type="text" class="form-control" id="participante5"  name="participante5" placeholder="g. Nombre de los participantes" value="{{ old('participante5') }}"></td>
                    <td><input type="text" class="form-control" id="cargo_participante5"  name="cargo_participante5" placeholder="h. Coloque el cargo de los participantes en la junta de trabajo" value="{{ old('cargo_participante5') }}"></td>
                    <td><label>__________________</label></td>
                    
                </tr>
                <tr>
                    <td><input type="text" class="form-control" id="participante6"  name="participante6" placeholder="g. Nombre de los participantes" value="{{ old('participante6') }}"></td>
                    <td><input type="text" class="form-control" id="cargo_participante6"  name="cargo_participante6" placeholder="h. Coloque el cargo de los participantes en la junta de trabajo" value="{{ old('cargo_participante6') }}"></td>
                    <td><label>__________________</label></td>
                   
                </tr>          

            </tbody>
        </table>

    </div>

</div>

   


     

           <div class="panel panel-default">
                  <div class="panel-heading">
                  <div class="center">
                    <h3 class="panel-title">Aspectos Tratados/Responsable</h3>
                    </div>
                  </div>
                  <div class="panel-body">  

                    <div class="row">
                        <div class="col-sm-12">

                            <textarea class="form-control" rows="10" id="aspecto_tratado" name="aspecto_tratado" placeholder="j. Indique los aspectos tratados en la junta de trabajo. Indique, cuando se requiera, los acuerdos, asignaciones de tareas, las propuestas de mejoras, responsable de ejecutar las tareas, entre otros." value="{{ old('aspecto_tratado') }}"></textarea>
                           
                        </div>
                    </div>
                </div>
            </div>

           <legend>Instrucción de Llenado del formato ES-FG-003</legend> 
           <p>En este formato se debe colocar la siguiente información:</p>
           <lu>
               <li>a. Indique la fecha de la minuta de Junta.</li>
               <li>b. Indique el nombre de la persona responsable que convocó la junta de trabajo.</li>
               <li>c. Indique el lugar donde se efectuó la junta de trabajo (Ejemplo: Sala de Juntas).</li>
               <li>d. Indique el propósito de la junta de trabajo. </li>
               <li>e. Indique la hora de inicio de la junta de trabajo.</li>
               <li>f. Indique la hora de finalización de la junta de trabajo. </li>
               <li>g. Coloque el nombre de los participantes en la junta de trabajo. </li>
               <li>h. Coloque el cargo de los participantes en la junta de trabajo.</li>
               <li>i. Coloque la firma de los participantes en la junta de trabajo.</li>
               <li>j. Indique los aspectos tratados en la junta de trabajo. Indique, cuando se requiera, los acuerdos, asignaciones de tareas, las propuestas de mejoras, responsable de ejecutar las tareas, entre otros.</li>
           </lu>
         <hr>    
          @include('layouts.footer_documento') 
    <hr>
            <div class="container col-md-10 col-md-offset-1">

            <br>
            
            <button type="submit" class="btn btn-primary">Guardar Minutas</button>
            <a href="{{route('minutas.index')}}" class="btn btn-link">Regresar al listado de Minutas</a>
        </div>

        </form>
    </div>
    <br><br>
</div>
<br><br>
@endsection
