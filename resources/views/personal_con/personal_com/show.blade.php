@extends('layouts.layout')

@section('title',"Personal_com  #{$personal_com->id}")

@section('content')
<a href="{{ url('/personal_com') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
<a href="{{ url('/personal_com/' . $personal_com->id . '/edit') }}" title="Edit Personal_com"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
{!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['personal_com', $personal_com->id],
                            'style' => 'display:inline'
                        ]) !!}
<div class="card">
    <h4 class="card-header">
        Id #{{ $personal_com->id}}
    </h4>
    <div class="card-body">
    <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $personal_com->id }}</td>
                                    </tr>
                                    <tr><th> Nombre Apellido </th><td> {{ $personal_com->nombre_apellido }} </td></tr><tr><th> Nacimiento </th><td> {{ $personal_com->nacimiento }} </td></tr><tr><th> Sexo </th><td> {{ $personal_com->sexo }} </td></tr>
                                </tbody>
                            </table>
                        </div>
    </div>
</div>
@endsection
