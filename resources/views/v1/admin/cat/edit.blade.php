@extends('layouts.v1.admin.main')

@section('admin')
@if ($errors->any())

<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
  <div class="d-flex justify-content-center">
    <div class="card" style="width: 25rem;">
      <div class="card-header text-center">Edit Category</div>
      <div class="card-body">
        <form action="{{ route('cats.update', $cat->id) }}" method="post" >
          @csrf
          @method('PUT')
          <label>Status Code</label><br/>
          <input type="text" name="catcode" id="catcode" value="{{ $cat->catcode }}" class="form-control"><br/>
          <label>CATEGORY</label><br/>
          <input type="text" name="catname" id="catname" value="{{ $cat->catname }}" class="form-control"><br/>
          <button type="submit" class="btn btn-sm btn-success mt-2">Save</button><br/>
        </form>
      </div>
    </div>
  </div>
@endsection