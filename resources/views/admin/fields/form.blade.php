<div class="form-group{{ $errors->has('title_uz') ? 'has-error' : ''}}">
    <label for="title_uz" class="control-label">{{ 'Title Uz' }}</label>
    <input class="form-control" name="title_uz" type="text" id="title_uz" value="{{ $field->title_uz ?? ''}}" required>

    {!! $errors->first('title_uz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('title_ru') ? 'has-error' : ''}}">
    <label for="title_ru" class="control-label">{{ 'Title Ru' }}</label>
    <input class="form-control" name="title_ru" type="text" id="title_ru" value="{{ $field->title_ru ?? ''}}" >

    {!! $errors->first('title_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('title_en') ? 'has-error' : ''}}">
    <label for="title_en" class="control-label">{{ 'Title En' }}</label>
    <input class="form-control" name="title_en" type="text" id="title_en" value="{{ $field->title_en ?? ''}}" >

    {!! $errors->first('title_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('title_en') ? 'has-error' : ''}}">
    <label for="title_en" class="control-label">{{ 'Title kr' }}</label>
    <input class="form-control" name="title_kr" type="text" id="title_en" value="{{ $field->title_kr ?? ''}}" >

    {!! $errors->first('title_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('description_uz') ? 'has-error' : ''}}">
    <label for="description_uz" class="control-label">{{ 'Description Uz' }}</label>
    <textarea class="form-control" rows="5" name="description_uz" type="textarea" id="description_uz" >{{ $field->description_uz ?? ''}}</textarea>

    {!! $errors->first('description_uz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('description_ru') ? 'has-error' : ''}}">
    <label for="description_ru" class="control-label">{{ 'Description Ru' }}</label>
    <textarea class="form-control" rows="5" name="description_ru" type="textarea" id="description_ru" >{{ $field->description_ru ?? ''}}</textarea>

    {!! $errors->first('description_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('description_en') ? 'has-error' : ''}}">
    <label for="description_en" class="control-label">{{ 'Description En' }}</label>
    <textarea class="form-control" rows="5" name="description_en" type="textarea" id="description_en" >{{ $field->description_en ?? ''}}</textarea>
</div>
<div class="form-group{{ $errors->has('description_en') ? 'has-error' : ''}}">
    <label for="description_en" class="control-label">{{ 'Description kr' }}</label>
    <textarea class="form-control" rows="5" name="description_kr" type="textarea" id="description_en" >{{ $field->description_kr ?? ''}}</textarea>
</div>
<div class="form-group{{ $errors->has('body_uz') ? 'has-error' : ''}}">
    <label for="body_uz" class="control-label">{{ 'Body Uz' }}</label>
    <textarea class="form-control" rows="5" name="body_uz" type="textarea" id="body_uz" >{{ $field->body_uz ?? ''}}</textarea>

    {!! $errors->first('body_uz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('body_ru') ? 'has-error' : ''}}">
    <label for="body_ru" class="control-label">{{ 'Body Ru' }}</label>
    <textarea class="form-control" rows="5" name="body_ru" type="textarea" id="body_ru" >{{ $field->body_ru ?? ''}}</textarea>

    {!! $errors->first('body_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('body_en') ? 'has-error' : ''}}">
    <label for="body_en" class="control-label">{{ 'Body En' }}</label>
    <textarea class="form-control" rows="5" name="body_en" type="textarea" id="body_en" >{{ $field->body_en ?? ''}}</textarea>

    {!! $errors->first('body_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('body_en') ? 'has-error' : ''}}">
    <label for="body_en" class="control-label">{{ 'Body kr' }}</label>
    <textarea class="form-control" rows="5" name="body_kr" type="textarea" id="body_en" >{{ $field->body_kr ?? ''}}</textarea>

    {!! $errors->first('body_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label">{{ 'Image' }}</label>
    <input class="form-control" name="image" type="file" id="image" value="{{ $field->image ?? ''}}" >

    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('meta_keywords') ? 'has-error' : ''}}">
    <label for="meta_keywords" class="control-label">{{ 'Meta Keywords' }}</label>
    <input class="form-control" name="meta_keywords" type="text" id="meta_keywords" value="{{ $field->meta_keywords ?? ''}}" >

    {!! $errors->first('meta_keywords', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('meta_description') ? 'has-error' : ''}}">
    <label for="meta_description" class="control-label">{{ 'Meta Description' }}</label>
    <textarea class="form-control" rows="5" name="meta_description" type="textarea" id="meta_description" >{{ $field->meta_description ?? ''}}</textarea>

    {!! $errors->first('meta_description', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
