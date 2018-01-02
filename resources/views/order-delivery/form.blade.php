<div class="form-group {{ $errors->has('buyer') ? 'has-error' : ''}}">
    <label for="buyer" class="col-md-4 control-label">{{ 'Buyer' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="buyer" type="text" id="buyer" value="{{ $orderdelivery->buyer or ''}}" >
        {!! $errors->first('buyer', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    <label for="address" class="col-md-4 control-label">{{ 'Address' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="address" type="textarea" id="address" >{{ $orderdelivery->address or ''}}</textarea>
        {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
    <textarea class="form-control" rows="5" style = "display:none;" name="order_id" type="textarea" id="order_id" value ="{{ $order_id['id'] }}">{{ $order_id['id']}}</textarea>
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
