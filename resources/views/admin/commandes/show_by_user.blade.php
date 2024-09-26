<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Dashboard | Administrateur</title>
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
                            <a href="index.html" class="logo-light">
                                <span class="logo-lg">
                                    <img src="{{ url('backend/assets/images/logo.png') }}" alt="logo">
                                </span>
                                <span class="logo-sm">
                                    <img src="{{ url('backend/assets/images/logo-sm.png') }}" alt="small logo">
                                </span>
                            </a>

                            <!-- Logo Dark -->
                            <a href="index.html" class="logo-dark">
                                <span class="logo-lg">
                                    <img src="{{ url('backend/assets/images/logo-dark.png') }}" alt="dark logo">
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
                        <div class="app-search d-none d-lg-block">
                            <form>
                                <div class="input-group">
                                    <input type="search" class="form-control" placeholder="Search...">
                                    <span class="ri-search-line search-icon text-muted"></span>
                                </div>
                            </form>
                        </div>
                    </div>

                    <ul class="topbar-menu d-flex align-items-center gap-3">
                        
                        <li class="d-none d-sm-inline-block">
                            <div class="nav-link" id="light-dark-mode">
                                <i class="ri-moon-line fs-22"></i>
                            </div>
                        </li>

                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle arrow-none nav-user" data-bs-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <span class="account-user-avatar">
                                    <img src="{{ url('backend/assets/images/users/avatar-1.jpg') }}" alt="user-image" width="32" class="rounded-circle">
                                </span>
                                <span class="d-lg-block d-none">
                                    <h5 class="my-0 fw-normal">{{ Auth::user()->name }}<i
                                            class="ri-arrow-down-s-line d-none d-sm-inline-block align-middle"></i></h5>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated profile-dropdown">
                                <!-- item-->
                                <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Bienvenue !</h6>
                                </div>

                                <!-- item-->
                                <a href="pages-profile.html" class="dropdown-item">
                                    <i class="ri-account-circle-line fs-18 align-middle me-1"></i>
                                    <span>Mon compte</span>
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
                        <img src="{{ url('backend/assets/images/logo.png') }}" alt="logo">
                    </span>
                    <span class="logo-sm">
                        <img src="{{ url('backend/assets/images/logo-sm.png') }}" alt="small logo">
                    </span>
                </a>
            
                <!-- Brand Logo Dark -->
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-lg">
                        <img src="{{ url('backend/assets/images/logo-dark.png') }}" alt="dark logo">
                    </span>
                    <span class="logo-sm">
                        <img src="{{ url('backend/assets/images/logo-sm.png') }}" alt="small logo">
                    </span>
                </a>
            
                <!-- Sidebar -left -->
                <div class="h-100" id="leftside-menu-container" data-simplebar>
                    <!--- Sidemenu -->
                    <ul class="side-nav">
            
                        <li class="side-nav-item">
                            <a href="{{ route('dashboard') }}" class="side-nav-link">
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
                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tableau de bord</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Commandes</a></li>
                                            <li class="breadcrumb-item active">Liste</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Commandes</h4>
                    
                                    <!-- start session -->
                                    @if (session('success'))
                                        <div class="alert alert-primary" role="alert">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    <!-- end session -->
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                    
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="header-title">Liste de mes Commandes</h4>
                                        <h1>Commande #{{ $commande->id }}</h1>
                                        <p>Total : {{ $commande->total }} F CFA</p>
                                        <p>Statut : {{ ucfirst($commande->statut) }}</p>
                                    </div>
                                    <div class="card-body">

                                        

                                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>Nom</th>
                                                    <th>Quantité</th>
                                                    <th>Prix</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                    
                                            <tbody>
                                                
                                                @foreach ($commande->items as $item)
                                                <tr>
                                                    <td>{{ $item->article->nom }}</td>
                                                    <td>{{ $item->quantite }}</td>
                                                    <td>{{ $item->prix }} F CFA</td>
                                                    <td>{{ $item->quantite * $item->prix }} F CFA</td>
                                                </tr>
                                            @endforeach
                                                    {{-- <td>cijijd</td>
                                                    <td>joiz</td>
                                                    <td>ljojd</td>
                                                    <td>aaaaaaa</td>
                                                    <td>cccccc</td>
                                                    <td>
                                                        <a href="" class="text-reset fs-16 px-1">
                                                            <i class="ri-edit-fill"></i>
                                                        </a>
                                                        <form action="" method="post" style="display:inline;" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" style="background:none; border:none; cursor:pointer; color:red;">
                                                                <i class="ri-delete-bin-2-fill"></i>
                                                            </button>
                                                        </form>
                                                    </td> --}}
                                                
                                                
                                            </tbody>
                                        </table>
                                        
                                        <a href="{{ route('dashboard') }}" class="btn btn-primary">Retour à mes commandes</a>

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div> <!-- end row-->
                    </div>
                    <!-- container -->
                </div>
                <!-- content -->
    
                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 text-center">
                                <script>document.write(new Date().getFullYear())</script> © Facis - Realisé par<b>Firme Attou CO</b>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->
            
            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- Theme Settings -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="theme-settings-offcanvas">
            <div class="d-flex align-items-center bg-primary p-3 offcanvas-header">
                <h5 class="text-white m-0">Theme Settings</h5>
                <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body p-0">
                <div data-simplebar class="h-100">
                    <div class="p-3">
                        <h5 class="mb-3 fs-16 fw-bold">Color Scheme</h5>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check form-switch card-switch mb-1">
                                    <input class="form-check-input" type="checkbox" name="data-bs-theme" id="layout-color-light" value="light">
                                    <label class="form-check-label" for="layout-color-light">
                                        <img src="{{ url('backend/assets/images/layouts/light.png') }}" alt="" class="img-fluid">
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check form-switch card-switch mb-1">
                                    <input class="form-check-input" type="checkbox" name="data-bs-theme" id="layout-color-dark" value="dark">
                                    <label class="form-check-label" for="layout-color-dark">
                                        <img src="{{ url('backend/assets/images/layouts/dark.png') }}" alt="" class="img-fluid">
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                            </div>
                        </div>

                        <div id="layout-width">
                            <h5 class="my-3 fs-16 fw-bold">Layout Mode</h5>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check form-switch card-switch mb-1">
                                        <input class="form-check-input" type="checkbox" name="data-layout-mode" id="layout-mode-fluid" value="fluid">
                                        <label class="form-check-label" for="layout-mode-fluid">
                                            <img src="{{ url('backend/assets/images/layouts/light.png') }}" alt="" class="img-fluid">
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Fluid</h5>
                                </div>

                                <div class="col-4">
                                    <div id="layout-boxed">
                                        <div class="form-check form-switch card-switch mb-1">
                                            <input class="form-check-input" type="checkbox" name="data-layout-mode" id="layout-mode-boxed" value="boxed">
                                            <label class="form-check-label" for="layout-mode-boxed">
                                                <img src="{{ url('backend/assets/images/layouts/boxed.png') }}" alt="" class="img-fluid">
                                            </label>
                                        </div>
                                        <h5 class="font-14 text-center text-muted mt-2">Boxed</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h5 class="my-3 fs-16 fw-bold">Topbar Color</h5>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check form-switch card-switch mb-1">
                                    <input class="form-check-input" type="checkbox" name="data-topbar-color" id="topbar-color-light" value="light">
                                    <label class="form-check-label" for="topbar-color-light">
                                        <img src="{{ url('backend/assets/images/layouts/light.png') }}" alt="" class="img-fluid">
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check form-switch card-switch mb-1">
                                    <input class="form-check-input" type="checkbox" name="data-topbar-color" id="topbar-color-dark" value="dark">
                                    <label class="form-check-label" for="topbar-color-dark">
                                        <img src="{{ url('backend/assets/images/layouts/topbar-dark.png') }}" alt="" class="img-fluid">
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                            </div>
                        </div>

                        <div>
                            <h5 class="my-3 fs-16 fw-bold">Menu Color</h5>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check form-switch card-switch mb-1">
                                        <input class="form-check-input" type="checkbox" name="data-menu-color" id="leftbar-color-light" value="light">
                                        <label class="form-check-label" for="leftbar-color-light">
                                            <img src="{{ url('backend/assets/images/layouts/sidebar-light.png') }}" alt="" class="img-fluid">
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                                </div>

                                <div class="col-4">
                                    <div class="form-check form-switch card-switch mb-1">
                                        <input class="form-check-input" type="checkbox" name="data-menu-color" id="leftbar-color-dark" value="dark">
                                        <label class="form-check-label" for="leftbar-color-dark">
                                            <img src="{{ url('backend/assets/images/layouts/light.png') }}" alt="" class="img-fluid">
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                                </div>
                            </div>
                        </div>

                        <div id="sidebar-size">
                            <h5 class="my-3 fs-16 fw-bold">Sidebar Size</h5>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check form-switch card-switch mb-1">
                                        <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-default" value="default">
                                        <label class="form-check-label" for="leftbar-size-default">
                                            <img src="{{ url('backend/assets/images/layouts/light.png') }}" alt="" class="img-fluid">
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Default</h5>
                                </div>

                                <div class="col-4">
                                    <div class="form-check form-switch card-switch mb-1">
                                        <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-compact" value="compact">
                                        <label class="form-check-label" for="leftbar-size-compact">
                                            <img src="{{ url('backend/assets/images/layouts/compact.png') }}" alt="" class="img-fluid">
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Compact</h5>
                                </div>

                                <div class="col-4">
                                    <div class="form-check form-switch card-switch mb-1">
                                        <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-small" value="condensed">
                                        <label class="form-check-label" for="leftbar-size-small">
                                            <img src="{{ url('backend/assets/images/layouts/sm.png') }}" alt="" class="img-fluid">
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Condensed</h5>
                                </div>


                                <div class="col-4">
                                    <div class="form-check form-switch card-switch mb-1">
                                        <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-full" value="full">
                                        <label class="form-check-label" for="leftbar-size-full">
                                            <img src="{{ url('backend/assets/images/layouts/full.png') }}" alt="" class="img-fluid">
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Full Layout</h5>
                                </div>
                            </div>
                        </div>

                        <div id="layout-position">
                            <h5 class="my-3 fs-16 fw-bold">Layout Position</h5>

                            <div class="btn-group checkbox" role="group">
                                <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed" value="fixed">
                                <label class="btn btn-soft-primary w-sm" for="layout-position-fixed">Fixed</label>

                                <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable" value="scrollable">
                                <label class="btn btn-soft-primary w-sm ms-0" for="layout-position-scrollable">Scrollable</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas-footer border-top p-3 text-center">
                <div class="row">
                    <div class="col-6">
                        <button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
                    </div>
                    <div class="col-6">
                        <a href="https://1.envato.market/velonic" target="_blank" role="button" class="btn btn-primary w-100">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>        
        
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
