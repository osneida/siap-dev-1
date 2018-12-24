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
<?php $numero_revision=$personal->numero_revision_c; 
$elaborado=$personal->elaborado_por;
$revisado=$personal->revisado_por;
$cargo_1=$personal->cargo_elaborado;
$cargo_2=$personal->cargo_revisado;
$fecha_revision=$personal->fecha_revision;
$fecha_creacion=$personal->fecha_creacion;
?>
   @include ('headerpdf')
<table class="tabla3"><tr>
<td><strong><center>Fecha<center></strong></td><td> {{$personal->fecha_entrega}}</td>
</tr></table>
<p>
La presente se extiende para {{$personal->nombre_responsable}} en calidad de {{$personal->nombre_documento}}. Yo {{$personal->nombre_responsable}} con pleno uso de mis facultades y en virtud del cargo otorgado por la Estación de Servicio {{$personal->nombre_documento}} me comprometo a:
</p>
•	Mantener la información reservadamente, brindarle a la misma el carácter de estrictamente confidencial, y mantenerla protegida del acceso de terceros, con el fin de no permitir su conocimiento o manejo por parte de personas no autorizadas.<br><br>
•	No utilizar la información que pueda conocer por razón del trabajo realizado, fuera del ámbito laboral y de las obligaciones específicas de mi trabajo.
•	No permitir la copia o reproducción total o parcial de los documentos e información que me sean entregados o a los que tenga acceso. Así como de guardar estricta confidencialidad e integridad sobre la información y documentación proporcionada por el cliente. Extendiendo mi compromiso para la información que sea generada por la prestación de los servicios profesionales en la Estación de Servicio {{$personal->nombre_responsable}}, así como a proteger los derechos de propiedad.<br><br>
•	Comprometerme a guardar estricta confidencialidad e integridad de la información proporcionada por el solicitante; al mismo tiempo que a guardar estricta confidencialidad e integridad de la información generada en la prestación de mis servicios con la Estación de Servicio {{$personal->nombre_responsable}} y a no proporcionar información de los ítems auditados, salvo que el usuario o propietario así lo manifiesta por escrito.<br><br>
•	Asumir las consecuencias que de un uso indebido de la información le pueda generar a la Estación de Servicio {{$personal->nombre_responsable}} o a terceros involucrados directos o subsecuentes en la información mencionada, si ocurriera lo contrario, asumiré las consecuencias legales que la autoridad competente me imponga para todas las partes afectadas.<br><br>
<p>
Por último, manifiesto que conozco y entiendo en su totalidad el contenido del presente compromiso, así como el alcance y las obligaciones tanto directas como subsecuentes que del mismo se derivan, en constancia y aceptación de lo cual firmo de aceptado
</p>


<table width="100%">
<tr>
<td>
<center>__________________________________</center>
</td>
</tr>
</table>

</body>
</html>