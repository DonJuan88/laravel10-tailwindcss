<?php

namespace App\Http\Controllers\v1\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin;
use App\Http\Requests\v1\admin\AdminRequest;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $admin = Admin::all()->sortBy('id');
        return view('v1.admin.account.index')->with('admin', $admin);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('v1.admin.account.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'username' =>['required', 'max:24', 'min:6', 'unique:admins'],
            'password' =>'required',
        ]);

        $admin = new Admin;
        $admin->username = $request->input('username');
        $admin->password = hash::make($request->input('password'));
        $admin->save();

        return redirect('/admin/admins')->with('success','Admin Created');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $admin = Admin::all()->orderBy('id');
        return view('v1.admin.account.index')->with('admin', $admin);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(admin $admin)
    {
        
    
        return view('v1.admin.account.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {   
        $this->validate($request,[
            'username' =>['required', 'max:24', 'min:6', 'unique:admins'],
            'password' =>'required',
        ]);

        $admin = Admin::findorfail($id);
        $admin->password=Hash::make($request->password);
        $admin->username=$request->username;
        $admin->email=$request->email;
        $admin->save();
        
        return redirect('/admin/admins')->with('success','admin Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Admin::destroy($id);
        return redirect('/admin/admins')->with('success','Admin Deleted');
    }
}
