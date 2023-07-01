@extends('layouts.v1.admin.main')

@section('admin')


<div class="container">
  <div class="row">
      <div class="col">
          <div class="card border-primary mb-3 py-3 px-3" style="width: 50rem">
              <p class="text-center mb-3"><b>Create New Admin</b></p>                    
              <form class="w-full max-w-lg md:items-center" action="{{ route('admins.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label class="ml-5">Username</label><br/>
                <input type="text" name="username" id="username" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white"><br/>
                <label class="ml-5">Password</label><br/>
                <input type="password" name="password" id="password" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white"><br/>
                <button type="submit" class="rounded-md content-center bg-green hover:bg-green-600 mt-2 px-3 py-2 w-20">Save</button><br/>
              </form>
          </div>
      </div>              
  </div>
</div>



@endsection