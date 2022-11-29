<div class="form-group{{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ $appeal->name ?? ''}}" required>

    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('phone') ? 'has-error' : ''}}">
    <label for="phone" class="control-label">{{ 'Phone' }}</label>
    <input class="form-control" name="phone" type="text" id="phone" value="{{ $appeal->phone ?? ''}}" >

    {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('addres') ? 'has-error' : ''}}">
    <label for="addres" class="control-label">{{ 'Addres' }}</label>
    <input class="form-control" name="addres" type="text" id="addres" value="{{ $appeal->addres ?? ''}}" >

    {!! $errors->first('addres', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('body') ? 'has-error' : ''}}">
    <label for="body" class="control-label">{{ 'Body' }}</label>
    <textarea class="form-control" rows="5" name="body" type="textarea" id="body" >{{ $appeal->body ?? ''}}</textarea>

    {!! $errors->first('body', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
