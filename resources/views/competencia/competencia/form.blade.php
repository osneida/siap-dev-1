<div class="form-group {{ $errors->has('numero_revision') ? 'has-error' : ''}}">
    {!! Form::label('numero_revision', 'Numero Revision', ['class' => 'control-label']) !!}
    {!! Form::text('numero_revision', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('numero_revision', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('elaborado_por') ? 'has-error' : ''}}">
    {!! Form::label('elaborado_por', 'Elaborado Por', ['class' => 'control-label']) !!}
    {!! Form::text('elaborado_por', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('elaborado_por', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('revisado_por') ? 'has-error' : ''}}">
    {!! Form::label('revisado_por', 'Revisado Por', ['class' => 'control-label']) !!}
    {!! Form::text('revisado_por', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('revisado_por', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cargo_elaborado') ? 'has-error' : ''}}">
    {!! Form::label('cargo_elaborado', 'Cargo Elaborado', ['class' => 'control-label']) !!}
    {!! Form::text('cargo_elaborado', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('cargo_elaborado', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cargo_revisado') ? 'has-error' : ''}}">
    {!! Form::label('cargo_revisado', 'Cargo Revisado', ['class' => 'control-label']) !!}
    {!! Form::text('cargo_revisado', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('cargo_revisado', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fecha_revision') ? 'has-error' : ''}}">
    {!! Form::label('fecha_revision', 'Fecha Revision', ['class' => 'control-label']) !!}
    {!! Form::date('fecha_revision', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('fecha_revision', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fecha_creacion') ? 'has-error' : ''}}">
    {!! Form::label('fecha_creacion', 'Fecha Creacion', ['class' => 'control-label']) !!}
    {!! Form::date('fecha_creacion', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('fecha_creacion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('estatus') ? 'has-error' : ''}}">
    {!! Form::label('estatus', 'Estatus', ['class' => 'control-label']) !!}
    <div class="checkbox">
    <label>{!! Form::radio('estatus', '1') !!} Yes</label>
</div>
<div class="checkbox">
    <label>{!! Form::radio('estatus', '0', true) !!} No</label>
</div>
    {!! $errors->first('estatus', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('objectivo') ? 'has-error' : ''}}">
    {!! Form::label('objectivo', 'Objectivo', ['class' => 'control-label']) !!}
    {!! Form::textarea('objectivo', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('objectivo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('alcance') ? 'has-error' : ''}}">
    {!! Form::label('alcance', 'Alcance', ['class' => 'control-label']) !!}
    {!! Form::textarea('alcance', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('alcance', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('definicion') ? 'has-error' : ''}}">
    {!! Form::label('definicion', 'Definicion', ['class' => 'control-label']) !!}
    {!! Form::textarea('definicion', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('definicion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('responsabilidades') ? 'has-error' : ''}}">
    {!! Form::label('responsabilidades', 'Responsabilidades', ['class' => 'control-label']) !!}
    {!! Form::textarea('responsabilidades', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('responsabilidades', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('descripcion_actividades') ? 'has-error' : ''}}">
    {!! Form::label('descripcion_actividades', 'Descripcion Actividades', ['class' => 'control-label']) !!}
    {!! Form::textarea('descripcion_actividades', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('descripcion_actividades', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('registros') ? 'has-error' : ''}}">
    {!! Form::label('registros', 'Registros', ['class' => 'control-label']) !!}
    {!! Form::textarea('registros', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('registros', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('referencias_internas') ? 'has-error' : ''}}">
    {!! Form::label('referencias_internas', 'Referencias Internas', ['class' => 'control-label']) !!}
    {!! Form::textarea('referencias_internas', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('referencias_internas', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('referencias_externas') ? 'has-error' : ''}}">
    {!! Form::label('referencias_externas', 'Referencias Externas', ['class' => 'control-label']) !!}
    {!! Form::textarea('referencias_externas', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('referencias_externas', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('control_cambio') ? 'has-error' : ''}}">
    {!! Form::label('control_cambio', 'Control Cambio', ['class' => 'control-label']) !!}
    {!! Form::textarea('control_cambio', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('control_cambio', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
