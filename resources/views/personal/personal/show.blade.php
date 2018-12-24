@extends('layouts.layout')

@section('title',"Personal  #{$personal->id}")

@section('content')
<a href="{{ url('/personal/personal') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
<a href="{{ url('/personal/personal/' . $personal->id . '/edit') }}" title="Edit Personal"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
{!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['personal/personal', $personal->id],
                            'style' => 'display:inline'
                        ]) !!}
<div class="card">
    <h4 class="card-header">
        Id #{{ $personal->id}}
    </h4>
    <div class="card-body">
    <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $personal->id }}</td>
                                    </tr>
                                    <tr><th> Nombre Apellido </th><td> {{ $personal->nombre_apellido }} </td></tr><tr><th> Nacimiento </th><td> {{ $personal->nacimiento }} </td></tr><tr><th> Sexo </th><td> {{ $personal->sexo }} </td></tr>
                                </tbody>
                            </table>
                        </div>
    </div>
</div>
@endsection
