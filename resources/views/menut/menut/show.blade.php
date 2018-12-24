@extends('layouts.layout')

@section('title',"menut  #{$menut->id}")

@section('content')
<a href="{{ url('/menut') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
<a href="{{ url('/menut/' . $menut->id . '/edit') }}" title="Edit menut"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
{!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['menut', $menut->id],
                            'style' => 'display:inline'
                        ]) !!}
<div class="card">
    <h4 class="card-header">
        Id #{{ $menut->id}}
    </h4>
    <div class="card-body">
    <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $menut->id }}</td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $menut->name }} </td></tr><tr><th> Slug </th><td> {{ $menut->slug }} </td></tr><tr><th> Parent </th><td> {{ $menut->parent }} </td></tr>
                                </tbody>
                            </table>
                        </div>
    </div>
</div>
@endsection
