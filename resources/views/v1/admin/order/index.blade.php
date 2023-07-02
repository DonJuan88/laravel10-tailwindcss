@extends('layouts.v1.admin.main')

@section('admin')
    <div class="container ml-2 mr-2">
        <div class="row">
            <div class="col">
                <div class="card border-primary mb-3" >
                    <p class="text-center text-xl"><b>Order list</b></p>                    
                        <table class="table-fixed w-full bg-white rounded-lg shadow overflow-hidden">
                            <thead class="text-sm font-medium text-left text-gray-700">
                                <tr>
                                    <th class="px-4 py-2 w-4">#</th>
                                    <th class="px-4 py-2">Trans Date</th>
                                    <th class="px-4 py-2">Trans No</th>
                                    <th class="px-4 py-2">Customer ID</th>
                                    <th class="px-4 py-2">Payment</th>
                                    <th class="px-4 py-2">Status</th>
                                    <th class="px-4 py-2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order as $order)
                                    <tr class="hover:bg-gray-100 border-b border-gray-200 ">
                                        <td class="px-4 py-2">{{ $loop->iteration }}</td>
                                        <td class="px-4 py-2">{{ $order->transdate }}</td>                                        
                                        <td class="px-4 py-2">{{ $order->transno }}</td> 
                                        <td class="px-4 py-2">{{ $order->email }}</td>                                                         
                                        <td class="px-4 py-2">{{ $order->payment }}</td>                                        
                                        <td class="px-4 py-2">{{ $order->status }}</td>
                                        <td>
                                            <button class="rounded-md bg-gray hover:bg-gray-dark text-white font-bold  px-2 mr-2 py-1 text-sm"><a href="{{ route('customers.show', $user->id) }}">  Detail </a> </button>
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