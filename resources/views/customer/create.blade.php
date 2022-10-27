
<x-layout :title="' - Customer Create '"> {{--Extends the layout page to this page--}}

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Customer Creation Form</h1>
</div>

<div class="card col">
    <div class="card-header">
        <div class="card-body p-0">

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
            <label for="contact_name" class="">Contact Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="contact_name"  value="{{ old('contact_name') }}" placeholder="">
            <div class="text-danger">
                @error('contact_name')
                    {{$message}}
                @enderror
            </div>
        </div>

        <div class="col-md-6">
            <label for="address" class="">Address</label>
            <input type="text" class="form-control" name="address"  value="{{ old('address') }}" placeholder="">
        </div>

        <div class="col-md-6">
            <label for="city" class="">City</label>
            <input type="text" class="form-control" name="city"  value="{{ old('city') }}" placeholder="">
        </div>
        
    </div><!--End of row-->
    <br><br>

    <center>
    <div class="mb-3">
    <button class="btn btn-primary" name="submit" id="">Save</button>
     <a class="btn btn-danger" href="{{route('customer.index')}}"><i class="fas fa-arrow-left"></i> Back</a>
    </div>
    </center>

    </form>
</div><!--End of card body-->
</div><!--End of card header-->
</div><!--End of card-->
       
</x-layout>

