@extends('layouts.layout')

@section('title',"Texto {$Plantillacorreo->id}")

@section('content')
<div class="card">
    <h4 class="card-header">
        Id #{{ $Plantillacorreo->id }}
    </h4>    
    <div class="card-body">
        <div class="form-group">
            Texto: <b>{{$Plantillacorreo->memo}}</b>
        </div>
        <div class="form-group">
            Username: <b>{{$Plantillacorreo->user}}</b>
        </div>    
            <a href="{{route('plantillacorreos.index')}}" class="btn btn-link">Regresar</a>
    </div>
</div>    
@endsection