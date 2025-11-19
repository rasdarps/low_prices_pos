@extends('admin.admin_master')
@section('title') {{'View User'}} @endsection
@section('admin')

<div class="page-content">
  <div class="container-fluid">

      <!-- start page title -->
      <div class="row">
          <div class="col-12">
              <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                  <h4 class="mb-sm-0">User Records</h4>

                   

              </div>
          </div>
      </div>
      <!-- end page title -->

      <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    
                    <!--Success Message-->
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                  
                <div class="mb-5">
                   <a href="{{ route('users.create') }}" class="btn btn-dark btn-rounded waves-effect waves-light" 
                   style="float:right"><i class="fas fa-plus-circle"></i> Add User</a>
                </div>

                    <h4 class="card-title">Users | Data </h4>
                    

                    <table id="myTable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            
                            <th>Name</th>
                            <th>Email</th>
                            <th>Roles</th>  
                            <th>Action</th>
                            
                        </thead>


                        <tbody>
                        	 
                        	@foreach($data as $key => $user)
                        <tr>
                          <td> {{ $key+1}} </td>
                          <td>{{ $user->name }}</td>
                          <td>{{ $user->email }}</td>
                          <td>
                            @if(!empty($user->getRoleNames()))
                              @foreach($user->getRoleNames() as $v)
                                 <label class="badge badge-success" style="color:rgb(207, 7, 7)">{{ $v }}</label>
                              @endforeach
                            @endif
                          </td>
                          <td>
                            <!--<a href="{{-- route('supplier.show',$user->id) --}}" class="btn btn-info sm" title="Show Data">  <i class="fas fa-eye"></i> </a>-->
                             <a href="{{ route('users.edit', Crypt::encrypt($user->id)) }}" class="btn btn-info sm" title="Edit Data">  <i class="fas fa-edit"></i> </a>
                              {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline', 'onsubmit'=>'return confirm("Delete?")' ]) !!}
                                  {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                              {!! Form::close() !!}
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
                <!---------------------------------------------------------------------->


@endsection