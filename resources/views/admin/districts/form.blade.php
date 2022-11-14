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
<div class="form-group{{ $errors->has('hokim_image') ? 'has-error' : ''}}">
    <label for="hokim_image" class="control-label">{{ 'Hokim Image' }}</label>
    <input class="form-control" name="hokim_image" type="text" id="hokim_image" value="{{ $district->hokim_image ?? ''}}" >

    {!! $errors->first('hokim_image', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('hokim_text_uz') ? 'has-error' : ''}}">
    <label for="hokim_text_uz" class="control-label">{{ 'Hokim Text Uz' }}</label>
    <textarea class="form-control" rows="5" name="hokim_text_uz" type="textarea" id="hokim_text_uz" >{{ $district->hokim_text_uz ?? ''}}</textarea>

    {!! $errors->first('hokim_text_uz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('hokim_text_ru') ? 'has-error' : ''}}">
    <label for="hokim_text_ru" class="control-label">{{ 'Hokim Text Ru' }}</label>
    <textarea class="form-control" rows="5" name="hokim_text_ru" type="textarea" id="hokim_text_ru" >{{ $district->hokim_text_ru ?? ''}}</textarea>

    {!! $errors->first('hokim_text_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('hokim_text_en') ? 'has-error' : ''}}">
    <label for="hokim_text_en" class="control-label">{{ 'Hokim Text En' }}</label>
    <textarea class="form-control" rows="5" name="hokim_text_en" type="textarea" id="hokim_text_en" >{{ $district->hokim_text_en ?? ''}}</textarea>

    {!! $errors->first('hokim_text_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('addres_uz') ? 'has-error' : ''}}">
    <label for="addres_uz" class="control-label">{{ 'Addres Uz' }}</label>
    <input class="form-control" name="addres_uz" type="text" id="addres_uz" value="{{ $district->addres_uz ?? ''}}" >

    {!! $errors->first('addres_uz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('addres_ru') ? 'has-error' : ''}}">
    <label for="addres_ru" class="control-label">{{ 'Addres Ru' }}</label>
    <input class="form-control" name="addres_ru" type="text" id="addres_ru" value="{{ $district->addres_ru ?? ''}}" >

    {!! $errors->first('addres_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('addres_en') ? 'has-error' : ''}}">
    <label for="addres_en" class="control-label">{{ 'Addres En' }}</label>
    <input class="form-control" name="addres_en" type="text" id="addres_en" value="{{ $district->addres_en ?? ''}}" >

    {!! $errors->first('addres_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('phone1') ? 'has-error' : ''}}">
    <label for="phone1" class="control-label">{{ 'Phone1' }}</label>
    <input class="form-control" name="phone1" type="text" id="phone1" value="{{ $district->phone1 ?? ''}}" >

    {!! $errors->first('phone1', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('phone2') ? 'has-error' : ''}}">
    <label for="phone2" class="control-label">{{ 'Phone2' }}</label>
    <input class="form-control" name="phone2" type="text" id="phone2" value="{{ $district->phone2 ?? ''}}" >

    {!! $errors->first('phone2', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('work_time') ? 'has-error' : ''}}">
    <label for="work_time" class="control-label">{{ 'Work Time' }}</label>
    <input class="form-control" name="work_time" type="text" id="work_time" value="{{ $district->work_time ?? ''}}" >

    {!! $errors->first('work_time', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('exat') ? 'has-error' : ''}}">
    <label for="exat" class="control-label">{{ 'Exat' }}</label>
    <input class="form-control" name="exat" type="text" id="exat" value="{{ $district->exat ?? ''}}" >

    {!! $errors->first('exat', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('website') ? 'has-error' : ''}}">
    <label for="website" class="control-label">{{ 'Website' }}</label>
    <input class="form-control" name="website" type="text" id="website" value="{{ $district->website ?? ''}}" >

    {!! $errors->first('website', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('decision') ? 'has-error' : ''}}">
    <label for="decision" class="control-label">{{ 'Decision' }}</label>
    <input class="form-control" name="decision" type="text" id="decision" value="{{ $district->decision ?? ''}}" >

    {!! $errors->first('decision', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('statute') ? 'has-error' : ''}}">
    <label for="statute" class="control-label">{{ 'Statute' }}</label>
    <input class="form-control" name="statute" type="text" id="statute" value="{{ $district->statute ?? ''}}" >

    {!! $errors->first('statute', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('slug') ? 'has-error' : ''}}">
    <label for="slug" class="control-label">{{ 'Slug' }}</label>
    <input class="form-control" name="slug" type="text" id="slug" value="{{ $district->slug ?? ''}}" >

    {!! $errors->first('slug', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
