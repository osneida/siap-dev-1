@extends('layouts.layout')

@section('title',"competencium  #{$competencium->id}")

@section('content')
<a href="{{ url('/competencia') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
<a href="{{ url('/competencia/' . $competencium->id . '/edit') }}" title="Edit competencium"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
{!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['competencia', $competencium->id],
                            'style' => 'display:inline'
                        ]) !!}
<div class="card">
    <h4 class="card-header">
        Id #{{ $competencium->id}}
    </h4>
    <div class="card-body">
    <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $competencium->id }}</td>
                                    </tr>
                                    <tr><th> Numero Revision </th><td> {{ $competencium->numero_revision }} </td></tr><tr><th> Elaborado Por </th><td> {{ $competencium->elaborado_por }} </td></tr><tr><th> Revisado Por </th><td> {{ $competencium->revisado_por }} </td></tr>
                                </tbody>
                            </table>
                        </div>
    </div>
</div>
@endsection
