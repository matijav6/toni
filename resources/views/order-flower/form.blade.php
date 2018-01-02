<div class="form-group {{ $errors->has('flower_id') ? 'has-error' : ''}}">
    <label for="flower_id" class="col-md-4 control-label">{{ 'Flower' }}</label>
    <div class="col-md-6">
        <select name="flower_id" class="form-control" id="flower_id" >
        @foreach ($flowers as $flower)
        <option value="{{ $flower->id }}">{{ $flower->flower_name }}</option>
        @endforeach
</select>
        {!! $errors->first('flower_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group {{ $errors->has('color_id') ? 'has-error' : ''}}">
    <label for="color_id" class="col-md-4 control-label">{{ 'Colors' }}</label>
    <div class="col-md-6">
        <select name="color_id" class="form-control" id="color_id" >
        @foreach ($colors as $color)
        <option value="{{ $color->id }}">{{ $color->color_name }}</option>
        @endforeach
</select>
        {!! $errors->first('color_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('quantity') ? 'has-error' : ''}}">
    <label for="quantity" class="col-md-4 control-label">{{ 'Quantity' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="quantity" type="number" id="quantity" value="{{ $orderflower->quantity or ''}}" >
        {!! $errors->first('quantity', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
    <textarea class="form-control" rows="5" style = "display:none;" name="order_id" type="textarea" id="order_id" value ="{{$order_id['id'] }}">{{ $order_id['id']}}</textarea>
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
