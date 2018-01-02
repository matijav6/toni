@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Order {{ $order->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/orders') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/orders/' . $order->id . '/edit') }}" title="Edit Order"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('orders' . '/' . $order->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-xs" title="Delete Order" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>                                
                                @foreach($offices as $office)
                                @foreach($users as $user)                                                                    
                                @foreach($deliverys as $deliver)
                                    <tr><th> User </th><td> {{ $user->name }} </td></tr><tr><th> Buyer </th><td> {{ $deliver->buyer }} </td></tr><tr><th> Address </th><td> {{ $deliver->address }} </td></tr><tr><th> Price </th><td> {{ $order->price }} </td></tr><tr><th> Note </th><td> {{ $order->note }} </td></tr><tr><th> Office </th><td> {{ $office->address }} </td></tr>
                                @endforeach                                
                                @endforeach
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
