@extends('layouts.layout')

@section('content')

<div class="d-flex justify-content-between align-items-end mb-3">
	<h1 class="pb-1" align="justify" >{{ $title }}</h1>

	<p>
		<a href="{{route('agentes.create')}}" class="btn btn-primary ">Crear nuevo Agente de riesgo</a>
	</p>
</div>
@if ($agentes->isNotEmpty())
<table class="table">
	<thead class="thead-dark">
		<tr >
			<th scope="col">#</th>
			<th scope="col">Agente de riesgo</th>
			<th scope="col">Ultima actualización</th>
			<th scope="col">Acciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach($agentes as $agente)
			<tr>
				<th scope="row">{{ $agente->id }}</th>
				<td>{{ $agente->descripcion_agente_de_riesgo}}</td>
				<td>{{ $agente->updated_at }}</td>
          <td>
            <form action="{{ route('agentes.destroy', $agente) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <a href="{{route('agentes.show',$agente)}}" class="btn btn-warning"><span class="glyphicon glyphicon-eye-open"></span></a>
                <a href="{{route('agentes.edit',$agente)}}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
                <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
            </form>

			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@else
<p>No hay Agentes de riesgo registrados.</p>
@endif
@endsection