@extends('layouts.v1.admin.main')

@section('admin')
  <div class="container">
    <div class="row">
        <div class="col">
            <div class="card border-primary mb-3 py-3 px-3" style="width: 50rem">
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
                <p class="text-center mb-3"><b>Status Input</b></p>                    
                <form class="w-full max-w-lg md:items-center" action="{{ route('status.store') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <label class="ml-5">Code</label><br/>
                  <input type="text" name="code" id="code" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white @error('code') is-invalid border-red @enderror" value="{{ old('code') }}"><br/>
                  <label class="ml-5">Name</label><br/>
                  <input type="text" name="status" id="status" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white @error('status') is-invalid border-red @enderror" value="{{ old('status') }}"><br/>
                  <button type="submit" class="rounded-md bg-green hover:bg-green-600  mt-2 px-3 py-2 w-20 ml-36">Save</button><br/>
                </form>
            </div>
        </div>              
    </div>
  </div>
@endsection