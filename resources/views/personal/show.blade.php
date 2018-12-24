@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
        

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Personal {{ $personal->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/personal/personal') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/personal/personal/' . $personal->id . '/edit') }}" title="Edit Personal"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['personal/personal', $personal->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Personal',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $personal->id }}</td>
                                    </tr>
                                    <tr><th> Nombre Apellido </th><td> {{ $personal->nombre_apellido }} </td></tr><tr><th> Nacimiento </th><td> {{ $personal->nacimiento }} </td></tr><tr><th> Sexo </th><td> {{ $personal->sexo }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
