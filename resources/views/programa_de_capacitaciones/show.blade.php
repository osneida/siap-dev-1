@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
          

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Programa_de_capacitacione {{ $programa_de_capacitacione->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/programa_de_capacitaciones') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/programa_de_capacitaciones/' . $programa_de_capacitacione->id . '/edit') }}" title="Edit Programa_de_capacitacione"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['programa_de_capacitaciones', $programa_de_capacitacione->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Programa_de_capacitacione',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $programa_de_capacitacione->id }}</td>
                                    </tr>
                                    <tr><th> Nombre Trabajador </th><td> {{ $programa_de_capacitacione->nombre_trabajador }} </td></tr><tr><th> Periodo Ejecucion </th><td> {{ $programa_de_capacitacione->periodo_ejecucion }} </td></tr><tr><th> Cargo Trabajador </th><td> {{ $programa_de_capacitacione->cargo_trabajador }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
