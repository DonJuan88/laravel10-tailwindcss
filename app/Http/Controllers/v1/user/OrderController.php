<?php

namespace App\Http\Controllers\v1\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\order;


class OrderController extends Controller
{
        public function index()
    {
        $order = Order::all()->sortBy('id');
        return view('admin.order.index')->with('order', $order);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $transno)
    {
        $order = Order::find($transno);
        $input = $request->all();
        $order->update($input);

        return redirect('order');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(order $order)
    {
        //
    }
}
