@extends('layouts.layout')
@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1" align="justify" ><span class="glyphicon glyphicon-user">&nbsp;</span>Proceso inducción</h1>

        <p><a href={{ url('/proceso_induccion/create') }} class="btn btn-light" title="Crear nuevo proceso_induccion"><span class="glyphicon glyphicon-plus"></span></a>
        {!! Form::open(['method' => 'GET', 'url' => '/proceso_induccion', 'class' => 'form-inline my-2 my-lg-0 float-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Buscar..." value="{{ request('search') }}">
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
                                        <th>#</th><th>Fecha Inicio</th><th>Fecha Finalizacion</th><th>Personal En Induccion</th><th>Acciones</th>
                                    </tr>
      </thead>
      <tbody>
      @foreach($proceso_induccion as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->fecha_inicio }}</td><td>{{ $item->fecha_finalizacion }}</td><td>{{ $item->personal_en_induccion }}</td>
                                        <td>
                                        
                                            <a href="{{ url('/proceso_induccion/' . $item->id) }}" title="View proceso_induccion"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a title="Generar PDF" href="{{ action('Proceso_induccion\\proceso_induccionController@getGenerar',['accion'=>'ver','tipo'=>'digital','id'=>$item->id]) }}"><button class="btn btn-warning btn-sm">Generar PDF</button></a>
                                            
                                            <a href="{{ url('/proceso_induccion/' . $item->id . '/edit') }}" title="Edit proceso_induccion"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/proceso_induccion', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Delete proceso_induccion',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
    </table>
    <div class="pagination-wrapper"> {!! $proceso_induccion->appends(['search' => Request::get('search')])->render() !!} </div>
@endsection

@section('sidebar')
@parent
<!--    <h2>Barra Lateral Personalizada!</h2> -->
@endsection
