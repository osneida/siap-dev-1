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


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
