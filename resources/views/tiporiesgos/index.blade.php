	@extends('layouts.layout')
	@section('content')
	<div class="d-flex justify-content-between align-items-end mb-3">
		<h1 class="pb-1" align="justify" >{{ $title }}</h1>

		<p>
			<a href="{{route('tiporiesgos.create')}}" class="btn btn-primary ">Crear nuevo tipo de sriesgo</a>
		</p>
	</div>
	@if ($tiporiesgos->isNotEmpty())
	<table class="table">
		<thead class="thead-dark">
			<tr >
				<th scope="col">#</th>
				<th scope="col">Tipo Riesgo</th>
				<th scope="col">Ultima actualización</th>
				<th scope="col">Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($tiporiesgos as $tiporiesgo)
			<tr>
				<th scope="row">{{ $tiporiesgo->id }}</th>
				<td>{{ $tiporiesgo->nombre_tipo_riesgo}}</td>
				<td>{{ $tiporiesgo->updated_at }}</td>
          <td>
            <form action="{{ route('tiporiesgos.destroy', $tiporiesgo) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <a href="{{route('tiporiesgos.show',$tiporiesgo)}}" class="btn btn-warning"><span class="glyphicon glyphicon-eye-open"></span></a>
                <a href="{{route('tiporiesgos.edit',$tiporiesgo)}}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
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
<!--    <h2>Barra Lateral Personalizada!</h2> -->
@endsection