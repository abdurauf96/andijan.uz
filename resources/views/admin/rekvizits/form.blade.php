<div class="form-group{{ $errors->has('title_uz') ? 'has-error' : ''}}">
    <label for="title_uz" class="control-label">{{ 'Title Uz' }}</label>
    <input class="form-control" name="title_uz" type="text" id="title_uz" value="{{ $rekvizit->title_uz ?? ''}}" required>

    {!! $errors->first('title_uz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('title_ru') ? 'has-error' : ''}}">
    <label for="title_ru" class="control-label">{{ 'Title Ru' }}</label>
    <input class="form-control" name="title_ru" type="text" id="title_ru" value="{{ $rekvizit->title_ru ?? ''}}" >

    {!! $errors->first('title_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('title_en') ? 'has-error' : ''}}">
    <label for="title_en" class="control-label">{{ 'Title En' }}</label>
    <input class="form-control" name="title_en" type="text" id="title_en" value="{{ $rekvizit->title_en ?? ''}}" >

    {!! $errors->first('title_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('title_en') ? 'has-error' : ''}}">
    <label for="title_en" class="control-label">{{ 'Title kr' }}</label>
    <input class="form-control" name="title_kr" type="text" id="title_en" value="{{ $rekvizit->title_kr ?? ''}}" >

    {!! $errors->first('title_en', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('body_uz') ? 'has-error' : ''}}">
    <label for="body_uz" class="control-label">{{ 'Body Uz' }}</label>
    <textarea class="form-control" rows="5" name="body_uz" type="textarea" id="body_uz" >{{ $rekvizit->body_uz ?? ''}}</textarea>

    {!! $errors->first('body_uz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('body_ru') ? 'has-error' : ''}}">
    <label for="body_ru" class="control-label">{{ 'Body Ru' }}</label>
    <textarea class="form-control" rows="5" name="body_ru" type="textarea" id="body_ru" >{{ $rekvizit->body_ru ?? ''}}</textarea>

    {!! $errors->first('body_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('body_en') ? 'has-error' : ''}}">
    <label for="body_en" class="control-label">{{ 'Body En' }}</label>
    <textarea class="form-control" rows="5" name="body_en" type="textarea" id="body_en" >{{ $rekvizit->body_en ?? ''}}</textarea>

    {!! $errors->first('body_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('body_en') ? 'has-error' : ''}}">
    <label for="body_en" class="control-label">{{ 'Body kr' }}</label>
    <textarea class="form-control" rows="5" name="body_kr" type="textarea" id="body_en" >{{ $rekvizit->body_kr ?? ''}}</textarea>

    {!! $errors->first('body_en', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('file') ? 'has-error' : ''}}">
    <label for="file" class="control-label">{{ 'File' }}</label>
    <input class="form-control" name="file" type="file" id="file" value="{{ $rekvizit->file ?? ''}}" >

    {!! $errors->first('file', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
