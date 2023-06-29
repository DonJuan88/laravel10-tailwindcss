@extends('layouts.v1.admin.main')

@section('admin')
  <div class="d-flex justify-content-center">
    <div class="card" style="width: 25rem;">
      <div class="card-header text-center">Edit Item</div>
      <div class="card-body">
        <form action="{{ route('products.update', $item->id) }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
            <label>Code</label><br/>
            <input type="text" name="code" id="code" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white" value="{{ $item->code }}"><br/>         
            <label>Name</label><br/>
            <input type="text" name="name" id="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white" value="{{ $item->name }}"><br/>
            <label>Brand</label><br/>
            <select class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white" name="brandcode" id="brandcode" placeholder="Choose Brand">
              @foreach ($brand as $brands  )
                <option  value="{{ $brands->brandcode }}">{{ $brands->brandname }}</option>
              @endforeach
            </select>       
          
            <label>Category</label><br/>
            <select class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white" name="catcode" id="catcode" placeholder="Choose Brand">
              @foreach ($cat as $cat  )
                <option  value="{{ $cat->catcode }}">{{ $cat->catname }}</option>
              @endforeach
            </select>
            <label>Base Price</label><br/>
            <input type="text" name="baseprice" id="baseprice" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white" value="{{ $item->baseprice }}"><br/>
            <label>Sale Price</label><br/>
            <input type="text" name="saleprice" id="saleprice" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white" value="{{ $item->saleprice }}"><br/>
            <label>Unit</label><br/>
            <input type="text" name="unit" id="unit" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white" value="{{ $item->unit }}"><br/>
            <label>Stock</label><br/>
            <input type="text" name="stock" id="stock" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white" value={{ $item->stock }}><br/>
            <label>Picture</label><br/>
            <input type="file" name="image" id="image" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white" value="{{ $item->image }}"><br/>
            <img src="{{ Storage::url($item->image) }}"  width="100px"><br/>
            <label>Status</label><br/>
            <select type="text" name="status" id="status" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white">
              <option value="1">Active</option>
              <option value="0">Inactive</option>
            </select>
            <button type="submit" class="btn btn-sm btn-success mt-2">Save</button><br/>
        </form>
      </div>
    </div>
  </div>
@endsection