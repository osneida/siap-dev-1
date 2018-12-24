@extends('layouts.layout')

@section('title',"proceso_induccion  #{$proceso_induccion->id}")

@section('content')
<a href="{{ url('/proceso_induccion') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
<a href="{{ url('/proceso_induccion/' . $proceso_induccion->id . '/edit') }}" title="Edit proceso_induccion"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
{!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['proceso_induccion', $proceso_induccion->id],
                            'style' => 'display:inline'
                        ]) !!}
<div class="card">
    <h4 class="card-header">
        Id #{{ $proceso_induccion->id}}
    </h4>
    <div class="card-body">
    <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $proceso_induccion->id }}</td>
                                    </tr>
                                    <tr><th> Fecha Inicio </th><td> {{ $proceso_induccion->fecha_inicio }} </td></tr><tr><th> Fecha Finalizacion </th><td> {{ $proceso_induccion->fecha_finalizacion }} </td></tr><tr><th> Personal En Induccion </th><td> {{ $proceso_induccion->personal_en_induccion }} </td></tr>
                                </tbody>
                            </table>
                        </div>
    </div>
</div>
@endsection
