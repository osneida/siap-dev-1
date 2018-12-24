@extends('layouts.layout')

@section('title',"Editar  competencium")

@section('content')
<a href="{{ url('/competencia') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
<div class="card">
    <h4 class="card-header">
        Editar  competencium
    </h4>
    <div class="card-body">
    @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        {!! Form::model($competencium, [
                            'method' => 'PATCH',
                            'url' => ['/competencia', $competencium->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('competencia.competencia.form', ['formMode' => 'edit'])

                        {!! Form::close() !!}
    </div>
</div>
@endsection
