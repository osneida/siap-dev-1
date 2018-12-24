@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
           

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Editar Programa_de_capacitacione #{{ $programa_de_capacitacione->id }}  </div>
                    <div class="card-body">
                        <a href="{{ url('/programa_de_capacitaciones') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($programa_de_capacitacione, [
                            'method' => 'PATCH',
                            'url' => ['/programa_de_capacitaciones', $programa_de_capacitacione->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('programa_de_capacitaciones.form2', ['formMode' => 'edit'])

                        {!! Form::close() !!}


<h1>Descripcion del programa</h1>

<table class="table">

@foreach($aa as $item2)


<tr>
<td>
{{$item2->nombre_capacitacion}}
</td>
<td>
{{$item2->tipo_accion}}
</td>
<td>
{{$item2->capacitacion_int}}
</td>
<td>
{{$item2->capacitacion_ext}}
</td>
<td>
<a href="{{ url('/programa_de_capacitaciones_l/' . $item2->id . '/edit') }}" class="btn btn-success">Editar</a>
{!! Form::open([
                                            'method'=>'DELETE',
                                            'url' => ['/programa_de_capacitaciones_l', $item2->id],
                                            'style' => 'display:inline'
                                        ]) !!}
                                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                    'type' => 'submit',
                                                    'class' => 'btn btn-danger btn-sm',
                                                    'title' => 'Delete Programa_de_capacitacione',
                                                    'onclick'=>'return confirm("Confirm delete?")'
                                            )) !!}
                                        {!! Form::close() !!}
</td>
</tr>

@endforeach
</table>











                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
