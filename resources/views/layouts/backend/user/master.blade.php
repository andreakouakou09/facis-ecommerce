<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Tableau de bord</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="" name="description" />
        <meta content="Techzaa" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ url('backend/assets/images/favicon.ico') }}">

        <!-- Daterangepicker css -->
        <link rel="stylesheet" href="{{ url('backend/assets/vendor/daterangepicker/daterangepicker.css') }}">

        <!-- Vector Map css -->
        <link rel="stylesheet" href="{{ url('backend/assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}">

        <!-- Datatables css -->
        <link href="{{ url('backend/assets/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('backend/assets/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ url('backend/assets/vendor/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ url('backend/assets/vendor/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ url('backend/assets/vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ url('backend/assets/vendor/datatables.net-select-bs5/css/select.bootstrap5.min.css') }}" rel="stylesheet"
            type="text/css" />


        <!-- Theme Config Js -->
        <script src="{{ url('backend/assets/js/config.js') }}"></script>

        <!-- App css -->
        <link href="{{ url('backend/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons css -->
        <link href="{{ url('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <!-- Begin page -->
        <div class="wrapper">

            <!-- ========== Topbar Start ========== -->
            <div class="navbar-custom">
                <div class="topbar container-fluid">
                    <div class="d-flex align-items-center gap-1">

                        <!-- Topbar Brand Logo -->
                        <div class="logo-topbar">
                            <!-- Logo light -->
                            <a href="{{ url('/') }}" class="logo-light">
                                <span class="logo-lg">
                                    <img src="{{ url('backend/assets/images/logo.png') }}" alt="logo">
                                </span>
                                <span class="logo-sm">
                                    <img src="{{ url('backend/assets/images/logo-sm.png') }}" alt="small logo">
                                </span>
                            </a>

                        </div>

                        <!-- Sidebar Menu Toggle Button -->
                        <button class="button-toggle-menu">
                            <i class="ri-menu-line"></i>
                        </button>

                        <!-- Horizontal Menu Toggle Button -->
                        <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </button>

                        <!-- Topbar Search Form -->
                       
                    </div>

                    <ul class="topbar-menu d-flex align-items-center gap-3">
                        
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle arrow-none nav-user" data-bs-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <span class="account-user-avatar">
                                    <img src="{{ url('backend/assets/images/users/avatar-1.jpg') }}" alt="user-image" width="32" class="rounded-circle">
                                </span>
                                <span class="d-lg-block d-none">
                                    <h5 class="my-0 fw-normal">{{ Auth::user()->name }}
                                        <i class="ri-arrow-down-s-line d-none d-sm-inline-block align-middle"></i>
                                    </h5>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated profile-dropdown">
                                <!-- item-->
                                <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Bienvenue !</h6>
                                </div>

                                <!-- item-->
                                <a href="{{ url('/profile') }}" class="dropdown-item">
                                    <i class="ri-account-circle-line fs-18 align-middle me-1"></i>
                                    <span>Mon Compte</span>
                                </a>

                                <!-- item-->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); this.closest('form').submit();">
                                        <i class="ri-logout-box-line fs-18 align-middle me-1"></i>
                                        <span>Deconnexion</span>
                                    </a>
                                </form>
                                {{-- <a href="auth-logout-2.html" class="dropdown-item">
                                    <i class="ri-logout-box-line fs-18 align-middle me-1"></i>
                                    <span>Deconnexion</span>
                                </a>
                            </div> --}}
                        </li>
                    </ul>
                </div>
            </div>
            <!-- ========== Topbar End ========== -->
            

            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">

                <!-- Brand Logo Light -->
                <a href="index.html" class="logo logo-light">
                    <span class="logo-lg">
                        <img src="{{ url('backend/assets/images/logo-facis.png') }}" alt="logo">
                    </span>
                    <span class="logo-sm">
                        <img src="{{ url('backend/assets/images/logo-facis.png') }}" alt="small logo">
                    </span>
                </a>
            
                <!-- Sidebar -left -->
                <div class="h-100" id="leftside-menu-container" data-simplebar>
                    <!--- Sidemenu -->
                    <ul class="side-nav">
            
                        {{-- <li class="side-nav-item">
                            <a href="{{ route('admin.dashboard') }}" class="side-nav-link">
                                <i class="ri-dashboard-3-line"></i>
                                <span class="badge bg-success float-end">9+</span>
                                <span> Tableau de bord </span>
                            </a>
                        </li> --}}
            
                        <li class="side-nav-item">
                            <a href="{{ url('/dashboard') }}" class="side-nav-link">
                                <i class="ri-dashboard-3-line"></i>
                                <span> Mes Commandes </span>
                            </a>
                        </li>
            
                    </ul>
                    <!--- End Sidemenu -->
            
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- ========== Left Sidebar End ========== -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    @yield("content")
                </div>
                <!-- content -->
    
                <!-- Footer Start -->
                @include("layouts.backend.user.footer")
                <!-- end Footer -->
            
            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->
    
        
        <!-- Vendor js -->
        <script src="{{ url('backend/assets/js/vendor.min.js') }}"></script>

        <!-- Daterangepicker js -->
        <script src="{{ url('backend/assets/vendor/daterangepicker/moment.min.js') }}"></script>
        <script src="{{ url('backend/assets/vendor/daterangepicker/daterangepicker.js') }}"></script>
        
        <!-- Apex Charts js -->
        <script src="{{ url('backend/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>

        <!-- Vector Map js -->
        <script src="{{ url('backend/assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ url('backend/assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js') }}"></script>

        <!-- Dashboard App js -->
        <script src="{{ url('backend/assets/js/pages/dashboard.js') }}"></script>

        <!-- Datatables js -->
        <script src="{{ url('backend/assets/vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ url('backend/assets/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
        <script src="{{ url('backend/assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ url('backend/assets/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
        <script src="{{ url('backend/assets/vendor/datatables.net-fixedcolumns-bs5/js/fixedColumns.bootstrap5.min.js') }}"></script>
        <script src="{{ url('backend/assets/vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
        <script src="{{ url('backend/assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ url('backend/assets/vendor/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
        <script src="{{ url('backend/assets/vendor/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ url('backend/assets/vendor/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
        <script src="{{ url('backend/assets/vendor/datatables.net-buttons/js/buttons.print.min.') }}js"></script>
        <script src="{{ url('backend/assets/vendor/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ url('backend/assets/vendor/datatables.net-select/js/dataTables.select.min.js') }}"></script>

        <!-- Datatable Demo Aapp js -->
        <script src="{{ url('backend/assets/js/pages/datatable.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ url('backend/assets/js/app.min.js') }}"></script>

    </body>
</html> 