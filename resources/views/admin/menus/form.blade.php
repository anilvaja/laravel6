<div class="form-group{{ $errors->has('Title') ? 'has-error' : ''}}">
    {!! Form::label('Title', 'Title', ['class' => 'control-label']) !!}
    {!! Form::text('Title', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('Title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('path') ? 'has-error' : ''}}">
    {!! Form::label('path', 'Path', ['class' => 'control-label']) !!}
    {!! Form::text('path', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('path', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('user_access') ? 'has-error' : ''}}">
    {!! Form::label('user_access', 'User Access', ['class' => 'control-label']) !!}
    {!! Form::textarea('user_access', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('user_access', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
