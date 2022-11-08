<x-layout :title="' - Unit List '"> {{--Extends the layout page to this page--}}


    @if (session('success'))
       <p class="alert alert-success">
        {{session('success')}}
       </p>
        
    @endif

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Unit List</h1>
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
                        <a class="btn btn-primary float-right" href="{{route('units.create')}}"><i class="fas fa-plus"></i>
                        Add New</a>
                    </div>
                </form>

            </div>
            <div class="card-body">
               
                <table class="display nowrap" style="text-align:center;" id="myTable">
                    <thead style="text-align:center;">
                        <th>#</th>
                        <th>unit Name</th>
                        <th>Action</th>
                    </thead>
               

                    <?php $no = 1 ?>

                    @foreach($units as $unit)
                      <tr>
                        <td>{{$no ++}}</td>
                        <td>{{$unit->unit}}</td>
                        
                        <td>
                            <a class="btn btn-sm btn-primary" href="{{ route('units.show', $unit) }}">Show</a>
                            
                            <a class="btn btn-sm btn-success" href="{{ route('units.edit', $unit) }}">Edit</a>
                           

                            @can('unit-delete')
                            <form action="{{ route('units.destroy', $unit) }}" method="POST" style="display:inline;" onsubmit="return confirm('Delete?')">
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
 


