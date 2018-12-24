@extends('layouts.layout')

@section('title',"Editar  menu")

@section('content')
<a href="{{ url('/menu') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
<div class="card">
    <h4 class="card-header">
        Editar  menu
    </h4>
    <div class="card-body">
    @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        {!! Form::model($menu, [
                            'method' => 'PATCH',
                            'url' => ['/menu', $menu->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('menu.menu.form', ['formMode' => 'edit'])

                        {!! Form::close() !!}
    </div>
</div>
@endsection
