<?php

namespace App\Http\Controllers\v1\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\status;

class StatusController extends Controller
{
     public function index()
    {
        $status = Status::all()->sortBy('id');
        return view('v1.admin.status.index')->with('status', $status);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('v1.admin.status.create');   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'code' =>'required',
            'status' => 'required'
        ]);

        $status = new Status;
        $status->code = $request->input('code');
        $status->status = $request->input('status');
        $status->save();
        
        return redirect('/admin/status')->with('success','Status Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(status $status)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(status $status)
    {
        return view('v1.admin.status.edit', compact('status'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, status $status)
    {
        $this->validate($request, [
            'code' =>'required',
            'status' => 'required'
        ]);
   
        $input = $request->all();
        $status->update($input);
        
        return redirect('/admin/status')->with('success', 'Status added');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Status::destroy($id);
        return redirect('/admin/status')->with('success','Status Deleted');
    }
}
