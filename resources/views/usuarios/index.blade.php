@extends('layouts.layout')
@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1" align="justify" ><span class="glyphicon glyphicon-user">&nbsp;</span>{{ $title }}</h1>

        <p><a href="{{route('usuarios.create')}}" class="btn btn-light" title="Crear nuevo Usuario"><span class="glyphicon glyphicon-plus"></span></a>
        <a href="" class="btn btn-light" title="Buscar Usuario"><span class="glyphicon glyphicon-search" alt="Crear nuevo Usuario"></span></a>
        <a href="" class="btn btn-light" title="Reporte de Usuarios"><span class="glyphicon glyphicon-print" alt="Crear nuevo Usuario"></span></a></p>
    
    </div>

    @if ($usuarios->isNotEmpty())
    <table class="table">
      <thead class="thead bg-secondary text-white">
        <tr >
          <th scope="col">#</th>
          <th scope="col">Nombre Usuario</th>
          <th scope="col">Correo Electrónico</th>
          <th scope="col">Estatus</th>
          <th scope="col" class="text-right">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($usuarios as $usuario)
        <tr>
          <th scope="row">{{ $usuario->id }}</th>
          <td>{{ $usuario->name }}</td>
          <td>{{ $usuario->email }}</td>
<?php
if($usuario->estatus) $estatus='Activo';
else $estatus='Inactivo';
?>
          <td>{{ $estatus }}</td>
          <td>
            <form action="{{ route('usuarios.destroy', $usuario) }}" method="POST" class="pull-right">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <a href="{{route('usuarios.show',$usuario)}}" class="btn btn-warning"><span class="glyphicon glyphicon-eye-open"></span></a>
                <a href="{{route('usuarios.edit',$usuario)}}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
                <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @else
        <p>No hay Unsuarios registrados.</p>
    @endif
@endsection

@section('sidebar')
@parent
<!--    <h2>Barra Lateral Personalizada!</h2> -->
@endsection
