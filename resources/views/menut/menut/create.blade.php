@extends('layouts.layout')

@section('title',"menut")

@section('content')
<a href="{{ url('/menut') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>

<div class="card">
    <h4 class="card-header">
        Crear menut
    </h4>
    <div class="card-body">
    @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        {!! Form::open(['url' => '/menut', 'class' => 'form-horizontal', 'files' => true]) !!}

@include ('menut.menut.form', ['formMode' => 'create'])

{!! Form::close() !!}
    </div>
</div>
@endsection
