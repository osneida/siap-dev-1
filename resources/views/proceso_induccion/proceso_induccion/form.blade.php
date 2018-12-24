<h1>Informacion del documento </h1>
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


<div class="form-group {{ $errors->has('fecha_inicio') ? 'has-error' : ''}}">
    {!! Form::label('fecha_inicio', 'Fecha Inicio', ['class' => 'control-label']) !!}
    {!! Form::date('fecha_inicio', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('fecha_inicio', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fecha_finalizacion') ? 'has-error' : ''}}">
    {!! Form::label('fecha_finalizacion', 'Fecha Finalizacion', ['class' => 'control-label']) !!}
    {!! Form::date('fecha_finalizacion', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('fecha_finalizacion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('personal_en_induccion') ? 'has-error' : ''}}">
    {!! Form::label('personal_en_induccion', 'Personal En Induccion', ['class' => 'control-label']) !!}
    {!! Form::text('personal_en_induccion', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('personal_en_induccion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('puesto_induccion') ? 'has-error' : ''}}">
    {!! Form::label('puesto_induccion', 'Puesto Induccion', ['class' => 'control-label']) !!}
    {!! Form::text('puesto_induccion', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('puesto_induccion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('personal_responsable') ? 'has-error' : ''}}">
    {!! Form::label('personal_responsable', 'Personal Responsable', ['class' => 'control-label']) !!}
    {!! Form::text('personal_responsable', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('personal_responsable', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('puesto_responsable') ? 'has-error' : ''}}">
    {!! Form::label('puesto_responsable', 'Puesto Responsable', ['class' => 'control-label']) !!}
    {!! Form::text('puesto_responsable', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('puesto_responsable', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('motivo') ? 'has-error' : ''}}">
    {!! Form::label('motivo', 'Motivo', ['class' => 'control-label']) !!}
    {!! Form::text('motivo', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('motivo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('especifique') ? 'has-error' : ''}}">
    {!! Form::label('especifique', 'Especifique', ['class' => 'control-label']) !!}
    {!! Form::text('especifique', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('especifique', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('actividades') ? 'has-error' : ''}}">
    {!! Form::label('actividades', 'Actividades', ['class' => 'control-label']) !!}
    {!! Form::textarea('actividades', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('actividades', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('documento_asociado') ? 'has-error' : ''}}">
    {!! Form::label('documento_asociado', 'Documento Asociado', ['class' => 'control-label']) !!}
    {!! Form::text('documento_asociado', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('documento_asociado', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('firma_trabajador') ? 'has-error' : ''}}">
    {!! Form::label('firma_trabajador', 'Firma Trabajador', ['class' => 'control-label']) !!}
    {!! Form::text('firma_trabajador', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('firma_trabajador', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('firma_capacitador') ? 'has-error' : ''}}">
    {!! Form::label('firma_capacitador', 'Firma Capacitador', ['class' => 'control-label']) !!}
    {!! Form::text('firma_capacitador', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('firma_capacitador', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
