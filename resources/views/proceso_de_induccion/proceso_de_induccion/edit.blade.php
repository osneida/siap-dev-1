@extends('layouts.layout')

@section('title',"Editar  Proceso_de_induccion")

@section('content')
<a href="{{ url('/proceso_de_induccion') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
<div class="card">
    <h4 class="card-header">
        Editar  Proceso_de_induccion
    </h4>
    <div class="card-body">
    @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        {!! Form::model($proceso_de_induccion, [
                            'method' => 'PATCH',
                            'url' => ['/proceso_de_induccion', $proceso_de_induccion->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('proceso_de_induccion.proceso_de_induccion.form', ['formMode' => 'edit'])

                        {!! Form::close() !!}
    </div>
</div>
@endsection
