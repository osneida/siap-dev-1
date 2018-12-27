@extends('layouts.layout')

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>


@section('title',"Personal")

@section('content')
<a href="{{ url('/personal') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>

<div class="card">
    <h4 class="card-header">
        Crear Personal
    </h4>
    <div class="card-body">
    @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        {!! Form::open(['url' => '/personal', 'class' => 'form-horizontal', 'files' => true]) !!}

@include ('personal.form', ['formMode' => 'create'])

{!! Form::close() !!}
    </div>
</div>
@endsection
