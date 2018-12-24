@extends('layouts.layout')

@section('title',"Descripcion_puesto  #{$descripcion_puesto->id}")

@section('content')
<a href="{{ url('/descripcion_puesto') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
<a href="{{ url('/descripcion_puesto/' . $descripcion_puesto->id . '/edit') }}" title="Edit Descripcion_puesto"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
{!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['descripcion_puesto', $descripcion_puesto->id],
                            'style' => 'display:inline'
                        ]) !!}
<div class="card">
    <h4 class="card-header">
        Id #{{ $descripcion_puesto->id}}
    </h4>
    <div class="card-body">
    <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $descripcion_puesto->id }}</td>
                                    </tr>
                                    <tr><th> Nombre Puesto </th><td> {{ $descripcion_puesto->nombre_puesto }} </td></tr><tr><th> Supervisor Inmediato </th><td> {{ $descripcion_puesto->supervisor_inmediato }} </td></tr><tr><th> Nivel Autoridad </th><td> {{ $descripcion_puesto->nivel_autoridad }} </td></tr>
                                </tbody>
                            </table>
                        </div>
    </div>
</div>
@endsection
