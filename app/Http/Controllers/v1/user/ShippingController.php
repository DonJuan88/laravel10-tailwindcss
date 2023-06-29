<?php

namespace App\Http\Controllers\v1\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\shipping;

class ShippingController extends Controller
{
    public function index()
    {
        $ship = Shipping::all()->orderBy('id');
        return view('v1.user.shipping.index')->with('ship', $ship);    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('v1.user.shipping.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $this->validate($request,[
            'shipcode' =>'required',
            'email' =>'required',
            'shipname' =>'required',
            'notes' =>'required',
            'village' =>'required',
            'subdisc' =>'required',
            'disctric' =>'required',
            'province' =>'required',
            'postalcode' =>'required',
            'phone' =>'required'

        ]);

        $ship = new Shipping;
        $ship->shipcode = $request->input('shipcode');
        $ship->email =    $request->input('email');
        $ship->shipname = $request->input('shipname');
        $ship->notes =    $request->input('notes');
        $ship->village =  $request->input('village');
        $ship->subdisc =  $request->input('subdisc');
        $ship->disctric = $request->input('disctric');
        $ship->province = $request->input('province');
        $ship->postalcode = $request->input('postalcode');
        $ship->phone =    $request->input('phone');
        $ship->save();

        return redirect('/shipping')->with('success','Shipping Created');

        
    }

    /**
     * Display the specified resource.
     */
    public function show(shipping $shipping)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(shipping $shipping)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, shipping $shipping)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(shipping $shipping)
    {
        //
    }
}
