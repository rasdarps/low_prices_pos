{{-- filepath: c:\xampp\htdocs\rictPOS\resources\views\backend\supplier\index.blade.php --}}
@php
use Illuminate\Support\Facades\Crypt;
@endphp

@extends('layout.main')
@section('title') {{'View Supplier'}} @endsection

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Supplier All</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <a href="{{ route('suppliers.create') }}" class="btn btn-dark btn-rounded waves-effect waves-light" style="float:right;">
                            <i class="fas fa-plus-circle"> Add Supplier </i>
                        </a> 
                        <br><br>               

                        <h4 class="card-title">Supplier All Data</h4>

                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th width="5%">Sl</th>
                                    <th>Name</th> 
                                    <th>Mobile No</th>
                                    <th>Email</th>
                                    <th>Address</th> 
                                    <th>City</th>
                                    <th>Type</th>
                                    <th width="15%">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($supplier as $key => $item)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $item->name }}</td> 
                                    <td>{{ $item->mobile_no }}</td> 
                                    <td>{{ $item->email ?? 'N/A' }}</td>
                                    <td>{{ $item->address }}</td> 
                                    <td>{{ $item->city ?? 'N/A' }}</td>
                                    <td>{{ $item->type ?? 'N/A' }}</td>  
                                    <td>
                                        @can('supplier-edit')
                                            <a href="{{ route('suppliers.edit', Crypt::encrypt($item->id)) }}" class="btn btn-info sm" title="Edit Data">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        @endcan

                                        @can('supplier-delete')
                                            <a href="{{ route('suppliers.destroy', Crypt::encrypt($item->id)) }}" class="btn btn-danger sm" title="Delete Data" id="delete">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        @endcan
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container-fluid -->
</div>

@endsection