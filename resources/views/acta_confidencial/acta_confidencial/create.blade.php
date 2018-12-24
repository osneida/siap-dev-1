@extends('layouts.layout')

@section('title',"acta_confidencial")

@section('content')
<a href="{{ url('/acta_confidencial') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>

<div class="card">
    <h4 class="card-header">
        Crear acta_confidencial
    </h4>
    <div class="card-body">
    @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        {!! Form::open(['url' => '/acta_confidencial', 'class' => 'form-horizontal', 'files' => true]) !!}

@include ('acta_confidencial.acta_confidencial.form', ['formMode' => 'create'])

{!! Form::close() !!}
    </div>
</div>
@endsection
