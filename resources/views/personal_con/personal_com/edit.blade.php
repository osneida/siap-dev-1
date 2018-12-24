@extends('layouts.layout')

@section('title',"Editar  Personal_com")

@section('content')
<a href="{{ url('/personal_com') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
<div class="card">
    <h4 class="card-header">
        Editar  Personal_com
    </h4>
    <div class="card-body">
    @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        {!! Form::model($personal_com, [
                            'method' => 'PATCH',
                            'url' => ['/personal_com', $personal_com->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('personal_con.personal_com.form2', ['formMode' => 'edit'])

                        {!! Form::close() !!}



<h1>Descripcion del programa</h1>

<table class="table">

@foreach($aa as $item2)


<tr>
<td>
{{$item2->parentesco}}
</td>
<td>
{{$item2->nombre}}
</td>
<td>
{{$item2->edad}}
</td>
<td>
{{$item2->domicilio}}
</td>
<td>
<a href="{{ url('/aspecto_familiar/' . $item2->id . '/edit') }}" class="btn btn-success">Editar</a>
{!! Form::open([
                                            'method'=>'DELETE',
                                            'url' => ['/aspecto_familiar', $item2->id],
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
@endsection
