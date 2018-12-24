@extends('layouts.layout')

@section('title',"proceso_induccion")

@section('content')
<a href="{{ url('/proceso_induccion') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>

<div class="card">
    <h4 class="card-header">
        Crear proceso_induccion
    </h4>
    <div class="card-body">
    @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        {!! Form::open(['url' => '/proceso_induccion', 'class' => 'form-horizontal', 'files' => true]) !!}

@include ('proceso_induccion.proceso_induccion.form', ['formMode' => 'create'])

{!! Form::close() !!}
    </div>
</div>
@endsection
