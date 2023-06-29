@extends('layouts.v1.admin.main')

@section('admin')
  <div class="container">
    <div class="row">
        <div class="col">
            <div class="card border-primary mb-3 py-3 px-3" style="width: 50rem">
                <p class="text-center mb-3"><b>Category Input</b></p>                    
                <form class="w-full max-w-lg md:items-center" action="{{ route('cats.store') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <label class="ml-5">Code</label><br/>
                  <input type="text" name="catcode" id="catcode" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white"><br/>
                  <label class="ml-5">Name</label><br/>
                  <input type="text" name="catname" id="catname" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white"><br/>
                  <button type="submit" class="rounded-md content-center bg-green hover:bg-green-600 mt-2 px-3 py-2 w-20">Save</button><br/>
                </form>
            </div>
        </div>              
    </div>
  </div>
@endsection