<div class="form-group{{ $errors->has('title_uz') ? 'has-error' : ''}}">
    <label for="title_uz" class="control-label">{{ 'Title Uz' }}</label>
    <input class="form-control" name="title_uz" type="text" id="title_uz" value="{{ $organization->title_uz ?? ''}}" required>

    {!! $errors->first('title_uz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('title_ru') ? 'has-error' : ''}}">
    <label for="title_ru" class="control-label">{{ 'Title Ru' }}</label>
    <input class="form-control" name="title_ru" type="text" id="title_ru" value="{{ $organization->title_ru ?? ''}}" >

    {!! $errors->first('title_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('title_en') ? 'has-error' : ''}}">
    <label for="title_en" class="control-label">{{ 'Title En' }}</label>
    <input class="form-control" name="title_en" type="text" id="title_en" value="{{ $organization->title_en ?? ''}}" >

    {!! $errors->first('title_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('position_uz') ? 'has-error' : ''}}">
    <label for="position_uz" class="control-label">{{ 'Tashkilot vakili lavozimi Uz' }}</label>
    <input class="form-control" name="position_uz" type="text" id="position_uz" value="{{ $organization->position_uz ?? ''}}" >

    {!! $errors->first('position_uz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('position_ru') ? 'has-error' : ''}}">
    <label for="position_ru" class="control-label">{{ 'Tashkilot vakili lavozimi Ru' }}</label>
    <input class="form-control" name="position_ru" type="text" id="position_ru" value="{{ $organization->position_ru ?? ''}}" >

    {!! $errors->first('position_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('position_en') ? 'has-error' : ''}}">
    <label for="position_en" class="control-label">{{ 'Tashkilot vakili lavozimi En' }}</label>
    <input class="form-control" name="position_en" type="text" id="position_en" value="{{ $organization->position_en ?? ''}}" >

    {!! $errors->first('position_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label">{{ 'Image' }}</label>
    <input class="form-control" name="image" type="file" id="image" value="{{ $organization->image ?? ''}}" >

    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('statute') ? 'has-error' : ''}}">
    <label for="statute" class="control-label">{{ 'Nizom' }}</label>
    <input class="form-control" name="statute" type="file" id="statute" value="{{ $organization->statute ?? ''}}" >

    {!! $errors->first('statute', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('addres_uz') ? 'has-error' : ''}}">
    <label for="addres_uz" class="control-label">{{ 'Addres Uz' }}</label>
    <textarea class="form-control" rows="5" name="addres_uz" type="textarea" id="addres_uz" >{{ $organization->addres_uz ?? ''}}</textarea>

    {!! $errors->first('addres_uz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('addres_ru') ? 'has-error' : ''}}">
    <label for="addres_ru" class="control-label">{{ 'Addres Ru' }}</label>
    <textarea class="form-control" rows="5" name="addres_ru" type="textarea" id="addres_ru" >{{ $organization->addres_ru ?? ''}}</textarea>

    {!! $errors->first('addres_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('addres_en') ? 'has-error' : ''}}">
    <label for="addres_en" class="control-label">{{ 'Addres En' }}</label>
    <textarea class="form-control" rows="5" name="addres_en" type="textarea" id="addres_en" >{{ $organization->addres_en ?? ''}}</textarea>

    {!! $errors->first('addres_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('phone') ? 'has-error' : ''}}">
    <label for="phone" class="control-label">{{ 'Phone' }}</label>
    <input class="form-control" name="phone" type="text" id="phone" value="{{ $organization->phone ?? ''}}" >

    {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('website') ? 'has-error' : ''}}">
    <label for="website" class="control-label">{{ 'Website' }}</label>
    <input class="form-control" name="website" type="text" id="website" value="{{ $organization->website ?? ''}}" >

    {!! $errors->first('website', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="text" id="email" value="{{ $organization->email ?? ''}}" >

    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('fax') ? 'has-error' : ''}}">
    <label for="fax" class="control-label">{{ 'Fax' }}</label>
    <input class="form-control" name="fax" type="text" id="fax" value="{{ $organization->fax ?? ''}}" >

    {!! $errors->first('fax', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('reception_time_uz') ? 'has-error' : ''}}">
    <label for="reception_time_uz" class="control-label">{{ 'Fuqarolarni qabul qilish vaqti Uz' }}</label>
    <input class="form-control" name="reception_time_uz" type="text" id="reception_time_uz" value="{{ $organization->reception_time_uz ?? ''}}" >

    {!! $errors->first('reception_time_uz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('reception_time_ru') ? 'has-error' : ''}}">
    <label for="reception_time_ru" class="control-label">{{ 'Fuqarolarni qabul qilish vaqti Ru' }}</label>
    <input class="form-control" name="reception_time_ru" type="text" id="reception_time_ru" value="{{ $organization->reception_time_ru ?? ''}}" >

    {!! $errors->first('reception_time_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('reception_time_en') ? 'has-error' : ''}}">
    <label for="reception_time_en" class="control-label">{{ 'Fuqarolarni qabul qilish vaqti En' }}</label>
    <input class="form-control" name="reception_time_en" type="text" id="reception_time_en" value="{{ $organization->reception_time_en ?? ''}}" >

    {!! $errors->first('reception_time_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('telegram') ? 'has-error' : ''}}">
    <label for="telegram" class="control-label">{{ 'Telegram' }}</label>
    <input class="form-control" name="telegram" type="text" id="telegram" value="{{ $organization->telegram ?? ''}}" >

    {!! $errors->first('telegram', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('facebook') ? 'has-error' : ''}}">
    <label for="facebook" class="control-label">{{ 'Facebook' }}</label>
    <input class="form-control" name="facebook" type="text" id="facebook" value="{{ $organization->facebook ?? ''}}" >

    {!! $errors->first('facebook', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('instagram') ? 'has-error' : ''}}">
    <label for="instagram" class="control-label">{{ 'Instagram' }}</label>
    <input class="form-control" name="instagram" type="text" id="instagram" value="{{ $organization->instagram ?? ''}}" >

    {!! $errors->first('instagram', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group{{ $errors->has('director') ? 'has-error' : ''}}">
    <label for="director" class="control-label">{{ 'Director F.I.O' }}</label>
    <input class="form-control" name="director" type="text" id="director" value="{{ $organization->director ?? ''}}" >

    {!! $errors->first('director', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('director_image') ? 'has-error' : ''}}">
    <label for="director_image" class="control-label">{{ 'Director Image' }}</label>
    <input class="form-control" name="director_image" type="file" id="director_image" value="{{ $organization->director_image ?? ''}}" >

    {!! $errors->first('director_image', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('director_phone') ? 'has-error' : ''}}">
    <label for="director_phone" class="control-label">{{ 'Director Phone' }}</label>
    <input class="form-control" name="director_phone" type="text" id="director_phone" value="{{ $organization->director_phone ?? ''}}" >

    {!! $errors->first('director_phone', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('director_info') ? 'has-error' : ''}}">
    <label for="director_info" class="control-label">{{ 'Director Haqida Uz' }}</label>
    <textarea class="form-control" rows="5" name="director_info_uz" type="textarea" id="director_info" >{{ $organization->director_info_uz ?? ''}}</textarea>
    {!! $errors->first('director_info', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('director_info') ? 'has-error' : ''}}">
    <label for="director_info" class="control-label">{{ 'Director Haqida Ru' }}</label>
    <textarea class="form-control" rows="5" name="director_info_ru" type="textarea" id="director_info" >{{ $organization->director_info_ru ?? ''}}</textarea>
    {!! $errors->first('director_info', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('director_info') ? 'has-error' : ''}}">
    <label for="director_info" class="control-label">{{ 'Director Haqida En' }}</label>
    <textarea class="form-control" rows="5" name="director_info_en" type="textarea" id="director_info" >{{ $organization->director_info_en ?? ''}}</textarea>
    {!! $errors->first('director_info', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('director_facebook') ? 'has-error' : ''}}">
    <label for="director_facebook" class="control-label">{{ 'Director Facebook' }}</label>
    <input class="form-control" name="director_facebook" type="text" id="director_facebook" value="{{ $organization->director_facebook ?? ''}}" >

    {!! $errors->first('director_facebook', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('director_telegram') ? 'has-error' : ''}}">
    <label for="director_telegram" class="control-label">{{ 'Director Telegram' }}</label>
    <input class="form-control" name="director_telegram" type="text" id="director_telegram" value="{{ $organization->director_telegram ?? ''}}" >

    {!! $errors->first('director_telegram', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('director_instagram') ? 'has-error' : ''}}">
    <label for="director_instagram" class="control-label">{{ 'Director Instagram' }}</label>
    <input class="form-control" name="director_instagram" type="text" id="director_instagram" value="{{ $organization->director_instagram ?? ''}}" >

    {!! $errors->first('director_instagram', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('meta_keywords') ? 'has-error' : ''}}">
    <label for="meta_keywords" class="control-label">{{ 'Meta Keywords' }}</label>
    <input class="form-control" name="meta_keywords" type="text" id="meta_keywords" value="{{ $organization->meta_keywords ?? ''}}" >

    {!! $errors->first('meta_keywords', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('meta_description') ? 'has-error' : ''}}">
    <label for="meta_description" class="control-label">{{ 'Meta Description' }}</label>
    <input class="form-control" name="meta_description" type="text" id="meta_description" value="{{ $organization->meta_description ?? ''}}" >

    {!! $errors->first('meta_description', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
