@extends('layouts.layout')
@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1" align="justify" >{{ $title }}</h1>

        <p>
            <a href="{{route('politicas.create')}}" class="btn btn-primary ">Crear Política</a>
        </p>
    </div>

    @if ($politicas->isNotEmpty())
    <table class="table">
      <thead class="thead-dark">
        <tr >
          <th scope="col">#</th>
          <th scope="col">Politica</th>
          <th scope="col">Fecha de Creación</th>
          <th scope="col">Aprobado por</th>

        </tr>
      </thead>
      <tbody>
        @foreach($politicas as $politica)
        <tr>
          <th scope="row">{{ $politica->id }}</th>
          <td>{{ $politica->descripcion }}</td>
          <td>{{ $politica->fecha_creacion }}</td>
          <td>{{ $politica->aprobado }}</td>

        <?php
        if($politica->estatus) $estatus='Activo';
        else $estatus='Inactivo';
        ?>
          <!-- <td>{{ $estatus }}</td> -->
          <td>
            <form action="{{ route('politicas.destroy', $politica) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <a href="{{route('politicas.show',$politica)}}" class="btn btn-warning"><span class="glyphicon glyphicon-eye-open"></span></a>
                <a href="{{route('politicas.edit',$politica)}}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
                <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @else
        <p>No hay Políticas registradas.</p>
    @endif
@endsection

@section('sidebar')
@parent
<!--    <h2>Barra Lateral Personalizada!</h2> -->
@endsection
