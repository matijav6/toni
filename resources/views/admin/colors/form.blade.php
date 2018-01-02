<div class="form-group {{ $errors->has('Color') ? 'has-error' : ''}}">
    <label for="Color" class="col-md-4 control-label">{{ 'Color' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="color_name" type="text" id="color_name" value="{{ $color->color_name or ''}}" >
        {!! $errors->first('Color', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
