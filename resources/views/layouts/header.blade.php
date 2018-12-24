
<div class="container">
  
    <div class="col-md-12">

          <table class="table users table-hover table-bordered">

<tbody>
 @foreach($estaciones as $estacion)
 
 @endforeach()

 <input type="hidden" class="form-control" name="id_estacion" id="id_estacion" value="{{ $estacion['id'] }}">
  <tr>
  
    <td rowspan="4">

  <img src="{!! asset('SIAP_logo.png') !!}" alt="logo de la empresa " height="500" width="500"></td>
     
   <div class="row justify-content-center"> <td rowspan="3"><h3 class="text-primary"> {{ $estacion['nombre'] }}</h3></td></div>
    <th>Código: {{ $codigoformato }} </th>
  
    
  </tr>
  <tr>
    <td >{{ $estacion['rfc_estacion'] }} </td>
    
  </tr>
    <tr>
    <td> {{ $estacion['nro_estacion'] }} </td>

</tr>


<tr>
   <div class="row justify-content-center"> <td class="text-body" colspan="2"><h3 class="text-primary">  {!! $titulo !!} </h3></td></div>
</tr>



</tbody>
</table>
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="fecha_creacion">Fecha Creación:</label>
                        <input type="text" class="form-control datepicker" name="fecha_creacion" id="fecha_creacion" placeholder="Fecha Creación" value="{{ old('fecha_creacion') }}">

                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="numero_revision">Número Revisión:</label>
                        <input type="text" class="form-control" name="numero_revision" id="numero_revision" placeholder="Número Revisión"value="{{ old('numero_revision') }}">

                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                         <label for="fecha_revision">Fecha Revisión:</label>
                         <input type="text" class="form-control datepicker" name="fecha_revision" id="fecha_revision" placeholder="Fecha Revisión" value="{{ old('fecha_revision') }}">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="elaboradopor">Eslaborado Por:</label>
                       <input type="text" class="form-control"  name="elaboradopor" id="elaboradopor" placeholder="Elaborado por"value="{{ old('elaboradopor') }}">


                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                         <label for="revisadopor">Revisado Por:</label>
                         <input type="text" class="form-control" name="revisadopor" id="revisadopor" placeholder="Revisado por"value="{{ old('revisadopor') }}">

                    </div>
                </div>
            </div>

             <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="elaboradopor">Cargo: </label>
                       <input type="text" class="form-control" name="cargo_elaboradopor" id="cargo_elaboradopor" placeholder="Cargo "value="{{ old('cargo_elaboradopor') }}">


                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                         <label for="cargo_revisadopor">Cargo:</label>
                         <input type="text" class="form-control" name="cargo_revisadopor" id="cargo_revisadopor" placeholder="cargo"value="{{ old('cargo_revisadopor') }}">

                    </div>
                </div>
            </div>
             <div class="row">
                <div class="col-md-6">
                  <div class="col-md-12">

                  <div class="col-md-6"> 
                        <div class="form-group">
                          <label for="elaboradopor">Fecha: </label>
                          <label>___________________________</label>
                        </div>
                  </div>

                  <div class="col-md-6"> 
                        <div class="form-group">
                          <label for="elaboradopor">Firma: </label>
                          <label>___________________________</label>
                        </div>
                  </div>
                 
                </div> 
                                          
                </div>

                <div class="col-md-6">
                  <div class="col-md-12">

                  <div class="col-md-6"> 
                        <div class="form-group">
                          <label for="elaboradopor">Fecha: </label>
                          <label>___________________________</label>
                        </div>
                  </div>

                  <div class="col-md-6"> 
                        <div class="form-group">
                          <label for="elaboradopor">Firma: </label>
                          <label>___________________________</label>
                        </div>
                  </div>
                 
                </div> 
                </div>
            </div>

<hr>
</div>

</div>
