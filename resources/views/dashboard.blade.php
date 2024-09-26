@extends('layouts.backend.user.master')

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
                        <h4 class="header-title">Mes Commandes</h4>
                    </div>
                    <div class="card-body">
                        <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Total</th>
                                    <th>Statut</th>
                                    <th>Détails</th>
                                </tr>
                            </thead>
    
    
                            <tbody>

                                @foreach($mescommandes as $commande)
                                    <tr>
                                        <td>Commande{{ $commande->id }}</td>
                                        <td>{{ $commande->created_at->format('d/m/Y') }}</td>
                                        <td>{{ $commande->total }} F CFA</td>
                                        <td>{{ ucfirst($commande->statut) }}</td>
                                        <td>
                                            <a href="{{ route('mes.commande.show', $commande->id) }}">Voir les details |</a>
                                            <a href="{{ route('mes.commande.show', $commande->id) }}"><i class="ri-delete-bin-2-fill"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
    
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div> <!-- end row-->
    </div>
    <!-- container -->
@endsection