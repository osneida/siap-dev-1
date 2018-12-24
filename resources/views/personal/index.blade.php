@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
          

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Personal</div>
                    <div class="card-body">
                        <a href="{{ url('/personal/personal/create') }}" class="btn btn-success btn-sm" title="Add New Personal">
                            <i class="fa fa-plus" aria-hidden="true"></i> Agregar Nuevo Personal
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/personal/personal', 'class' => 'form-inline my-2 my-lg-0 float-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Buscar..." value="{{ request('search') }}">
                           
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
                                        <th>#</th><th>Nombre Apellido</th><th>Nacimiento</th><th>Sexo</th><th>Gestiones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($personal as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item->nombre_apellido }}</td><td>{{ $item->nacimiento }}</td><td>{{ $item->sexo }}</td>
                                        <td>
                                            <a href="{{ url('/personal/personal/' . $item->id) }}" title="View Personal"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>

 <a class="btn btn-warning btn-sm" target="_blank" href="{{ action('PdfController@getGenerar',['accion'=>'ver','tipo'=>'digital','id'=>$item->id]) }}">Generar PDF</a>


                                            <a href="{{ url('/personal/personal/' . $item->id . '/edit') }}" title="Edit Personal"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/personal/personal', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Borrar',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $personal->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
