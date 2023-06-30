<?php

namespace App\Http\Controllers\v1\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\order;
use App\Models\orderd;

class OrderController extends Controller
{
    public function index()
   {
       $order = Order::all()->sortBy('transno');
       return view('v1.admin.order.index',["title" => "admin" ])->with('order', $order);
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
       
       
   }

   /**
    * Display the specified resource.
    */
   public function show($transno)
   {

    $orderd = order::find($transno);
    $order = order::find($transno);
    return view('v1.admin.order.show')->with(['order' =>$order, 'orderd' => $orderd]);
       
   }

   /**
    * Show the form for editing the specified resource.
    */
   public function edit()
   {
   
   }

   /**
    * Update the specified resource in storage.
    */
   public function update()
   {   

   }

   /**
    * Remove the specified resource from storage.
    */
   public function destroy($id)
   {
      
   }
}

