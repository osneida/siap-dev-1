@extends('layouts.layout')
@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1" align="justify" ><span class="glyphicon glyphicon-user">&nbsp;</span>Head_documento</h1>

        <p><a href={{ url('/head_documento/create') }} class="btn btn-light" title="Crear nuevo head_documento"><span class="glyphicon glyphicon-plus"></span></a>
        {!! Form::open(['method' => 'GET', 'url' => '/head_documento', 'class' => 'form-inline my-2 my-lg-0 float-right', 'role' => 'search'])  !!}
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
                                        <th>#</th><th>Numero Revision</th><th>Elaborado Por</th><th>Revisado Por</th><th>Acciones</th>
                                    </tr>
      </thead>
      <tbody>
      @foreach($head_documento as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->numero_revision }}</td><td>{{ $item->elaborado_por }}</td><td>{{ $item->revisado_por }}</td>
                                        <td>
                                            <a href="{{ url('/head_documento/' . $item->id) }}" title="View head_documento"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/head_documento/' . $item->id . '/edit') }}" title="Edit head_documento"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/head_documento', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Delete head_documento',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
    </table>
    <div class="pagination-wrapper"> {!! $head_documento->appends(['search' => Request::get('search')])->render() !!} </div>
@endsection

@section('sidebar')
@parent
<!--    <h2>Barra Lateral Personalizada!</h2> -->
@endsection
