<?php

namespace App\Http\Controllers\v1\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller 
{
    public function index()
   {
       $user = User::all()->sortBy('id');
       return view('v1.admin.user.index',["title" => "admin" ])->with('user', $user);
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
   public function show()
   {

    return view('v1.admin.user.show', compact('user'));
       
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

