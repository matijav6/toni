<div class="form-group {{ $errors->has('flower_id') ? 'has-error' : ''}}">
    <label for="flower_id" class="col-md-4 control-label">{{ 'Flower Id' }}</label>
    <div class="col-md-6">
    <select name="flower_id" class="form-control" id="flower_id" >            
        <option value="{{ $flowersandsupplier->flower_id }}" >{{ $flowers->flower_name  }}</option>            
    </select>        
        {!! $errors->first('flower_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('supplier_id') ? 'has-error' : ''}}">
    <label for="supplier_id" class="col-md-4 control-label">{{ 'College' }}</label>
    <div class="col-md-6">
        <select name="supplier_id" class="form-control" id="supplier_id" >
            @foreach ($suppliers as $supplier)
                <option value="{{ $supplier->id }}" >{{ $supplier->supplier_name }}</option>
            @endforeach
        </select>
        {!! $errors->first('supplier_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
