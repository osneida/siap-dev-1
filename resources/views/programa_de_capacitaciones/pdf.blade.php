!DOCTYPE html>
<html>
<head>
    <title>Reporte de personal {{ $datos->nombre_trabajador }}</title>
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
 <table class="tabla3" width="100%">
 <tr>
 <td class="fondo"><strong>Nombre del Trabajador<strong></td><td>{{$datos->nombre_trabajador}}</td>
 <td class="fondo"><strong>Periodo para ejecutar el programa de capacitacion</strong></td><td>{{$datos->periodo_ejecucion}}</td>
 </tr>
 <tr>
 <td class="fondo"><strong>Cargo del trabajador</strong></td><td colspan='3'>{{$datos->cargo_trabajador}}</td>
 </tr>
 </table>
<br>

<table class="tabla3" width="100%">
<tr><td class="fondo"><center><strong>Objectivo del Programa de capacitación</strong></center></td></tr>
<tr><td>{{$datos->objetivo_programa}}</td></tr>
</table>


<br>

<table class="tabla3" width="100%">
<tr class="fondo">
<td><center><strong>Nombre de la capacitación</strong></center></td>
<td><center><strong>Tipo de Acción</strong></center></td>
<td><center><strong>Capacitación INT</strong></center></td>
<td><center><strong>Capacitación EXT</strong></center></td>
<td><center><strong>Contenido</strong></center></td>
<td><center><strong>Costo Aproximado</strong></center></td>
<td><center><strong>Mecanismo de medición</strong></center></td>
<td><center><strong>Requisito</strong></center></td>
<td><center><strong>Duración del curso</strong></center></td>
</tr>

@foreach($datos2 as $item)
<tr>
<td><center>{{$item->nombre_capacitacion}}<center></td>
<td><center>{{$item->tipo_accion}}<center></td>
<td><center>{{$item->capacitacion_int}}<center></td>
<td><center>{{$item->capacitacion_ext}}<center></td>
<td><center>{{$item->contenido}}<center></td>
<td><center>{{$item->costo_aproximado}}<center></td>
<td><center>{{$item->mecanismo_medicion}}<center></td>
<td><center>{{$item->requisito}}<center></td>
<td><center>{{$item->requisito}}<center></td>
</tr>

@endforeach
</table>
<br>

<table class="tabla3" width="100%">
<tr>
<td class="fondo"><center><strong>Elaborado Por</strong></center></td><td>{{$datos->elaborado_por}}</td>
<td class="fondo"><center><strong>Firma</strong></center></td><td>{{$datos->firma_elaborado}}</td>
</tr>

<tr>
<td class="fondo"><center><strong>Aprobado Por</strong></center></td><td>{{$datos->aprobado_por}}</td>
<td class="fondo"><center><strong>Firma</strong></center></td><td>{{$datos->firma_aprobado}}</td>
</tr>

</table>

<br>
<table class="tabla3" width="100%">
<tr>
<td class="fondo"><center><strong>Observaciones</strong></center></td>
</tr>
<tr>
<td >{{ $datos->obsevaciones}}</td>
</tr>
</table>



</body>
</html>