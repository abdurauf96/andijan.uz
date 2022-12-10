<div class="form-group{{ $errors->has('question_id') ? 'has-error' : ''}}">
    <label for="question_id" class="control-label">{{ 'Question Id' }}</label>
    <input class="form-control" name="question_id" type="number" id="question_id" value="{{ $answer->question_id ?? ''}}" >

    {!! $errors->first('question_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('title_uz') ? 'has-error' : ''}}">
    <label for="title_uz" class="control-label">{{ 'Title Uz' }}</label>
    <input class="form-control" name="title_uz" type="text" id="title_uz" value="{{ $answer->title_uz ?? ''}}" >

    {!! $errors->first('title_uz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('title_ru') ? 'has-error' : ''}}">
    <label for="title_ru" class="control-label">{{ 'Title Ru' }}</label>
    <input class="form-control" name="title_ru" type="text" id="title_ru" value="{{ $answer->title_ru ?? ''}}" >

    {!! $errors->first('title_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('title_en') ? 'has-error' : ''}}">
    <label for="title_en" class="control-label">{{ 'Title En' }}</label>
    <input class="form-control" name="title_en" type="text" id="title_en" value="{{ $answer->title_en ?? ''}}" >

    {!! $errors->first('title_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('title_kr') ? 'has-error' : ''}}">
    <label for="title_kr" class="control-label">{{ 'Title Kr' }}</label>
    <input class="form-control" name="title_kr" type="text" id="title_kr" value="{{ $answer->title_kr ?? ''}}" >

    {!! $errors->first('title_kr', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
