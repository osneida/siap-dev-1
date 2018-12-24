@extends('layouts.layout')

@section('title',"Id #{$agente->id}")

@section('content')
<div class="card">
    <h4 class="card-header">
        Id #{{ $agente->id }}
    </h4>
        <div class="form-group">
            Nombre del Agente de riesgo: <b>{{$agente->descripcion_agente_de_riesgo}}</b>
        </div>
        </div>
        <a href="{{route('agentes.index')}}" class="btn btn-link">Regresar</a>
    </div>
</div>
@endsection
