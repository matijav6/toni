<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="col-md-4 control-label">{{ 'Users' }}</label>
    <div class="col-md-6">
        <select name="user_id" class="form-control" id="user_id" >
        @foreach ($users as $user)
        <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
</select>
        {!! $errors->first('course', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
    <label for="price" class="col-md-4 control-label">{{ 'Price' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="price" type="number" id="price" value="{{ $order->price or ''}}" >
        {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('note') ? 'has-error' : ''}}">
    <label for="note" class="col-md-4 control-label">{{ 'Note' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="note" type="textarea" id="note" >{{ $order->note or ''}}</textarea>
        {!! $errors->first('note', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('office_id') ? 'has-error' : ''}}">
    <label for="office_id" class="col-md-4 control-label">{{ 'Office' }}</label>
    <div class="col-md-6">
        <select name="office_id" class="form-control" id="office_id" >
        @foreach ($offices as $office)
        <option value="{{ $office->id }}">{{ $office->address }}</option>
        @endforeach
</select>
        {!! $errors->first('course', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Next' }}">
    </div>
</div>
