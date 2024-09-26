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
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Categories</a></li>
                        <li class="breadcrumb-item active">Liste</li>
                    </ol>
                </div>
                <h4 class="page-title">Categories</h4>

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
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="header-title">Liste categories</h4>
    
                    <a href="{{ route('categories.create') }}" class="btn btn-success rounded-pill">Ajouter</a>

                </div>
                <div class="card-body">
                    <div class="table-responsive-sm">
                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $key => $categorie)
                                    <tr>
                                        <td>{{ $categorie->nom }}</td>
                                        <td>{{ $categorie->description }}</td>
                                        <td>
                                            <a href="{{ route('categories.edit', $categorie->id ) }}" class="text-reset fs-16 px-1">
                                                <i class="ri-edit-fill"></i>
                                            </a>
                                            <form action="{{ route('categories.destroy', $categorie->id ) }}" method="post" style="display:inline;" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette categorie ?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" style="background:none; border:none; cursor:pointer; color:red;">
                                                    <i class="ri-delete-bin-2-fill"></i>
                                                </button>
                                            </form>
                                            {{-- <a href="{{ route('categories.destroy', $categorie->id ) }}" class="text-reset fs-16 px-1">
                                                <i class="ri-delete-bin-2-fill"></i>
                                            </a> --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div> <!-- end table-responsive-->
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
</div>
@endsection