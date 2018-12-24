@extends('layouts.layout')
@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1" align="justify" ><span class="glyphicon glyphicon-user">&nbsp;</span>Personal</h1>

        <p><a href={{ url('/personal_com/create') }} class="btn btn-light" title="Crear nuevo Personal_com"><span class="glyphicon glyphicon-plus"></span></a>
        {!! Form::open(['method' => 'GET', 'url' => '/personal_com', 'class' => 'form-inline my-2 my-lg-0 float-right', 'role' => 'search'])  !!}
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
                                        <th>#</th><th>Nombre Apellido</th><th>Nacimiento</th><th>Sexo</th><th>Acciones</th>
                                    </tr>
      </thead>
      <tbody>
      @foreach($personal_com as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nombre_apellido }}</td><td>{{ $item->nacimiento }}</td><td>{{ $item->sexo }}</td>
                                        <td>
                                            <a href="{{ url('/personal_com/' . $item->id) }}" title="View Personal_com"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/personal_com/' . $item->id . '/edit') }}" title="Edit Personal_com"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/personal_com', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Delete Personal_com',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
    </table>
    <div class="pagination-wrapper"> {!! $personal_com->appends(['search' => Request::get('search')])->render() !!} </div>
@endsection

@section('sidebar')
@parent
<!--    <h2>Barra Lateral Personalizada!</h2> -->
@endsection
