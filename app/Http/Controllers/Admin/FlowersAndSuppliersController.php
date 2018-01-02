<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\FlowersAndSupplier;
use App\Supplier;
use App\Flower;
use Illuminate\Http\Request;

class FlowersAndSuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {               
        $flowersandsuppliers = FlowersAndSupplier::paginate(25);
        $flowers = Flower::orderBy('id','asc')->get();
        $suppliers = Supplier::orderBy('id','asc')->get();

        return view('admin.flowers-and-suppliers.index', compact('flowersandsuppliers','flowers','suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.flowers-and-suppliers.create');
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
        
        FlowersAndSupplier::create($requestData);

        return redirect('admin/flowers-and-suppliers')->with('flash_message', 'FlowersAndSupplier added!');
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
        $flowersandsupplier = FlowersAndSupplier::findOrFail($id);

        return view('admin.flowers-and-suppliers.show', compact('flowersandsupplier'));
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
        $flowersandsupplier = FlowersAndSupplier::findOrFail($id);       

        $flower_id = $flowersandsupplier->flower_id;
        $supplier_id = $flowersandsupplier->supplier_id;

        $flowers = Flower::findOrFail($flower_id);
        $suppliers = Supplier::orderBy('supplier_name','asc')->get();

        return view('admin.flowers-and-suppliers.edit', compact('flowersandsupplier','flowers','suppliers'));
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
        
        $flowersandsupplier = FlowersAndSupplier::findOrFail($id);
        $flowersandsupplier->update($requestData);

        return redirect('admin/flowers-and-suppliers')->with('flash_message', 'FlowersAndSupplier updated!');
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
        FlowersAndSupplier::destroy($id);

        return redirect('admin/flowers-and-suppliers')->with('flash_message', 'FlowersAndSupplier deleted!');
    }
}
