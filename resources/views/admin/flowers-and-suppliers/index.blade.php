@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Flowersandsuppliers</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/flowers-and-suppliers/create') }}" class="btn btn-success btn-sm" title="Add New FlowersAndSupplier">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>                        
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>Flowers</th><th>Suppliers</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($flowersandsuppliers as $item)
                                @foreach($flowers as $flower)
                                @foreach($suppliers as $supplier)
                                @if($flower->id == $item->flower_id AND $supplier->id == $item->supplier_id)
                                    <tr>                                        
                                        <td>{{ $flower->flower_name }}</td><td>{{ $supplier->supplier_name }}</td>
                                        <td>                                        
                                            <a href="{{ url('/admin/flowers-and-suppliers/' . $item->id . '/edit') }}" title="Edit FlowersAndSupplier"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/admin/flowers-and-suppliers' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-xs" title="Delete FlowersAndSupplier" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                                @endforeach
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $flowersandsuppliers->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

