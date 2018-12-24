@extends('layouts.layout')

@section('title',"Editar  Descripcion_puesto")

@section('content')
<a href="{{ url('/descripcion_puesto') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
<div class="card">
    <h4 class="card-header">
        Editar  Descripcion_puesto
    </h4>
    <div class="card-body">
    @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        {!! Form::model($descripcion_puesto, [
                            'method' => 'PATCH',
                            'url' => ['/descripcion_puesto', $descripcion_puesto->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('descripcion_puesto.descripcion_puesto.form', ['formMode' => 'edit'])

                        {!! Form::close() !!}
    </div>
</div>
@endsection
