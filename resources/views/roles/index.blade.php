@extends('admin.admin_master')
@section('title') {{'View Roles'}} @endsection

@section('admin')

<!--Validator link-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 

<div class="page-content">
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Role Records</h4>

                 

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                  
                <div class="mb-5">
                   <a href="{{ route('roles.create') }}" class="btn btn-dark btn-rounded waves-effect waves-light" 
                   style="float:right"><i class="fas fa-plus-circle"></i> Add Role</a>
                </div>

                    <h4 class="card-title">Roles | Data </h4>

<table id="myTable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead> 
    <tr>
     <th>No</th>
     <th>Name</th>
     <th width="280px">Action</th>

    </thead>

    <tbody>

  </tr>
    @foreach ($roles as $key => $role)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $role->name }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
            @can('role-edit')
                <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
            @endcan
            @can('role-delete')
                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline', 'onsubmit'=>'return confirm("Delete?")']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            @endcan
        </td>
    </tr>
    @endforeach

</tbody>

</table>


{!! $roles->render() !!}



</div>
</div>
</div> <!-- end col -->
</div> <!-- end row -->



</div> <!-- container-fluid -->
</div>

@endsection