@extends('layouts.layout')
@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">    
        <h1 class="pb-1" align="justify" >{{ $title }}</h1>

        <p>
            <a href="{{route('tipoobligaciones.create')}}" class="btn btn-primary ">Crear nuevo texto</a>
        </p>        
    </div>
    
    @if ($tipoobligaciones->isNotEmpty())
    <table class="table">
      <thead class="thead-dark">
        <tr >
          <th scope="col">#</th>
          <th scope="col">Código</th>
          <th scope="col">Nombre</th>
          <th scope="col">Descripción</th>
          <th scope="col">Estatus</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>

        @foreach($tipoobligaciones as $tipoobligacion)
        <tr>
          <th scope="row">{{ $tipoobligacion->id }}</th>
          <td>{{ $tipoobligacion->codigo }}</td>
          <td>{{ $tipoobligacion->nombre }}</td>
          <td>{{ $tipoobligacion->descripcion }}</td>
          <?php
            if($tipoobligacion->estatus) $estatus='Activo';
            else $estatus='Inactivo';
          ?>
          <td>{{ $estatus }}</td>         
          <td>
            <form action="{{ route('tipoobligaciones.destroy', $tipoobligacion) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <a href="{{route('tipoobligaciones.show',$tipoobligacion)}}" class="btn btn-warning"><span class="glyphicon glyphicon-eye-open"></span></a>
                <a href="{{route('tipoobligaciones.edit',$tipoobligacion)}}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>                         
                <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
            </form>              
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @else
        <p>No hay Textos registrados.</p>
    @endif       
@endsection

@section('sidebar')

@parent
<!--    <h2>Barra Lateral Personalizada!</h2> -->
@endsection

