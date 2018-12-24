<h1>Información del documento</h1>


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





<h1>Documento</h1>
<div class="form-group {{ $errors->has('nombre_puesto') ? 'has-error' : ''}}">
    {!! Form::label('nombre_puesto', 'Nombre Puesto', ['class' => 'control-label']) !!}
    {!! Form::text('nombre_puesto', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('nombre_puesto', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('supervisor_inmediato') ? 'has-error' : ''}}">
    {!! Form::label('supervisor_inmediato', 'Supervisor Inmediato', ['class' => 'control-label']) !!}
    {!! Form::text('supervisor_inmediato', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('supervisor_inmediato', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nivel_autoridad') ? 'has-error' : ''}}">
    {!! Form::label('nivel_autoridad', 'Nivel Autoridad', ['class' => 'control-label']) !!}
    {!! Form::text('nivel_autoridad', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('nivel_autoridad', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('funciones_responsabilidad') ? 'has-error' : ''}}">
    {!! Form::label('funciones_responsabilidad', 'Funciones Responsabilidad', ['class' => 'control-label']) !!}
    {!! Form::textarea('funciones_responsabilidad', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('funciones_responsabilidad', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('actividades') ? 'has-error' : ''}}">
    {!! Form::label('actividades', 'Actividades', ['class' => 'control-label']) !!}
    {!! Form::textarea('actividades', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('actividades', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nivel_academico') ? 'has-error' : ''}}">
    {!! Form::label('nivel_academico', 'Nivel Academico', ['class' => 'control-label']) !!}
    {!! Form::text('nivel_academico', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('nivel_academico', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('formacion') ? 'has-error' : ''}}">
    {!! Form::label('formacion', 'Formacion', ['class' => 'control-label']) !!}
    {!! Form::text('formacion', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('formacion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('experiencia') ? 'has-error' : ''}}">
    {!! Form::label('experiencia', 'Experiencia', ['class' => 'control-label']) !!}
    {!! Form::text('experiencia', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('experiencia', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('competencias') ? 'has-error' : ''}}">
    {!! Form::label('competencias', 'Competencias', ['class' => 'control-label']) !!}
    {!! Form::text('competencias', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('competencias', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('habilidades') ? 'has-error' : ''}}">
    {!! Form::label('habilidades', 'Habilidades', ['class' => 'control-label']) !!}
    {!! Form::text('habilidades', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('habilidades', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('aprobado_por') ? 'has-error' : ''}}">
    {!! Form::label('aprobado_por', 'Aprobado Por', ['class' => 'control-label']) !!}
    {!! Form::text('aprobado_por', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('aprobado_por', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('recibido_por') ? 'has-error' : ''}}">
    {!! Form::label('recibido_por', 'Recibido Por', ['class' => 'control-label']) !!}
    {!! Form::text('recibido_por', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('recibido_por', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('firma_aprobado') ? 'has-error' : ''}}">
    {!! Form::label('firma_aprobado', 'Firma Aprobado', ['class' => 'control-label']) !!}
    {!! Form::text('firma_aprobado', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('firma_aprobado', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('firma_recibido') ? 'has-error' : ''}}">
    {!! Form::label('firma_recibido', 'Firma Recibido', ['class' => 'control-label']) !!}
    {!! Form::text('firma_recibido', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('firma_recibido', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
