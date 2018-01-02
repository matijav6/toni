<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\OrderFlower;
use App\Flower;
use App\Color;

use Illuminate\Http\Request;

class OrderFlowerController extends Controller
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
            $orderflower = OrderFlower::where('flower_id', 'LIKE', "%$keyword%")
                ->orWhere('color_id', 'LIKE', "%$keyword%")
                ->orWhere('quantity', 'LIKE', "%$keyword%")
                ->orWhere('order_id', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $orderflower = OrderFlower::paginate($perPage);
        }

        return view('order-flower.index', compact('orderflower'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create($id)
    {
        $flowers = Flower::orderBy('flower_name','asc')->get();
        $colors = Color::orderBy('color_name','asc')->get();
        return view('order-flower.create',compact('flowers','colors'));
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
        
        OrderFlower::create($requestData);

        return redirect('orders')->with('flash_message', 'added!');
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
        $orderflower = OrderFlower::findOrFail($id);

        return view('order-flower.show', compact('orderflower'));
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
        $orderflower = OrderFlower::findOrFail($id);

        return view('order-flower.edit', compact('orderflower'));
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
        
        $orderflower = OrderFlower::findOrFail($id);
        $orderflower->update($requestData);

        return redirect('orders')->with('flash_message', 'OrderFlower updated!');
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
        OrderFlower::destroy($id);

        return redirect('order-flower')->with('flash_message', 'OrderFlower deleted!');
    }
}
