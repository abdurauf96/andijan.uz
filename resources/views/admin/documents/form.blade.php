<div class="form-group{{ $errors->has('title_uz') ? 'has-error' : ''}}">
    <label for="title_uz" class="control-label">{{ 'Title Uz' }}</label>
    <input class="form-control" name="title_uz" type="text" id="title_uz" value="{{ $document->title_uz ?? ''}}" required>

    {!! $errors->first('title_uz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('title_ru') ? 'has-error' : ''}}">
    <label for="title_ru" class="control-label">{{ 'Title Ru' }}</label>
    <input class="form-control" name="title_ru" type="text" id="title_ru" value="{{ $document->title_ru ?? ''}}" >

    {!! $errors->first('title_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('title_en') ? 'has-error' : ''}}">
    <label for="title_en" class="control-label">{{ 'Title En' }}</label>
    <input class="form-control" name="title_en" type="text" id="title_en" value="{{ $document->title_en ?? ''}}" >

    {!! $errors->first('title_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('title_en') ? 'has-error' : ''}}">
    <label for="title_en" class="control-label">{{ 'Title Kr' }}</label>
    <input class="form-control" name="title_kr" type="text" id="title_en" value="{{ $document->title_kr ?? ''}}" >

    {!! $errors->first('title_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label">{{ 'Image' }}</label>
    <input class="form-control" name="image" type="file" id="image" value="{{ $document->image ?? ''}}" >

    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('link') ? 'has-error' : ''}}">
    <label for="link" class="control-label">{{ 'Link' }}</label>
    <input class="form-control" name="link" type="text" id="link" value="{{ $document->link ?? ''}}" >

    {!! $errors->first('link', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
