<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Order;
use Auth;
use App\Office;
use App\User;
use App\OrderDelivery;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {        
        $perPage = 25;
        $users = User::orderBy('id','asc')->get();
        $offices = Office::orderBy('id','asc')->get();
        $orders = Order::paginate($perPage);
        $deliverys = OrderDelivery::orderBy('id','asc')->get();
        return view('orders.index', compact('orders','users','offices','deliverys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $offices = Office::orderBy('id','asc')->get();
        $users = User::orderBy('id','asc')->get();

        return view('orders.create',compact('offices','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        $id = Order::create($requestData)->id; 
        $order_id = array(
            'id' => $id,
        );
        return view('order-delivery.create',compact('order_id'));
        //return redirect('orders')->with('flash_message', 'Order added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $order = Order::findOrFail($id);
        $offices = Office::where('id','=',$order->office_id)->get();
        $users = User::where('id','=',$order->user_id)->get();
        $deliverys = OrderDelivery::where('order_id','=',$id)->get();
        return view('orders.show', compact('order','users','offices','deliverys'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $order = Order::findOrFail($id);
        $users = User::orderBy('id','asc')->get();
        $offices = Office::orderBy('id','asc')->get();
        return view('orders.edit', compact('order','offices','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $order = Order::findOrFail($id);
        

        $order->update($requestData);
        
        $order_id = array(
            'id' => $order->id,
        );
        $orderdelivery = OrderDelivery::where('order_id', '=',$order->id )->get();
        foreach($orderdelivery as $item)
        {
            $id = $item->id;
        }
        $orderdelivery = OrderDelivery::findOrFail($id);
       
       return view('order-delivery.edit', compact('order_id','orderdelivery'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Order::destroy($id);

        return redirect('orders')->with('flash_message', 'Order deleted!');
    }
}
