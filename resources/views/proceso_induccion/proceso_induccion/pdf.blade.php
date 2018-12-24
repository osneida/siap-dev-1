!DOCTYPE html>
<html>
<head>
    <title>Proceso de induccion</title>
    <style type="text/css">
    body{
        font-size: 16px;
        font-family: "Arial";
    }
    table{
        border-collapse: collapse;
    }
    td{
        padding: 6px 5px;
        font-size: 15px;
    }
    .h1{
        font-size: 21px;
        font-weight: bold;
    }
    .h2{
        font-size: 18px;
        font-weight: bold;
    }
    .tabla1{
        margin-bottom: 20px;
    }
    .tabla2 {
        margin-bottom: 20px;
    }
    .tabla3{
        margin-top: 15px;
    }
    .tabla3 td{
        border: 1px solid #000;
    }
    .tabla3 .cancelado{
        border-left: 0;
        border-right: 0;
        border-bottom: 0;
        border-top: 1px dotted #000;
        width: 100%;
    }
    .emisor{
        color: red;
    }
    .linea{
        border-bottom: 1px dotted #000;
    }
    .border{
        border: 1px solid #000;
    }
    .fondo{
        background-color: #dfdfdf;
    }
    .fisico{
        color: #fff;
    }
    .fisico td{
        color: #fff;
    }
    .fisico .border{
        border: 1px solid #fff;
    }
    .fisico .tabla3 td{
        border: 1px solid #fff;
    }
    .fisico .linea{
        border-bottom: 1px dotted #fff;
    }
    .fisico .emisor{
        color: #fff;
    }
    .fisico .tabla3 .cancelado{
        border-top: 1px dotted #fff;
    }
    .fisico .text{
        color: #000;
    }
    .fisico .fondo{
        background-color: #fff;
    }
 
</style>
</head>
<body>

 <?php $numero_revision=$personal->numero_revision; 
$elaborado=$personal->elaborado_por;
$revisado=$personal->revisado_por;
$cargo_1=$personal->cargo_elaborado;
$cargo_2=$personal->cargo_revisado;
$fecha_revision=$personal->fecha_revision;
$fecha_creacion=$personal->fecha_creacion;
?>
   @include ('headerpdf')
 <table class="tabla3" >
 <tr>
 <td><strong>Fecha de Inicio</strong></td>
 <td>{{$personal->fecha_inicio}}</td>
 </tr>
 <tr>
 <td><strong>Fecha de Finalizacion</strong></td>
 <td>{{$personal->fecha_finalizacion}}</td>
 </tr>
</table>

 <table class="tabla3" width="100%">
<tr>
<td><strong>Personal en Induccion y entrenamiento</strong></td>
 <td colspan="2">{{$personal->personal_en_induccion}}</td>
 <td colspan="2"><strong>Puesto</strong></td>
 <td colspan="2">{{$personal->puesto_induccion}}</td>

</tr>
<tr>
<td><strong>Personal Responsable de la Inducción y Entrenamiento</strong></td>
 <td colspan="2">{{$personal->personal_responsable}}</td>
 <td colspan="2"><strong>Puesto</strong></td>
 <td colspan="2">{{$personal->puesto_responsable}}</td>
</tr>

<tr>
<td><strong>Motivo de la Inducción y Entrenamiento</strong></td>
<td><strong>Personal Nuevo Ingreso</strong></td>
 <td>{{$personal->motivo}}</td>
 <td><strong>otro</strong></td>
 <td>{{$personal->motivo}}</td>
 <td><strong>Especifiqque</strong></td>
 <td>{{$personal->especifique}}</td>
</tr>

</table>

<table width="100%" class="tabla3">
<tr class="fondo">
<td colspan="2" ><strong><center>Inducción</center></strong></td>
</tr>
<tr class="fondo">
<td ><strong><center>Actividades a realizar en el proceso de inducción y entrenamiento</center></strong></td>
<td ><strong><center>Documento asociado</center></strong></td>
</tr>
<tr>
<td>{{$personal->ctividades}}</td>
<td>{{$personal->documento_asociado}}</td>
</tr>
</table>

<br>
<br>
<br>
<strong>
Yo, {{$personal->personal_en_induccion}} por medio de la presente doy fe que he recibido la inducción y entrenamiento requerido para desempeñar correctamente mis funciones y responsabilidades en el puesto de {{$personal->puesto_induccion}}, y que he sido informado sobre los riesgos, peligros e impactos ambientales presentes en las respectivas actividades a realizar.
</strong>


<table width="100%">
<tr>
<td><center>_____________________________<br>Nombre y Firma<br>Del Trabajador</center></td>
<td><center>_____________________________<br>Nombre y Firma<br>Del Capacitador</ccenter></td>
</tr>
</table>


</body>
</html>