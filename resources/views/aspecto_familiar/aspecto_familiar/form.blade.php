<div class="form-group {{ $errors->has('parentesco') ? 'has-error' : ''}}">
    {!! Form::label('id_personal', 'id_personal', ['class' => 'control-label']) !!}
    {!! Form::text('id_personal', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('id_personal', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group {{ $errors->has('parentesco') ? 'has-error' : ''}}">
    {!! Form::label('parentesco', 'Parentesco', ['class' => 'control-label']) !!}
    {!! Form::text('parentesco', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('parentesco', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    {!! Form::label('nombre', 'Nombre', ['class' => 'control-label']) !!}
    {!! Form::text('nombre', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('edad') ? 'has-error' : ''}}">
    {!! Form::label('edad', 'Edad', ['class' => 'control-label']) !!}
    {!! Form::text('edad', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('edad', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('ocupacion') ? 'has-error' : ''}}">
    {!! Form::label('ocupacion', 'Ocupacion', ['class' => 'control-label']) !!}
    {!! Form::text('ocupacion', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('ocupacion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('domicilio') ? 'has-error' : ''}}">
    {!! Form::label('domicilio', 'Domicilio', ['class' => 'control-label']) !!}
    {!! Form::text('domicilio', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('domicilio', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
