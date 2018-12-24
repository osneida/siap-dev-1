<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">Revisión Política</h4>
  </div>
  <div class="panel-body">

<!-- Editable table -->
<div class="card">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4"></h3>
  <div class="card-body">
    <div id="table" class="table-editable">
      <span class="table-add float-right mb-3 mr-2">


      <a href="#!" class="text-success"><i class="fa fa-plus fa-2x"
            aria-hidden="true"></i>
                  

          <label>Agregar una fila, para insertar  </label>  <button id="adicional" name="adicional" type="button" class="btn btn-warning">Mas +</button>
            </a></span>
            
      <table class="table table-bordered table-responsive-md table-striped text-center">
        <tr>
          <th class="text-center">#</th>
          <th class="text-center">Nombre del Documento</th>
          <th class="text-center">Número de Revisión Vigente</th>
          <th class="text-center">Responsable por la Revisión</th>
          <th class="text-center">Fecha (Mes/Año)</th>
          <th class="text-center" colspan="2" >Modificación</th>
          <th class="text-center">Observaciones</th>
          <th class="text-center">Remover</th>
        </tr>


        <tr>
          <td ><input type="text" name="numero[]" size="2"  placeholder="a"  class="form-control no-border" value="{{ old('numero') }}"></td>
          <td ><textarea class="form-control" rows="1" name="nombre_documento[]" placeholder="b">{{old('nombre_documento')}}</textarea></td>
          <td ><input type="text" name="nro_revision_vigente[]" size="10"  placeholder="c"  class="form-control no-border" value="{{ old('nro_revision_vigente') }}"></td>
          <td ><input type="text" name="responsable[]" size="10"  placeholder="d"  class="form-control no-border" value="{{ old('responsable') }}"></td>
          <td ><input type="text" name="fecha_anomes[]" size="10"  placeholder="e"  class="form-control no-border" value="{{ old('fecha_anomes') }}"></td>
          <td >      <label> <div class="form-check">
              <input class="form-check-input" type="radio" name="modificado[]" id="modificado" value="I">
              <label class="form-check-label" for="modificado"> Si  </label>  </div></label></td>
          <td ><label><div class="form-check">
              <input class="form-check-input" type="radio" name="modificado[]" id="modificado" value="E">
              <label class="form-check-label" for="modificado"> No   </label>  </div></label></td>
          <td ><textarea class="form-control" rows="1" name="observacione[]" placeholder="g">{{ old('observacione') }}</textarea></td>
          <td>
            <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
          </td>       
         
        </tr>
        <!-- This is our clonable table line -->
        <tr>
          <td ><input type="text" name="numero[]" size="2"  placeholder="a"  class="form-control no-border" value="{{ old('numero') }}"></td>
          <td ><textarea class="form-control" rows="1" name="nombre_documento[]" placeholder="b">{{old('nombre_documento')}}</textarea></td>
          <td ><input type="text" name="nro_revision_vigente[]" size="10"  placeholder="c"  class="form-control no-border" value="{{ old('nro_revision_vigente') }}"></td>
          <td ><input type="text" name="responsable[]" size="10"  placeholder="d"  class="form-control no-border" value="{{ old('responsable') }}"></td>
          <td ><input type="text" name="fecha_anomes[]" size="10"  placeholder="e"  class="form-control no-border" value="{{ old('fecha_anomes') }}"></td>
          <td >      <label> <div class="form-check">
              <input class="form-check-input" type="radio" name="modificado[]" id="modificado" value="I">
              <label class="form-check-label" for="modificado"> Si  </label>  </div></label></td>
          <td ><label><div class="form-check">
              <input class="form-check-input" type="radio" name="modificado[]" id="modificado" value="E">
              <label class="form-check-label" for="modificado"> No   </label>  </div></label></td>
          <td ><textarea class="form-control" rows="1" name="observacione[]" placeholder="g">{{ old('observacione') }}</textarea></td>
          <td>
            <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
          </td>       
         
        </tr>

        <!-- This is our clonable table line -->
        <tr class="hide">
          <td ><input type="text" name="numero[]" size="2"  placeholder="a"  class="form-control no-border" value="{{ old('numero') }}"></td>
          <td ><textarea class="form-control" rows="1" name="nombre_documento[]" placeholder="b">{{old('nombre_documento')}}</textarea></td>
          <td ><input type="text" name="nro_revision_vigente[]" size="10"  placeholder="c"  class="form-control no-border" value="{{ old('nro_revision_vigente') }}"></td>
          <td ><input type="text" name="responsable[]" size="10"  placeholder="d"  class="form-control no-border" value="{{ old('responsable') }}"></td>
          <td ><input type="text" name="fecha_anomes[]" size="10"  placeholder="e"  class="form-control no-border" value="{{ old('fecha_anomes') }}"></td>
          <td >      <label> <div class="form-check">
              <input class="form-check-input" type="radio" name="modificado[]" id="modificado" value="I">
              <label class="form-check-label" for="modificado"> Si  </label>  </div></label></td>
          <td ><label><div class="form-check">
              <input class="form-check-input" type="radio" name="modificado[]" id="modificado" value="E">
              <label class="form-check-label" for="modificado"> No   </label>  </div></label></td>
          <td ><textarea class="form-control" rows="1" name="observacione[]" placeholder="g">{{ old('observacione') }}</textarea></td>
          <td>
            <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
          </td>       
         
        </tr>
      </table>
    </div>
  </div>
</div>
<!-- Editable table -->
</div>
</div>

<script type="text/javascript">
  var $TABLE = $('#table');
var $BTN = $('#export-btn');
var $EXPORT = $('#export');

$('.table-add').click(function () {
var $clone = $TABLE.find('tr.hide').clone(true).removeClass('hide table-line');
$TABLE.find('table').append($clone);
});

$('.table-remove').click(function () {
$(this).parents('tr').detach();
});

$('.table-up').click(function () {
var $row = $(this).parents('tr');
if ($row.index() === 1) return; // Don't go above the header
$row.prev().before($row.get(0));
});

$('.table-down').click(function () {
var $row = $(this).parents('tr');
$row.next().after($row.get(0));
});

// A few jQuery helpers for exporting only
jQuery.fn.pop = [].pop;
jQuery.fn.shift = [].shift;

$BTN.click(function () {
var $rows = $TABLE.find('tr:not(:hidden)');
var headers = [];
var data = [];

// Get the headers (add special header logic here)
$($rows.shift()).find('th:not(:empty)').each(function () {
headers.push($(this).text().toLowerCase());
});

// Turn all existing rows into a loopable array
$rows.each(function () {
var $td = $(this).find('td');
var h = {};

// Use the headers from earlier to name our hash keys
headers.forEach(function (header, i) {
h[header] = $td.eq(i).text();
});

data.push(h);
});

// Output the result
$EXPORT.text(JSON.stringify(data));
});

</script>


  <style type="text/css">
.pt-3-half {
padding-top: 1.4rem;
}
  </style>
  
