<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('slug') ? 'has-error' : ''}}">
    {!! Form::label('slug', 'Slug', ['class' => 'control-label']) !!}
    {!! Form::text('slug', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('slug', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('parent') ? 'has-error' : ''}}">
    {!! Form::label('parent', 'Parent', ['class' => 'control-label']) !!}
    {!! Form::number('parent', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('parent', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('menuorder') ? 'has-error' : ''}}">
    {!! Form::label('menuorder', 'Menuorder', ['class' => 'control-label']) !!}
    {!! Form::number('menuorder', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('menuorder', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('enabled') ? 'has-error' : ''}}">
    {!! Form::label('enabled', 'Enabled', ['class' => 'control-label']) !!}
    <div class="checkbox">
    <label>{!! Form::radio('enabled', '1') !!} Yes</label>
</div>
<div class="checkbox">
    <label>{!! Form::radio('enabled', '0', true) !!} No</label>
</div>
    {!! $errors->first('enabled', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
