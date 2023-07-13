<?php

namespace App\Http\Controllers\v1\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cat;
use App\Http\Requests\v1\admin\CatRequest;

class CatController extends Controller
{
         public function index()
    {
        $cat = Cat::all()->sortBy('id');
        return view('v1.admin.cat.index')->with('cat', $cat);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('v1.admin.cat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'catcode' => ['required','min:4', 'max:4', 'unique:cat'],
            'catname' => ['required', 'min:6']
        ]);

        $cat = new Cat;
        $cat->catcode = $request->input('catcode');
        $cat->catname = $request->input('catname');
        $cat->save();

        return redirect('/admin/cats')->with('success','Category Created');
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
    public function edit(cat $cat)
    {
    
        return view('v1.admin.cat.edit', compact('cat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CatRequest $request, Cat $cat)
    {   

            $cat -> update($request->validated());         
            return redirect('/admin/cats')->with('success','Category Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Cat::destroy($id);
        return redirect('/admin/cats')->with('success','Category Deleted');
    }
}
