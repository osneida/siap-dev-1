@extends('layouts.layout')

@section('title',"Editar  aspecto_familiar")

@section('content')
<a href="{{ url('/personal_com/'.$aspecto_familiar->id_personal.'/edit') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
<div class="card">
    <h4 class="card-header">
        Editar  aspecto_familiar
    </h4>
    <div class="card-body">
    @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        {!! Form::model($aspecto_familiar, [
                            'method' => 'PATCH',
                            'url' => ['/aspecto_familiar', $aspecto_familiar->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('aspecto_familiar.aspecto_familiar.form', ['formMode' => 'edit'])

                        {!! Form::close() !!}
    </div>
</div>
@endsection
