<x-layout :title="' - Product List '"> {{--Extends the layout page to this page--}}


    @if (session('success'))
       <p class="alert alert-success">
        {{session('success')}}
       </p>
        
    @endif

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Product List</h1>
    </div>
        
    <div class="card fluid" tyle="margin:20px;">
            <div class="card-header">
               <!-- <form action="" class="row row-cols-auto g-1">
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="q" value="  " placeholder="search here....">
                    </div>
                    <div class="col">
                        <button class="btn btn-primary">Load</button>
                    </div>
                    -->

                    <div class="col">
                        <a class="btn btn-primary float-right" href="{{route('products.create')}}"><i class="fas fa-plus"></i>
                        Add New</a>
                    </div>
                </form>

            </div>
            <div class="card-body">
               
                <table class="display nowrap" style="text-align:center;" id="myTable">
                    <thead style="text-align:center;">
                        <th>#</th>
                        <th>Name</th>
                        <th>Details</th>
                        <th>Action</th>
                    </thead>
               

                    <?php $no = 1 ?>

                    @foreach($products as $product)
                      <tr>
                        <td>{{$no ++}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->detail}}</td>
                        <td>
                            <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;" onsubmit="return confirm('Delete?')">
                            <a class="btn btn-sm btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                            @can('product-edit')
                            <a class="btn btn-primary" href="{{ route('products.edit', $product) }}">Edit</a>
                            @endcan

                                @csrf
                                @method('DELETE')
                                @can('product-delete')
                                <button class="btn btn-sm btn-danger">Delete</button>
                                @endcan
                            </form>
                        </td>
                      </tr>
                   
                    @endforeach

                </table>

            </div>
       </div>
    
    </x-layout>
 


