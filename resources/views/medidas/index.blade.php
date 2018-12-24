@extends('layouts.layout')

@section('content')

<div class="d-flex justify-content-between align-items-end mb-3">
	<h1 class="pb-1" align="justify" >{{ $title }}</h1>

	<p>
		<a href="{{route('medidas.create')}}" class="btn btn-primary ">Crear nueva Medida de control</a>
	</p>
</div>

@if ($medidas->isNotEmpty())
<table class="table">
	<thead class="thead-dark">
		<tr >
			<th scope="col">#</th>
			<th scope="col">Medidas de control</th>
			<th scope="col">Ultima actualización</th>
			<th scope="col">Acciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach($medidas as $medida)
			<tr>
				<th scope="row">{{ $medida->id }}</th>
				<td>{{ $medida->descripcion_medidas_de_control_que_debe_cumplir_el_trabajador}}</td>
				<td>{{ $medida->updated_at }}</td>
          <td>
            <form action="{{ route('medidas.destroy', $medida) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}

                <a href="{{route('medidas.show',$medida)}}" class="btn btn-warning"><span class="glyphicon glyphicon-eye-open"></span></a>
                <a href="{{route('medidas.edit',$medida)}}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
                <a href="{{route('medidas.show',$medida)}}" class="btn btn-success"><span class="glyphicon glyphicon-book"></span></a>

                <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
             

            </form>

			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@else
<p>No hay Medidas de prevención registrados.</p>
@endif

@endsection
