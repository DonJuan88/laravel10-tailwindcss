<?php

namespace App\Http\Controllers\v1\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\v1\admin\BrandRequest;
use App\Models\brand;

class BrandController extends Controller
{
     public function index()
    {
        $brand = Brand::all()->sortBy('id');
        return view('v1.admin.brand.index',["title" => "Brand" ])->with('brand', $brand);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('v1.admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'brandcode' =>'required',
            'brandname' =>'required',
        ]);

        $brand = new Brand;
        $brand->brandcode = $request->input('brandcode');
        $brand->brandname = $request->input('brandname');
        $brand->save();

        return redirect('/admin/brands')->with('success','Brand Created');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(brand $brand)
    {
    
        return view('v1.admin.brand.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BrandRequest $request, Brand $brand)
    {   

            $brand -> update($request->validated());         
            return redirect('/admin/brands')->with('success','Brand Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Brand::destroy($id);
        return redirect('/admin/brands')->with('success','Brand Deleted');
    }
}
