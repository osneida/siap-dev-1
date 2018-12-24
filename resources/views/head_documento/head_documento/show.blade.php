@extends('layouts.layout')

@section('title',"head_documento  #{$head_documento->id}")

@section('content')
<a href="{{ url('/head_documento') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
<a href="{{ url('/head_documento/' . $head_documento->id . '/edit') }}" title="Edit head_documento"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
{!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['head_documento', $head_documento->id],
                            'style' => 'display:inline'
                        ]) !!}
<div class="card">
    <h4 class="card-header">
        Id #{{ $head_documento->id}}
    </h4>
    <div class="card-body">
    <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $head_documento->id }}</td>
                                    </tr>
                                    <tr><th> Numero Revision </th><td> {{ $head_documento->numero_revision }} </td></tr><tr><th> Elaborado Por </th><td> {{ $head_documento->elaborado_por }} </td></tr><tr><th> Revisado Por </th><td> {{ $head_documento->revisado_por }} </td></tr>
                                </tbody>
                            </table>
                        </div>
    </div>
</div>
@endsection
