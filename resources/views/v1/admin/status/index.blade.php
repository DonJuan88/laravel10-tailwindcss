@extends('layouts.v1.admin.main')

@section('admin')
    <div class="d-flex justify-content-center">
        <div class="row">
            <div class="col">
                <div class="card border-primary mb-3" style="width: 50rem">
                <div class="card-header text-center"><b>Status</b></div>                    
                
                    <div class="card-body text-primary">
                        <div class="d-flex justify-content-end">
                            <a href="{{ Route('status.create') }}" class="btn btn-sm btn-success btn-sm">
                                <i class="bi bi-plus-lg"></i> Add New
                            </a>
                        </div>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Code</th>
                                        <th>Status Name</th>
                                        <th width="200px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($status as $status )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $status->code }}</td>                                        
                                            <td>{{ $status->status }}</td>
                                            <td>
                                                <form method="POST" action="{{ route('status.destroy', $status->id) }}">
                                                    <a class="btn btn-sm btn-primary" href="{{ route('status.edit', $status->id) }}"> <i class="bi bi-pencil"></i> Edit</a>
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