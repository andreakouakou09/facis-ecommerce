@extends('layouts.frontend.app')

@section('title', 'Nos Services')

@section('content')

    <!-- Header -->
    @include('layouts.frontend.header')
    <!--// Header -->
    
    <!-- Breadcrumb Area -->
    <div class="tm-breadcrumb-area tm-padding-section" data-bgimage="{{ url('frontend/assets/images/bg/bg-breadcrumb.jpg') }}"data-white-overlay="4">
        <div class="container">
            <div class="tm-breadcrumb">
                <h2>Services</h2>
                <ul>
                    <li><a href="{{ url('/') }}">Accueil</a></li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
    </div>
    <!--// Breadcrumb Area -->
    
    <!-- Main Content -->
    <main class="page-content">
        
        <!-- Services -->
        <div id="tm-services-area" class="tm-services-area tm-section tm-padding-section bg-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="tm-sectiontitle text-center">
                            <h2>Nos Services</h2>
                            <span class="tm-sectiontitle-divider">
                                <img src="{{ url('frontend/assets/images/icons/icon-section-title-divider.png') }}" alt="divider icon">
                            </span>
                            <p>Nos services couvrent l'intégralité de vos besoins en climatisation: de l'installation à l'entretien, en passant par la réparation, nous vous garantissons un confort optimal et une performance durable.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-30-reverse">
                    <div class="col-lg-4 col-md-6 col-12 mt-30">
                        <div class="tm-service text-center">
                            <div class="tm-service-icon">
                                <img src="{{ url('frontend/assets/images/icons/icon-service-1.png') }}" alt="feature icon">
                            </div>
                            <div class="tm-service-content">
                                <h5>Vente d'équipement</h5>
                                <p>Découvrez notre gamme complète d'équipements de climatisation et chauffage, alliant performance, efficacité énergétique, et confort.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-30">
                        <div class="tm-service text-center">
                            <div class="tm-service-icon">
                                <img src="{{ url('frontend/assets/images/icons/icon-service-2.png') }}" alt="feature icon">
                            </div>
                            <div class="tm-service-content">
                                <h5>Installation</h5>
                                <p>Profitez d'une installation sur mesure, réalisée par des techniciens certifiés pour garantir la longévité et l'efficacité de votre équipement.</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-30">
                        <div class="tm-service text-center ">
                            <div class="tm-service-icon">
                                <img src="{{ url('frontend/assets/images/icons/icon-service-3.png') }}" alt="feature icon">
                            </div>
                            <div class="tm-service-content">
                                <h5>Reparation</h5>
                                <p>Faites confiance à nos techniciens expérimentés pour une réparation efficace et durable de vos systèmes de climatisation et chauffage.</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-30">
                        <div class="tm-service text-center">
                            <div class="tm-service-icon">
                                <img src="{{ url('frontend/assets/images/icons/icon-service-4.png') }}" alt="feature icon">
                            </div>
                            <div class="tm-service-content">
                                <h5>Depannage</h5>
                                <p>Ne laissez pas une panne de climatisation gâcher votre confort : notre service de dépannage est à votre disposition 24/7.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-30">
                        <div class="tm-service text-center">
                            <div class="tm-service-icon">
                                <img src="{{ url('frontend/assets/images/icons/icon-service-5.png') }}" alt="feature icon">
                            </div>
                            <div class="tm-service-content">
                                <h5>Maintenance</h5>
                                <p>Assurez la longévité et l'efficacité de votre système avec notre service de maintenance régulière, effectué par des techniciens certifiés.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Services -->
    
        <!-- Appointment -->
        <div id="tm-appointment-area" class="tm-appointment-area tm-section tm-padding-section bg-grey">
            <div class="tm-appointment-bgimage" data-bgimage="{{ url('frontend/assets/images/others/rdv-bg.jpg') }}"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm-8 col-10 align-self-end">
                        <div class="tm-appointment-image">
                            <img src="{{ url('frontend/assets/images/others/rdv-bg.jpg') }}" alt="appointment-image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tm-appointment-box">
                            @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <h2>Prendre rendez-vous</h2>
                            <p>L'un de nos experts vous contactera rapidement pour répondre à vos questions.</p>
                            
                           
                            <form action="{{ route('appointement_store') }}" method="post" class="tm-appointment-form tm-form tm-form-whitebox">
                                @csrf
                                <div class="tm-form-inner">
                                    <div class="tm-form-field tm-form-fieldhalf">
                                        <input type="text" placeholder="Nom" name="nom">
                                    </div>
                                    <div class="tm-form-field tm-form-fieldhalf">
                                        <input type="text" placeholder="Telephone" name="telephone">
                                    </div>
                                    <div class="tm-form-field tm-form-fieldhalf">
                                        <input type="text" placeholder="Adresse" name="adresse">
                                    </div>
                                    <div class="tm-form-field tm-form-fieldhalf">
                                        <input type="text" placeholder="Date" data-toggle="datepicker" name="date">
                                    </div>

                                    <div class="tm-form-field">
                                        <select name="service">
                                            <option selected disabled>Choisisssez un Service</option>
                                            <option value="Vente d'équipement">Vente d'équipement</option>
                                            <option value="Maintenance">Maintenance</option>
                                            <option value="Depannage">Depannage</option>
                                            <option value="Réparation">Réparation</option>
                                            <option value="Maintenance">Maintenance</option>
                                        </select>
                                    </div>
                                    <div class="tm-form-field">
                                        <textarea cols="30" rows="5" placeholder="Message" name="message"></textarea>
                                    </div>
                                    <div class="tm-form-field">
                                        <button type="submit" class="tm-button" >Envoyer</button>
                                    </div>
                                </div>
                            </form>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Appointment -->
    
    </main>
    <!--// Main Content -->

<!-- Footer -->
@include('layouts.frontend.footer')
<!--// Footer -->

<!-- Search Form -->
@include('layouts.frontend.search')
<!--// Search Form -->
    
@endsection