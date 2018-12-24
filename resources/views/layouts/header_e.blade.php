
<div class="container">
  
    <div class="col-md-12">

          <table class="table users table-hover table-bordered">

<tbody>
 @foreach($estaciones as $estacion)
 
 @endforeach()

                 
                         
                        
 <input type="hidden" class="form-control" name="id_estacion" id="id_estacion" value="{{ $estacion['id'] }}">
  <tr>
  
    <td rowspan="4"><img src="" alt="logo de la empresa " height="200" width="200"></td>
     
   <div class="row justify-content-center"> <td rowspan="3"><h3 class="text-primary"> {{ $estacion['nombre'] }}</h3></td></div>
    <th>Código: {{ $codigoformato }}  </th>
  
    
  </tr>
  <tr>
    <td >{{ $estacion['rfc_estacion'] }} </td>
    
  </tr>
    <tr>
    <td> {{ $estacion['nro_estacion'] }} </td>

</tr>


<tr>
   <div class="row justify-content-center"> <td class="text-body" colspan="2"><h3 class="text-primary">  {{ $estacion['descripcion'] }} </h3></td></div>
</tr>


</tbody>
</table>
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="fecha_creacion">Fecha Creación:</label>
                 
                        
                        @if($edit)
                               <input type="text" class="form-control datepicker" name="fecha_creacion" id="fecha_creacion" placeholder="Fecha Creación" value="{{ old('fecha_creacion',$politica->fecha_creacion) }}">
                        @endif

                         @if($show)
                            <p>{!! $politica->fecha_creacion !!}</p>
                         @endif

                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="numero_revision">Número Revisión:</label>

                          @if($edit)
                            <input type="text" class="form-control" name="numero_revision" id="numero_revision" placeholder="Número Revisión"value="{{ old('numero_revision',$politica->numero_revision) }}">
                          @endif
                          @if($show)
                            <p>{!! $politica->numero_revision !!}</p>
                         @endif                          

                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                         <label for="fecha_revision">Fecha Revisión:</label>
                         @if($edit)
                          <input type="text" class="form-control datepicker" name="fecha_revision" id="fecha_revision" placeholder="Fecha Revisión" value="{{ old('fecha_revision',$politica->fecha_revision) }}">
                         @endif
                          @if($show)
                            <p>{!! $politica->fecha_revision !!}</p>
                         @endif 
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="elaboradopor">Eslaborado Por:</label>
                        @if($edit)
                          <input type="text" class="form-control" name="elaboradopor" id="elaboradopor" placeholder="Elaborado por"value="{{ old('elaboradopor',$politica->elaboradopor) }}">
                        @endif
                          @if($show)
                            <p>{!! $politica->elaboradopor !!}</p>
                         @endif

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                         <label for="revisadopor">Revisado Por:</label>
                         @if($edit)
                          <input type="text" class="form-control" name="revisadopor" id="revisadopor" placeholder="Revisado por"value="{{ old('revisadopor',$politica->revisadopor) }}">
                          @endif
                          @if($show)
                            <p>{!! $politica->revisadopor !!}</p>
                         @endif
                    </div>
                </div>
            </div>

             <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="elaboradopor">Cargo: </label>
                       @if($edit) 
                        <input type="text" class="form-control" name="cargo_elaboradopor" id="cargo_elaboradopor" placeholder="Cargo "value="{{ old('cargo_elaboradopor',$politica->cargo_elaboradopor) }}">
                        @endif
                          @if($show)
                            <p>{!! $politica->cargo_elaboradopor !!}</p>
                         @endif

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                         <label for="cargo_revisadopor">Cargo:</label>
                          @if($edit) 
                            <input type="text" class="form-control" name="cargo_revisadopor" id="cargo_revisadopor" placeholder="cargo"value="{{ old('cargo_revisadopor',$politica->cargo_revisadopor) }}">
                           @endif
                          @if($show)
                            <p>{!! $politica->cargo_revisadopor !!}</p>
                         @endif  
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
