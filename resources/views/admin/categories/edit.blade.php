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
                        <li class="breadcrumb-item active">Modifier</li>
                    </ol>
                </div>
                <h4 class="page-title">Categories</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="header-title">Modifier une categorie</h4>
                    <a href="{{ route('categories.index') }}" class="btn btn-success">Voir la liste</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-8">
                            <form action="{{ route('categories.update', $category->id ) }}" method="post">
                                @csrf
                                @method("PUT")

                                <div class="mb-3">
                                    <label for="nom" class="form-label">Nom de la categorie</label>
                                    <input type="text" id="nom" name="nom" class="form-control" value="{{ $category->nom }}">
                                    @error('nom')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="5">{{ $category->description }}</textarea>
                                    @error('description')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button class="btn btn-success" type="submit">Ajouter</button>
                            </form>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->

 </div>
@endsection