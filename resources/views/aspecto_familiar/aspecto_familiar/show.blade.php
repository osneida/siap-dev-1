@extends('layouts.layout')

@section('title',"aspecto_familiar  #{$aspecto_familiar->id}")

@section('content')
<a href="{{ url('/aspecto_familiar') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
<a href="{{ url('/aspecto_familiar/' . $aspecto_familiar->id . '/edit') }}" title="Edit aspecto_familiar"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
{!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['aspecto_familiar', $aspecto_familiar->id],
                            'style' => 'display:inline'
                        ]) !!}
<div class="card">
    <h4 class="card-header">
        Id #{{ $aspecto_familiar->id}}
    </h4>
    <div class="card-body">
    <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $aspecto_familiar->id }}</td>
                                    </tr>
                                    <tr><th> Parentesco </th><td> {{ $aspecto_familiar->parentesco }} </td></tr><tr><th> Nombre </th><td> {{ $aspecto_familiar->nombre }} </td></tr><tr><th> Edad </th><td> {{ $aspecto_familiar->edad }} </td></tr>
                                </tbody>
                            </table>
                        </div>
    </div>
</div>
@endsection
