<div class="form-group {{ $errors->has('nombre_apellido') ? 'has-error' : ''}}">
    {!! Form::label('nombre_apellido', 'Nombre Apellido', ['class' => 'control-label']) !!}
    {!! Form::text('nombre_apellido', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('nombre_apellido', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nacimiento') ? 'has-error' : ''}}">
    {!! Form::label('nacimiento', 'Nacimiento', ['class' => 'control-label']) !!}
    {!! Form::textarea('nacimiento', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('nacimiento', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sexo') ? 'has-error' : ''}}">
    {!! Form::label('sexo', 'Sexo', ['class' => 'control-label']) !!}
    {!! Form::text('sexo', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('sexo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('estado_civil') ? 'has-error' : ''}}">
    {!! Form::label('estado_civil', 'Estado Civil', ['class' => 'control-label']) !!}
    {!! Form::text('estado_civil', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('estado_civil', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('foto') ? 'has-error' : ''}}">
    {!! Form::label('foto', 'Foto', ['class' => 'control-label']) !!}
    {!! Form::text('foto', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('foto', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('imss') ? 'has-error' : ''}}">
    {!! Form::label('imss', 'Imss', ['class' => 'control-label']) !!}
    {!! Form::text('imss', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('imss', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('curp') ? 'has-error' : ''}}">
    {!! Form::label('curp', 'Curp', ['class' => 'control-label']) !!}
    {!! Form::text('curp', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('curp', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('rfc') ? 'has-error' : ''}}">
    {!! Form::label('rfc', 'Rfc', ['class' => 'control-label']) !!}
    {!! Form::text('rfc', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('rfc', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('ine') ? 'has-error' : ''}}">
    {!! Form::label('ine', 'Ine', ['class' => 'control-label']) !!}
    {!! Form::text('ine', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('ine', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('codigo_postal') ? 'has-error' : ''}}">
    {!! Form::label('codigo_postal', 'Codigo Postal', ['class' => 'control-label']) !!}
    {!! Form::text('codigo_postal', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('codigo_postal', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('calle') ? 'has-error' : ''}}">
    {!! Form::label('calle', 'Calle', ['class' => 'control-label']) !!}
    {!! Form::text('calle', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('calle', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('numero_exterior') ? 'has-error' : ''}}">
    {!! Form::label('numero_exterior', 'Numero Exterior', ['class' => 'control-label']) !!}
    {!! Form::text('numero_exterior', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('numero_exterior', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('numero_interior') ? 'has-error' : ''}}">
    {!! Form::label('numero_interior', 'Numero Interior', ['class' => 'control-label']) !!}
    {!! Form::text('numero_interior', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('numero_interior', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('colonia') ? 'has-error' : ''}}">
    {!! Form::label('colonia', 'Colonia', ['class' => 'control-label']) !!}
    {!! Form::text('colonia', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('colonia', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('municipio') ? 'has-error' : ''}}">
    {!! Form::label('municipio', 'Municipio', ['class' => 'control-label']) !!}
    {!! Form::text('municipio', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('municipio', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
    {!! Form::label('estado', 'Estado', ['class' => 'control-label']) !!}
    {!! Form::text('estado', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('celular') ? 'has-error' : ''}}">
    {!! Form::label('celular', 'Celular', ['class' => 'control-label']) !!}
    {!! Form::text('celular', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('celular', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('telefono_casa') ? 'has-error' : ''}}">
    {!! Form::label('telefono_casa', 'Telefono Casa', ['class' => 'control-label']) !!}
    {!! Form::text('telefono_casa', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('telefono_casa', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
    {!! Form::text('email', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('c_nombre') ? 'has-error' : ''}}">
    {!! Form::label('c_nombre', 'C Nombre', ['class' => 'control-label']) !!}
    {!! Form::text('c_nombre', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('c_nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('c_celular') ? 'has-error' : ''}}">
    {!! Form::label('c_celular', 'C Celular', ['class' => 'control-label']) !!}
    {!! Form::text('c_celular', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('c_celular', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('c_telefono') ? 'has-error' : ''}}">
    {!! Form::label('c_telefono', 'C Telefono', ['class' => 'control-label']) !!}
    {!! Form::text('c_telefono', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('c_telefono', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('c_email') ? 'has-error' : ''}}">
    {!! Form::label('c_email', 'C Email', ['class' => 'control-label']) !!}
    {!! Form::text('c_email', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('c_email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('grado_instrucion') ? 'has-error' : ''}}">
    {!! Form::label('grado_instrucion', 'Grado Instrucion', ['class' => 'control-label']) !!}
    {!! Form::text('grado_instrucion', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('grado_instrucion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('titulo') ? 'has-error' : ''}}">
    {!! Form::label('titulo', 'Titulo', ['class' => 'control-label']) !!}
    {!! Form::text('titulo', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('titulo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('idiomas') ? 'has-error' : ''}}">
    {!! Form::label('idiomas', 'Idiomas', ['class' => 'control-label']) !!}
    {!! Form::text('idiomas', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('idiomas', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
