@extends('layouts.layout')

@section('title',"menu  #{$menu->id}")

@section('content')
<a href="{{ url('/menu') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
<a href="{{ url('/menu/' . $menu->id . '/edit') }}" title="Edit menu"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
{!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['menu', $menu->id],
                            'style' => 'display:inline'
                        ]) !!}
<div class="card">
    <h4 class="card-header">
        Id #{{ $menu->id}}
    </h4>
    <div class="card-body">
    <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $menu->id }}</td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $menu->name }} </td></tr><tr><th> Slug </th><td> {{ $menu->slug }} </td></tr><tr><th> Parent </th><td> {{ $menu->parent }} </td></tr>
                                </tbody>
                            </table>
                        </div>
    </div>
</div>
@endsection
