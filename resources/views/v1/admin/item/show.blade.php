@extends('layouts.v1.admin.main')

@section('admin')
  <div class="d-flex justify-content-center">
    <div class="card" style="width: 30rem;">
      <div class="card-header text-center">Detail Item</div>
      <div class="card-body">
        <form action="{{ route('products.show',$item->id) }}" method="post">
          <div class="form-control mt-2">
            <label>Code</label><br/>
            <input type="text" name="code" id="code" class="form-control" value="{{ $item->code }}" disabled><br/>
          </div>
          <div class="form-control mt-2">
            <label>Name</label><br/>
            <input type="text" name="name" id="name" class="form-control" value="{{ $item->name }}" disabled><br/>   
          </div>
          <div class="form-control mt-2">
            <label>Brand</label><br/>
            <input type="text" name="brandcode" id="brandcode" class="form-control" value="{{ $item->brandcode }}" disabled><br/>   
          </div>
          <div class="form-control mt-2">
            <label>Category</label><br/>
            <input type="text" name="catcode" id="catcode" class="form-control" value="{{ $item->catcode }}" disabled><br/>   
          </div>
          <div class="form-control mt-2">
            <label>Base Price</label><br/>
            <input type="text" name="baseprice" id="baseprice" class="form-control" value="{{ $item->baseprice }}" disabled><br/>
          </div> 
          <div class="form-control mt-2">
            <label>Sale Price</label><br/>
            <input type="text" name="saleprice" id="saleprice" class="form-control" value="{{ $item->saleprice }}" disabled><br/>
          </div>
          <div class="form-control mt-2">
            <label>Unit</label><br/>
            <input type="text" name="unit" id="unit" class="form-control" value="{{ $item->unit }}" disabled><br/>
          </div>
          <div class="form-control mt-2">
            <label>Stock</label><br/>
            <input type="text" name="stock" id="stock" class="form-control" value={{ $item->stock }} disabled><br/>
          </div>    
          <div class="form-control mt-2">
            <label>Picture</label><br/>
            <input type="file" name="image" id="image" class="form-control" value="{{ $item->image }}" disabled><br/>
            <img src="{{ Storage::url($item->image) }}"  width="100px"><br/>
          </div>
          <div class="form-control mt-2">
            <label>Status</label><br/>
            <input type="text" name="status" id="status" class="form-control" value="{{ $item->status }}" disabled><br/>   
          </div>
          <button type="submit" class="btn btn-success mt-2">Save</button><br/>
        </form>
      </div>
    </div>
  </div>
@endsection