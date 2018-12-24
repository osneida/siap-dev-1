@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
  

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Editar Personal #{{ $personal->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/personal/personal') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <br />
                        <br />

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
            </div>
        </div>
    </div>
@endsection
