<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">Lista de Asistentes</h4>
  </div>
  <div class="panel-body">

<div class="row vdivide">
    <div class="col-sm-6 text-center">
<!-- Editable table -->
<div class="card">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4"></h3>
  <div class="card-body">
    <div id="table" class="table-editable">
     
            
      <table class="tablef table-bordered table-responsive-md table-striped text-center">
        <tr>
          <th class="text-center">Nombre</th>
          <th class="text-center">Firma</th>
         
        </tr>

        <tr>
          <td ><input type="text" name="participante1" size="30"  placeholder="Nombre de los participantes en la revisión"  class="form-control no-border" value="{{ old('participante1') }}"></td>
          <td ><input type="text" readonly name="firma" size="30"  placeholder="Firma del participante en la revisión"  class="form-control no-border" value=""></td>       
        </tr>
        <tr>
          <td ><input type="text" name="participante2" size="30"  placeholder="Nombre de los participantes en la revisión"  class="form-control no-border" value="{{ old('participante2') }}"></td>
          <td ><input type="text" readonly name="firma" size="30"  placeholder="Firma del participante en la revisión"  class="form-control no-border" value=""></td>       
        </tr>


      </table>
    </div>
  </div>
</div>
<!-- Editable table -->
    </div>

    <div class="col-sm-6 text-center">
    <!-- Editable table -->
<div class="card">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4"></h3>
  <div class="card-body">
    <div id="table" class="table-editable">

            
      <table class="tablef table-bordered table-responsive-md table-striped text-center">
        <tr>
          <th class="text-center">Nombre</th>
          <th class="text-center">Firma</th>
         
        </tr>

        <tr>
          <td ><input type="text" name="participante3" size="30"  placeholder="h"  class="form-control no-border" value="{{ old('participante3') }}"></td>
          <td ><input type="text" readonly name="firma" size="30"  placeholder="i"  class="form-control no-border" value=""></td>       
        </tr>
        <tr>
          <td ><input type="text" name="participante4" size="30"  placeholder="h"  class="form-control no-border" value="{{ old('participante4') }}"></td>
          <td ><input type="text" readonly name="firma" size="30"  placeholder="i"  class="form-control no-border" value=""></td>       
        </tr>


      </table>
    </div>
  </div>
</div>
<!-- Editable table -->

     </div>
</div>
</div>
</div>
<script type="text/javascript">
  var $TABLE = $('#table');
var $BTN = $('#export-btn');
var $EXPORT = $('#export');

$('.table-addf').click(function () {
var $clone = $TABLE.find('tr.hidef').clone(true).removeClass('hidef table-line');
$TABLE.find('tablef').append($clone);
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
  
