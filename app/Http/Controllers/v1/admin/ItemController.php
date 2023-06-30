<?php

namespace App\Http\Controllers\v1\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\admin\ItemRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\item;
use App\Models\brand;
use App\Models\cat;


class ItemController extends Controller
{
     public function index()
    {
        $item = Item::all()->sortBy('id');
        return view('v1.admin.item.index')->with('item', $item);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brand = brand::all();
        $cat = cat::all();
        return view('v1.admin.item.create')->with(['brand' => $brand, 'cat'=>$cat]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'code' => 'required',
            'name' => 'required',
            'brandcode' => 'required',
            'catcode' => 'required',
            'baseprice' =>'required',
            'saleprice' =>'required',
            'unit' =>'required',
            'stock' =>'required', 
            'image' =>'required',
            'status' =>'required',
        ]);

        $path = $request->file('image')->store('public/images');
        $item = new Item;
        $item->code = $request->input('code');
        $item->name = $request->input('name');
        $item->brandcode = $request->input('brandcode');
        $item->catcode = $request->input('catcode');
        $item->baseprice = $request->input('baseprice');
        $item->saleprice = $request->input('saleprice');
        $item->unit = $request->input('unit');
        $item->stock = $request->input('stock');
        $item->image = $path;
        $item->status = $request->input('status');
        $item->save();

        return redirect('/admin/products')->with('success','Item Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(item $item)
    {
        return view('v1.admin.item.show', compact('item'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $brand = brand::all();
        $cat = cat::all();
        $item = item::find($id);
        return view('v1.admin.item.edit')->with(['item' =>$item, 'brand' => $brand, 'cat'=>$cat]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ItemRequest $request, item $item)
    {
        if($request->hasFile('image')){
            Storage::delete($item->image);
            $item->image =  $request->file('image')->store('public/images');
          }
  
          $item -> update($request->validated() + [
              'image' => $item->image
          ]
          );

          return redirect('/admin/products')->with('success','Item Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        Item::destroy($id);
        return redirect('/admin/products')->with('success','Item Deleted');
    }
}
