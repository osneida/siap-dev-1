@extends('layouts.layout')

@section('title',"Id #{$riesgo->id}")

@section('content')
<div class="card">
    <h4 class="card-header">
        Id #{{ $riesgo->id }}
    </h4>
        <div class="form-group">
            Nombre del riesgo: <b>{{$riesgo->nombre_riesgo}}</b>
        </div>
        </div>
        <a href="{{route('riesgos.index')}}" class="btn btn-link">Regresar</a>
    </div>
</div>
@endsection
