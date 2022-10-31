<x-layout :title="' - Supplier Edit '"> {{--Extends the layout page to this page--}}

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Supplier Edit Form</h1>
</div>

<div class="card">
    <div class="card-header">

<form method="POST" action="{{route('supplier.update', $supplier)}}" class="form control">
    @csrf {{--Protects form from cross scripting--}}
    @method('PUT'){{--method to allow records to be updated--}}
    <div class="row g-3">

        <div class="col-md-6">
            <label for="supplier_name" class="">Supplier Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="supplier_name"  value="{{ old('supplier_name', $supplier->supplier_name) }}" placeholder="">
            <div class="text-danger">
                @error('supplier_name')
                    {{$message}}
                @enderror
            </div>
        </div>

        <div class="col-md-6">
            <label for="contact" class="">Contact<span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="contact"  value="{{ old('contact', $supplier->contact) }}" placeholder="">
            <div class="text-danger">
                @error('contact')
                    {{$message}}
                @enderror
            </div>
        </div>

        <div class="col-md-6">
            <label for="address" class="">Address</label>
            <input type="text" class="form-control" name="address"  value="{{ old('address', $supplier->address) }}" placeholder="">
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
    <button class="btn btn-primary" name="submit" id="">Update</button>
     <a class="btn btn-danger" href="{{route('supplier.index')}}"><i class="fas fa-arrow-left"></i> Back</a>
    </div>
    </center>

    </form>
</div><!--End of card-->
</div><!--End of card-->
       
</x-layout>
