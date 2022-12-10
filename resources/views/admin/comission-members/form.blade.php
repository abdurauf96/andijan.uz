
<div class="form-group{{ $errors->has('name_uz') ? 'has-error' : ''}}">
    <label for="name_uz" class="control-label">{{ 'Name Uz' }}</label>
    <input class="form-control" name="name_uz" type="text" id="name_uz" value="{{ $comissionmember->name_uz ?? ''}}" required>
    {!! $errors->first('name_uz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('name_ru') ? 'has-error' : ''}}">
    <label for="name_ru" class="control-label">{{ 'Name Ru' }}</label>
    <input class="form-control" name="name_ru" type="text" id="name_ru" value="{{ $comissionmember->name_ru ?? ''}}" >

    {!! $errors->first('name_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('name_en') ? 'has-error' : ''}}">
    <label for="name_en" class="control-label">{{ 'Name En' }}</label>
    <input class="form-control" name="name_en" type="text" id="name_en" value="{{ $comissionmember->name_en ?? ''}}" >

    {!! $errors->first('name_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('name_en') ? 'has-error' : ''}}">
    <label for="name_en" class="control-label">{{ 'Name Kr' }}</label>
    <input class="form-control" name="name_kr" type="text" id="name_en" value="{{ $comissionmember->name_kr ?? ''}}" >

    {!! $errors->first('name_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('comission_id') ? 'has-error' : ''}}">
    <label for="comission_id" class="control-label">{{ 'Komissiyani tanlang' }}</label>
    <select name="comission_id" class="form-control" required>
        @foreach($comissions as $comission)
            <option @isset($comissionmember) {{ $comissionmember->comission_id==$comission->id ? 'selected' : '' }} @endisset value="{{ $comission->id }}">{{ $comission->title_uz }}</option>
        @endforeach
    </select>
</div>
<div class="form-group{{ $errors->has('description_uz') ? 'has-error' : ''}}">
    <label for="description_uz" class="control-label">{{ 'Kasbi(Lavozimi) Uz' }}</label>
    <textarea class="form-control" rows="5" name="description_uz" type="textarea" id="description_uz" >{{ $comissionmember->description_uz ?? ''}}</textarea>

    {!! $errors->first('description_uz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('description_ru') ? 'has-error' : ''}}">
    <label for="description_ru" class="control-label">{{ 'Kasbi(Lavozimi) Ru' }}</label>
    <textarea class="form-control" rows="5" name="description_ru" type="textarea" id="description_ru" >{{ $comissionmember->description_ru ?? ''}}</textarea>

    {!! $errors->first('description_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('description_en') ? 'has-error' : ''}}">
    <label for="description_en" class="control-label">{{ 'Kasbi(Lavozimi) En' }}</label>
    <textarea class="form-control" rows="5" name="description_en" type="textarea" id="description_en" >{{ $comissionmember->description_en ?? ''}}</textarea>

    {!! $errors->first('description_en', '<p class="help-block">:message</p>') !!}
</div><div class="form-group{{ $errors->has('description_en') ? 'has-error' : ''}}">
    <label for="description_en" class="control-label">{{ 'Kasbi(Lavozimi) Kr' }}</label>
    <textarea class="form-control" rows="5" name="description_kr" type="textarea" id="description_en" >{{ $comissionmember->description_kr ?? ''}}</textarea>

    {!! $errors->first('description_en', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label">{{ 'Image' }}</label>
    <input class="form-control" name="image" type="file" id="image" value="{{ $comissionmember->image ?? ''}}" >

    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('phone') ? 'has-error' : ''}}">
    <label for="phone" class="control-label">{{ 'Phone' }}</label>
    <input class="form-control" name="phone" type="text" id="phone" value="{{ $comissionmember->phone ?? ''}}" >

    {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="text" id="email" value="{{ $comissionmember->email ?? ''}}" >

    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
