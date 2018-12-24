@extends('layouts.layout')

@section('title',"aspecto_familiar")

@section('content')
<a href="{{ url('/aspecto_familiar') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>

<div class="card">
    <h4 class="card-header">
        Crear aspecto_familiar
    </h4>
    <div class="card-body">
    @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        {!! Form::open(['url' => '/aspecto_familiar', 'class' => 'form-horizontal', 'files' => true]) !!}

@include ('aspecto_familiar.aspecto_familiar.form', ['formMode' => 'create'])

{!! Form::close() !!}
    </div>
</div>
@endsection
