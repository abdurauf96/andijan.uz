<div class="form-group{{ $errors->has('title_uz') ? 'has-error' : ''}}">
    <label for="title_uz" class="control-label">{{ 'Title Uz' }}</label>
    <textarea class="form-control" rows="5" name="title_uz" type="textarea" id="title_uz" >{{ $question->title_uz ?? ''}}</textarea>

    {!! $errors->first('title_uz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('title_ru') ? 'has-error' : ''}}">
    <label for="title_ru" class="control-label">{{ 'Title Ru' }}</label>
    <textarea class="form-control" rows="5" name="title_ru" type="textarea" id="title_ru" >{{ $question->title_ru ?? ''}}</textarea>

    {!! $errors->first('title_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('title_en') ? 'has-error' : ''}}">
    <label for="title_en" class="control-label">{{ 'Title En' }}</label>
    <textarea class="form-control" rows="5" name="title_en" type="textarea" id="title_en" >{{ $question->title_en ?? ''}}</textarea>

    {!! $errors->first('title_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('title_kr') ? 'has-error' : ''}}">
    <label for="title_kr" class="control-label">{{ 'Title Kr' }}</label>
    <textarea class="form-control" rows="5" name="title_kr" type="textarea" id="title_kr" >{{ $question->title_kr ?? ''}}</textarea>

    {!! $errors->first('title_kr', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
