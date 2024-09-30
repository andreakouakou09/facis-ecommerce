@extends('layouts.frontend.app')

@section('title', 'Connexion')

@section('content')

    <!-- Header -->
    @include('layouts.frontend.header')
    <!--// Header -->

        <!-- Breadcrumb Area -->
        <div class="tm-breadcrumb-area tm-padding-section" data-bgimage="{{ url('frontend/assets/images/bg/bg-breadcrumb.jpg') }}"
            data-white-overlay="4">
            <div class="container">
                <div class="tm-breadcrumb">
                    <h2>Se Connecter & S'Inscrire</h2>
                    <ul>
                        <li><a href="index.html">Accueil</a></li>
                        <li>Se Connecter & S'Inscrire</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--// Breadcrumb Area -->

        <!-- Main Content -->
        <main class="page-content">

            <!-- Login Register Area -->
            <div class="tm-section tm-login-register-area bg-white tm-padding-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <form method="POST" action="{{ route('login') }}" class="tm-form tm-login-form">
                                @csrf

                                <h4>Se Connecter</h4>
                                <h6>Avez-vous déja un compte?</h6>

                                <div class="tm-form-inner">

                                    <div class="tm-form-field">
                                        <label for="email">Email*</label>
                                        <input type="email" id="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                                    </div>

                                    <div class="tm-form-field">
                                        <label for="password">Mot de passe*</label>
                                        <input type="password" id="password" name="password" required autocomplete="current-password">
                                    </div>

                                    <div class="tm-form-field">
                                        <input type="checkbox" name="remember" id="remember">
                                        <label for="remember">Se souvenir de moi</label>
                                    </div>
                                    <div class="tm-form-field">
                                        <button type="submit" class="tm-button">Connexion<b></b></button>
                                    </div>
                                    <div class="tm-form-field">
                                        <a href="{{ route('password.request') }}">Mot de passe oublié? Cliquez-ici | </a>
                                        <a href="{{ route('register') }}"><b>Je n'ai pas de compte? </b></a>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-6">
                            <img src="{{ url('frontend/assets/images/others/login-bg.jpg') }}" alt="contact-bg">
                        </div>
                        {{-- <div class="col-lg-6">
                            <form method="POST" action="{{ route('register') }}" class="tm-form tm-register-form">
                                @csrf
                                
                                <h4>Créer un compte</h4>
                                <h6>Etes-vous déjà enregistré ?</h6>

                                <div class="tm-form-inner">

                                    <div class="tm-form-field">
                                        <label for="name">Nom d'utilisateur</label>
                                        <input type="text" name="name" :value="old('name')" id="name" required autofocus autocomplete="name">
                                    </div>

                                    <div class="tm-form-field">
                                        <label for="email">Adresse Email</label>
                                        <input type="email" id="email" type="email" name="email" :value="old('email')" required autocomplete="username">
                                    </div>

                                    <div class="tm-form-field">
                                        <label for="password">Mot de Passe</label>
                                        <input type="password" id="password" type="password" name="password" required autocomplete="new-password">
                                    </div>

                                    <div class="tm-form-field">
                                        <label for="password_confirmation">Confirmation du mot de Passe</label>
                                        <input type="password" id="password_confirmation" type="password_confirmation" name="password_confirmation" required autocomplete="new-password">
                                    </div>

                                    <div class="tm-form-field">
                                        <div>
                                            <input type="checkbox" id="register-pass-show" name="register-pass-show">
                                            <label for="register-pass-show">Voir Mot de passe</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="register-terms" name="register-terms">
                                            <label for="register-terms"> J'ai lu et j'accepte le site web
                                                <a href="#">termes et conditions</a>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="tm-form-field">
                                        <button type="submit" class="tm-button">S'Inscrire <b></b></button>
                                    </div>
                                </div>
                            </form>
                        </div> --}}

                    </div>
                </div>
            </div>
            <!--// Login Register Area -->

        </main>
        <!--// Main Content -->

    <!-- Footer -->
    @include('layouts.frontend.footer')
    <!--// Footer -->
    
    <!-- Search Form -->
    @include('layouts.frontend.search')
    <!--// Search Form -->

@endsection