@extends('layouts.layout')

@section('title',"Id #{$medida->id}")

@section('content')
<div class="card">
    <h4 class="card-header">
        Id #{{ $medida->id }}
    </h4>
        <div class="form-group">
            Nombre de la Medida de prevención: <b>{{$medida->descripcion_medidas_de_control_que_debe_cumplir_el_trabajador}}</b>
        </div>
        </div>
        <a href="{{route('medidas.index')}}" class="btn btn-link">Regresar</a>
    </div>
</div>
@endsection