<div class="form-group{{ $errors->has('addres_uz') ? 'has-error' : ''}}">
    <label for="addres_uz" class="control-label">{{ 'Addres Uz' }}</label>
    <textarea class="form-control" rows="5" name="addres_uz" type="textarea" id="addres_uz" required>{{ $contact->addres_uz ?? ''}}</textarea>

    {!! $errors->first('addres_uz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('addres_ru') ? 'has-error' : ''}}">
    <label for="addres_ru" class="control-label">{{ 'Addres Ru' }}</label>
    <textarea class="form-control" rows="5" name="addres_ru" type="textarea" id="addres_ru" >{{ $contact->addres_ru ?? ''}}</textarea>

    {!! $errors->first('addres_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('addres_en') ? 'has-error' : ''}}">
    <label for="addres_en" class="control-label">{{ 'Addres En' }}</label>
    <textarea class="form-control" rows="5" name="addres_en" type="textarea" id="addres_en" >{{ $contact->addres_en ?? ''}}</textarea>

    {!! $errors->first('addres_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('phone_uz') ? 'has-error' : ''}}">
    <label for="phone_uz" class="control-label">{{ 'Phone Uz' }}</label>
    <textarea class="form-control" rows="5" name="phone_uz" type="textarea" id="phone_uz" >{{ $contact->phone_uz ?? ''}}</textarea>

    {!! $errors->first('phone_uz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('phone_ru') ? 'has-error' : ''}}">
    <label for="phone_ru" class="control-label">{{ 'Phone Ru' }}</label>
    <textarea class="form-control" rows="5" name="phone_ru" type="textarea" id="phone_ru" >{{ $contact->phone_ru ?? ''}}</textarea>

    {!! $errors->first('phone_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('phone_en') ? 'has-error' : ''}}">
    <label for="phone_en" class="control-label">{{ 'Phone En' }}</label>
    <textarea class="form-control" rows="5" name="phone_en" type="textarea" id="phone_en" >{{ $contact->phone_en ?? ''}}</textarea>

    {!! $errors->first('phone_en', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
