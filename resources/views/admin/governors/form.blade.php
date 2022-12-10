<div class="form-group{{ $errors->has('name_uz') ? 'has-error' : ''}}">
    <label for="name_uz" class="control-label">{{ 'Name Uz' }}</label>
    <input class="form-control" name="name_uz" type="text" id="name_uz" value="{{ $governor->name_uz ?? ''}}" required>

    {!! $errors->first('name_uz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('name_ru') ? 'has-error' : ''}}">
    <label for="name_ru" class="control-label">{{ 'Name Ru' }}</label>
    <input class="form-control" name="name_ru" type="text" id="name_ru" value="{{ $governor->name_ru ?? ''}}" >

    {!! $errors->first('name_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('name_en') ? 'has-error' : ''}}">
    <label for="name_en" class="control-label">{{ 'Name En' }}</label>
    <input class="form-control" name="name_en" type="text" id="name_en" value="{{ $governor->name_en ?? ''}}" >

    {!! $errors->first('name_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('name_en') ? 'has-error' : ''}}">
    <label for="name_en" class="control-label">{{ 'Name kr' }}</label>
    <input class="form-control" name="name_kr" type="text" id="name_en" value="{{ $governor->name_kr ?? ''}}" >

    {!! $errors->first('name_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('position_uz') ? 'has-error' : ''}}">
    <label for="position_uz" class="control-label">{{ 'Position Uz' }}</label>
    <input class="form-control" name="position_uz" type="text" id="position_uz" value="{{ $governor->position_uz ?? ''}}" >

    {!! $errors->first('position_uz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('position_ru') ? 'has-error' : ''}}">
    <label for="position_ru" class="control-label">{{ 'Position Ru' }}</label>
    <input class="form-control" name="position_ru" type="text" id="position_ru" value="{{ $governor->position_ru ?? ''}}" >

    {!! $errors->first('position_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('position_en') ? 'has-error' : ''}}">
    <label for="position_en" class="control-label">{{ 'Position En' }}</label>
    <input class="form-control" name="position_en" type="text" id="position_en" value="{{ $governor->position_en ?? ''}}" >

    {!! $errors->first('position_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('position_en') ? 'has-error' : ''}}">
    <label for="position_en" class="control-label">{{ 'Position kr' }}</label>
    <input class="form-control" name="position_kr" type="text" id="position_en" value="{{ $governor->position_kr ?? ''}}" >

    {!! $errors->first('position_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('body_uz') ? 'has-error' : ''}}">
    <label for="body_uz" class="control-label">{{ 'Body Uz' }}</label>
    <textarea class="form-control" rows="5" name="body_uz" type="textarea" id="body_uz" >{{ $governor->body_uz ?? ''}}</textarea>

    {!! $errors->first('body_uz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('body_ru') ? 'has-error' : ''}}">
    <label for="body_ru" class="control-label">{{ 'Body Ru' }}</label>
    <textarea class="form-control" rows="5" name="body_ru" type="textarea" id="body_ru" >{{ $governor->body_ru ?? ''}}</textarea>

    {!! $errors->first('body_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('body_en') ? 'has-error' : ''}}">
    <label for="body_en" class="control-label">{{ 'Body En' }}</label>
    <textarea class="form-control" rows="5" name="body_en" type="textarea" id="body_en" >{{ $governor->body_en ?? ''}}</textarea>

    {!! $errors->first('body_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('body_en') ? 'has-error' : ''}}">
    <label for="body_en" class="control-label">{{ 'Body kr' }}</label>
    <textarea class="form-control" rows="5" name="body_kr" type="textarea" id="body_en" >{{ $governor->body_kr ?? ''}}</textarea>

    {!! $errors->first('body_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label">{{ 'Image' }}</label>
    <input class="form-control" name="image" type="file" id="image" value="{{ $governor->image ?? ''}}" >

    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
