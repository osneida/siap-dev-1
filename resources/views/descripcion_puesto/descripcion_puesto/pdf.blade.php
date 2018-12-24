!DOCTYPE html>
<html>
<head>
    <title>Descripcion</title>
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


 <table class="tabla3" width="100%">
 <tr class="fondo">
 <td colspan="4"><center><strong>ESTACIÓN DE SERVICIO</strong></center></td>
 </tr> 
 <tr>
 <td><strong>Nombre del puesto</strong></td>
 <td colspan="3">{{$personal->nombre_puesto}}</td>
 </tr>
 <tr>
 <td><strong>Supervisor Inmediato</strong></td>
 <td colspan="3">{{$personal->supervisor_inmediato}}</td>
 </tr>
 <tr>
 <td><strong>Nivel de Autoridad</strong></td>
 <td colspan="3">{{$personal->nivel_autoridad}}</td>
 </tr>
 <tr>
 <td colspan="4"><strong>Funciones y Responsabilidades correspondientes al Puesto:</strong></td></tr
 ><tr>
 <td colspan="4">{{$personal->funciones_responsabilidad}}</td>
 </tr>

<tr>
 <td colspan="4"><strong>Actividades correspondientes al Puesto:</strong></td></tr
 ><tr>
 <td colspan="4">{{$personal->ctividades}}</td>
 </tr>

<tr class="fondo">
<td colspan="4"><strong>Competencias Requeridas</strong></td>
</tr>


 <tr>
 <td><strong>Nivel Academico</strong></td>
 <td colspan="3">{{$personal->nivel_academico}}</td>
 </tr>

 <tr>
 <td><strong>Formacion</strong></td>
 <td colspan="3">{{$personal->formacion}}</td>
 </tr>



 <tr>
 <td><strong>Años de experiencia</strong></td>
 <td colspan="3">{{$personal->experiencia}}</td>
 </tr>



 <tr>
 <td><strong>Competencia</strong></td>
 <td colspan="3">{{$personal->competencias}}</td>
 </tr>

 <tr>
 <td><strong>Habilidades</strong></td>
 <td colspan="3">{{$personal->habilidades}}</td>
 </tr>



 <tr>
 <td><strong>Aprobado por</strong></td>
 <td>{{$personal->aprobado_por}}</td>
 <td><strong>Recibido por</strong></td>
 <td>{{$personal->recibido_por}}</td>
 </tr>

<tr>
 <td><strong>Firma</strong></td>
 <td>{{$personal->firma_aprobado}}</td>
 <td><strong>Firma</strong></td>
 <td>{{$personal->firma_recibido}}</td>
 </tr>




 </table>



</body>
</html>