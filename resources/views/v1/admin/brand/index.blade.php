@extends('layouts.v1.admin.main')

@section('admin')

    <div class="container ml-2 mr-2">
        <div class="row">
            <div class="col">
                <div class="card border-primary mb-3" >
                    <p class="text-center"><b>Brand</b></p>                    
                    
                    <div class=""></div>
                            <a href="{{ route('brands.create') }}" class="bg-emerald-700 hover:bg-emerald-500 text-white font-bold py-2 px-2 rounded-md text-sm">
                                Add New
                            </a>
                        </div>
                        <br/>
                        @if ($message = Session::get('success'))

                        <div class="alert alert-success">
                
                            <p class="p text-center">{{ $message }}</p>
                
                        </div>
                
                        @endif
                        <table class="table-fixed w-full bg-white rounded-lg shadow overflow-hidden">
                                <thead class="text-sm font-medium text-left text-gray-700">
                                    <tr>
                                        <th class="px-4 py-2 w-3">#</th>
                                        <th class="px-4 py-2 w-12">Code</th>
                                        <th class="px-4 py-2 w-20">Brand Name</th>
                                        <th class="px-4 py-2 w-10">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($brand as $brand )
                                        <tr class="hover:bg-gray-100 border-b border-gray-200 ">
                                            <td class="px-4 py-2 ">{{ $loop->iteration }}</td>
                                            <td class="px-4 py-2 ">{{ $brand->brandcode }}</td>                                        
                                            <td class="px-4 py-2 ">{{ $brand->brandname }}</td>
                                            <td class="px-4 py-2 w-20">
                                                <form method="POST" action="{{ route('brands.destroy', $brand->id) }}">
                                                    <button class="rounded-md bg-blue hover:bg-blue-100 text-white font-bold  px-2 mr-2 py-1 text-sm"><a href="{{ route('brands.edit', $brand->id) }}">  Edit </a> </button>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="rounded-md bg-red text-white font-bold hover:bg-red-400 px-2 py-1 text-sm">Delete</button><br/>
                                                </form>
                                            </td>
                                        </tr>    
                                    @endforeach                                    
                                </tbody>
                        </table>
                    </div>
            </div>              
        </div>
    </div>
      

@endsection