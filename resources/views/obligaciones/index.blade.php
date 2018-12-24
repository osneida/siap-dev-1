@extends('layouts.layout')

@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1" align="justify" >{{ $title }}</h1>

        <p>
            <a href="{{route('obligaciones.create')}}" class="btn btn-primary ">Crear nuevo Cliente</a>
        </p>
    </div>

    @if ($obligaciones->isNotEmpty())
    <table class="table">
      <thead class="thead-dark">
        <tr >
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Estatus</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($obligaciones as $obligacion)
        <tr>
          <th scope="row">{{ $obligacion->id }}</th>
          <td style="width:60%;">{{ $obligacion->title }}</td>
          <?php
          if($obligacion->activo) $estatus='Activo';
          else $estatus='Inactivo';
          ?>
          <td>{{ $estatus }}</td>
          <td>
            <form action="{{ route('obligaciones.index', $obligacion) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <a href="{{route('obligaciones.index',$obligacion)}}" class="btn btn-warning"><span class="glyphicon glyphicon-eye-open"></span></a>
                <a href="{{route('obligaciones.index',$obligacion)}}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
                <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @else
        <p>No hay obligaciones registrados.</p>
    @endif
@endsection

@section('sidebar')
@parent
<!--    <h2>Barra Lateral Personalizada!</h2> -->
@endsection
