@extends('layouts.v1.admin.main')

@section('admin')
  <div class="d-flex justify-content-center">
    <div class="card" style="width: 25rem;">
      <div class="card-header text-center">Edit Item</div>
      <div class="card-body">
        <form action="{{ route('products.update',$item->id) }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="form-control mt-2">
            <label>Code</label><br/>
            <input type="text" name="code" id="code" class="form-control" value="{{ $item->code }}"><br/>
          </div>
          <div class="form-control mt-2">
            <label>Name</label><br/>
            <input type="text" name="name" id="name" class="form-control" value="{{ $item->name }}"><br/>
          </div>
          <div class="form-control mt-2">
            <label>Brand</label><br/>
            <select class="form-control" name="brandcode" id="brandcode" placeholder="Choose Brand">
              @foreach ($brand as $brands  )
                <option  value="{{ $brands->brandcode }}">{{ $brands->brandname }}</option>
              @endforeach
            </select>       
          </div>
          <div class="form-control mt-2">
            <label>Category</label><br/>
            <select class="form-control" name="catcode" id="catcode" placeholder="Choose Brand">
              @foreach ($cat as $cat  )
                <option  value="{{ $cat->catcode }}">{{ $cat->catname }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-control mt-2">
            <label>Base Price</label><br/>
            <input type="text" name="baseprice" id="baseprice" class="form-control" value="{{ $item->baseprice }}"><br/>
          </div> 
          <div class="form-control mt-2">
            <label>Sale Price</label><br/>
            <input type="text" name="saleprice" id="saleprice" class="form-control" value="{{ $item->saleprice }}"><br/>
          </div>
          <div class="form-control mt-2">
            <label>Unit</label><br/>
            <input type="text" name="unit" id="unit" class="form-control" value="{{ $item->unit }}"><br/>
          </div>
          <div class="form-control mt-2">
            <label>Stock</label><br/>
            <input type="text" name="stock" id="stock" class="form-control" value={{ $item->stock }}><br/>
          </div>    
          <div class="form-control mt-2">
            <label>Picture</label><br/>
            <input type="file" name="image" id="image" class="form-control" value="{{ $item->image }}"><br/>
            <img src="{{ Storage::url($item->image) }}"  width="100px"><br/>
          </div>
          <div class="form-control mt-2">
            <label>Status</label><br/>
            <select type="text" name="status" id="status" class="form-control">
              <option value="1">Active</option>
              <option value="0">Inactive</option>
            </select>
          </div>
          <button type="submit" class="btn btn-sm btn-success mt-2">Save</button><br/>
        </form>
      </div>
    </div>
  </div>
@endsection