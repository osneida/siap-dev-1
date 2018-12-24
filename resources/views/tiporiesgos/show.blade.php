@extends('layouts.layout')

@section('title',"Id #{$tiporiesgo->id}")

@section('content')
<div class="card">
    <h4 class="card-header">
        Id #{{ $tiporiesgo->id }}
    </h4>
        <div class="form-group">
            Nombre Tipo de riesgo: <b>{{$tiporiesgo->nombre_tipo_riesgo}}</b>
        </div>
        </div>
        <a href="{{route('tiporiesgos.index')}}" class="btn btn-link">Regresar</a>
    </div>
</div>
@endsection
