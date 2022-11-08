
<x-layout :title="' - Customer Create '"> {{--Extends the layout page to this page--}}

 
    <div class="py-3 d-flex flex-row align-items-center justify-content-between">
        <h4 class="h3 mb-0 text-gray-800">Customer Creation Form</h4>
    </div>

    <!-- form -->
    <div class="card fluid shadow mb-4">
        <!-- Card Header-->
        <div class="card-header">
            <form action="" class="row row-cols-auto g-1">

                <div class="col">
                    <a class="btn btn-primary" href="{{route('customer.index')}}"><i class="fas fa-plus"></i>
                    View Customer</a>
                </div>
            </form>

        </div><!--Card Head ends-->
        
        <!-- Card Body -->
        <div class="card-body">
            <form method="POST" action="{{route('customer.store')}}" class="form control">
                @csrf {{--Protects form from cross scripting--}}
                <div class="row g-3">
            
                    <div class="col-md-6">
                        <label for="customer_name" class="">Customer Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="customer_name"  value="{{ old('customer_name') }}" placeholder="">
                        <div class="text-danger">
                            @error('customer_name')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
            
                    <div class="col-md-6">
                        <label for="contact" class="">Contact Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="contact"  value="{{ old('contact') }}" placeholder="">
                        <div class="text-danger">
                            @error('contact')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
            
                    <div class="col-md-6">
                        <label for="address" class="">Address</label>
                        <input type="text" class="form-control" name="address"  value="{{ old('address') }}" placeholder="">
                        <div class="text-danger">
                            @error('address')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                    
                </div><!--End of row-->
                <br><br>
            
                <center>
                <div class="mb-3">
                <button class="btn btn-primary" name="submit" id="">Save</button>
                </div>
                </center>
            
            </form>
        </div>
    </div>

       
</x-layout>

