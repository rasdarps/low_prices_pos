@extends('admin.admin_master')
@section('title') {{'Create Roles'}} @endsection

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

            <div class="card-header">
                <span style="font-size:20px;">Create Role</span>
                <a  href="{{ route('roles.index') }}" class="m-0 btn btn-dark btn-rounded waves-effect waves-light" style="float:right"><i class="fas fa-list"></i> 
                    View Roles</a>
            </div>

            <div class="card-body">

                <!--Error message-->
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif


<form action="{{ route('roles.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 my-3">
            <div class="form-group">
                <strong>Role Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Permission:</strong>
                <br/>
                @foreach($permission as $value)
                    <label>
                        <input type="checkbox" name="permission[]" value="{{ $value->id }}" class="name">
                        {{ $value->name }}
                    </label>
                    <br/>
                @endforeach
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center my-4">
            <button type="submit" class="btn btn-info">Submit</button>
        </div>
    </div>
</form>

</div>
</div>
</div> <!-- end col -->
</div>



</div>
</div>

@endsection