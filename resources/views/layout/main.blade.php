<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <!--<title>Dashboard | Admin & Dashboard </title>-->
        <title>RICT POS | @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Best Sales and Inventory System" name="description" />
        <meta content="Themesdesign" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">

        <!-- jquery.vectormap css -->
        <link href="{{ asset('backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />

        <!--select 2-->
        <link href="{{ asset('backend/assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
        
        <!-- DataTables -->
        <link href="{{ asset('backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="{{ asset('backend/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />  
         
        <!--new datatables css-->
         <!-- Custom datatable styles for this page -->
        <link rel="stylesheet" type="text/css" href="{{asset('datatables/Buttons-2.2.3/css/buttons.dataTables.min.css')}}"/>
        <link href="{{asset('datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
        
        {{-- notiflix --}}
        <link rel="stylesheet" href=  "{{ asset('notiflix/notiflix-3.2.8.min.css') }}"/>

        <!--fontawesome-->
        <link href="{{asset('fontawesome/css/all.css')}}" rel="stylesheet">


        <!-- Bootstrap Css -->
        <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('backend/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
        
        @yield('styles')
        
    </head>

    <body data-topbar="dark" oncontextmenu="return false;">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
          @include('layout.header')

            <!-- ========== Left Sidebar Start ========== -->
           @include('layout.sidebar')
            <!-- Left Sidebar End -->

            
            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                
                @yield('content')
                    <!-- End Page-content -->
                

                @include('layout.footer')
                
                
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
        
    @include('layout.scripts')

@yield('scripts')

</body>

</html>