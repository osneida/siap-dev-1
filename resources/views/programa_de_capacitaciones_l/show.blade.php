@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Programa_de_capacitaciones_l {{ $programa_de_capacitaciones_l->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/programa_de_capacitaciones_l') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/programa_de_capacitaciones_l/' . $programa_de_capacitaciones_l->id . '/edit') }}" title="Edit Programa_de_capacitaciones_l"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['programa_de_capacitaciones_l', $programa_de_capacitaciones_l->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Programa_de_capacitaciones_l',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $programa_de_capacitaciones_l->id }}</td>
                                    </tr>
                                    <tr><th> Id Programa </th><td> {{ $programa_de_capacitaciones_l->id_programa }} </td></tr><tr><th> Nombre Capacitacion </th><td> {{ $programa_de_capacitaciones_l->nombre_capacitacion }} </td></tr><tr><th> Tipo Accion </th><td> {{ $programa_de_capacitaciones_l->tipo_accion }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
