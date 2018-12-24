@extends('layouts.layout')
@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1" align="justify" >{{ $title }}</h1>

        <p>
            <a href="{{route('comunicaciones.create')}}" class="btn btn-primary ">Crear una Matriz de Comunicación</a>
        </p>
    </div>

    @if ($comunicacions->isNotEmpty())
    <table class="table">
      <thead class="thead-dark">
        <tr >
          <th scope="col">#</th>
          <th scope="col">Emisor</th>
          <th scope="col">Receptor</th>
          <th scope="col">Canal</th>

        </tr>
      </thead>
      <tbody>
        @foreach($comunicacions as $comunicacion)
        <tr>
          <th scope="row">{{ $comunicacion->id }}</th>
          <td>{{ $comunicacion->emisor }}</td>
          <td>{{ $comunicacion->receptor }}</td>
          <td>{{ $comunicacion->canal_comunicacion }}</td>

        <?php
        if($comunicacion->estatus) $estatus='Activo';
        else $estatus='Inactivo';
        ?>
          <!-- <td>{{ $estatus }}</td> -->
          <td>
            <form action="{{ route('comunicaciones.destroy', $comunicacion) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <a href="{{route('comunicaciones.show',$comunicacion)}}" class="btn btn-warning"><span class="glyphicon glyphicon-eye-open"></span></a>
                <a href="{{route('comunicaciones.edit',$comunicacion)}}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
                <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @else
        <p>No hay Comunicaciones registradas.</p>
    @endif
@endsection

@section('sidebar')
@parent
<!--    <h2>Barra Lateral Personalizada!</h2> -->
@endsection
