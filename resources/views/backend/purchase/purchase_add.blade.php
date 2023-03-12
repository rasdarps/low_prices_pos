@extends('admin.admin_master')
@section('title') {{'Create Purchase'}} @endsection

@section('admin')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <span style="font-size:20px;">Add Purchase</span>
        </div>
        <div class="card-body"> 

    <div class="row">

        <div class="col-md-2">
            <div class="md-3">
                <label for="example-text-input" class="form-label">Date</label>
                 <input class="form-control example-date-input" value="{{ $date }}" name="date" type="date"  id="date">
            </div>
        </div>

         <div class="col-md-1">
            <div class="md-3">
                <label for="example-text-input" class="form-label">Pur No</label>
                 <input class="form-control example-date-input" name="purchase_no" type="text" value="{{ $purchase_no }}"  id="purchase_no" readonly style="background-color:#ddd" >
            </div>
        </div>

       <div class="col-md-3">
            <div class="md-3">
                <label for="example-text-input" class="form-label">Category Name (Select)</label>
                <select name="category_id" id="category_id" class="form-select select2" aria-label="Default select example">
                <option selected=""></option>
                  @foreach($category as $cat)
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
               @endforeach
                </select>
            </div>
        </div>


         <div class="col-md-3">
            <div class="md-3">
                <label for="example-text-input" class="form-label">Product Name </label>
                <select name="product_id" id="product_id" class="form-select select2" aria-label="Default select example">
                <option selected="">Open this select menu</option>
               
                </select>
            </div>
        </div>

        <div class="col-md-3">
            <div class="md-3">
                <label for="example-text-input" class="form-label">Unit </label>
                <select name="unit_id" id="unit_id" class="form-select select2" aria-label="Default select example">
                <option selected="">Open this select menu</option>
               
                </select>
            </div>
        </div>


           <div class="col-md-1">
            <div class="md-3">
                <label for="example-text-input" class="form-label">Stock(Pic/Kg)</label>
                 <input class="form-control example-date-input" name="current_stock_qty" type="text"  id="current_stock_qty" readonly style="background-color:#ddd" >
            </div>
        </div>


<div class="col-md-2">
    <div class="md-3">
        <label for="example-text-input" class="form-label" style="margin-top:43px;">  </label>
        <i class="btn btn-secondary btn-rounded waves-effect waves-light fas fa-plus-circle addeventmore"></i> Add More
    </div>
</div>





    </div> <!-- // end row  --> 
           
        </div> <!-- End card-body -->
<!--  ---------------------------------- -->

        <div class="card-body">
        <form method="post" action="{{ route('purchase.store') }}">
            @csrf
            <table class="table-sm table-bordered" width="100%" style="border-color: #ddd;">
                <thead>
                    <tr>
                        <th>Category</th>
                        <th>Product Name </th>
                        <th width="7%">PSC/KG</th>
                        <th width="10%">Unit Price </th> 
                        <th  width="15%">Per</th>
                        <th width="15%">Total Price</th>
                        <th width="7%">Action</th> 

                    </tr>
                </thead>

                <tbody id="addRow" class="addRow">
                    
                </tbody>

                <tbody>
        <tr>
            <td colspan="5"> Discount</td>
            <td>
            <input type="text" name="discount_amount" id="discount_amount" class="form-control estimated_amount" placeholder="Discount Amount"  >
            </td>
        </tr>


                    <tr>
                        <td colspan="5"> Grand Total</td>
                        <td>
                            <input type="text" name="estimated_amount" value="0" id="estimated_amount" class="form-control estimated_amount" readonly style="background-color: #ddd;" >
                        </td>
                        <td></td>
                    </tr>

                </tbody>                
            </table><br>


            <div class="form-row">
                <div class="form-group col-md-12">
                    <textarea name="description" class="form-control" id="description" placeholder="Write Description Here"></textarea>
                </div>
            </div><br>

            <div class="row">
                <div class="form-group col-md-3">
                    <label> Paid Status </label>
                    <select name="paid_status" id="paid_status" class="form-select">
                        <option value="">Select Pyment Status</option>
                        <option value="full_paid">Full Paid </option>
                        <option value="full_due">Full Due </option>
                         <option value="partial_paid">Partial Paid </option>
                        
                    </select>
        <input type="text" name="paid_amount" class="form-control paid_amount" placeholder="Enter Paid Amount" style="display:none;">
                </div>


            <div class="form-group col-md-9">
                <label> Supplier Name  </label>
                    <select name="supplier_id" id="supplier_id" class="form-select">
                        <option value="">Select Supplier </option>
                        @foreach($suppliers as $supplier)
                        <option value="{{ $supplier->id }}">{{ $supplier->name }} - {{ $supplier->mobile_no }}</option>
                        @endforeach
                         <option value="0">New Supplier </option>
                    </select>
            </div> 
            </div> <!-- // end row --> <br>

<!-- Hide Add Customer Form -->
<div class="row new_supplier" style="">
    <div class="form-group col-md-4">
        <input type="hidden" name="name" id="name" class="form-control" placeholder="Supplier Name">
    </div>

    <div class="form-group col-md-4">
        <input type="hidden" name="mobile_no" id="mobile_no" class="form-control" placeholder="Write Customer Mobile No">
    </div>

    <div class="form-group col-md-4">
        <input type="hidden" name="email" id="email" class="form-control" placeholder="Write Customer Email">
    </div>
</div>
<!-- End Hide Add Customer Form -->

 <br>
            <div class="form-group">
                <center>
                <button type="submit" class="btn btn-info storeButton" id="storeButton"> Purchase Store</button>
                </center>
            </div>
            
        </form>

        </div> <!-- End card-body -->


    </div>
</div> <!-- end col -->
</div>
 


</div>
</div>

 


<script id="document-template" type="text/x-handlebars-template">
     
<tr class="delete_add_more_item" id="delete_add_more_item">
        <input type="hidden" name="date" value="@{{date}}">
        <input type="hidden" name="purchase_no" value="@{{purchase_no}}">
        
   
    <td>
        <input type="hidden" name="category_id[]" value="@{{category_id}}">
        @{{ category_name }}
    </td>

     <td>
        <input type="hidden" name="product_id[]" value="@{{product_id}}">
        @{{ product_name }}
    </td>


     <td>
        <input type="number" min="1" class="form-control buying_qty text-right" name="buying_qty[]" value=""> 
    </td>

    <td>
        <input type="number" class="form-control unit_price text-right" name="unit_price[]" value=""> 
    </td>

    <td>
        <input type="hidden" name="unit_id[]" value="@{{unit_id}}">
        @{{ unit_name }}
    </td>

     <td>
        <input type="number" class="form-control buying_price text-right" name="buying_price[]" value="0" readonly> 
    </td>

     <td>
        <i class="btn btn-danger btn-sm fas fa-window-close removeeventmore"></i>
    </td>

    </tr>

</script>


<script type="text/javascript">
    $(document).ready(function(){
        $(document).on("click",".addeventmore", function(){
            var date = $('#date').val();
            var purchase_no = $('#purchase_no').val(); 
            var category_id  = $('#category_id').val();
            var category_name = $('#category_id').find('option:selected').text();
            var product_id = $('#product_id').val();
            var product_name = $('#product_id').find('option:selected').text();
            var unit_id  = $('#unit_id').val();
            var unit_name = $('#unit_id').find('option:selected').text();
            

            if(date == ''){
                $.notify("Date is Required" ,  {globalPosition: 'top right', className:'error' });
                return false;
                 }
                  
                  if(category_id == ''){
                $.notify("Category is Required" ,  {globalPosition: 'top right', className:'error' });
                return false;
                 }
                  if(product_id == ''){
                $.notify("Product Field is Required" ,  {globalPosition: 'top right', className:'error' });
                return false;
                 }

                 if(unit_id == ''){
                    $.notify("Unit Field is Required" ,  {globalPosition: 'top right', className:'error' });
                    return false;
                     }

                 var source = $("#document-template").html();
                 var tamplate = Handlebars.compile(source);
                 var data = {
                    date:date,
                    purchase_no:purchase_no, 
                    category_id:category_id,
                    category_name:category_name,
                    product_id:product_id,
                    product_name:product_name,
                    unit_id:unit_id,
                    unit_name:unit_name,
                    

                 };
                 var html = tamplate(data);
                 $("#addRow").append(html); 
        });

        $(document).on("click",".removeeventmore",function(event){
            $(this).closest(".delete_add_more_item").remove();
            totalAmountPrice();
        });

        $(document).on('keyup click','.unit_price,.buying_qty', function(){
            var unit_price = $(this).closest("tr").find("input.unit_price").val();
            var qty = $(this).closest("tr").find("input.buying_qty").val();
            var total = unit_price * qty;
            $(this).closest("tr").find("input.buying_price").val(total);
            $('#discount_amount').trigger('keyup');
        });

        $(document).on('keyup','#discount_amount',function(){
            totalAmountPrice();
        });

        // Calculate sum of amout in purchase 

        function totalAmountPrice(){
            var sum = 0;
            $(".buying_price").each(function(){
                var value = $(this).val();
                if(!isNaN(value) && value.length != 0){
                    sum += parseFloat(value);
                }
            });

            var discount_amount = parseFloat($('#discount_amount').val());
            if(!isNaN(discount_amount) && discount_amount.length != 0){
                    sum -= parseFloat(discount_amount);
                }

            $('#estimated_amount').val(sum);
        }  

    });


</script>
 

<script type="text/javascript">

//auto pull product when category selected
    $(function(){
        $(document).on('change','#category_id',function(){
            var category_id = $(this).val();
            $.ajax({
                url:"{{ route('get-product') }}",
                type: "GET",
                data:{category_id:category_id},
                success:function(data){
                    var html = '<option value="">Select Category</option>';
                    $.each(data,function(key,v){
                        html += '<option value=" '+v.id+' "> '+v.name+'</option>';
                    });
                    $('#product_id').html(html);
                }
            })
        });
    });

</script>

<!--Select Product to pull related Unit-->
<script type="text/javascript">
    $(function(){
        $(document).on('change','#product_id',function(){
            var product_id = $(this).val();
            $.ajax({
                url:"{{ route('get-unit') }}",
                type: "GET",
                data:{product_id:product_id},
                success:function(data){
                    var html = '<option value="">Select Unit</option>';
                    $.each(data,function(key,v){
                        html += '<option value=" '+v.unit_id+' "> '+v.unit.name+'</option>';
                    });
                    $('#unit_id').html(html);
                }
            })
        });
    });
</script>

 
 <script type="text/javascript">
   //get current stock quantity when product selected
    $(function(){
        $(document).on('change','#product_id',function(){
            var product_id = $(this).val();
            $.ajax({
                url:"{{ route('check-product-stock') }}",
                type: "GET",
                data:{product_id:product_id},
                success:function(data){                   
                    $('#current_stock_qty').val(data);
                }
            });
        });
    });

</script>

<script>
    //Payment and customer validation
    $(document).ready(function(){
        $(document).on("click",".storeButton", function(){
            var paid_status = $('#paid_status').val();
            var supplier_id = $('#supplier_id').val();
            //var name = $('#name').val();
            //var mobile_no = $('#mobile_no').val();
            //var email = $('#email').val();

            if(paid_status == ''){
                $.notify("Paid Status is Required" ,  {globalPosition: 'top right', className:'error' });
                return false;
                 }

                 if(supplier_id == ''){
                $.notify("Supplier name is Required" ,  {globalPosition: 'top right', className:'error' });
                return false;
                 }

                //if(name == ''){
                //$.notify("Customer name is Required" ,  {globalPosition: 'top right', className:'error' });
                //return false;
                 //}

                 //if(mobile_no == ''){
                //$.notify("Phone Number is Required" ,  {globalPosition: 'top right', className:'error' });
                //return false;
                 //}

                 //if(email == ''){
                //$.notify("Email is Required" ,  {globalPosition: 'top right', className:'error' });
                //return false;
                 //}

        });
    });  
</script>


<script type="text/javascript">
//payment status and customer show or hide
    $(document).on('change','#paid_status', function(){
        var paid_status = $(this).val();
        if (paid_status == 'partial_paid') {
            $('.paid_amount').show();
        }else{
            $('.paid_amount').hide();
        }
    });

      $(document).on('change','#supplier_id', function(){
        var supplier_id = $(this).val();
        if (supplier_id == '0') {
            $('.new_supplier').show();
        }else{
            $('.new_supplier').hide();
        }
    });


</script>

 


 
@endsection 
