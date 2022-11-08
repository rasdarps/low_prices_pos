<x-layout :title="' - Create Categories'"> {{--Extends the layout page to this page--}}

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Categories Creation Form</h1>
    </div>
    
    <div class="card fluid shadow mb-4">
        <div class="card-header">
            <form action="" class="row row-cols-auto g-1">
    
                <div class="col">
                    <a class="btn btn-primary" href="{{route('categories.index')}}"><i class="fas fa-eye"></i>
                    View Category</a>
                </div>
            </form>
        </div><!--End of card header-->
    
            <!--Card Body-->
            <div class="card-body">
    
                <form method="POST" action="{{route('categories.store')}}" class="form control">
                    @csrf {{--Protects form from cross scripting--}}
                    <div class="row g-3">
    
                        <div class="col-md-6">
                            <label for="unit" class="">Category<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="cat_name"  value="{{ old('cat_name') }}" placeholder="">
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
                        <button class="btn btn-success" name="submit" id="">Save</button>
                        </div>
                        </center>
    
                </form>
            </div><!--End of card body-->
    
    </div><!--End of card-->
           
    </x-layout>
    
    
    