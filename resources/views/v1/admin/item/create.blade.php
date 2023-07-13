@extends('layouts.v1.admin.main')

@section('admin')
  <div class="container">
    <div class="row">
        <div class="col">
            <div class="card border-primary mb-3 py-3 px-3" style="width:50rem">
                <p class="text-center mb-3"><b>Product Input</b></p>                    
                <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                  @csrf
                    <label class="ml-5">Code</label><br/>
                    <input type="text" name="code" id="code" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white" ><br/>
                    <label class="ml-5">Name</label><br/>
                    <input type="text" name="name" id="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white" ><br/>
                    <label class="ml-5">Brand</label><br/>
                    <select name="brandcode" id="brandcode" placeholder="Choose Brand" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white" >
                      @foreach ($brand as $brands  )
                        <option  value="{{ $brands->brandcode }}">{{ $brands->brandname }}</option>
                      @endforeach
                    </select>       
                    <label class="ml-5">Category</label><br/>
                    <select name="catcode" id="catcode" placeholder="Choose Brand" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white" >
                      @foreach ($cat as $cat  )
                        <option  value="{{ $cat->catcode }}">{{ $cat->catname }}</option>
                      @endforeach
                    </select>
                    <label class="ml-5">Base Price</label><br/>
                    <input type="text" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white" name="baseprice" id="baseprice"><br/>
                    <label class="ml-5">Sale Price</label><br/>
                    <input type="text" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white" name="saleprice" id="saleprice"><br/>
                    <label class="ml-5">Unit</label><br/>
                    <input type="text" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white" name="unit" id="unit"><br/>
                    <label class="ml-5">Stock</label><br/>
                    <input type="text" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white" name="stock" id="stock"><br/>
                    <label class="ml-5">Picture</label><br/>
                    <input type="file" name="image" id="image" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white"><br/>
                    <label class="ml-5">Status</label><br/>
                    <select type="text" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white" name="status" id="status">
                      <option value="1">Active</option>
                      <option value="0">Inactive</option>
                    </select>
                    <button type="submit" class="rounded-md bg-green hover:bg-green-600  mt-2 px-3 py-2 w-20 ml-36">Save</button><br/>
                </form>
            </div>
        </div>              
    </div>
  </div> 
@endsection