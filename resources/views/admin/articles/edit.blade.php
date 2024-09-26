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
                        <li class="breadcrumb-item active">Ajouter</li>
                    </ol>
                </div>
                <h4 class="page-title">Articles</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="header-title">Ajouter un article</h4>
                    <a href="{{ route('articles.index') }}" class="btn btn-primary">Voir la liste</a>
                </div>
                <div class="card-body">
               
                    <form action="{{ route('articles.update', $article->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div class="row">
                            <div class="col-md-6">

                                <div class="mb-3">
                                    <label for="nom" class="form-label">Nom de l'article</label>
                                    <input type="text" id="nom" name="nom" class="form-control" value="{{ $article->nom }}">
                                    @error('nom')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
        
                                <div class="mb-3">
                                    <label for="prix" class="form-label">Prix de l'article</label>
                                    <input type="number" id="prix" name="prix" class="form-control" value="{{ $article->prix }}">
                                    @error('prix')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="mb-3">
                                    <label for="categorie" class="form-label">Categorie</label>
                                    <select name="categorie" id="" class="form-select">
                                    
                                        @foreach ($categories as $categorie)
                                        <option value="{{ $categorie->id }}" 
                                            @if ($categorie->id == $article->categorie_id) selected @endif>
                                            {{ $categorie->nom }}
                                        </option>
                                        @endforeach
                                        
                                    </select>
                                    @error('categorie')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="mb-3">
                                    <label for="imagearticle" class="form-label">Image de l'article</label>
                                    <input type="file" id="imagearticle" name="imagearticle" class="form-control">
                                    @if ($article->image)
                                        <small class="form-text text-muted">Image actuelle : {{ $article->image }}</small>
                                    @endif
                                    @error('imagearticle')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="stock" class="form-label">Quantité en stock</label>
                                    <input type="number" id="stock" name="stock" class="form-control" value="{{ $article->stock }}">
                                    @error('stock')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="5">{{ $article->description }}</textarea>
                                    @error('description')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Modifier</button>

                    </form>
                        
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->

</div>
<!-- End Content-->
@endsection