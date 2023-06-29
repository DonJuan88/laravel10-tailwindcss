@extends('layouts.v1.admin.main')

@section('admin')
    <div class="d-flex justify-content-center">
        <div class="row">
            <div class="col">
                <div class="card border-primary mb-3">
                <div class="card-header text-center"><b>Item</b></div>                    
                
                    <div class="card-body text-primary">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('products.create') }}" class="btn btn-success btn-sm">
                                <i class="bi bi-plus-lg"></i> Add New
                            </a>
                        </div>
                        <br/>
                        @if ($message = Session::get('success'))

                        <div class="alert alert-success">
                
                            <p class="p text-center">{{ $message }}</p>
                
                        </div>
                
                        @endif
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Code</th>
                                        <th>Product Name</th>
                                        <th>Brand Name</th>
                                        <th>Category</th>
                                        <th>Base Price</th>
                                        <th>Sale Price</th>
                                        <th>Stock</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($item as $item )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><img src="{{ Storage::url($item->image) }}" height="40" width="40" alt="" /></td>
                                            <td>{{ $item->code }}</td>                                        
                                            <td>{{ $item->name }}</td> 
                                            <td>{{ $item->catcode }}</td>                                                         
                                            <td>{{ $item->brandcode }}</td> 
                                            <td>{{ $item->baseprice }}</td>                                        
                                            <td>{{ $item->saleprice }}</td>                                        
                                            <td>{{ $item->stock }}</td>
                                            <td>
                                                <form method="POST" action="{{ route('products.destroy', $item->id) }}">
                                                    <a class="btn btn-sm btn-success" href="{{ route('products.show', $item->id) }}"><i class="bi bi-card-text"></i> Show</a>
                                                    <a class="btn btn-sm btn-primary" href="{{ route('products.edit', $item->id) }}"><i class="bi bi-pencil"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="bi bi-trash3-fill"></i> Remove</button>
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
    </div>
@endsection