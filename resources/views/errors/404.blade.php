@extends('layouts.layout')
@section('content')
<head>
	<style type="text/css">
	.contenedor{
    position: relative;
    display: inline-block;
    text-align: center;
}
 

.centrado{
    position: absolute;
    top: 50%;
    left: 40%;
    transform: translate(-50%, -50%);
}
h1,h2,p{
	color: #0B0B61;
}
</style>
</head>
 <body >
 	<div class="contenedor"><img style="opacity: 0.42;width:90%;height:90%" src="{{asset('en_construccion_v2.jpg')}}"></div>
  <div class="centrado"><h1>&iexcl;Módulo en construcción!</h1>
  	<h2>Pedimos disculpas por los incovenientes causados pero estamos trabajando en cosas interesantes.</h2><br>
    <h2>&iexcl;Pronto estaremos en línea de nuevo!</h2>
  	<p>&mdash; El equipo Siap</p>
  </div>

</body>
@endsection