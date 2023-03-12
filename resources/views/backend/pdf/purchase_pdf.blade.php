@extends('admin.admin_master')
@section('title') {{'purchase Report'}} @endsection


@section('admin')

 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Supplier Invoice </h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);"> </a></li>
                                            <li class="breadcrumb-item active">supplier invoice</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
    <div class="row">
        <div class="col-12">
            <div class="purchase-title">
                <h4 class="float-end font-size-16"><strong>Purchase No # {{ $purchase->purchase_no }}</strong></h4>
                <h3>
                    <img src="{{ asset('backend/assets/images/logo_cart.png') }}" alt="logo" height="24"/> RICT Shopping Mall - Supplier Invoice
                </h3>
            </div>
            <hr>
             
            <div class="row">
                <div class="col-6 mt-4">
                    <h3 class="font-size-16"><strong>Customer Details</strong></h3>
                    <address>
                        <strong>RICT Shopping Mall</strong><br>
                       Adum, Kumasi<br>
                        support@rictconsult.com
                    </address>
                </div>
                <div class="col-6 mt-4 text-end">
                    <address>
                        <strong>purchase Date:</strong><br>
                         {{ date('d-m-Y',strtotime($purchase->date)) }} <br><br>
                    </address>
                </div>
            </div>
        </div>
    </div>

       @php
    $purchase_payment = App\Models\PurchasePayment::where('purchase_id',$purchase->id)->first();
    @endphp   

    <div class="row">
        <div class="col-12">
                <div>
                    <div class="col-6 mt-4">
                        <h3 class="font-size-16"><strong>Supplier Details</strong></h3>
                        <address>
                            <strong>Supplier Name: {{ $purchase_payment['supplier']['name'] }}</strong><br>
                           Mobile: {{ $purchase_payment['supplier']['mobile_no']  }}<br>
                            Address: {{ $purchase_payment['supplier']['address']  }}
                        </address>
                    </div>

                </div>

            </div>
    </div> <!-- end row -->





   <div class="row">
        <div class="col-12">
            <div>
                <div class="">
<div class="table-responsive">
    <table class="table bodered">
        <thead>
        <tr>
            <td><strong>Sl </strong></td>
            <td class="text-center"><strong>Category</strong></td>
            <td class="text-center"><strong>Product Name</strong>
            </td>
           
            <td class="text-center"><strong>Quantity</strong>
            </td>
            <td class="text-center"><strong>Unit Price (Gh¢) </strong>
            </td>
            <td class="text-end"><strong>Total Price (Gh¢)</strong>
            </td>
            
        </tr>
        </thead>
        <tbody>
        <!-- foreach ($order->lineItems as $line) or some such thing here -->
        
      @php
        $total_sum = '0';
        @endphp
        @foreach($purchase['purchase_details'] as $key => $details)
        <tr>
           <td class="text-center">{{ $key+1 }}</td>
            <td class="text-center">{{ $details['category']['name'] }}</td>
            <td class="text-center">{{ $details['product']['name'] }}</td>
            
            <td class="text-center">{{ $details->buying_qty }}</td>
            <td class="text-center">{{ $details->unit_price }}</td>
            <td class="text-end">{{ $details->buying_price }}</td>
            
        </tr>
         @php
        $total_sum += $details->buying_price;
        @endphp
        @endforeach
            <tr>
                
                <td class="thick-line"></td>
                <td class="thick-line"></td>
                <td class="thick-line"></td>
                <td class="thick-line"></td>
                <td class="thick-line text-center">
                    <strong>Subtotal</strong></td>
                <td class="thick-line text-end">{{ $total_sum }}</td>
            </tr>
            <tr>
                
                 <td class="no-line"></td>
                  <td class="no-line"></td>
                   <td class="no-line"></td>
                <td class="no-line"></td>
                <td class="no-line text-center">
                    <strong>Discount Amount</strong></td>
                <td class="no-line text-end">{{ $purchase_payment->discount_amount }}</td>
            </tr>
             <tr>
                
                 <td class="no-line"></td>
                  <td class="no-line"></td>
                   <td class="no-line"></td>
                <td class="no-line"></td>
                <td class="no-line text-center">
                    <strong>Paid Amount</strong></td>
                <td class="no-line text-end">{{ $purchase_payment->paid_amount }}</td>
            </tr>

             <tr>
                
                 <td class="no-line"></td>
                  <td class="no-line"></td>
                   <td class="no-line"></td>
                <td class="no-line"></td>
                <td class="no-line text-center">
                    <strong>Due Amount</strong></td>
                <td class="no-line text-end">{{ $purchase_payment->due_amount }}</td>
            </tr>
            <tr>
                
                 <td class="no-line"></td>
                  <td class="no-line"></td>
                   <td class="no-line"></td>
                <td class="no-line"></td>
                <td class="no-line text-center">
                    <strong>Grand Amount</strong></td>
                <td class="no-line text-end"><h4 class="m-0">Gh¢{{ $purchase_payment->total_amount }}</h4></td>
            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="d-print-none">
                        <div class="float-end">
                            <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light"><i class="fa fa-print"></i></a>
                            <a href="#" class="btn btn-primary waves-effect waves-light ms-2">Download</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> <!-- end row -->
















</div>
</div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>


@endsection