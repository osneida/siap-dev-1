@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
          

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                    <h1>Programa de capacitacion</h1>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/programa_de_capacitaciones/create') }}" class="btn btn-success btn-sm" title="Add New Programa_de_capacitacione">
                            <i class="fa fa-plus" aria-hidden="true"></i> Agregar Nuevo
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/Capacitacion/programa_de_capacitaciones', 'class' => 'form-inline my-2 my-lg-0 float-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Buscar..." value="{{ request('search') }}">
                            <span class="input-group-append">
                                <button class="btn btn-secondary" type="submit">
                                    <i class="fa fa-search">Buscar</i>
                                </button>
                            </span>
                        </div>
                        {!! Form::close() !!}

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Nombre Trabajador</th><th>Periodo Ejecucion</th><th>Cargo Trabajador</th><th>Gestionar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($programa_de_capacitaciones as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item->nombre_trabajador }}</td><td>{{ $item->periodo_ejecucion }}</td><td>{{ $item->cargo_trabajador }}</td>
                                        <td>
                                            <a href="{{ url('/programa_de_capacitaciones/' . $item->id) }}" title="Ver"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a title="Generar PDF" href="{{ action('Personal\pdfprogramaController@getGenerar',['accion'=>'ver','tipo'=>'digital','id'=>$item->id]) }}"><button class="btn btn-warning btn-sm">Generar PDF</button></a>
                                            <a href="{{ url('/programa_de_capacitaciones/' . $item->id . '/edit') }}" title="editar"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/programa_de_capacitaciones', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Borrar', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Borrar Programa_de_capacitacione',
                                                        'onclick'=>'return confirm("Confirmar si queire borrar")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $programa_de_capacitaciones->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
