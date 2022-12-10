<div class="form-group{{ $errors->has('title_uz') ? 'has-error' : ''}}">
    <label for="title_uz" class="control-label">{{ 'Title Uz' }}</label>
    <textarea class="form-control" rows="5" name="title_uz" type="textarea" id="title_uz" required>{{ $openinfo->title_uz ?? ''}}</textarea>

    {!! $errors->first('title_uz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('title_ru') ? 'has-error' : ''}}">
    <label for="title_ru" class="control-label">{{ 'Title Ru' }}</label>
    <textarea class="form-control" rows="5" name="title_ru" type="textarea" id="title_ru" >{{ $openinfo->title_ru ?? ''}}</textarea>

    {!! $errors->first('title_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('title_en') ? 'has-error' : ''}}">
    <label for="title_en" class="control-label">{{ 'Title En' }}</label>
    <textarea class="form-control" rows="5" name="title_en" type="textarea" id="title_en" >{{ $openinfo->title_en ?? ''}}</textarea>

    {!! $errors->first('title_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('title_en') ? 'has-error' : ''}}">
    <label for="title_en" class="control-label">{{ 'Title kr' }}</label>
    <textarea class="form-control" rows="5" name="title_kr" type="textarea" id="title_en" >{{ $openinfo->title_kr ?? ''}}</textarea>

    {!! $errors->first('title_en', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('passport_uz') ? 'has-error' : ''}}">
    <label for="passport_uz" class="control-label">{{ 'Passport Uz' }}</label>
    <textarea class="form-control" rows="5" name="passport_uz" type="textarea" id="passport_uz" >{{ $openinfo->passport_uz ?? ''}}</textarea>

    {!! $errors->first('passport_uz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('passport_ru') ? 'has-error' : ''}}">
    <label for="passport_ru" class="control-label">{{ 'Passport Ru' }}</label>
    <textarea class="form-control" rows="5" name="passport_ru" type="textarea" id="passport_ru" >{{ $openinfo->passport_ru ?? ''}}</textarea>

    {!! $errors->first('passport_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('passport_en') ? 'has-error' : ''}}">
    <label for="passport_en" class="control-label">{{ 'Passport En' }}</label>
    <textarea class="form-control" rows="5" name="passport_en" type="textarea" id="passport_en" >{{ $openinfo->passport_en ?? ''}}</textarea>

    {!! $errors->first('passport_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('passport_en') ? 'has-error' : ''}}">
    <label for="passport_en" class="control-label">{{ 'Passport kr' }}</label>
    <textarea class="form-control" rows="5" name="passport_kr" type="textarea" id="passport_en" >{{ $openinfo->passport_kr ?? ''}}</textarea>

    {!! $errors->first('passport_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('table_uz') ? 'has-error' : ''}}">
    <label for="table_uz" class="control-label">{{ 'Table Uz' }}</label>
    <textarea class="form-control" rows="5" name="table_uz" type="textarea" id="table_uz" >{{ $openinfo->table_uz ?? ''}}</textarea>

    {!! $errors->first('table_uz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('table_ru') ? 'has-error' : ''}}">
    <label for="table_ru" class="control-label">{{ 'Table Ru' }}</label>
    <textarea class="form-control" rows="5" name="table_ru" type="textarea" id="table_ru" >{{ $openinfo->table_ru ?? ''}}</textarea>

    {!! $errors->first('table_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('table_en') ? 'has-error' : ''}}">
    <label for="table_en" class="control-label">{{ 'Table En' }}</label>
    <textarea class="form-control" rows="5" name="table_en" type="textarea" id="table_en" >{{ $openinfo->table_en ?? ''}}</textarea>

    {!! $errors->first('table_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('table_en') ? 'has-error' : ''}}">
    <label for="table_en" class="control-label">{{ 'Table kr' }}</label>
    <textarea class="form-control" rows="5" name="table_kr" type="textarea" id="table_en" >{{ $openinfo->table_kr ?? ''}}</textarea>

    {!! $errors->first('table_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
