@extends('layouts.layout')

@section('title',"Id #{$efecto->id}")

@section('content')
<div class="card">
    <h4 class="card-header">
        Id #{{ $efecto->id }}
    </h4>
        <div class="form-group">
            Nombre del efecto probable de la salud: <b>{{$efecto->descripcion_efectos_probables_sobre_la_salud}}</b>
        </div>
        </div>
        <a href="{{route('efectos.index')}}" class="btn btn-link">Regresar</a>
    </div>
</div>
@endsection
