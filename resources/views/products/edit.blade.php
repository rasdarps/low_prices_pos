<x-layout :title="' - Product Create '"> {{--Extends the layout page to this page--}}

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Product Creation Form</h1>
    </div>
    
    <div class="card col">
        <div class="card-header">
            <div class="card-body px-4">
    
    <form method="POST" action="{{route('products.update', $product)}}" class="form control mb-4">
        @csrf {{--Protects form from cross scripting--}}
        @method('PUT'){{--method to allow records to be updated--}}
        <div class="row g-3">
    
            <div class="col-md-6">
                <label for="name" class="">Product Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="name"  value="{{ old('name', $product->name) }}" placeholder="">
                <div class="text-danger">
                    @error('name')
                        {{$message}}
                    @enderror
                </div>
            </div>
    
            <div class="col-md-6">
                <label for="unit" class="">Unit<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="unit_id"  value="{{ old('unit_id', $product->unit_id) }}" placeholder="">
                
            </div>
    
            <div class="col-md-6">
                <label for="category" class="">Category</label>
                <input type="text" class="form-control" name="cat_id"  value="{{ old('cat_id', $product->cat_id) }}" placeholder="">
                
            </div>

            <div class="col-md-6">
                <label for="stock" class="">Stock Quantity <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="stock_qty"  value="{{ old('stock_qty', $product->stock_qty) }}" placeholder="">
                <div class="text-danger">
                    @error('name')
                        {{$message}}
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <label for="price" class="">Price<span class="text-danger">*</span></label>
                <input type="number" class="form-control" name="price"  value="{{ old('price', $product->price) }}" placeholder="">
                <div class="text-danger">
                    @error('name')
                        {{$message}}
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <label for="reorder" class="">Re-Order Level</label>
                <input type="number" class="form-control" name="re_order"  value="{{ old('re_order', $product->re_order) }}" placeholder="">
                
            </div>
            
        </div><!--End of row-->
        <br><br>
    
        <center>
        <div class="mb-3">
        <button class="btn btn-primary" name="submit" id="">Update</button>
         <a class="btn btn-danger" href="{{route('products.index')}}"><i class="fas fa-arrow-left"></i> Back</a>
        </div>
        </center>
    
    </form>
    
    </div><!--End of card body-->
    </div><!--End of card header-->
    </div><!--End of card-->
           
    </x-layout>