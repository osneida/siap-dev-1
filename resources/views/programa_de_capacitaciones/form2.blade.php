




<input id="num" name="num" type="hidden" value="0" >


<div class="form-group {{ $errors->has('nombre_trabajador') ? 'has-error' : ''}}">
    {!! Form::label('nombre_trabajador', 'Nombre Trabajador', ['class' => 'control-label']) !!}
    {!! Form::text('nombre_trabajador', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('nombre_trabajador', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('periodo_ejecucion') ? 'has-error' : ''}}">
    {!! Form::label('periodo_ejecucion', 'Periodo Ejecucion', ['class' => 'control-label']) !!}
    {!! Form::date('periodo_ejecucion', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('periodo_ejecucion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cargo_trabajador') ? 'has-error' : ''}}">
    {!! Form::label('cargo_trabajador', 'Cargo Trabajador', ['class' => 'control-label']) !!}
    {!! Form::text('cargo_trabajador', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('cargo_trabajador', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('objetivo_programa') ? 'has-error' : ''}}">
    {!! Form::label('objetivo_programa', 'Objetivo Programa', ['class' => 'control-label']) !!}
    {!! Form::textarea('objetivo_programa', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('objetivo_programa', '<p class="help-block">:message</p>') !!}
</div>



<div class="form-group {{ $errors->has('elaborado_por') ? 'has-error' : ''}}">
    {!! Form::label('elaborado_por', 'Elaborado Por', ['class' => 'control-label']) !!}
    {!! Form::text('elaborado_por', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('elaborado_por', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('firma_elaborado') ? 'has-error' : ''}}">
    {!! Form::label('firma_elaborado', 'Firma Elaborado', ['class' => 'control-label']) !!}
    {!! Form::text('firma_elaborado', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('firma_elaborado', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('aprobado_por') ? 'has-error' : ''}}">
    {!! Form::label('aprobado_por', 'Aprobado Por', ['class' => 'control-label']) !!}
    {!! Form::text('aprobado_por', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('aprobado_por', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('firma_aprobado') ? 'has-error' : ''}}">
    {!! Form::label('firma_aprobado', 'Firma Aprobado', ['class' => 'control-label']) !!}
    {!! Form::text('firma_aprobado', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('firma_aprobado', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('obsevaciones') ? 'has-error' : ''}}">
    {!! Form::label('obsevaciones', 'Obsevaciones', ['class' => 'control-label']) !!}
    {!! Form::textarea('obsevaciones', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('obsevaciones', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>

