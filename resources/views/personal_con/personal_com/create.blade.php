@extends('layouts.layout')

@section('title',"Personal_com")

@section('content')
<a href="{{ url('/personal_com') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>

<div class="card">
    <h4 class="card-header">
        Crear Personal_com
    </h4>
    <div class="card-body">
    @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        {!! Form::open(['url' => '/personal_com', 'class' => 'form-horizontal', 'files' => true]) !!}

@include ('personal_con.personal_com.form', ['formMode' => 'create'])

{!! Form::close() !!}
    </div>
</div>
@endsection
