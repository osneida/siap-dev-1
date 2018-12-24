<div class="form-group {{ $errors->has('fecha_de_inicio') ? 'has-error' : ''}}">
    {!! Form::label('fecha_de_inicio', 'Fecha De Inicio', ['class' => 'control-label']) !!}
    {!! Form::date('fecha_de_inicio', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('fecha_de_inicio', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fecha_de_finalizacion') ? 'has-error' : ''}}">
    {!! Form::label('fecha_de_finalizacion', 'Fecha De Finalizacion', ['class' => 'control-label']) !!}
    {!! Form::date('fecha_de_finalizacion', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('fecha_de_finalizacion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('personal_en_induccion') ? 'has-error' : ''}}">
    {!! Form::label('personal_en_induccion', 'Personal En Induccion', ['class' => 'control-label']) !!}
    {!! Form::text('personal_en_induccion', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('personal_en_induccion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('puesto_a') ? 'has-error' : ''}}">
    {!! Form::label('puesto_a', 'Puesto A', ['class' => 'control-label']) !!}
    {!! Form::text('puesto_a', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('puesto_a', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('personal_responsable') ? 'has-error' : ''}}">
    {!! Form::label('personal_responsable', 'Personal Responsable', ['class' => 'control-label']) !!}
    {!! Form::text('personal_responsable', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('personal_responsable', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('puesto_b') ? 'has-error' : ''}}">
    {!! Form::label('puesto_b', 'Puesto B', ['class' => 'control-label']) !!}
    {!! Form::text('puesto_b', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('puesto_b', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('actividades_a_realizar') ? 'has-error' : ''}}">
    {!! Form::label('actividades_a_realizar', 'Actividades A Realizar', ['class' => 'control-label']) !!}
    {!! Form::text('actividades_a_realizar', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('actividades_a_realizar', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('documento_asociado') ? 'has-error' : ''}}">
    {!! Form::label('documento_asociado', 'Documento Asociado', ['class' => 'control-label']) !!}
    {!! Form::text('documento_asociado', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('documento_asociado', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nombre_del_trabajador') ? 'has-error' : ''}}">
    {!! Form::label('nombre_del_trabajador', 'Nombre Del Trabajador', ['class' => 'control-label']) !!}
    {!! Form::text('nombre_del_trabajador', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('nombre_del_trabajador', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nombre_del_capacitador') ? 'has-error' : ''}}">
    {!! Form::label('nombre_del_capacitador', 'Nombre Del Capacitador', ['class' => 'control-label']) !!}
    {!! Form::text('nombre_del_capacitador', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('nombre_del_capacitador', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
