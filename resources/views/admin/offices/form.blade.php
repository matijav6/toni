<div class="form-group {{ $errors->has('Adress') ? 'has-error' : ''}}">
    <label for="Adress" class="col-md-4 control-label">{{ 'Adress' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="address" type="textarea" id="address" >{{ $office->address or ''}}</textarea>
        {!! $errors->first('Adress', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
