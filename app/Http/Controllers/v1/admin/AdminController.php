<?php

namespace App\Http\Controllers\v1\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin;
use App\Http\Requests\v1\admin\AdminRequest;


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
            'username' =>'required',
            'password' =>'required',
        ]);

        $admin = new Admin;
        $admin->username = $request->input('username');
        $admin->password = $request->input('password');
        $admin->save();

        return redirect('/admin/accounts')->with('success','Admin Created');
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
    
        return view('v1.admin.account', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AdminRequest $request, Admin $admin)
    {   

            $admin -> update($request->validated());         
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
