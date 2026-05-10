<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <!--<title>Dashboard | Admin & Dashboard </title>-->
        <title>RICT POS | @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
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
        <!--fontawesome-->
        <link href="{{asset('fontawesome/css/all.css')}}" rel="stylesheet">


        <!-- Bootstrap Css -->
        <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('backend/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

    </head>

    <body data-topbar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
          @include('admin.body.header')

            <!-- ========== Left Sidebar Start ========== -->
           @include('admin.body.sidebar')
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

               @yield('admin')
                <!-- End Page-content -->

                @include('admin.body.footer')
                
                
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>

        
        <!-- apexcharts -->
        <script src="{{ asset('backend/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

        <!-- jquery.vectormap map -->
        <script src="{{ asset('backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js') }}"></script>

        <!-- Required datatable js -->
        <script src="{{ asset('backend/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        
        <!-- Responsive examples -->
        <script src="{{ asset('backend/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

        <script src="{{ asset('backend/assets/js/pages/dashboard.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('backend/assets/js/app.js') }}"></script>

        <script src="{{ asset('backend/assets/libs/select2/js/select2.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/pages/form-advanced.init.js') }}"></script>


        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;

    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;

    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
 
</script>

 <!-- Required datatable js -->
 <script src="{{ asset('backend/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
 <script src="{{ asset('backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
 <script src="{{ asset('backend/assets/libs/datatables.net-bs4/js/dataTables.buttons.min.js') }}"></script>

 <!-- Datatable init js -->
 <script src="{{ asset('backend/assets/js/pages/datatables.init.js') }}"></script>

 <!--New Datatables-->
 <script type="text/javascript" src="{{asset('datatables/JSZip-2.5.0/jszip.min.js')}}"></script>
<script type="text/javascript" src="{{asset('datatables/pdfmake-0.1.36/pdfmake.min.js')}}"></script>
<script type="text/javascript" src="{{asset('datatables/pdfmake-0.1.36/vfs_fonts.js')}}"></script>
<script type="text/javascript" src="{{asset('datatables/Buttons-2.2.3/js/dataTables.buttons.min.js')}}"></script>
<script type="text/javascript" src="{{asset('datatables/Buttons-2.2.3/js/buttons.html5.min.js')}}"></script>
<script type="text/javascript" src="{{asset('datatables/Buttons-2.2.3/js/buttons.print.min.js')}}"></script>

 <!-- field Validation -->
 <script src="{{ asset('backend/assets/js/validate.min.js') }}"></script>

 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

 <script src="{{ asset('backend/assets/js/code.js') }}"></script>
 <script src="{{ asset('backend/assets/js/handlebars.js') }}"></script>
 <script src="{{ asset('backend/assets/js/notify.min.js') }}"></script>

 <!--Only Text and Numbers Script-->
<script>
    function isNumberKey(evt){
var charCode = (evt.which) ? evt.which : evt.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))
  return false;
return true;
}

function isCharKey(evt){

  
var keyunicode=event.charCode || event.keyCode 
return (keyunicode>=65 && keyunicode<=122 || keyunicode==8 || keyunicode==32)? true : false 
}
</script>

<script>
    //calling datatable function 
    $(document).ready( function () {
    $('#myTable').DataTable(
        {
            paging: true,
           lengthChange: true,
           searching: true,
           ordering: true,
           info: true,
           autoWidth: false,
            dom: 'lBfrtip',

           responsive: true,
           buttons: [ "csv","print",
           {
            extend: 'copy',
            exportOptions: {
                columns:  [ 0, 1, 2, 3, 4, 5, 6, 7]
            }
        },
        {
            extend: 'excel',
            exportOptions: {
                columns:  [ 0, 1, 2, 3, 4, 5, 6, 7]
            }
        },
        {
            extend: 'pdf',
            exportOptions: {
                columns: [ 0, 1, 2, 3, 4, 5, 6, 7]
            }
        },


        'colvis' ],
         })
         .buttons()
          .container()
          .appendTo("#example_wrapper .col-md-6:eq(0)");
          

    });
</script>

<script>
    //calling datatable function 
    $(document).ready( function () {
    $('#NewTable').DataTable(
        {
            
           
         })
         .buttons()
          .container()
          .appendTo("#example_wrapper .col-md-6:eq(0)");
          

    });
</script>

</body>

</html>