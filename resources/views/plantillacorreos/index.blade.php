@extends('layouts.layout')
@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">    
        <h1 class="pb-1" align="justify" >{{ $memo }}</h1>

        <p>
            <a href="{{route('plantillacorreos.create')}}" class="btn btn-primary ">Crear nuevo texto</a>
        </p>        
    </div>
    
    @if ($plantillacorreos->isNotEmpty())
    <table class="table">
      <thead class="thead-dark">
        <tr >
          <th scope="col">#</th>
          <th scope="col">Texto</th>
          <th scope="col">User</th>
          <th scope="col" >Fecha de Actualización</th>
          <th scope="col" >Acciones</th>          
        </tr>
      </thead>
      <tbody>

        @foreach($plantillacorreos as $Plantillacorreo)
        <tr>
          <th scope="row">{{ $Plantillacorreo->id }}</th>
          <td width="40%">{{ $Plantillacorreo->memo }}</td>
          <td>{{ $Plantillacorreo->user }}</td>
          <td>{{ $Plantillacorreo->updated_at }}</td>          
          <td>
            <form action="{{ route('plantillacorreos.destroy', $Plantillacorreo) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <a href="{{route('plantillacorreos.show',$Plantillacorreo)}}" class="btn btn-warning"><span class="glyphicon glyphicon-eye-open"></span></a>
                <a href="{{route('plantillacorreos.edit',$Plantillacorreo)}}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>                         
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

