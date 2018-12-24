@extends('layouts.layout')
	@section('content')
	<div class="d-flex justify-content-between align-items-end mb-3">
		<h1 class="pb-1" align="justify" >{{ $title }}</h1>

		<p>
			<a href="{{route('efectos.create')}}" class="btn btn-primary ">Crear nuevo Efecto</a>
		</p>
	</div>
	@if ($efectos->isNotEmpty())
	<table class="table">
		<thead class="thead-dark">
			<tr >
				<th scope="col">#</th>
				<th scope="col">Efectos probables sobre la salud</th>
				<th scope="col">Ultima actualización</th>
				<th scope="col">Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($efectos as $efecto)
			<tr>
				<th scope="row">{{ $efecto->id }}</th>
				<td>{{ $efecto->descripcion_efectos_probables_sobre_la_salud}}</td>
				<td>{{ $efecto->updated_at }}</td>

          <td>
            <form action="{{ route('efectos.destroy', $efecto) }}" method="POST" >
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <a href="{{route('efectos.show',$efecto)}}" class="btn btn-warning"><span class="glyphicon glyphicon-eye-open"></span></a>
                <a href="{{route('efectos.edit',$efecto)}}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
                <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
            </form>

			</td>

		</tr>
		@endforeach
	</tbody>
	
</table>


@else
<p>No hay clientes registrados.</p>

@endif

@endsection

@section('sidebar')
@parent
	 @endsection
