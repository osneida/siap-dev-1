@extends('layouts.layout')

@section('title',"Editar  Personal")

@section('content')
<a href="{{ url('/personal/personal') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
<div class="card">
    <h4 class="card-header">
        Editar  Personal
    </h4>
    <div class="card-body">
    @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        {!! Form::model($personal, [
                            'method' => 'PATCH',
                            'url' => ['/personal/personal', $personal->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('personal.personal.form', ['formMode' => 'edit'])

                        {!! Form::close() !!}
    </div>
</div>
@endsection
