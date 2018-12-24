@extends('layouts.layout')
@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1" align="justify" >{{ $title }}</h1>

        <p>
            <a href="{{route('minutas.create')}}" class="btn btn-primary ">Crear una Minuta</a>
        </p>
    </div>

    @if ($minutas->isNotEmpty())
    <table class="table">
      <thead class="thead-dark">
        <tr >
          <th scope="col">#</th>
          <th scope="col">Asunto</th>
          <th scope="col">Fecha</th>
          <th scope="col">Responsable</th>

        </tr>
      </thead>
      <tbody>
        @foreach($minutas as $minuta)
        <tr>
          <th scope="row">{{ $minuta->id }}</th>
          <td>{{ $minuta->proposito }}</td>
          <td>{{ $minuta->fecha }}</td>
          <td>{{ $minuta->convocadapor }}</td>

        <?php
        if($minuta->estatus) $estatus='Activo';
        else $estatus='Inactivo';
        ?>
          <!-- <td>{{ $estatus }}</td> -->
          <td>
            <form action="{{ route('minutas.destroy', $minuta) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <a href="{{route('minutas.show',$minuta)}}" class="btn btn-warning"><span class="glyphicon glyphicon-eye-open"></span></a>
                <a href="{{route('minutas.edit',$minuta)}}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
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
