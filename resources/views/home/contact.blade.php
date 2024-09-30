@extends('layouts.frontend.app')

@section('title', 'Contact')

@section('content')

<!-- Header -->
@include('layouts.frontend.header')
<!--// Header -->

<!-- Breadcrumb Area -->
<div class="tm-breadcrumb-area tm-padding-section" data-bgimage="{{ url('frontend/assets/images/bg/bg-breadcrumb.jpg') }}" data-white-overlay="4">
    <div class="container">
        <div class="tm-breadcrumb">
            <h2>Contact</h2>
            <ul>
                <li><a href="{{ url('/') }}">Accueil</a></li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
</div>
<!--// Breadcrumb Area -->

<!-- Main Content -->
<main class="page-content">

    <!-- Contact Area -->
    <div id="tm-contact-area" class="tm-contact-area tm-section tm-padding-section bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">

                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                      
                    <div class="tm-sectiontitle text-center">
                        <h2>Prendre contact</h2>
                        <span class="tm-sectiontitle-divider">
                            <img src="{{ url('frontend/assets/images/icons/icon-section-title-divider.png')}}" alt="divider icon">
                        </span>
                        <p>Besoin d'informations ou d'un devis personnalisé ? Remplissez notre formulaire de contact, et nous vous répondrons rapidement.</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="google-map" class="google-map"></div>

        <div class="tm-contact-top">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- Single Block -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-30">
                        <div class="tm-contact-block text-center">
                            <span class="tm-contact-block-icon">
                                <img src="{{ url('frontend/assets/images/icons/icon-contact-address.png') }}" alt="icon">
                            </span>
                            <div class="tm-contact-block-content">
                                <h5>Adresse</h5>
                                <p>Marcory Zone 4, Abidjan, Côte d'Ivoire</p>
                                <p>Riviera Palmeraie, Abidjan, Côte d'Ivoire</p>
                            </div>
                        </div>
                    </div>
                    <!--// Single Block -->

                    <!-- Single Block -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-30">
                        <div class="tm-contact-block text-center">
                            <span class="tm-contact-block-icon">
                                <img src="{{ url('frontend/assets/images/icons/icon-contact-call.png') }}" alt="icon">
                            </span>
                            <div class="tm-contact-block-content">
                                <h5>Telehone</h5>
                                <p><a href="tel:+18009156270">+225 01-01-01-01-02</a></p>
                                <p><a href="tel:+18009156272">+225 01-05-01-01-02</a></p>
                            </div>
                        </div>
                    </div>
                    <!--// Single Block -->

                    <!-- Single Block -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-30">
                        <div class="tm-contact-block text-center">
                            <span class="tm-contact-block-icon">
                                <img src="{{ url('frontend/assets/images/icons/icon-contact-email.png') }}" alt="icon">
                            </span>
                            <div class="tm-contact-block-content">
                                <h5>Email</h5>
                                <p>Email: <a href="mailto:info@example.com">infos@facis-ci.com</a></p>
                                <p>Skype: <a href="#">example.name</a></p>
                            </div>
                        </div>
                    </div>
                    <!--// Single Block -->
                </div>
            </div>
        </div>

        <div class="tm-contact-bottom tm-padding-section-top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="tm-contact-form text-center">
                            <h2>Envoyez-Nous Votre Message</h2>

                            <form action="{{ route('contact_store') }}" class="tm-contact-forminner tm-form"  method="post">
                                @csrf
                                <div class="row justify-content-center">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="tm-form-field">
                                            <input type="text" placeholder="Nom" name="nom">
                                        </div>
                                        <div class="tm-form-field">
                                            <input type="email" placeholder="Email" name="email">
                                        </div>
                                        <div class="tm-form-field">
                                            <input type="text" placeholder="Telephone" name="telephone">
                                        </div>
                                        <div class="tm-form-field">
                                            <input type="text" placeholder="Sujet" name="sujet">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="tm-form-field">
                                            <textarea cols="30" rows="5" placeholder="Message" name="message"></textarea>
                                        </div>
                                        <div class="tm-form-field">
                                            <button type="submit" class="tm-button tm-button-block">Envoyez Maintenant</button>
                                        </div>
                                    </div>
                                </div>
                                
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--// Contact Area -->

</main>
<!--// Main Content -->

<!-- Footer -->
@include('layouts.frontend.footer')
<!--// Footer -->

<!-- Search Form -->
@include('layouts.frontend.search')
<!--// Search Form -->

@endsection