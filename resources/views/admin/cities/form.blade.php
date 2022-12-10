<div class="form-group{{ $errors->has('title_uz') ? 'has-error' : ''}}">
    <label for="title_uz" class="control-label">{{ 'Tuman yoki shahar Uz' }}</label>
    <input class="form-control" name="title_uz" type="text" id="title_uz" value="{{ $city->title_uz ?? ''}}" required>

    {!! $errors->first('title_uz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('title_ru') ? 'has-error' : ''}}">
    <label for="title_ru" class="control-label">{{ 'Tuman yoki shahar Ru' }}</label>
    <input class="form-control" name="title_ru" type="text" id="title_ru" value="{{ $city->title_ru ?? ''}}" >

    {!! $errors->first('title_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('title_en') ? 'has-error' : ''}}">
    <label for="title_en" class="control-label">{{ 'Tuman yoki shahar En' }}</label>
    <input class="form-control" name="title_en" type="text" id="title_en" value="{{ $city->title_en ?? ''}}" >

    {!! $errors->first('title_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('title_en') ? 'has-error' : ''}}">
    <label for="title_en" class="control-label">{{ 'Tuman yoki shahar Kr' }}</label>
    <input class="form-control" name="title_kr" type="text" id="title_en" value="{{ $city->title_kr ?? ''}}" >

    {!! $errors->first('title_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('body_uz') ? 'has-error' : ''}}">
    <label for="body_uz" class="control-label">{{ 'Tuman yoki shahar haqida Uz' }}</label>
    <textarea class="form-control" rows="5" name="body_uz" type="textarea" id="body_uz" >{{ $city->body_uz ?? ''}}</textarea>

    {!! $errors->first('body_uz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('body_ru') ? 'has-error' : ''}}">
    <label for="body_ru" class="control-label">{{ 'Tuman yoki shahar haqida Ru' }}</label>
    <textarea class="form-control" rows="5" name="body_ru" type="textarea" id="body_ru" >{{ $city->body_ru ?? ''}}</textarea>

    {!! $errors->first('body_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('body_en') ? 'has-error' : ''}}">
    <label for="body_en" class="control-label">{{ 'Tuman yoki shahar haqida En' }}</label>
    <textarea class="form-control" rows="5" name="body_en" type="textarea" id="body_en" >{{ $city->body_en ?? ''}}</textarea>

    {!! $errors->first('body_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('body_en') ? 'has-error' : ''}}">
    <label for="body_en" class="control-label">{{ 'Tuman yoki shahar haqida Kr' }}</label>
    <textarea class="form-control" rows="5" name="body_kr" type="textarea" id="body_en" >{{ $city->body_kr ?? ''}}</textarea>

    {!! $errors->first('body_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('hokim_image') ? 'has-error' : ''}}">
    <label for="hokim_image" class="control-label">{{ 'Hokim Rasmi' }}</label>
    <input class="form-control" name="hokim_image" type="file" id="hokim_image" value="{{ $city->hokim_image ?? ''}}" >

    {!! $errors->first('hokim_image', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('hokim_text_uz') ? 'has-error' : ''}}">
    <label for="hokim_text_uz" class="control-label">{{ 'Hokim haqida Uz' }}</label>
    <textarea class="form-control" rows="5" name="hokim_text_uz" type="textarea" id="hokim_text_uz" >{{ $city->hokim_text_uz ?? ''}}</textarea>

    {!! $errors->first('hokim_text_uz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('hokim_text_ru') ? 'has-error' : ''}}">
    <label for="hokim_text_ru" class="control-label">{{ 'Hokim haqida Ru' }}</label>
    <textarea class="form-control" rows="5" name="hokim_text_ru" type="textarea" id="hokim_text_ru" >{{ $city->hokim_text_ru ?? ''}}</textarea>

    {!! $errors->first('hokim_text_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('hokim_text_en') ? 'has-error' : ''}}">
    <label for="hokim_text_en" class="control-label">{{ 'Hokim haqida En' }}</label>
    <textarea class="form-control" rows="5" name="hokim_text_en" type="textarea" id="hokim_text_en" >{{ $city->hokim_text_en ?? ''}}</textarea>

    {!! $errors->first('hokim_text_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('hokim_text_en') ? 'has-error' : ''}}">
    <label for="hokim_text_en" class="control-label">{{ 'Hokim haqida Kr' }}</label>
    <textarea class="form-control" rows="5" name="hokim_text_kr" type="textarea" id="hokim_text_en" >{{ $city->hokim_text_kr ?? ''}}</textarea>

</div>
<div class="form-group{{ $errors->has('addres_uz') ? 'has-error' : ''}}">
    <label for="addres_uz" class="control-label">{{ 'Addres Uz' }}</label>
    <input class="form-control" name="addres_uz" type="text" id="addres_uz" value="{{ $city->addres_uz ?? ''}}" >

    {!! $errors->first('addres_uz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('addres_ru') ? 'has-error' : ''}}">
    <label for="addres_ru" class="control-label">{{ 'Addres Ru' }}</label>
    <input class="form-control" name="addres_ru" type="text" id="addres_ru" value="{{ $city->addres_ru ?? ''}}" >

    {!! $errors->first('addres_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('addres_en') ? 'has-error' : ''}}">
    <label for="addres_en" class="control-label">{{ 'Addres En' }}</label>
    <input class="form-control" name="addres_en" type="text" id="addres_en" value="{{ $city->addres_en ?? ''}}" >

    {!! $errors->first('addres_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('addres_en') ? 'has-error' : ''}}">
    <label for="addres_en" class="control-label">{{ 'Addres Kr' }}</label>
    <input class="form-control" name="addres_kr" type="text" id="addres_en" value="{{ $city->addres_kr ?? ''}}" >

    {!! $errors->first('addres_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('phone1') ? 'has-error' : ''}}">
    <label for="phone1" class="control-label">{{ 'Telefon' }}</label>
    <input class="form-control" name="phone1" type="text" id="phone1" value="{{ $city->phone1 ?? ''}}" >

    {!! $errors->first('phone1', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('phone2') ? 'has-error' : ''}}">
    <label for="phone2" class="control-label">{{ 'Ishonch telefoni' }}</label>
    <input class="form-control" name="phone2" type="text" id="phone2" value="{{ $city->phone2 ?? ''}}" >

    {!! $errors->first('phone2', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('exat') ? 'has-error' : ''}}">
    <label for="exat" class="control-label">{{ 'E-Xat' }}</label>
    <input class="form-control" name="exat" type="text" id="exat" value="{{ $city->exat ?? ''}}" >

    {!! $errors->first('exat', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('website') ? 'has-error' : ''}}">
    <label for="website" class="control-label">{{ 'Website' }}</label>
    <input class="form-control" name="website" type="text" id="website" value="{{ $city->website ?? ''}}" >

    {!! $errors->first('website', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('work_time') ? 'has-error' : ''}}">
    <label for="work_time" class="control-label">{{ 'Ish vaqti' }}</label>
    <input class="form-control" name="work_time" type="text" id="work_time" value="{{ $city->work_time ?? ''}}" >

    {!! $errors->first('work_time', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('statute') ? 'has-error' : ''}}">
    <label for="statute" class="control-label">{{ 'Nizom' }}</label>
    <input class="form-control" name="statute" type="file" id="statute" value="{{ $city->statute ?? ''}}" >

    {!! $errors->first('statute', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('decision') ? 'has-error' : ''}}">
    <label for="decision" class="control-label">{{ 'Qaror' }}</label>
    <input class="form-control" name="decision" type="file" id="decision" value="{{ $city->decision ?? ''}}" >

    {!! $errors->first('decision', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
