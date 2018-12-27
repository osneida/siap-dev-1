@extends('layouts.layout')
@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1" align="justify" >{{ $title }}</h1>
    </div>

    @if ($estacions->isNotEmpty())
    <table class="table">
      <thead class="thead-dark">
        <tr >
          <th scope="col">#</th>
          <th scope="col">Nombre Estación</th>
          <th scope="col">Número Permiso CRE</th>
          <th scope="col">Número RFC</th>
          <th scope="col">Responsable</th>
          <th scope="col">Correo Electrónico</th>
          <!-- <th scope="col">estatus</th> -->
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($estacions as $estacion)
        <tr>
          <th scope="row">{{ $estacion->id }}</th>
          <td>{{ $estacion->nombre }}</td>
          <td>{{ $estacion->nroper_cre }}</td>
          <td>{{ $estacion->rfc_estacion }}</td> 
          <td>{{ $estacion->nombre_responsable }}</td>
          <td>{{ $estacion->email_responsable }}</td>
        <?php
        if($estacion->estatus) $estatus='Activo';
        else $estatus='Inactivo';
        ?>
          <!-- <td>{{ $estatus }}</td> -->
          <td>
            <form action="" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}

                <a href="{{route('estacionesTanques.edit',$estacion)}}" class="btn btn-primary ">Actualizar Tanques</a>
                <a href="{{route('estacionesTanques.show',$estacion)}}" class="btn btn-warning"><span class="glyphicon glyphicon-eye-open"></span></a>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @else
        <p>No hay estaciones registradas.</p>
    @endif
@endsection

@section('sidebar')
@parent
<!--    <h2>Barra Lateral Personalizada!</h2> -->
@endsection
