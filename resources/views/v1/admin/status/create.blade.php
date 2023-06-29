@extends('layouts.v1.admin.main')

@section('admin')
  <div class="d-flex md:h-screen md:items-center">
    <div class="card" style="width: 25rem;">
      <div class="card-header text-center">Create New Status</div>
      <div class="card-body">
        <form action="{{ route('status.store') }}" method="post">
          @csrf
          <label>Status Code</label><br/>
          <input type="text" name="code" id="code" class="form-control"><br/>
          <label>Status Name</label><br/>
          <input type="text" name="status" id="status" class="form-control"><br/>
          <button type="submit" class="btn btn-sm btn-success mt-2">Save</button><br/>
        </form>
      </div>
    </div>
  </div>
@endsection