@extends('layouts.layout')

@section('title',"head_documento")

@section('content')
<a href="{{ url('/head_documento') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>

<div class="card">
    <h4 class="card-header">
        Crear head_documento
    </h4>
    <div class="card-body">
    @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        {!! Form::open(['url' => '/head_documento', 'class' => 'form-horizontal', 'files' => true]) !!}

@include ('head_documento.head_documento.form', ['formMode' => 'create'])

{!! Form::close() !!}
    </div>
</div>
@endsection
