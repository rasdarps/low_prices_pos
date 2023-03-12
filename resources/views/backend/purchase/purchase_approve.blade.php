@extends('admin.admin_master')
@section('title') {{'Approve purchase'}} @endsection
@section('admin')


 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Approve Purchase</h4>

                                     

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
    @php
    $purchase_payment = App\Models\PurchasePayment::where('purchase_id',$purchase->id)->first();
    @endphp                    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
<h4>Purchase No: #{{ $purchase->purchase_no }} - {{ date('d-m-Y',strtotime($purchase->date)) }} </h4>
    <a href="{{ route('purchase.pending.list') }}" class="btn btn-dark btn-rounded waves-effect waves-light" style="float:right;"><i class="fa fa-list"> Pending purchase List </i></a> <br>  <br>               

     <table class="table table-dark" width="100%">
        <tbody>
            <tr>
                <td><p> Customer Info </p></td>
                <td><p> Name: <strong> {{ $purchase_payment['supplier']['name']  }} </strong> </p></td>
                <td><p> Mobile: <strong> {{ $purchase_payment['supplier']['mobile_no']  }} </strong> </p></td>
               <td><p> Email: <strong> {{ $purchase_payment['supplier']['email']  }} </strong> </p></td>                
            </tr>

             <tr>
             <td></td>
              <td colspan="3"><p> Description : <strong> {{ $purchase->description  }} </strong> </p></td>
             </tr>
        </tbody>
         
     </table>    


     <form method="post" action="{{ route('purchase.approval.store',$purchase->id) }}">
      @csrf         
         <table border="1" class="table table-dark" width="100%">
            <thead>
                <tr>
                    <th class="text-center">Sl</th>
                    <th class="text-center">Category</th>
                    <th class="text-center">Product Name</th>
                    <th class="text-center" style="background-color: #8B008B">Current Stock</th>
                    <th class="text-center">Buying Qty</th>
                    <th class="text-center">Unit Price (Gh¢) </th>
                    <th class="text-center">Total Price (Gh¢)</th>
                </tr>
                
            </thead>
    <tbody>
        @php
        $total_sum = '0';
        @endphp
        @foreach($purchase['purchase_details'] as $key => $details)
        <tr>
            
            <input type="text" name="category_id[]" value="{{ $details->category_id }}">
            <input type="text" name="product_id[]" value="{{ $details->product_id }}">
            <input type="text" name="buying_qty[{{$details->id}}]" value="{{ $details->buying_qty }}">

            <td class="text-center">{{ $key+1 }}</td>
            <td class="text-center">{{ $details['category']['name'] }}</td>
            <td class="text-center">{{ $details['product']['name'] }}</td>
            <td class="text-center" style="background-color: #8B008B">{{ $details['product']['quantity'] }}</td>
            <td class="text-center">{{ $details->buying_qty }}</td>
            <td class="text-center">{{ $details->unit_price }}</td>
            <td class="text-center">{{ $details->buying_price }}</td>
        </tr>
        @php
        $total_sum += $details->buying_price;
        @endphp
        @endforeach
        <tr>
            <td colspan="6"> Sub Total </td>
             <td > {{ $total_sum }} </td>
        </tr>
         <tr>
            <td colspan="6"> Discount </td>
             <td > {{ $purchase_payment->discount_amount }} </td>
        </tr>

         <tr>
            <td colspan="6"> Paid Amount </td>
             <td >{{ $purchase_payment->paid_amount }} </td>
        </tr>

         <tr>
            <td colspan="6"> Due Amount </td>
             <td > {{ $purchase_payment->due_amount }} </td>
        </tr>

        <tr>
            <td colspan="6"> Grand Amount </td>
             <td >{{ $purchase_payment->total_amount }}</td>
        </tr>
    </tbody>
             
         </table>
 
         <button type="submit" class="btn btn-info">Approve Purchase </button>

     </form> 

                    
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
                     
                        
                    </div> <!-- container-fluid -->
                </div>
 

@endsection