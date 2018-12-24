@extends('layouts.layout')

@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1" align="justify" >{{ $title }}</h1>

        <p>
            <a href="{{route('propietarios.create')}}" class="btn btn-primary ">Crear nuevo Cliente</a>
        </p>
    </div>

    @if ($propietarios->isNotEmpty())
    <table class="table">
      <thead class="thead-dark">
        <tr >
          <th scope="col">#</th>
          <th scope="col">Código</th>
          <th scope="col">Nombre Completo</th>
          <th scope="col">Correo Electrónico</th>
          <th scope="col">Estatus</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($propietarios as $propietario)
        <tr>
          <th scope="row">{{ $propietario->id }}</th>
          <td>{{ $propietario->codigo }}</td>
          <td>{{ $propietario->nombre }} {{ $propietario->apellido_paterno }} {{ $propietario->apellido_materno }}</td>
          <td>{{ $propietario->email }}</td>
<?php
if($propietario->estatus) $estatus='Activo';
else $estatus='Inactivo';
?>
          <td>{{ $estatus }}</td>
          <td>
            <form action="{{ route('propietarios.destroy', $propietario) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <a href="{{route('propietarios.show',$propietario)}}" class="btn btn-warning"><span class="glyphicon glyphicon-eye-open"></span></a>
                <a href="{{route('propietarios.edit',$propietario)}}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
                <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @else
        <p>No hay clientes registrados.</p>
    @endif
@endsection

@section('sidebar')
@parent
<!--    <h2>Barra Lateral Personalizada!</h2> -->
@endsection
