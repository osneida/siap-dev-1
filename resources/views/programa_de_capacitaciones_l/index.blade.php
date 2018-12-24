@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
       

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Programa_de_capacitaciones_l</div>
                    <div class="card-body">
                        <a href="{{ url('/programa_de_capacitaciones_l/create') }}" class="btn btn-success btn-sm" title="Add New Programa_de_capacitaciones_l">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/programa_de_capacitaciones_l', 'class' => 'form-inline my-2 my-lg-0 float-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                            <span class="input-group-append">
                                <button class="btn btn-secondary" type="submit">
                                    <i class="fa fa-search"></i>
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
                                        <th>#</th><th>Id Programa</th><th>Nombre Capacitacion</th><th>Tipo Accion</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($programa_de_capacitaciones_l as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item->id_programa }}</td><td>{{ $item->nombre_capacitacion }}</td><td>{{ $item->tipo_accion }}</td>
                                        <td>
                                            <a href="{{ url('/programa_de_capacitaciones_l/' . $item->id) }}" title="View Programa_de_capacitaciones_l"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/programa_de_capacitaciones_l/' . $item->id . '/edit') }}" title="Edit Programa_de_capacitaciones_l"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/programa_de_capacitaciones_l', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Delete Programa_de_capacitaciones_l',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $programa_de_capacitaciones_l->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
