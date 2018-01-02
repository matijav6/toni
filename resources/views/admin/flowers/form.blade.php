<div class="form-group {{ $errors->has('flower_name') ? 'has-error' : ''}}">
    <label for="flower_name" class="col-md-4 control-label">{{ 'Flower Name' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="flower_name" type="textarea" id="flower_name" >{{ $flower->flower_name or ''}}</textarea>
        {!! $errors->first('flower_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
