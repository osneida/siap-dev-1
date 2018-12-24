@extends('layouts.layout')
@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1" align="justify" ><span class="glyphicon glyphicon-user">&nbsp;</span>Descripcion del puesto</h1>

        <p><a href={{ url('/descripcion_puesto/create') }} class="btn btn-light" title="Crear nuevo Descripcion_puesto"><span class="glyphicon glyphicon-plus"></span></a>
        {!! Form::open(['method' => 'GET', 'url' => '/descripcion_puesto', 'class' => 'form-inline my-2 my-lg-0 float-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                            <span class="input-group-append">
                                <button class="btn btn-secondary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        {!! Form::close() !!}
    
    </div>


    <table class="table">
      <thead class="thead bg-secondary text-white">
      <tr>
                                        <th>#</th><th>Nombre Puesto</th><th>Supervisor Inmediato</th><th>Nivel Autoridad</th><th>Acciones</th>
                                    </tr>
      </thead>
      <tbody>
      @foreach($descripcion_puesto as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nombre_puesto }}</td><td>{{ $item->supervisor_inmediato }}</td><td>{{ $item->nivel_autoridad }}</td>
                                        <td>
                                            <a href="{{ url('/descripcion_puesto/' . $item->id) }}" title="View Descripcion_puesto"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a title="Generar PDF" href="{{ action('Descripcion_puesto\\Descripcion_puestoController@getGenerar',['accion'=>'ver','tipo'=>'digital','id'=>$item->id]) }}"><button class="btn btn-warning btn-sm">Generar PDF</button></a>
                                            <a href="{{ url('/descripcion_puesto/' . $item->id . '/edit') }}" title="Edit Descripcion_puesto"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/descripcion_puesto', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Delete Descripcion_puesto',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
    </table>
    <div class="pagination-wrapper"> {!! $descripcion_puesto->appends(['search' => Request::get('search')])->render() !!} </div>
@endsection

@section('sidebar')
@parent
<!--    <h2>Barra Lateral Personalizada!</h2> -->
@endsection
