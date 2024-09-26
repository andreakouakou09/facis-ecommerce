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
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Articles</a></li>
                        <li class="breadcrumb-item active">Liste</li>
                    </ol>
                </div>
                <h4 class="page-title">Articles</h4>

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
                    <h4 class="header-title">Liste des articles</h4>
                    <a href="{{ route('articles.create') }}" class="btn btn-success rounded-pill">Ajouter</a>
                </div>
                <div class="card-body">
                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Nom</th>
                                <th>Prix</th>
                                <th>Categorie</th>
                                <th>Stock</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article )
                            <tr>
                                <td><img src="{{ url('uploads/articles/', $article->image ) }}" alt="img_article" height="50" width="50"></td>
                                <td>{{ $article->nom }}</td>
                                <td>{{ $article->prix }}</td>
                                <td>{{ $article->categorie->nom }}</td>
                                <td>{{ $article->stock}}</td>
                                <td>
                                    <a href="{{ route('articles.edit', $article->id ) }}" class="text-reset fs-16 px-1">
                                        <i class="ri-edit-fill"></i>
                                    </a>
                                    <form action="{{ route('articles.destroy', $article->id ) }}" method="post" style="display:inline;" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?');">
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