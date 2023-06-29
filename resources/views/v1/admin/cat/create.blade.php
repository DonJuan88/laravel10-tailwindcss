@extends('layouts.v1.admin.main')

@section('admin')
  <div class="d-flex justify-content-center">
    <div class="card" style="width: 25rem;">
      <div class="card-header text-center">Create New Category</div>
      <div class="card-body">
        <form action="{{ route('cats.store') }}" method="post" enctype="multipart/form-data">
          @csrf
          <label>CODE</label><br/>
          <input type="text" name="catcode" id="catcode" class="form-control"><br/>
          <label>CATEGORY</label><br/>
          <input type="text" name="catname" id="catname" class="form-control"><br/>
          <button type="submit" class="btn btn-sm btn-success mt-2">Save</button><br/>
        </form>
      </div>
    </div>
  </div>
@endsection