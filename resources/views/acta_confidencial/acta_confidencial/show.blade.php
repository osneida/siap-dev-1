@extends('layouts.layout')

@section('title',"acta_confidencial  #{$acta_confidencial->id}")

@section('content')
<a href="{{ url('/acta_confidencial') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
<a href="{{ url('/acta_confidencial/' . $acta_confidencial->id . '/edit') }}" title="Edit acta_confidencial"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
{!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['acta_confidencial', $acta_confidencial->id],
                            'style' => 'display:inline'
                        ]) !!}
<div class="card">
    <h4 class="card-header">
        Id #{{ $acta_confidencial->id}}
    </h4>
    <div class="card-body">
    <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $acta_confidencial->id }}</td>
                                    </tr>
                                    <tr><th> Numero </th><td> {{ $acta_confidencial->numero }} </td></tr><tr><th> Codigo Documento </th><td> {{ $acta_confidencial->codigo_documento }} </td></tr><tr><th> Nombre Documento </th><td> {{ $acta_confidencial->nombre_documento }} </td></tr>
                                </tbody>
                            </table>
                        </div>
    </div>
</div>
@endsection
