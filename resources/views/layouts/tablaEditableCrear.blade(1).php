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
          <th class="text-center">Aspecto que comunicar</th>
          <th class="text-center">Emisor</th>
          <th class="text-center">Receptor</th>
          <th class="text-center">Medio de comunicación</th>
          <th class="text-center" colspan="2" >Tipo</th>
          <th class="text-center">Registro</th>
          <th class="text-center">Frecuencia</th>
          <th class="text-center">Remover</th>
        </tr>


        <tr>
          <td ><input type="text" name="numero[]" size="2"  placeholder="a"  class="form-control no-border" value="{{ old('numero') }}"></td>
          <td ><textarea class="form-control" rows="1" name="aspecto_comunicar[]" placeholder="b"></textarea></td>
          <td ><input type="text" name="emisor[]" size="10"  placeholder="c"  class="form-control no-border" value="{{ old('emisor') }}"></td>
          <td ><input type="text" name="receptor[]" size="10"  placeholder="d"  class="form-control no-border" value="{{ old('receptor') }}"></td>
          <td ><input type="text" name="canal_comunicacion[]" size="10"  placeholder="e"  class="form-control no-border" value="{{ old('canal_comunicacion') }}"></td>
          <td >      <label> <div class="form-check">
              <input class="form-check-input" type="radio" name="tipo_comunicacion[]" id="tipo_comunicacion" value="I">
              <label class="form-check-label" for="tipo_comunicacion"> I  </label>  </div></label></td>
          <td ><label><div class="form-check">
              <input class="form-check-input" type="radio" name="tipo_comunicacion[]" id="tipo_comunicacion" value="E">
              <label class="form-check-label" for="tipo_comunicacion"> E   </label>  </div></label></td>
          <td ><textarea class="form-control" rows="1" name="registro[]" placeholder="g">{{ old('registro') }}</textarea></td>
          <td ><textarea class="form-control" rows="1" name="frecuencia[]" placeholder="h">{{ old('frecuencia') }}</textarea></td>
          <td>
            <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
          </td>       
         
        </tr>
        <!-- This is our clonable table line -->
        <tr>
          <td ><input type="text" name="numero[]" size="2"  placeholder="a"  class="form-control no-border" value="{{ old('numero') }}"></td>
          <td ><textarea class="form-control" rows="1" name="aspecto_comunicar[]" placeholder="b"></textarea></td>
          <td ><input type="text" name="emisor[]" size="10"  placeholder="c"  class="form-control no-border" value="{{ old('emisor') }}"></td>
          <td ><input type="text" name="receptor[]" size="10"  placeholder="d"  class="form-control no-border" value="{{ old('receptor') }}"></td>
          <td ><input type="text" name="canal_comunicacion[]" size="10"  placeholder="e"  class="form-control no-border" value="{{ old('canal_comunicacion') }}"></td>
          <td >       <div class="form-check">
              <input class="form-check-input" type="radio" name="tipo_comunicacion[]" id="tipo_comunicacion" value="E">
              <label class="form-check-label" for="tipo_comunicacion"> I  </label>  </div></td>
          <td ><div class="form-check">
              <input class="form-check-input" type="radio" name="tipo_comunicacion[]" id="tipo_comunicacion" value="E">
              <label class="form-check-label" for="tipo_comunicacion"> E   </label>  </div></td>
          <td ><textarea class="form-control" rows="1" name="registro[]" placeholder="g">{{ old('registro') }}</textarea></td>
          <td ><textarea class="form-control" rows="1" name="frecuencia[]" placeholder="h">{{ old('frecuencia') }}</textarea></td>
          <td>
            <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
          </td>          
          
        </tr>

        <!-- This is our clonable table line -->
        <tr class="hide">
          <td ><input type="text" name="numero[]" size="2"  placeholder="a"  class="form-control no-border" value="{{ old('numero') }}"></td>
          <td ><textarea class="form-control" rows="1" name="aspecto_comunicar[]" placeholder="b"></textarea></td>
          <td ><input type="text" name="emisor[]" size="10"  placeholder="c"  class="form-control no-border" value="{{ old('emisor') }}"></td>
          <td ><input type="text" name="receptor[]" size="10"  placeholder="d"  class="form-control no-border" value="{{ old('receptor') }}"></td>
          <td ><input type="text" name="canal_comunicacion[]" size="10"  placeholder="e"  class="form-control no-border" value="{{ old('canal_comunicacion') }}"></td>
          <td >       <div class="form-check">
              <input class="form-check-input" type="radio" name="tipo_comunicacion[]" id="tipo_comunicacion" value="E">
              <label class="form-check-label" for="tipo_comunicacion"> I  </label>  </div></td>
          <td ><div class="form-check">
              <input class="form-check-input" type="radio" name="tipo_comunicacion[]" id="tipo_comunicacion" value="E">
              <label class="form-check-label" for="tipo_comunicacion"> E   </label>  </div></td>

          <td ><textarea class="form-control" rows="1" name="registro[]" placeholder="g">{{ old('registro') }}</textarea></td>
          <td ><textarea class="form-control" rows="1" name="frecuencia[]" placeholder="h">{{ old('frecuencia') }}</textarea></td>
          <td>
            <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
          </td>  
        </tr>
      </table>
    </div>
  </div>
</div>
<!-- Editable table -->

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
  
