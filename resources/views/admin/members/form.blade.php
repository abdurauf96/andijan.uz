<div class="form-group{{ $errors->has('name_uz') ? 'has-error' : ''}}">
    <label for="name_uz" class="control-label">{{ 'Name Uz' }}</label>
    <input class="form-control" name="name_uz" type="text" id="name_uz" value="{{ $member->name_uz ?? ''}}" required>

    {!! $errors->first('name_uz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('name_ru') ? 'has-error' : ''}}">
    <label for="name_ru" class="control-label">{{ 'Name Ru' }}</label>
    <input class="form-control" name="name_ru" type="text" id="name_ru" value="{{ $member->name_ru ?? ''}}" >

    {!! $errors->first('name_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('name_en') ? 'has-error' : ''}}">
    <label for="name_en" class="control-label">{{ 'Name En' }}</label>
    <input class="form-control" name="name_en" type="text" id="name_en" value="{{ $member->name_en ?? ''}}" >

    {!! $errors->first('name_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('description_uz') ? 'has-error' : ''}}">
    <label for="description_uz" class="control-label">{{ 'Description Uz' }}</label>
    <textarea class="form-control" rows="5" name="description_uz" type="textarea" id="description_uz" >{{ $member->description_uz ?? ''}}</textarea>

    {!! $errors->first('description_uz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('description_ru') ? 'has-error' : ''}}">
    <label for="description_ru" class="control-label">{{ 'Description Ru' }}</label>
    <textarea class="form-control" rows="5" name="description_ru" type="textarea" id="description_ru" >{{ $member->description_ru ?? ''}}</textarea>

    {!! $errors->first('description_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('description_en') ? 'has-error' : ''}}">
    <label for="description_en" class="control-label">{{ 'Description En' }}</label>
    <textarea class="form-control" rows="5" name="description_en" type="textarea" id="description_en" >{{ $member->description_en ?? ''}}</textarea>

    {!! $errors->first('description_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('council_id') ? 'has-error' : ''}}">
    <label for="council_id" class="control-label">{{ 'Kengash' }}</label>
    <select name="council_id" class="form-control"  id="">
        @foreach($councils as $council)
            <option @isset($member) {{ $member->council_id==$council->id ? 'selected' : '' }} @endisset value="{{ $council->id }}">{{ $council->title_uz }}</option>
        @endforeach
    </select>
</div>
<div class="form-group{{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label">{{ 'Image' }}</label>
    <input class="form-control" name="image" type="file" id="image" value="{{ $member->image ?? ''}}" >

    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('phone') ? 'has-error' : ''}}">
    <label for="phone" class="control-label">{{ 'Phone' }}</label>
    <input class="form-control" name="phone" type="text" id="phone" value="{{ $member->phone ?? ''}}" >

    {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="text" id="email" value="{{ $member->email ?? ''}}" >

    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
