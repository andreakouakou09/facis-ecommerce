@extends('layouts.backend.master')

@section('content')


    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        {{-- <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Velonic</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                <li class="breadcrumb-item active">Starter</li>
                            </ol>
                        </div> --}}
                        <h4 class="page-title">Modifier le profil</h4>

                        @if(session('success'))
                            <div>{{ session('success') }}</div>
                        @endif

                        <form action="{{ route('admin.profile.update') }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nom</label>
                                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $admin->name) }}" required>
                                        @error('name')<div class="text-danger">{{ $message }}</div>@enderror
                                    </div>
                            
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $admin->email) }}" required>
                                        @error('email')<div class="text-danger">{{ $message }}</div>@enderror
                                    </div>
                            
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Mot de passe (laisser vide pour garder l'actuel)</label>
                                        <input type="password" name="password" id="password" class="form-control">
                                        @error('password')<div class="text-danger">{{ $message }}</div>@enderror
                                    </div>
                            
                                    <div class="mb-3">
                                        <label for="password_confirmation" class="form-label">Confirmation du mot de passe</label>
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Mettre à jour</button>
                        </form>
                    
                        <form action="{{ route('admin.profile.destroy') }}" method="POST" style="margin-top: 20px;">
                            @csrf
                            @method('DELETE')
                    
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer votre profil ?');">
                                Supprimer le profil
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            
        </div> <!-- container -->

    </div> <!-- content -->


   
@endsection
