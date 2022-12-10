<div class="form-group{{ $errors->has('type') ? 'has-error' : ''}}">
    <label for="type" class="control-label">{{ 'Turini tanlang' }}</label>
    <select name="type" class="form-control">
        <option @isset($senator) {{ $senator->type==1 ? 'selected' : '' }} @endisset value="1">Senator</option>
        <option @isset($senator) {{ $senator->type==2 ? 'selected' : '' }} @endisset value="2">Deputat</option>
    </select>
</div>
<div class="form-group{{ $errors->has('name_uz') ? 'has-error' : ''}}">
    <label for="name_uz" class="control-label">{{ 'F.I.O Uz' }}</label>
    <input class="form-control" name="name_uz" type="text" id="name_uz" value="{{ $senator->name_uz ?? ''}}" required>
    {!! $errors->first('name_uz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('name_ru') ? 'has-error' : ''}}">
    <label for="name_ru" class="control-label">{{ 'F.I.O Ru' }}</label>
    <input class="form-control" name="name_ru" type="text" id="name_ru" value="{{ $senator->name_ru ?? ''}}" >

    {!! $errors->first('name_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('name_en') ? 'has-error' : ''}}">
    <label for="name_en" class="control-label">{{ 'F.I.O En' }}</label>
    <input class="form-control" name="name_en" type="text" id="name_en" value="{{ $senator->name_en ?? ''}}" >

    {!! $errors->first('name_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('name_en') ? 'has-error' : ''}}">
    <label for="name_en" class="control-label">{{ 'F.I.O kr' }}</label>
    <input class="form-control" name="name_kr" type="text" id="name_en" value="{{ $senator->name_kr ?? ''}}" >

    {!! $errors->first('name_en', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('description_uz') ? 'has-error' : ''}}">
    <label for="description_uz" class="control-label">{{ 'Qisqacha malumot Uz' }}</label>
    <textarea class="form-control" rows="5" name="description_uz" type="textarea" id="description_uz" >{{ $senator->description_uz ?? ''}}</textarea>

    {!! $errors->first('description_uz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('description_ru') ? 'has-error' : ''}}">
    <label for="description_ru" class="control-label">{{ 'Qisqacha malumot Ru' }}</label>
    <textarea class="form-control" rows="5" name="description_ru" type="textarea" id="description_ru" >{{ $senator->description_ru ?? ''}}</textarea>

    {!! $errors->first('description_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('description_en') ? 'has-error' : ''}}">
    <label for="description_en" class="control-label">{{ 'Qisqacha malumot En' }}</label>
    <textarea class="form-control" rows="5" name="description_en" type="textarea" id="description_en" >{{ $senator->description_en ?? ''}}</textarea>

    {!! $errors->first('description_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('description_en') ? 'has-error' : ''}}">
    <label for="description_en" class="control-label">{{ 'Qisqacha malumot kr' }}</label>
    <textarea class="form-control" rows="5" name="description_kr" type="textarea" id="description_en" >{{ $senator->description_kr ?? ''}}</textarea>

    {!! $errors->first('description_en', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label">{{ 'Image' }}</label>
    <input class="form-control" name="image" type="file" id="image" value="{{ $senator->image ?? ''}}" >

    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('body_uz') ? 'has-error' : ''}}">
    <label for="body_uz" class="control-label">{{ 'Senator haqida Uz' }}</label>
    <textarea class="form-control" rows="5" name="body_uz" type="textarea" id="body_uz" >{{ $senator->body_uz ?? ''}}</textarea>

    {!! $errors->first('body_uz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('body_ru') ? 'has-error' : ''}}">
    <label for="body_ru" class="control-label">{{ 'Senator haqida Ru' }}</label>
    <textarea class="form-control" rows="5" name="body_ru" type="textarea" id="body_ru" >{{ $senator->body_ru ?? ''}}</textarea>

    {!! $errors->first('body_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('body_en') ? 'has-error' : ''}}">
    <label for="body_en" class="control-label">{{ 'Senator haqida En' }}</label>
    <textarea class="form-control" rows="5" name="body_en" type="textarea" id="body_en" >{{ $senator->body_en ?? ''}}</textarea>

    {!! $errors->first('body_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('body_en') ? 'has-error' : ''}}">
    <label for="body_en" class="control-label">{{ 'Senator haqida kr' }}</label>
    <textarea class="form-control" rows="5" name="body_kr" type="textarea" id="body_en" >{{ $senator->body_kr ?? ''}}</textarea>

    {!! $errors->first('body_en', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('meta_keywords') ? 'has-error' : ''}}">
    <label for="meta_keywords" class="control-label">{{ 'Telefon' }}</label>
    <input class="form-control" name="phone" type="text" id="meta_keywords" value="{{ $senator->phone ?? ''}}" >
    {!! $errors->first('meta_keywords', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('fax') ? 'has-error' : ''}}">
    <label for="meta_keywords" class="control-label">{{ 'Fax' }}</label>
    <input class="form-control" name="fax" type="text" id="fax" value="{{ $senator->fax ?? ''}}" >
    {!! $errors->first('fax', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="text" id="email" value="{{ $senator->email ?? ''}}" >
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('meta_description') ? 'has-error' : ''}}">
    <label for="meta_description" class="control-label">{{ 'Meta Description' }}</label>
    <input class="form-control" name="meta_description" type="text" id="meta_description" value="{{ $post->meta_description ?? ''}}" >
    {!! $errors->first('meta_description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('meta_keywords') ? 'has-error' : ''}}">
    <label for="meta_keywords" class="control-label">{{ 'Meta Keywords' }}</label>
    <input class="form-control" name="meta_keywords" type="text" id="meta_keywords" value="{{ $post->meta_keywords ?? ''}}" >
    {!! $errors->first('meta_keywords', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
