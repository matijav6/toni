<div class="form-group {{ $errors->has('Supplier') ? 'has-error' : ''}}">
    <label for="Supplier" class="col-md-4 control-label">{{ 'Supplier' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="supplier_name" type="text" id="supplier_name" value="{{ $supplier->supplier_name or ''}}" >
        {!! $errors->first('Supplier', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
