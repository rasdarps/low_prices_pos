@extends('admin.admin_master')
@section('title') {{'Create Product'}} @endsection

@section('admin')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <span style="font-size:20px;">Add Product</span>
        </div>

        <div class="card-body">

             <!--Throw error message-->
             @if(count($errors))
             @foreach ($errors->all() as $error)
             <p class="alert alert-danger alert-dismissible fade show"> {{ $error}} </p>
             @endforeach
             @endif 

 <form method="post" action="{{ route('product.store') }}" id="myForm" >
                @csrf

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Product Name </label>
                <div class="form-group col-sm-10">
                    <input name="name" class="form-control" type="text" value="{{ old('name') }}">
                </div>
            </div>
            <!-- end row -->

      <div class="row mb-3 form-group">
        <label class="col-sm-2 col-form-label">Unit Name </label>
        <div class="col-sm-10">
            <select name="unit_id" class="form-select select2" aria-label="Default select example" value="{{ old('unit_id') }}">
                <option disabled selected value="">Open this select menu</option>
                @foreach($unit as $uni)
                <option value="{{ $uni->id }}">{{ $uni->name }}</option>
               @endforeach
                </select>
        </div>
    </div> 
  <!-- end row -->



      <div class="row mb-3 form-group">
        <label class="col-sm-2 col-form-label">Category Name </label>
        <div class="col-sm-10">
            <select name="category_id" class="form-select select2" aria-label="Default select example" value="{{ old('category_id') }}">
                <option disabled selected value="">Open this select menu</option>
                @foreach($category as $cat)
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
               @endforeach
                </select>
        </div>
    </div>
  <!-- end row -->
  <div class="row mb-3">
    <label for="example-text-input" class="col-sm-2 col-form-label">Stock Level </label>
    <div class="form-group col-sm-10">
        <input name="stock_level" class="form-control" type="text" onkeypress="return isNumberKey(event)" value="{{ 0 , old('stock_level') }}">
    </div>
</div>
<!-- end row -->
 
            <center>
            <input type="submit" class="btn btn-info waves-effect waves-light" value="Add Product">
            </center>
            
            </form>
             
           
           
        </div>
    </div>
</div> <!-- end col -->
</div>
 


</div>
</div>

<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                name: {
                    required : true,
                }, 
                 unit_id: {
                    required : true,
                },
                 category_id: {
                    required : true,
                },
            },
            messages :{
                name: {
                    required : 'Please Enter Product Name',
                },
                unit_id: {
                    required : 'Please Select One Unit',
                },
                category_id: {
                    required : 'Please Select One Category',
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
