<div class="form-group {{ $errors->has('id_programa') ? 'has-error' : ''}}">
    {!! Form::label('id_programa', 'Id Programa', ['class' => 'control-label']) !!}
    {!! Form::text('id_programa', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('id_programa', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nombre_capacitacion') ? 'has-error' : ''}}">
    {!! Form::label('nombre_capacitacion', 'Nombre Capacitacion', ['class' => 'control-label']) !!}
    {!! Form::text('nombre_capacitacion', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('nombre_capacitacion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tipo_accion') ? 'has-error' : ''}}">
    {!! Form::label('tipo_accion', 'Tipo Accion', ['class' => 'control-label']) !!}
    {!! Form::text('tipo_accion', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('tipo_accion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('capacitacion_int') ? 'has-error' : ''}}">
    {!! Form::label('capacitacion_int', 'Capacitacion Int', ['class' => 'control-label']) !!}
    {!! Form::text('capacitacion_int', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('capacitacion_int', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('capacitacion_ext') ? 'has-error' : ''}}">
    {!! Form::label('capacitacion_ext', 'Capacitacion Ext', ['class' => 'control-label']) !!}
    {!! Form::text('capacitacion_ext', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('capacitacion_ext', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('contenido') ? 'has-error' : ''}}">
    {!! Form::label('contenido', 'Contenido', ['class' => 'control-label']) !!}
    {!! Form::text('contenido', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('contenido', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('costo_aproximado') ? 'has-error' : ''}}">
    {!! Form::label('costo_aproximado', 'Costo Aproximado', ['class' => 'control-label']) !!}
    {!! Form::text('costo_aproximado', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('costo_aproximado', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('mecanismo_medicion') ? 'has-error' : ''}}">
    {!! Form::label('mecanismo_medicion', 'Mecanismo Medicion', ['class' => 'control-label']) !!}
    {!! Form::text('mecanismo_medicion', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('mecanismo_medicion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('requisito') ? 'has-error' : ''}}">
    {!! Form::label('requisito', 'Requisito', ['class' => 'control-label']) !!}
    {!! Form::text('requisito', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('requisito', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('duracion_curso') ? 'has-error' : ''}}">
    {!! Form::label('duracion_curso', 'Duracion Curso', ['class' => 'control-label']) !!}
    {!! Form::text('duracion_curso', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('duracion_curso', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Modificar' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
