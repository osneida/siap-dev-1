
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
<h1>Datos del Documento</h1>
<div class="form-group {{ $errors->has('numero_revision') ? 'has-error' : ''}}">
    {!! Form::label('numero_revision', 'Numero Revision', ['class' => 'control-label']) !!}
    {!! Form::text('numero_revision', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('numero_revision', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('elaborado_por') ? 'has-error' : ''}}">
    {!! Form::label('elaborado_por', 'Elaborado Por', ['class' => 'control-label']) !!}
    {!! Form::text('elaborado_por', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('elaborado_por', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('revisado_por') ? 'has-error' : ''}}">
    {!! Form::label('revisado_por', 'Revisado Por', ['class' => 'control-label']) !!}
    {!! Form::text('revisado_por', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('revisado_por', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cargo_elaborado') ? 'has-error' : ''}}">
    {!! Form::label('cargo_elaborado', 'Cargo Elaborado', ['class' => 'control-label']) !!}
    {!! Form::text('cargo_elaborado', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('cargo_elaborado', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cargo_revisado') ? 'has-error' : ''}}">
    {!! Form::label('cargo_revisado', 'Cargo Revisado', ['class' => 'control-label']) !!}
    {!! Form::text('cargo_revisado', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('cargo_revisado', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fecha_revision') ? 'has-error' : ''}}">
    {!! Form::label('fecha_revision', 'Fecha Revision', ['class' => 'control-label']) !!}
    {!! Form::date('fecha_revision', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('fecha_revision', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fecha_creacion') ? 'has-error' : ''}}">
    {!! Form::label('fecha_creacion', 'Fecha Creacion', ['class' => 'control-label']) !!}
    {!! Form::date('fecha_creacion', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('fecha_creacion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('estatus') ? 'has-error' : ''}}">
    {!! Form::label('estatus', 'Estatus', ['class' => 'control-label']) !!}
    <div class="checkbox">
    <label>{!! Form::radio('estatus', '1') !!} Yes</label>
</div>
<div class="checkbox">
    <label>{!! Form::radio('estatus', '0', true) !!} No</label>
</div>
    {!! $errors->first('estatus', '<p class="help-block">:message</p>') !!}
</div>


<h1>Ficha de ingreso de personal</h1>


<div class="form-group {{ $errors->has('nombre_apellido') ? 'has-error' : ''}}">
    {!! Form::label('nombre_apellido', 'Nombre Apellido', ['class' => 'control-label']) !!}
    {!! Form::text('nombre_apellido', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('nombre_apellido', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
<label>Seleciona una imagen de perfil</label>
				    <input type="file" name="file" id="file">
</div>

<div class="form-group {{ $errors->has('nacimiento') ? 'has-error' : ''}}">
    {!! Form::label('nacimiento', 'Nacimiento', ['class' => 'control-label']) !!}
    {!! Form::textarea('nacimiento', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('nacimiento', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sexo') ? 'has-error' : ''}}">
    {!! Form::label('sexo', 'Sexo', ['class' => 'control-label']) !!}
    {!! Form::text('sexo', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('sexo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('estado_civil') ? 'has-error' : ''}}">
    {!! Form::label('estado_civil', 'Estado Civil', ['class' => 'control-label']) !!}
    {!! Form::text('estado_civil', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('estado_civil', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('foto') ? 'has-error' : ''}}">
    {!! Form::label('foto', 'Foto', ['class' => 'control-label']) !!}
    {!! Form::text('foto', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('foto', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('imss') ? 'has-error' : ''}}">
    {!! Form::label('imss', 'Imss', ['class' => 'control-label']) !!}
    {!! Form::text('imss', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('imss', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('curp') ? 'has-error' : ''}}">
    {!! Form::label('curp', 'Curp', ['class' => 'control-label']) !!}
    {!! Form::text('curp', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('curp', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('rfc') ? 'has-error' : ''}}">
    {!! Form::label('rfc', 'Rfc', ['class' => 'control-label']) !!}
    {!! Form::text('rfc', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('rfc', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('ine') ? 'has-error' : ''}}">
    {!! Form::label('ine', 'Ine', ['class' => 'control-label']) !!}
    {!! Form::text('ine', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('ine', '<p class="help-block">:message</p>') !!}
</div>
<h1>Direccion</h1>
<div class="form-group {{ $errors->has('codigo_postal') ? 'has-error' : ''}}">
    {!! Form::label('codigo_postal', 'Codigo Postal', ['class' => 'control-label']) !!}
    {!! Form::text('codigo_postal', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('codigo_postal', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('calle') ? 'has-error' : ''}}">
    {!! Form::label('calle', 'Calle', ['class' => 'control-label']) !!}
    {!! Form::text('calle', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('calle', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('numero_exterior') ? 'has-error' : ''}}">
    {!! Form::label('numero_exterior', 'Numero Exterior', ['class' => 'control-label']) !!}
    {!! Form::text('numero_exterior', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('numero_exterior', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('numero_interior') ? 'has-error' : ''}}">
    {!! Form::label('numero_interior', 'Numero Interior', ['class' => 'control-label']) !!}
    {!! Form::text('numero_interior', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('numero_interior', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('colonia') ? 'has-error' : ''}}">
    {!! Form::label('colonia', 'Colonia', ['class' => 'control-label']) !!}
    {!! Form::text('colonia', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('colonia', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('municipio') ? 'has-error' : ''}}">
    {!! Form::label('municipio', 'Municipio', ['class' => 'control-label']) !!}
    {!! Form::text('municipio', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('municipio', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
    {!! Form::label('estado', 'Estado', ['class' => 'control-label']) !!}
    {!! Form::text('estado', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('celular') ? 'has-error' : ''}}">
    {!! Form::label('celular', 'Celular', ['class' => 'control-label']) !!}
    {!! Form::text('celular', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('celular', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('telefono_casa') ? 'has-error' : ''}}">
    {!! Form::label('telefono_casa', 'Telefono Casa', ['class' => 'control-label']) !!}
    {!! Form::text('telefono_casa', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('telefono_casa', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
    {!! Form::text('email', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<h1>Persona de conctacto</h1>
<div class="form-group {{ $errors->has('c_nombre') ? 'has-error' : ''}}">
    {!! Form::label('c_nombre', 'C Nombre', ['class' => 'control-label']) !!}
    {!! Form::text('c_nombre', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('c_nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('c_celular') ? 'has-error' : ''}}">
    {!! Form::label('c_celular', 'C Celular', ['class' => 'control-label']) !!}
    {!! Form::text('c_celular', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('c_celular', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('c_telefono') ? 'has-error' : ''}}">
    {!! Form::label('c_telefono', 'C Telefono', ['class' => 'control-label']) !!}
    {!! Form::text('c_telefono', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('c_telefono', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('c_email') ? 'has-error' : ''}}">
    {!! Form::label('c_email', 'C Email', ['class' => 'control-label']) !!}
    {!! Form::text('c_email', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('c_email', '<p class="help-block">:message</p>') !!}
</div>
<h1>Nivel Academico</h1>
<div class="form-group {{ $errors->has('grado_instrucion') ? 'has-error' : ''}}">
    {!! Form::label('grado_instrucion', 'Grado Instrucion', ['class' => 'control-label']) !!}
    {!! Form::text('grado_instrucion', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('grado_instrucion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('titulo') ? 'has-error' : ''}}">
    {!! Form::label('titulo', 'Titulo', ['class' => 'control-label']) !!}
    {!! Form::text('titulo', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('titulo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('idiomas') ? 'has-error' : ''}}">
    {!! Form::label('idiomas', 'Idiomas', ['class' => 'control-label']) !!}
    {!! Form::text('idiomas', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('idiomas', '<p class="help-block">:message</p>') !!}
</div>
<h1>Datos de acceso</h1>
<div class="form-group {{ $errors->has('user') ? 'has-error' : ''}}">
    {!! Form::label('user', 'User', ['class' => 'control-label']) !!}
    {!! Form::text('user', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('user', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('pass') ? 'has-error' : ''}}">
    {!! Form::label('pass', 'Pass', ['class' => 'control-label']) !!}
    {!! Form::text('pass', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('pass', '<p class="help-block">:message</p>') !!}
</div>


<h1>Aspecto Familiar</h1>


<table class="table table-bordered" id="mytable">
        <tr style="display:none;">
     <td>
     
      <label>Parentesco</label>
        <select name="parentesco[]" class="subtareaselect js-example-basic-single-hide-search " data-width="80px" >
        <option value="Hijo">Hijo</option>
        <option value="Padre">Padre</option>
        <option value="Esposa">Esposa</option>
        
</select>


      </td>
      <td>
       
        <label>Nombre</label>
        <input type="text" name="nombre[]" class="subtareaselect js-example-basic-single-hide-search " data-width="80px" >


      </td>
      <td>
       
       <label>Edad</label>
       <input type="number" name="edad[]" class="subtareaselect js-example-basic-single-hide-search " data-width="80px" >


     </td>
     <td>
       
       <label>Ocupacion</label>
       <input type="text" name="ocupacion[]" class="subtareaselect js-example-basic-single-hide-search " data-width="80px" >


     </td>

      <td>
       
       <label>Domicilio</label>
       <input type="text" name="domicilio[]" class="subtareaselect js-example-basic-single-hide-search " data-width="80px" >


     </td>

      <td>
          <button type="button" class="remove-item borrar btn btn-danger">
            <span class="glyphicon glyphicon-remove"></span>
          </button>
      </td>
  
    </tr>
  </table>
 <a id="masfilas" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i></a>



<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
