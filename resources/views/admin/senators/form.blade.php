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
<div class="form-group{{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label">{{ 'Image' }}</label>
    <input class="form-control" name="image" type="file" id="image" value="{{ $senator->image ?? ''}}" >

    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
