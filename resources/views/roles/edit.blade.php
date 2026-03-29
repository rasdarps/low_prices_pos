@extends('admin.admin_master')
@section('title') {{'Edit Roles'}} @endsection

@section('admin')

<!--Validator link-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 

<div class="page-content">
<div class="container-fluid">

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Role</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
        </div>
    </div>
</div>


@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif


<form action="{{ route('roles.update', $role->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" value="{{ old('name', $role->name) }}" class="form-control" placeholder="Name">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <strong>Permission:</strong>
                        <br/>
                        
                        {{-- Group permissions by category --}}
                        @php
                            $permissionGroups = [
                                'User Management' => $permission->filter(function($perm) {
                                    return str_contains($perm->name, 'user-') || str_contains($perm->name, 'unit-') || str_contains($perm->name, 'category-') || str_contains($perm->name, 'role');
                                }),
                                'Product Management' => $permission->filter(function($perm) {
                                    return str_contains($perm->name, 'product-');
                                }),
                                'Supplier Management' => $permission->filter(function($perm) {
                                    return str_contains($perm->name, 'supplier-');
                                }),

                                'Customer Management' => $permission->filter(function($perm) {
                                    return str_contains($perm->name, 'customer-');
                                }),

                                'Transaction Management' => $permission->filter(function($perm) {
                                    return str_contains($perm->name, 'transaction-')|| str_contains($perm->name, 'invoice-') || str_contains($perm->name, 'sales-') || str_contains($perm->name, 'purchase-');
                                }),

                                'Other Permissions' => $permission->filter(function($perm) {
                                    return !str_contains($perm->name, 'user-') && 
                                           !str_contains($perm->name, 'role-') &&
                                           !str_contains($perm->name, 'unit-') &&
                                           !str_contains($perm->name, 'category-') &&
                                           !str_contains($perm->name, 'product-') && 
                                           !str_contains($perm->name, 'supplier-') && 
                                           !str_contains($perm->name, 'customer-') && 
                                           !str_contains($perm->name, 'transaction-') && 
                                           !str_contains($perm->name, 'invoice-') &&
                                           !str_contains($perm->name, 'sales-') &&
                                           !str_contains($perm->name, 'purchase-');

                                })
                            ];
                        @endphp

                        @foreach($permissionGroups as $groupName => $groupPermissions)
                            @if($groupPermissions->count() > 0)
                                <div class="mb-4">
                                    <h6 class="text-primary fw-bold mb-3">{{ $groupName }}</h6>
                                    <div class="row">
                                        @foreach($groupPermissions as $value)
                                            <div class="col-lg-4 col-md-6 col-12 mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="permission[]" value="{{ $value->id }}"
                                                        id="perm{{ $value->id }}"
                                                        {{ in_array($value->id, $rolePermissions) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="perm{{ $value->id }}">
                                                        {{ $value->name }}
                                                    </label>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>

</div>
</div>
@endsection