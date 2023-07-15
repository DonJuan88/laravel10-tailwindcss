@extends('layouts.v1.admin.main')

@section('admin')
  <div class="container">
    <div class="row">
        <div class="col">
            <div class="card border-primary mb-3 py-3 px-3" style="width:50rem">
              @if ($errors->any())
                <div class="">
                  <p class="text-red bg-red-200 ml-5"><strong>Whoops!</strong> There were some problems with your input.<p><br>
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li class="text-red bg-red-200 ml-5">{{ $error }}</li>
                      @endforeach
                  </ul>
                </div>
              @endif
                <p class="text-center mb-3"><b>Product Input</b></p>                    
                <form action="{{ route('products.update', $item->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <label class="ml-5">Code</label><br/>
                    <input type="text" name="code" id="code" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white" value="{{ $item->code }}"><br/>
                    @error('code')
                      <span class="flex items-center font-medium tracking-wide text-red-500 text-xs ml-5">
                        {{ $message }}
                      </span>                  
                    @enderror<br/>
                    <label class="ml-5">Name</label><br/>
                    <input type="text"name="name" id="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white" value="{{ $item->name }}"><br/>
                    @error('name')
                      <span class="flex items-center font-medium tracking-wide text-red-500 text-xs ml-5">
                        {{ $message }}
                      </span>                  
                    @enderror<br/>
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
                    <input type="text" name="baseprice" id="baseprice" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white" value="{{ $item->baseprice }}"><br/>
                    @error('baseprice')
                      <span class="flex items-center font-medium tracking-wide text-red-500 text-xs ml-5">
                        {{ $message }}
                      </span>                  
                    @enderror<br/>
                    <label class="ml-5">Sale Price</label><br/>
                    <input type="text" name="saleprice" id="saleprice" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white" value="{{ $item->saleprice }}"><br/>
                    @error('saleprice')
                      <span class="flex items-center font-medium tracking-wide text-red-500 text-xs ml-5">
                        {{ $message }}
                      </span>                  
                    @enderror<br/>
                    <label class="ml-5">Unit</label><br/>
                    <input type="text"name="unit" id="unit" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white" value="{{ $item->unit }}"><br/>
                    @error('unit')
                      <span class="flex items-center font-medium tracking-wide text-red-500 text-xs ml-5">
                        {{ $message }}
                      </span>                  
                    @enderror<br/>
                    <label class="ml-5">Stock</label><br/>
                    <input type="text" name="stock" id="stock" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white" value="{{ $item->stock }}"><br/>
                    @error('stock')
                      <span class="flex items-center font-medium tracking-wide text-red-500 text-xs ml-5">
                        {{ $message }}
                      </span>                  
                    @enderror<br/>
                    <label class="ml-5">Picture</label><br/>
                    <input type="file" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white" name="image" id="image" value="{{ url($item->image) }}"><br/>
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