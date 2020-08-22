@extends('layouts.main-app')

@section('body')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img src="{{asset('img/plantliners_logo_alt.png')}}" alt=""
                        style="height:auto; width: 100%; margin-top: 20px">
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.dashboard')}}">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Inventory
            </div>

            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-boxes"></i>
                    <span>View Inventory</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Support
            </div>

            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-language"></i>
                    <span>Switch to <strong>Filipino</strong></span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-question-circle"></i>
                    <span>FAQs</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-hands-helping"></i>
                    <span>Help</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600"><strong>{{ Auth::user()->name }}</strong></span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Inventory</h1>
                    </div>
                    <hr>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <a href="#" class="btn btn-success btn-icon-split" data-toggle="modal"
                                data-target="#addProductModal">
                                <span class="icon text-white-50">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <span class="text">Add New Product</span>
                            </a>
                        </div>
                    </div>

                    <div class="row">

                    @if(count($inventories) > 0)
                    @foreach($inventories as $inventory)
                    <div class="col-md-3">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">{{ \Illuminate\Support\Facades\DB::table('products')->where('productID',$inventory->productID)->value('productName')}}</h6>
                                </div>
                                <div class="card-body">
                                    <img src="{{ \Illuminate\Support\Facades\DB::table('products')->where('productID',$inventory->productID)->value('productImg')}}" alt=""
                                        style="height:auto; width: 100%">
                                    <hr>
                                    <span class="badge badge-light">{{ \Illuminate\Support\Facades\DB::table('categories')->where('categoryID',$inventory->categoryID)->value('categoryName')}}</span>
                                    &nbsp;
                                    <span class="badge badge-light">Rakatan</span>
                                    <hr>
                                    {{$inventory->productDescription}}
                                    <hr>
                                    <p>Unit: <strong>{{ \Illuminate\Support\Facades\DB::table('products')->where('productID',$inventory->productID)->value('unitMeasurement')}}</strong></p>
                                    <p>Quantity: <strong>{{$inventory->qty}}</strong></p>
                                    <p>Price: <strong>₱{{$inventory->price}}</strong></p>
                                    <hr>
                                    <a href="#" class="btn btn-primary btn-icon-split" data-toggle="modal"
                                data-target="#updateProductModal">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                        <span class="text">Update</span>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-times"></i>
                                        </span>
                                        <span class="text">Remove</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @else
                    <p>No Products Found</p>
                    @endif

                    </div>

                </div>
                <!-- /.container-fluid -->

                <!-- Modals -->
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true"
                    id="marketdemands">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="row">
                                <div class="col-xl-12 col-md-12">
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-danger">Market Demands</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="dataTable" width="100%"
                                                    cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th>Vendor</th>
                                                            <th>Order</th>
                                                            <th>Unit</th>
                                                            <th>Quantity</th>
                                                            <th>Delivery Date</th>
                                                            <th>Bid?</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><a href="#">Gaisano Supermarket</a></td>
                                                            <td>Carrots</td>
                                                            <td>kg</td>
                                                            <td>696</td>
                                                            <td>September 9, 2020</td>
                                                            <td>
                                                                <a href="#" class="btn btn-success btn-circle btn-sm">
                                                                    <i class="fas fa-check"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; <strong>Plantliners</strong> (Impact Hackathon Demo)</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="{{ route('admin.logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('admin-logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="admin-logout-form" action="{{ route('admin.logout') }}" method="POST"
                            style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Product Modal -->
        <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold" id="addProductModalLabel">Add Product
                        </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="POSTS" action="{{route('admin.inventory.submit')}}">
                    @csrf
                        <div class="modal-body mx-3">
                            <div class="form-group">
                                <label for="email1">Product Name</label>
                                <select name="product" class="form-control" id="product">
                                    @if(count($products) > 0)
                                    @foreach($products as $product)
                                    <option id="{{$product->productID}}">{{$product->productName}}</option>
                                    @endforeach
                                    @else
                                    <p>No available products</p>
                                    @endif
                                </select>
                                <label>Product Description</label>
                                <textarea class="form-control" id="desc" name="desc"></textarea>
                                <label>Quantity</label>
                                <input type="number" class="form-control" id="qty" name="qty"
                                    placeholder="Enter Quantity">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <label>Price</label>
                                        <input type="number" class="form-control" id="price" name="price"
                                            placeholder="Enter Price">
                                    </div>
                                    <div class="col-sm-3">
                                        <label>UM</label>
                                        <input type="text" class="form-control" id="um" name="um" value="kg" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>


        <!-- Update Product Modal -->
        <div class="modal fade" id="updateProductModal" tabindex="-1" role="dialog" aria-labelledby="updateProductModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold" id="updateProductModalLabel">Update Product
                        </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form>
                        <div class="modal-body mx-3">
                            <div class="form-group">
                                <label for="email1">Product Name</label>
                                <input type="text" class="form-control" id="category" name="text" value="Banana"
                                    readonly>
                                <label>Category</label>
                                <input type="text" class="form-control" id="category" name="text" value="Fruits"
                                    readonly>
                                <label>Quantity</label>
                                <input type="number" class="form-control" id="qty" name="qty" value="324">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <label>Price</label>
                                        <input type="number" class="form-control" id="price" name="price"
                                            value="90.00">
                                    </div>
                                    <div class="col-sm-3">
                                        <label>UM</label>
                                        <input type="text" class="form-control" id="um" name="um" value="kg" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

</body>
@endsection
