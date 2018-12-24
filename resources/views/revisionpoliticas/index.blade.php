@extends('layouts.layout')
@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1" align="justify" >{{ $title }}</h1>

        <p>
            <a href="{{route('revisionpoliticas.create')}}" class="btn btn-primary ">Crear Revisión de Políticas</a>
        </p>
    </div>

    @if ($revisionpoliticas->isNotEmpty())
    <table class="table">
      <thead class="thead-dark">
        <tr >
          <th scope="col">#</th>
          <th scope="col">Documento</th>
          <th scope="col">Fecha</th>
          <th scope="col">Responsable</th>

        </tr>
      </thead>
      <tbody>
        @foreach($revisionpoliticas as $revisionpolitica)
        <tr>
          <th scope="row">{{ $revisionpolitica->id }}</th>
          <td>{{ $revisionpolitica->nombre_documento }}</td>
          <td>{{ $revisionpolitica->fecha_programada }}</td>
          <td>{{ $revisionpolitica->responsable }}</td>

        <?php
        if($revisionpolitica->estatus) $estatus='Activo';
        else $estatus='Inactivo';
        ?>
          <!-- <td>{{ $estatus }}</td> -->
          <td>
            <form action="{{ route('revisionpoliticas.destroy', $revisionpolitica) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <a href="{{route('revisionpoliticas.show',$revisionpolitica)}}" class="btn btn-warning"><span class="glyphicon glyphicon-eye-open"></span></a>
                <a href="{{route('revisionpoliticas.edit',$revisionpolitica)}}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
                <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @else
        <p>No hay Revisión Políticas registradas.</p>
    @endif
@endsection

@section('sidebar')
@parent
<!--    <h2>Barra Lateral Personalizada!</h2> -->
@endsection
