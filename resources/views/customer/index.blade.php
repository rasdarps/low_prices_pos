<x-layout :title="' - Customer List '"> {{--Extends the layout page to this page--}}

    @if (session('success'))
       <p class="alert alert-success">
        {{session('success')}}
       </p>
        
    @endif

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Customer List</h1>
    </div>
        
    <div class="card fluid" tyle="margin:20px;">
            <div class="card-header">
                <form action="" class="row row-cols-auto g-1">
                    <!--<div class="col">
                        <input type="text" class="form-control" name="q" value=" " placeholder="search here....">
                    </div>

                    <div class="col">
                        <button class="btn btn-success">Refresh</button>
                    </div>-->

                    <div class="col">
                        <a class="btn btn-primary" href="{{route('customer.create')}}"><i class="fas fa-plus"></i>
                        Add New</a>
                    </div>
                </form>

            </div>
            <div class="card-body">
               
                <table class="display nowrap" style="width:100%; text-align:center;" id="myTable">
                    <thead style="text-align:center;">
                        <th>#</th>
                        <th>Customer Name</th>
                        <th>Contact</th>
                        <th>Address</th>   
                        <th>Action</th>
                    </thead>
               

                    <?php $no = 1 ?>

                    @foreach($customers as $customer)
                      <tr>
                        <td>{{$no ++}}</td>
                        <td>{{$customer->customer_name}}</td>
                        <td>{{$customer->contact}}</td>
                        <td>{{$customer->address}}</td>
                      
                        <td>
                            <a class="btn btn-sm btn-primary" href="{{ route('customer.show', $customer) }}">Show</a>

                            @can('customer-edit')
                            <a class="btn btn-sm btn-primary" href="{{ route('customer.edit', $customer) }}">Edit</a>
                            @endcan

                            @can('customer-delete')
                            <form action="{{ route('customer.destroy', $customer) }}" method="POST" style="display:inline;" onsubmit="return confirm('Delete?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>
                            
                            </form>
                            @endcan
                        </td>
                      </tr>
                   
                    @endforeach

                </table>
            
            </div>
       </div>
    
    </x-layout>
 


