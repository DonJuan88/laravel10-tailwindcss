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
      <div class="card-header text-center">Edit Status</div>
      <div class="card-body">
        <form action="{{ route('status.update', $status->id) }}" method="post" >
          @csrf
          @method('PUT')
          <label>Status Code</label><br/>
          <input type="text" name="code" id="code" value="{{ $status->code }}" class="form-control"><br/>
          <label>Status Name</label><br/>
          <input type="text" name="status" id="status" value="{{ $status->status }}" class="form-control"><br/>
          <button type="submit" class="btn btn-sm btn-success mt-2">Save</button><br/>
        </form>
      </div>
    </div>
  </div>
@endsection