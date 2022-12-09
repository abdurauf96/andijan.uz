<div class="form-group{{ $errors->has('day_uz') ? 'has-error' : ''}}">
    <label for="day_uz" class="control-label">{{ 'Day Uz' }}</label>
    <input class="form-control" name="day_uz" type="text" id="day_uz" value="{{ $schedule->day_uz ?? ''}}" >

    {!! $errors->first('day_uz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('day_ru') ? 'has-error' : ''}}">
    <label for="day_ru" class="control-label">{{ 'Day Ru' }}</label>
    <input class="form-control" name="day_ru" type="text" id="day_ru" value="{{ $schedule->day_ru ?? ''}}" >

    {!! $errors->first('day_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('day_en') ? 'has-error' : ''}}">
    <label for="day_en" class="control-label">{{ 'Day En' }}</label>
    <input class="form-control" name="day_en" type="text" id="day_en" value="{{ $schedule->day_en ?? ''}}" >

    {!! $errors->first('day_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('day_kr') ? 'has-error' : ''}}">
    <label for="day_kr" class="control-label">{{ 'Day Kr' }}</label>
    <input class="form-control" name="day_kr" type="text" id="day_kr" value="{{ $schedule->day_kr ?? ''}}" >

    {!! $errors->first('day_kr', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('time') ? 'has-error' : ''}}">
    <label for="time" class="control-label">{{ 'Time' }}</label>
    <input class="form-control" name="time" type="text" id="time" value="{{ $schedule->time ?? ''}}" >

    {!! $errors->first('time', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('description_uz') ? 'has-error' : ''}}">
    <label for="description_uz" class="control-label">{{ 'Description Uz' }}</label>
    <input class="form-control" name="description_uz" type="text" id="description_uz" value="{{ $schedule->description_uz ?? ''}}" >

    {!! $errors->first('description_uz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('description_ru') ? 'has-error' : ''}}">
    <label for="description_ru" class="control-label">{{ 'Description Ru' }}</label>
    <input class="form-control" name="description_ru" type="text" id="description_ru" value="{{ $schedule->description_ru ?? ''}}" >

    {!! $errors->first('description_ru', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('description_en') ? 'has-error' : ''}}">
    <label for="description_en" class="control-label">{{ 'Description En' }}</label>
    <input class="form-control" name="description_en" type="text" id="description_en" value="{{ $schedule->description_en ?? ''}}" >

    {!! $errors->first('description_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('description_kr') ? 'has-error' : ''}}">
    <label for="description_kr" class="control-label">{{ 'Description Kr' }}</label>
    <input class="form-control" name="description_kr" type="text" id="description_kr" value="{{ $schedule->description_kr ?? ''}}" >

    {!! $errors->first('description_kr', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
