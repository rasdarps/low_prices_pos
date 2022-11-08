<x-layout :title="' - Edit Category '"> {{--Extends the layout page to this page--}}

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Category Edit Form</h1>
    </div>
    
    <div class="card">
        <div class="card-header">
    
    <form method="POST" action="{{route('categories.update', $category)}}" class="form control">
        @csrf {{--Protects form from cross scripting--}}
        @method('PUT'){{--method to allow records to be updated--}}
        <div class="row g-3">
    
            <div class="col-md-6">
                <label for="cat_name" class="">Category<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="cat_name"  value="{{ old('cat_name', $category->cat_name) }}" placeholder="eg. kg, bx, gal, pcs">
                <div class="text-danger">
                    @error('cat_name')
                        {{$message}}
                    @enderror
                </div>
            </div>
    
           
        </div><!--End of row-->
        <br><br>
    
        <center>
        <div class="mb-3">
        <button class="btn btn-primary" name="submit" id="">Update</button>
         <a class="btn btn-danger" href="{{route('categories.index')}}"><i class="fas fa-arrow-left"></i> Back</a>
        </div>
        </center>
    
        </form>
    </div><!--End of card-->
    </div><!--End of card-->
           
    </x-layout>
    