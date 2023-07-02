@extends('layouts.v1.admin.main')

@section('admin')
  <div class="container">
    <button class="rounded-md content-center bg-gray text-white hover:bg-gray-600 mt-1 px-2 py-1 w-15 ml-5"><a href="{{ url('admin/cats') }}">Back</a></button><br/>
      
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

    <div class="row">
        <div class="col">
            <div class="card border-primary mb-1 py-3 px-3" style="width: 50rem">
                <p class="text-center"><b>Category Edit</b></p>                    
                <form class="w-full max-w-lg md:items-center" action="{{ route('cats.update', $cat->id) }}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <label class="ml-5">Code</label><br/>
                  <input type="text" name="catcode" id="catcode" value="{{ $cat->catcode }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white@error('brandcode') is-invalid border-red @enderror" value="{{ old('catcode') }}">
                  @error('catcode')
                    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs ml-5">
                      Invalid Category Code field !
                    </span>                  
                  @enderror<br/>
                  <label class="ml-5">Name</label><br/>
                  <input type="text" name="catname" id="catname" value="{{ $cat->catname }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white@error('brandcode') is-invalid border-red @enderror" value="{{ old('catname') }}">
                  @error('catname')
                    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs ml-5">
                      Invalid Category Name field !
                    </span>                  
                  @enderror<br/>
                  <button type="submit" class="rounded-md bg-green hover:bg-green-600 mt-2 px-3 py-2 ml-5">Save</button><br/>
                </form>
            </div>
        </div>              
    </div>
  </div>
@endsection