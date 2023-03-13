 <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!-- User details -->
                

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="{{ url('/dashboard') }}" class="waves-effect">
                                    <i class="ri-dashboard-line"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            <li class="menu-title">Transctions</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-oil-fill"></i>
                                    <span>Manage Purchase</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('purchase.add') }}">Create</a></li>
                                    <li><a href="{{ route('purchase.all') }}">All Purchase</a></li>
                                    {{-- <li><a href="{{ route('purchase.approved.list') }}">Approved List</a></li>
                                    <li><a href="{{ route('purchase.pending.list') }}">Pending Approval</a></li> --}}
                                    <li><a href="{{ route('print.purchase.list') }}">Print Purchase List</a></li>
                                    <!--<li><a href="{{-- route('purchase.pending') --}}">Approval Purchase</a></li>-->
                                    <li><a href="{{ route('daily.purchase.report') }}">Daily Purchase Report</a></li>
                                   
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-compass-2-fill"></i>
                                    <span>Manage Invoice</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('invoice.add') }}">Create</a></li>
                                    <li><a href="{{ route('invoice.all') }}">All Invoice</a></li>
                                    {{-- <li><a href="{{ route('invoice.approved.list') }}">Approved List</a></li>
                                    <li><a href="{{ route('invoice.pending.list') }}">Pending Approval</a></li> --}}
                                    <li><a href="{{ route('print.invoice.list') }}">Print Invoice List</a></li>
                                    <li><a href="{{ route('daily.invoice.report') }}">Daily Invoice Report</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">Setups</li>
                
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="fa fa-users"></i>
                                    <span>Manage Suppliers</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('supplier.add') }}">Create</a></li>
                                    <li><a href="{{ route('supplier.all') }}">All Supplier</a></li>
                                    
                                    
                                    
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="fa fa-building"></i>
                                    <span>Manage Customers</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('customer.add') }}">Create</a></li>
                                    <li><a href="{{ route('customer.all') }}">All Customers</a></li>
                                    <li><a href="{{ route('credit.customer') }}">Credit Customers</a></li>

                                    <li><a href="{{ route('paid.customer') }}">Paid Customers</a></li>
                                    <li><a href="{{ route('customer.wise.report') }}">Customer Wise Report</a></li>
                                   
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="fa fa-bars"></i>
                                    <span>Manage Category</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('category.add') }}">Create</a></li>
                                    <li><a href="{{ route('category.all') }}">All Category</a></li>
                                    
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="fa fa-book"></i>
                                    <span>Manage Unit</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('unit.add') }}">Create</a></li>
                                    <li><a href="{{ route('unit.all') }}">All Unit</a></li>
                                    
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="fa fa-truck"></i>
                                    <span>Manage Product</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('product.add') }}">Create</a></li>
                                    <li><a href="{{ route('product.all') }}">All Product</a></li>
                                   
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="fa fa-id-card"></i>
                                    <span>Manage Users</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('users.create') }}">Create</a></li>
                                    <li><a href="{{ route('users.index') }}">All Users</a></li>
                                    
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="fa fa-id-card"></i>
                                    <span>Manage Roles</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('roles.create') }}">Create</a></li>
                                    <li><a href="{{ route('roles.index') }}">All Roles</a></li>
                                    
                                </ul>
                            </li>

                            

                            <li class="menu-title">Reports</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="fa-solid fa-chart-simple"></i>
                                    <span>Report</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                   
                                   <li><a href="{{ route('stock.report') }}">Stock Report</a></li>
                                   <li><a href="{{ route('stock.category.wise') }}">Category / Product Wise </a></li>
                                            
                                    
                                </ul>
                            </li>

                           

                            
                         

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>