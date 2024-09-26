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
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Rendez-vous</a></li>
                        <li class="breadcrumb-item active">Liste</li>
                    </ol>
                </div>
                <h4 class="page-title">Rendez-vous</h4>

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
                    <h4 class="header-title">Liste des Rendez-vous</h4>
                </div>
                <div class="card-body">
                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Telephone</th>
                                <th>Adresse</th>
                                <th>Date</th>
                                <th>Service</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($appointements as $appointement )
                            <tr>
                                <td>{{ $appointement->id }}</td>
                                <td>{{ $appointement->nom }}</td>
                                <td>{{ $appointement->telephone}}</td>
                                <td>{{ $appointement->adresse }}</td>
                                <td>{{ $appointement->date }}</td>
                                <td>{{ $appointement->services }}</td>
                                <td>{{ $appointement->message}}</td>
                                <td>
                                    <a href="{{ route('articles.edit', $appointement->id ) }}" class="text-reset fs-16 px-1">
                                        <i class="ri-edit-fill"></i>
                                    </a>
                                    <form action="{{ route('articles.destroy', $appointement->id ) }}" method="post" style="display:inline;" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet$appointement ?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="background:none; border:none; cursor:pointer; color:red;">
                                            <i class="ri-delete-bin-2-fill"></i>
                                        </button>
                                    </form>
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
@endsection