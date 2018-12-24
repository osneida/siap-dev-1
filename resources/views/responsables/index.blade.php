@extends('layouts.layout')

@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">    
        <h1 class="pb-1" align="justify" >{{ $title }}</h1>

        <p>
                {{ csrf_field() }}
                <a href="{{route('responsables.create')}}" class="btn btn-primary ">Crear nuevo Responsable</a>  
        </p>        
    </div>
    
    @if ($responsables->isNotEmpty())
    <table class="table">
      <thead class="thead-dark">
        <tr >
          <!--<th scope="col"><input type="checkbox" class="select-all" id="checkTodos"></th>          -->  
          <th scope="col">#</th>          
          <th scope="col">Código</th>
          <th scope="col">Nombre Completo</th>
          <th scope="col">Correo Electrónico</th>
          <th scope="col">Estatus</th>
          <th scope="col">Acciones</th>          
        </tr>
      </thead>
      <tbody>
        @foreach($responsables as $responsable)
        <tr>
          <!--<td><input type="checkbox" name="chk_email[]" id="chk_email[]" value="{{ $responsable->id }}"></td>            -->
          <th scope="row">{{ $responsable->id }}</th>
          <td>{{ $responsable->codigo }}</td>
          <td>{{ $responsable->nombre }} {{ $responsable->apellido_paterno }} {{ $responsable->apellido_materno }}</td>
          <td>{{ $responsable->email }}</td>         
<?php
if($responsable->estatus) $estatus='Activo';
else $estatus='Inactivo';
?>          
          <td>{{ $estatus }}</td>          
          <td>
            <form action="{{ route('responsables.destroy', $responsable) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <a href="{{route('responsables.show',$responsable)}}" class="btn btn-warning"><span class="glyphicon glyphicon-eye-open"></span></a>
                <a href="{{route('responsables.edit',$responsable)}}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
                <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
                <a href="{{route('responsables.sendmail',$responsable)}}" class="btn btn-success"><span class="oi oi-envelope-closed"></span></a>                
            </form>              
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @else
        <p>No hay responsables registrados.</p>
    @endif       
@endsection

@section('sidebar')


@parent
<!--    <h2>Barra Lateral Personalizada!</h2> -->
@endsection

