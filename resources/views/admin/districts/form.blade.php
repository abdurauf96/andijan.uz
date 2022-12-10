<div class="form-group{{ $errors->has('title_uz') ? 'has-error' : ''}}">
    <label for="title_uz" class="control-label">{{ 'Title Uz' }}</label>
    <input class="form-control" name="title_uz" type="text" id="title_uz" value="{{ $district->title_uz ?? ''}}" required>

    {!! $errors->first('title_uz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('title_ru') ? 'has-error' : ''}}">
    <label for="title_ru" class="control-label">{{ 'Title Ru' }}</label>
    <input class="form-control" name="title_ru" type="text" id="title_ru" value="{{ $district->title_ru ?? ''}}" >

    {!! $errors->first('title_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('title_en') ? 'has-error' : ''}}">
    <label for="title_en" class="control-label">{{ 'Title En' }}</label>
    <input class="form-control" name="title_en" type="text" id="title_en" value="{{ $district->title_en ?? ''}}" >

    {!! $errors->first('title_en', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('title_uz') ? 'has-error' : ''}}">
    <label for="title_uz" class="control-label">{{ 'Title Kr' }}</label>
    <input class="form-control" name="title_kr" type="text" id="title_uz" value="{{ $district->title_kr ?? ''}}" required>

    {!! $errors->first('title_uz', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('body_uz') ? 'has-error' : ''}}">
    <label for="body_uz" class="control-label">{{ 'Description Uz' }}</label>
    <textarea class="form-control" rows="5" name="description_uz" type="textarea" id="body_uz" >{{ $district->description_uz ?? ''}}</textarea>

    {!! $errors->first('body_uz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('body_ru') ? 'has-error' : ''}}">
    <label for="body_ru" class="control-label">{{ 'Description Ru' }}</label>
    <textarea class="form-control" rows="5" name="description_ru" type="textarea" id="body_ru" >{{ $district->description_ru ?? ''}}</textarea>

    {!! $errors->first('body_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('body_en') ? 'has-error' : ''}}">
    <label for="body_en" class="control-label">{{ 'Description En' }}</label>
    <textarea class="form-control" rows="5" name="description_en" type="textarea" id="body_en" >{{ $district->description_en ?? ''}}</textarea>

    {!! $errors->first('body_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('body_en') ? 'has-error' : ''}}">
    <label for="body_en" class="control-label">{{ 'Description Kr' }}</label>
    <textarea class="form-control" rows="5" name="description_kr" type="textarea" id="body_en" >{{ $district->description_kr ?? ''}}</textarea>

    {!! $errors->first('body_en', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('body_uz') ? 'has-error' : ''}}">
    <label for="body_uz" class="control-label">{{ 'Body Uz' }}</label>
    <textarea class="form-control" rows="5" name="body_uz" type="textarea" id="body_uz" >{{ $district->body_uz ?? ''}}</textarea>

    {!! $errors->first('body_uz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('body_ru') ? 'has-error' : ''}}">
    <label for="body_ru" class="control-label">{{ 'Body Ru' }}</label>
    <textarea class="form-control" rows="5" name="body_ru" type="textarea" id="body_ru" >{{ $district->body_ru ?? ''}}</textarea>

    {!! $errors->first('body_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('body_en') ? 'has-error' : ''}}">
    <label for="body_en" class="control-label">{{ 'Body En' }}</label>
    <textarea class="form-control" rows="5" name="body_en" type="textarea" id="body_en" >{{ $district->body_en ?? ''}}</textarea>

    {!! $errors->first('body_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('body_en') ? 'has-error' : ''}}">
    <label for="body_en" class="control-label">{{ 'Body Kr' }}</label>
    <textarea class="form-control" rows="5" name="body_kr" type="textarea" id="body_en" >{{ $district->body_kr ?? ''}}</textarea>
    {!! $errors->first('body_en', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('phone1') ? 'has-error' : ''}}">
    <label for="phone1" class="control-label">{{ 'Balandligi' }}</label>
    <input class="form-control" name="height" type="text" id="height" value="{{ $district->height ?? ''}}" >
</div>

<div class="form-group{{ $errors->has('phone2') ? 'has-error' : ''}}">
    <label for="phone2" class="control-label">{{ 'Aholisi' }}</label>
    <input class="form-control" name="population" type="text" id="phone2" value="{{ $district->population ?? ''}}" >
</div>

<div class="form-group{{ $errors->has('work_time') ? 'has-error' : ''}}">
    <label for="work_time" class="control-label">{{ 'Maydoni' }}</label>
    <input class="form-control" name="area" type="text" id="work_time" value="{{ $district->area ?? ''}}" >
</div>
<div class="form-group{{ $errors->has('exat') ? 'has-error' : ''}}">
    <label for="exat" class="control-label">{{ 'Ob havo' }}</label>
    <input class="form-control" name="weather" type="text" id="exat" value="{{ $district->weather ?? ''}}" >
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
