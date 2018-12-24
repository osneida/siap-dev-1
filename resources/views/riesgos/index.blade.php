@extends('layouts.layout')

@section('content')
<div class="d-flex justify-content-between align-items-end mb-3">
	<h1 class="pb-1" align="justify" >{{ $title }}</h1>

	<p>
		<a href="{{route('riesgos.create')}}" class="btn btn-primary ">Crear nuevo  Riesgo</a>
	</p>
</div>
@if ($riesgos->isNotEmpty())
<table class="table">
	<thead class="thead-dark">
		<tr >
			<th scope="col">#</th>
			<th scope="col">Riesgo</th>
			<th scope="col">Tipo de Riesgo</th>
			<th scope="col">Ultima actualización</th>
			<th scope="col">Acciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach($riesgos as $riesgo)
			<tr>
				<th scope="row">{{ $riesgo->id }}</th>
				<td>{{ $riesgo->nombre_riesgo}}</td>

				
				<td>{{ $riesgo->updated_at }}</td>
          <td>
            <form action="{{ route('riesgos.destroy', $riesgo) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <a href="{{route('riesgos.show',$riesgo)}}" class="btn btn-warning"><span class="glyphicon glyphicon-eye-open"></span></a>
                <a href="{{route('riesgos.edit',$riesgo)}}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
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
