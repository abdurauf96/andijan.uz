<div class="form-group{{ $errors->has('title_uz') ? 'has-error' : ''}}">
    <label for="title_uz" class="control-label">{{ 'Title Uz' }}</label>
    <textarea class="form-control" rows="5" name="title_uz" type="textarea" id="title_uz" required>{{ $olddocument->title_uz ?? ''}}</textarea>

    {!! $errors->first('title_uz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('title_ru') ? 'has-error' : ''}}">
    <label for="title_ru" class="control-label">{{ 'Title Ru' }}</label>
    <textarea class="form-control" rows="5" name="title_ru" type="textarea" id="title_ru" >{{ $olddocument->title_ru ?? ''}}</textarea>

    {!! $errors->first('title_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('title_en') ? 'has-error' : ''}}">
    <label for="title_en" class="control-label">{{ 'Title En' }}</label>
    <textarea class="form-control" rows="5" name="title_en" type="textarea" id="title_en" >{{ $olddocument->title_en ?? ''}}</textarea>

    {!! $errors->first('title_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('organ_uz') ? 'has-error' : ''}}">
    <label for="organ_uz" class="control-label">{{ 'Organ Uz' }}</label>
    <textarea class="form-control" rows="5" name="organ_uz" type="textarea" id="organ_uz" >{{ $olddocument->organ_uz ?? ''}}</textarea>

    {!! $errors->first('organ_uz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('organ_ru') ? 'has-error' : ''}}">
    <label for="organ_ru" class="control-label">{{ 'Organ Ru' }}</label>
    <textarea class="form-control" rows="5" name="organ_ru" type="textarea" id="organ_ru" >{{ $olddocument->organ_ru ?? ''}}</textarea>

    {!! $errors->first('organ_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('organ_en') ? 'has-error' : ''}}">
    <label for="organ_en" class="control-label">{{ 'Organ En' }}</label>
    <textarea class="form-control" rows="5" name="organ_en" type="textarea" id="organ_en" >{{ $olddocument->organ_en ?? ''}}</textarea>

    {!! $errors->first('organ_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('date') ? 'has-error' : ''}}">
    <label for="date" class="control-label">{{ 'Date' }}</label>
    <input class="form-control" name="date" type="date" id="date" value="{{ $olddocument->date ?? ''}}" >

    {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('file') ? 'has-error' : ''}}">
    <label for="file" class="control-label">{{ 'File' }}</label>
    <input class="form-control" name="file" type="file" id="file" value="{{ $olddocument->file ?? ''}}" >

    {!! $errors->first('file', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
