@extends('layouts.backend.master')

@section('content')
<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tableau de bord</a></li>
                        
                    </ol>
                </div>
                <h4 class="page-title">Welcome!</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xxl-3 col-sm-6">
            <div class="card widget-flat text-bg-pink">
                <div class="card-body">
                    <div class="float-end">
                        <i class="ri-eye-line widget-icon"></i>
                    </div>
                    <h6 class="text-uppercase mt-0" title="Customers">Articles</h6>
                    <h2 class="my-2">{{ $articles }}</h2>
                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-xxl-3 col-sm-6">
            <div class="card widget-flat text-bg-purple">
                <div class="card-body">
                    <div class="float-end">
                        <i class="ri-wallet-2-line widget-icon"></i>
                    </div>
                    <h6 class="text-uppercase mt-0" title="Customers">Commandes</h6>
                    <h2 class="my-2">{{ $commandes }}</h2>
                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-xxl-3 col-sm-6">
            <div class="card widget-flat text-bg-info">
                <div class="card-body">
                    <div class="float-end">
                        <i class="ri-shopping-basket-line widget-icon"></i>
                    </div>
                    <h6 class="text-uppercase mt-0" title="Customers">Rendez-vous</h6>
                    <h2 class="my-2">{{ $appointements }}</h2>
                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-xxl-3 col-sm-6">
            <div class="card widget-flat text-bg-primary">
                <div class="card-body">
                    <div class="float-end">
                        <i class="ri-group-2-line widget-icon"></i>
                    </div>
                    <h6 class="text-uppercase mt-0" title="Customers">Contacts</h6>
                    <h2 class="my-2">{{ $contacts }}</h2>
                </div>
            </div>
        </div> <!-- end col-->
    </div>

    <div class="row">
        <div class="col-xl-12">
            <!-- Todo-->
            <div class="card">
                <div class="card-body p-0">
                    <div class="p-3">
                        <div class="card-widgets">
                            <a href="javascript:;" data-bs-toggle="reload"><i class="ri-refresh-line"></i></a>
                            <a data-bs-toggle="collapse" href="#yearly-sales-collapse" role="button" aria-expanded="false" aria-controls="yearly-sales-collapse"><i class="ri-subtract-line"></i></a>
                            <a href="#" data-bs-toggle="remove"><i class="ri-close-line"></i></a>
                        </div>
                        <h5 class="header-title mb-0">Projects</h5>
                    </div>

                    <div id="yearly-sales-collapse" class="collapse show">

                        <div class="table-responsive">
                            <table class="table table-nowrap table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Date</th>
                                        <th>Total</th>
                                        <th>Utilisateur</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lists_commande as $commande)
                                        
                                    @endforeach
                                    <tr>
                                        {{-- <td>1</td> --}}
                                        <td>Commande{{ $commande->id }}</td>
                                        <td>{{ $commande->created_at->format('d/m/Y') }}</td>
                                        <td>{{ $commande->total }} F CFA</td>
                                        <td>{{ $commande->user->name }}</td>
                                        <td><span class="badge bg-info-subtle text-info">{{ $commande->statut }}</span></td>
                                
                                    </tr>
                                </tbody>
                            </table>
                        </div>        
                    </div>
                </div>                           
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row -->

</div>
<!-- container -->

@endsection