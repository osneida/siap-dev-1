@extends('layouts.layout')
@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1" align="justify" >{{ $title }}</h1>

        <p>
            <a href="{{route('roles.create')}}" class="btn btn-primary ">Crear nuevo Rol</a>
        </p>
    </div>

    @if ($rols->isNotEmpty())
    <table class="table">
      <thead class="thead-dark">
        <tr >
          <th scope="col">#</th>
          <th scope="col">Rol</th>
          <th scope="col">Perfil</th>
          <th scope="col">Estatus</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($rols as $rol)
        <tr>
          <th scope="row">{{ $rol->id }}</th>
          <td>{{ $rol->name }}</td>
          <td>{{ $rol->nombre_perfil->name }}</td>
          <?php
          if($rol->estatus) $estatus='Activo';
          else $estatus='Inactivo';
          ?>
          <td>{{ $estatus }}</td>
          <td>
            <form action="{{ route('roles.destroy', $rol) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <a href="{{route('roles.show',$rol)}}" class="btn btn-warning"><span class="glyphicon glyphicon-eye-open"></span></a>
                <a href="{{route('roles.edit',$rol)}}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
                <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @else
        <p>No hay roles registrados.</p>
    @endif
@endsection

@section('sidebar')
@parent
<!--    <h2>Barra Lateral Personalizada!</h2> -->
@endsection
