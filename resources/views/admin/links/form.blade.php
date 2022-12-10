<div class="form-group{{ $errors->has('link') ? 'has-error' : ''}}">
    <label for="link" class="control-label">{{ 'Sayt sarlavhasi UZ' }}</label>
    <input class="form-control" name="title_uz" type="text" id="link" value="{{ $link->title_uz ?? ''}}" required>
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('link') ? 'has-error' : ''}}">
    <label for="link" class="control-label">{{ 'Sayt sarlavhasi ru' }}</label>
    <input class="form-control" name="title_ru" type="text" id="link" value="{{ $link->title_ru ?? ''}}" required>
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('link') ? 'has-error' : ''}}">
    <label for="link" class="control-label">{{ 'Sayt sarlavhasi en' }}</label>
    <input class="form-control" name="title_en" type="text" id="link" value="{{ $link->title_en ?? ''}}" required>
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('link') ? 'has-error' : ''}}">
    <label for="link" class="control-label">{{ 'Sayt sarlavhasi kr' }}</label>
    <input class="form-control" name="title_kr" type="text" id="link" value="{{ $link->title_kr ?? ''}}" required>
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group{{ $errors->has('link') ? 'has-error' : ''}}">
    <label for="link" class="control-label">{{ 'Link' }}</label>
    <input class="form-control" name="link" type="text" id="link" value="{{ $link->link ?? ''}}" required>
    {!! $errors->first('link', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label">{{ 'Image' }}</label>
    <input class="form-control" name="image" type="file" id="image" value="{{ $link->image ?? ''}}" >
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
