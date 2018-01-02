@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Orders</div>
                    <div class="panel-body">
                        <a href="{{ url('/orders/create') }}" class="btn btn-success btn-sm" title="Add New Order">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>                        
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>User</th><th>Buyer</th><th>Price</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $item)
                                @foreach($offices as $office)
                                @foreach($users as $user)
                                @foreach($deliverys as $delivery)
                                @if($item->user_id ==  $user->id AND $item->office_id == $office->id)
                                @if($delivery->order_id == $item->id)
                                    <tr>                                        
                                        <td>{{ $user->name }}</td><td>{{ $delivery->buyer }}</td><td>{{ $item->price }}</td>
                                        <td>
                                            <a href="{{ url('/orders/' . $item->id) }}" title="View Order"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/orders/' . $item->id . '/edit') }}" title="Edit Order"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/orders' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-xs" title="Delete Order" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endif
                                    @endif
                                @endforeach
                                @endforeach
                                @endforeach
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $orders->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
