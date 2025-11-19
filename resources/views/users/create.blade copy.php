@extends('admin.admin_master')
@section('title') {{'Create User'}} @endsection

@section('admin')

<!--Validator link-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <span style="font-size:20px;">Create User</span>
                        <a class="m-0 btn btn-dark btn-rounded waves-effect waves-light" href="{{route('users.index')}}" style="float:right">
                            <i class="fas fa-list"></i> View User
                        </a>
                    </div>
                    <div class="card-body">

                        <!--Error Message-->
                        @if(count($errors))
                            @foreach ($errors->all() as $error)
                            <p class="alert alert-danger alert-dismissible fade show"> {{ $error}} </p>
                            @endforeach

                        @endif

                        <div class="card fluid shadow mb-4">

                        {!! Form::open(array('route' => 'users.store','method'=>'POST', 'id' => 'myForm'))  !!}
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Full Name:</strong>
                                    {!! Form::text('name', null, array('placeholder' => '','class' => 'form-control')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Username:</strong>
                                    {!! Form::text('username', null, array('placeholder' => '','class' => 'form-control')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Email:</strong>
                                    {!! Form::text('email', null, array('placeholder' => '','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Password:</strong>
                                    {!! Form::password('password', array('placeholder' => '','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Confirm Password:</strong>
                                    {!! Form::password('confirm-password', array('placeholder' => '','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Role:</strong>
                                    {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center my-4">
                                <button type="submit" class="btn btn-info">Submit</button>
                            </div>
                        </div>
                        {!! Form::close() !!}

                    </div>
                    <!-- card body ends -->
                </div>
                <!-- card ends -->
            </div> 
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
<!-- container fluid ends -->
</div>
<!-- page content ends -->

<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                name: {
                    required : true,
                },
                email: {
                    required : true,
                },
                password: {
                    required : true,
                }, 

                confirm_password: {
                    required : true,
                },
            },
            messages :{
                name: {
                    required : 'Please Enter name',
                },
                email: {
                    required : 'Please Enter email',
                },
                password: {
                    required : 'Please Enter password',
                },

                confirm_password: {
                    required : 'Please confirm password',
                },
            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script>


 
@endsection 
