<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\OrderDelivery;
use Illuminate\Http\Request;

class OrderDeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $orderdelivery = OrderDelivery::where('buyer', 'LIKE', "%$keyword%")
                ->orWhere('address', 'LIKE', "%$keyword%")
                ->orWhere('order_id', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $orderdelivery = OrderDelivery::paginate($perPage);
        }

        return view('order-delivery.index', compact('orderdelivery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('order-delivery.create');
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
        
        OrderDelivery::create($requestData);

        return redirect('order-delivery')->with('flash_message', 'OrderDelivery added!');
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
        $orderdelivery = OrderDelivery::findOrFail($id);

        return view('order-delivery.show', compact('orderdelivery'));
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
        $orderdelivery = OrderDelivery::findOrFail($id);

        return view('order-delivery.edit', compact('orderdelivery'));
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
        
        $orderdelivery = OrderDelivery::findOrFail($id);
        $orderdelivery->update($requestData);

        return redirect('order-delivery')->with('flash_message', 'OrderDelivery updated!');
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
        OrderDelivery::destroy($id);

        return redirect('order-delivery')->with('flash_message', 'OrderDelivery deleted!');
    }
}
