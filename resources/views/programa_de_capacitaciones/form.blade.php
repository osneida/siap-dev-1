<script>
$(document).ready(function(){
    $("#masfilas").click(function(){
        var tableReg = document.getElementById("mytable");
        $nuevo=parseInt($("#num").val())+1;
        $("#num").val($nuevo);
       
        $("#mytable").append("<tr>"+tableReg.rows[0].innerHTML+"</tr>");//1
        $('.remove-item').off().click(function(e) {
            $(this).parent('td').parent('tr').remove();//2
            $nuevo=parseInt($("#num").val())-1;
        $("#num").val($nuevo);
        });
        addcambios();
    });
});
function addcambios(){
    //----------------------------select de TAREAS --------------------------
    $(".proyectoselect").change(function() {
        var $tareaselect=$(this).parents("tr").find("td")[1].children[0];//3
        $tareaselect.disabled=false;//4
        empty($tareaselect);//5
        var $subtareaselect=$(this).parents("tr").find("td")[2].children[0];//6
        $subtareaselect.disabled=true;//7
        empty($subtareaselect);//8

        id_selected = $(this).val();
        $.ajax({
            type: "GET",
            url: 'listartareas/'+id_selected, 
            dataType : 'text',
            success: function(data){
                var datados = JSON.parse(data);
                $.each(JSON.parse(datados), function(key, value) {
                    $tareaselect.append(new Option(value.nombretarea, value.id));//9
                });    
            },
            error: function(data) {
                alert('error');             }
        });
    });
    //---------------------------select de SUBTAREAS --------------------------
    $(".tareaselect").change(function() {
        var $subtareaselect=$(this).parents("tr").find("td")[2].children[0];//10
        $subtareaselect.disabled=false;//11
        empty($subtareaselect);//12
      id_selected = $(this).val();
      $.ajax({
          type: "GET",
          url: 'listartareas/'+id_selected, 
          dataType : 'text',
          success: function(data){
              var datados = JSON.parse(data);
              $.each(JSON.parse(datados), function(key, value) {
                   $subtareaselect.append(new Option(value.nombretarea, value.id)); //13
              });    
          },
          error: function(data) {
              alert('error');
          }
      });
    }); 
}
function empty(unselect){
    for (var i=1;i<unselect.children.length; i++)
    {

        unselect.children[i].remove();
    }
}

</script>




<input id="num" name="num" type="hidden" value="0" >


<div class="form-group {{ $errors->has('nombre_trabajador') ? 'has-error' : ''}}">
    {!! Form::label('nombre_trabajador', 'Nombre Trabajador', ['class' => 'control-label']) !!}
    {!! Form::text('nombre_trabajador', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('nombre_trabajador', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('periodo_ejecucion') ? 'has-error' : ''}}">
    {!! Form::label('periodo_ejecucion', 'Periodo Ejecucion', ['class' => 'control-label']) !!}
    {!! Form::date('periodo_ejecucion', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('periodo_ejecucion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cargo_trabajador') ? 'has-error' : ''}}">
    {!! Form::label('cargo_trabajador', 'Cargo Trabajador', ['class' => 'control-label']) !!}
    {!! Form::text('cargo_trabajador', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('cargo_trabajador', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('objetivo_programa') ? 'has-error' : ''}}">
    {!! Form::label('objetivo_programa', 'Objetivo Programa', ['class' => 'control-label']) !!}
    {!! Form::textarea('objetivo_programa', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('objetivo_programa', '<p class="help-block">:message</p>') !!}
</div>




<h3>Lista de capacitacion</h3>



<table class="table table-bordered" id="mytable">
        <tr style="display:none;">
     <td>
     
      <label>Nombre de Capacitacion</label>
        <input type="text" name="nombre_capa[]" class="subtareaselect js-example-basic-single-hide-search " data-width="80px" >

      </td>
      <td>
       
        <label>Tipo de Accion</label>
        <input type="text" name="tipo[]" class="subtareaselect js-example-basic-single-hide-search " data-width="80px" >

      </td>

      <td>
       
        <label>Capacitacion Int</label>
        <input type="text" name="capa_int[]" class="subtareaselect js-example-basic-single-hide-search " data-width="80px" >

      </td>

      <td>
       
        <label>Capacitacion Ext</label>
        <input type="text" name="capa_ext[]" class="subtareaselect js-example-basic-single-hide-search " data-width="80px" >

      </td>

      <td>
        
        <label>Contenido</label>
        <input type="text" name="contenido[]" class="subtareaselect js-example-basic-single-hide-search " data-width="80px" >

      </td>

      <td>
       
        <label>Costo Aproximado</label>
        <input type="text" name="costo_aprox[]" class="subtareaselect js-example-basic-single-hide-search " data-width="80px" >



      </td>

      <td>
       
        <label>Mecanismo de Medicion</label>
        <input type="text" name="mecanismo_medicion[]" class="subtareaselect js-example-basic-single-hide-search " data-width="80px" >


      </td>

      <td>
        
        <label>Requisitos</label>
        <input type="text" name="requisitos[]" class="subtareaselect js-example-basic-single-hide-search " data-width="80px" >


      </td>

           <td>
       
        <label>Duraccion del Curso</label>
        <input type="text" name="duraccion[]" class="subtareaselect js-example-basic-single-hide-search " data-width="80px" >


      </td>

      <td>
          <button type="button" class="remove-item borrar btn btn-danger">
            <span class="glyphicon glyphicon-remove"></span>
          </button>
      </td>
  
    </tr>
  </table>
 <a id="masfilas" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i></a>


<div class="form-group {{ $errors->has('elaborado_por') ? 'has-error' : ''}}">
    {!! Form::label('elaborado_por', 'Elaborado Por', ['class' => 'control-label']) !!}
    {!! Form::text('elaborado_por', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('elaborado_por', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('firma_elaborado') ? 'has-error' : ''}}">
    {!! Form::label('firma_elaborado', 'Firma Elaborado', ['class' => 'control-label']) !!}
    {!! Form::text('firma_elaborado', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('firma_elaborado', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('aprobado_por') ? 'has-error' : ''}}">
    {!! Form::label('aprobado_por', 'Aprobado Por', ['class' => 'control-label']) !!}
    {!! Form::text('aprobado_por', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('aprobado_por', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('firma_aprobado') ? 'has-error' : ''}}">
    {!! Form::label('firma_aprobado', 'Firma Aprobado', ['class' => 'control-label']) !!}
    {!! Form::text('firma_aprobado', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('firma_aprobado', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('obsevaciones') ? 'has-error' : ''}}">
    {!! Form::label('obsevaciones', 'Obsevaciones', ['class' => 'control-label']) !!}
    {!! Form::textarea('obsevaciones', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('obsevaciones', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Guardar', ['class' => 'btn btn-primary']) !!}
</div>



