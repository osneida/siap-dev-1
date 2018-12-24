@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
 

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Editar  #{{ $programa_de_capacitaciones_l->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/programa_de_capacitaciones/'.$programa_de_capacitaciones_l->id_programa.'/edit') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($programa_de_capacitaciones_l, [
                            'method' => 'PATCH',
                            'url' => ['/programa_de_capacitaciones_l', $programa_de_capacitaciones_l->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('programa_de_capacitaciones_l.programa_de_capacitaciones_l.form', ['formMode' => 'edit'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
