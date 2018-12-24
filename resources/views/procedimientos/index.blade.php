@extends('layouts.layout')
@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1" align="justify" >{{ $title }}</h1>

        <p>
            <a href="{{route('procedimientos.create')}}" class="btn btn-primary ">Crear Procedimiento de las Política</a>
        </p>
    </div>

    @if ($procedimientos->isNotEmpty())
    <table class="table">
      <thead class="thead-dark">
        <tr >
          <th scope="col">#</th>
          <th scope="col">Procedimiento</th>
          <th scope="col">Fecha de Creación</th>
          <th scope="col">Aprobado por</th>

        </tr>
      </thead>
      <tbody>
        @foreach($procedimientos as $procedimiento)
        <tr>
          <th scope="row">{{ $procedimiento->id }}</th>
          <td>{{ $procedimiento->descripcion }}</td>
          <td>{{ $procedimiento->fecha_creacion }}</td>
          <td>{{ $procedimiento->aprobado }}</td>

        <?php
        if($procedimiento->estatus) $estatus='Activo';
        else $estatus='Inactivo';
        ?>
          <!-- <td>{{ $estatus }}</td> -->
          <td>
            <form action="{{ route('procedimientos.destroy', $procedimiento) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <a href="{{route('procedimientos.show',$procedimiento)}}" class="btn btn-warning"><span class="glyphicon glyphicon-eye-open"></span></a>
                <a href="{{route('procedimientos.edit',$procedimiento)}}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
                <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @else
        <p>No hay procedimientos registradas.</p>
    @endif
@endsection

@section('sidebar')
@parent
<!--    <h2>Barra Lateral Personalizada!</h2> -->
@endsection
