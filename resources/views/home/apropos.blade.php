@extends('layouts.frontend.app')

@section('title', 'A Propos')

@section('content')

        <!-- Header -->
        @include('layouts.frontend.header')
        <!--// Header -->

        <!-- Breadcrumb Area -->
        <div class="tm-breadcrumb-area tm-padding-section" data-bgimage="{{ url('frontend/assets/images/bg/bg-breadcrumb.jpg') }}" data-white-overlay="4">
            <div class="container">
                <div class="tm-breadcrumb">
                    <h2>A PROPOS</h2>
                    <ul>
                        <li><a href="{{ url('/') }}">Accueil</a></li>
                        <li>A Propos</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--// Breadcrumb Area -->

        <!-- Main Content -->
        <main class="page-content">

            <!-- About -->
            <div id="tm-about-area" class="tm-about-area tm-section tm-padding-section bg-white">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="tm-videobox" data-black-overlay="3">
                                <img src="{{ url('frontend/assets/images/others/image-1.jpg') }}" alt="videobox image">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="tm-about-content">
                                <h2>A Propos de notre entreprise</h2>
                                <h6>Révolutionnez Votre Confort avec Nos Solutions Frigorifiques Expertement Conçues !</h6>
                                <p>Chez Facis, nous sommes experts en solutions de réfrigération et climatisation. Forts de plusieurs années d’expérience, nous offrons une gamme complète de services allant de l’installation à l'entretien, en passant par la réparation de systèmes frigorifiques pour les particuliers, les entreprises et les industries.</p>
                                <p>Notre équipe de techniciens qualifiés intervient rapidement et efficacement pour assurer le bon fonctionnement de vos équipements de froid, qu'il s'agisse de chambres froides, de réfrigérateurs industriels ou de climatiseurs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center tm-padding-section-top">
                        <div class="col-lg-6">
                            <div class="tm-whyus-content">
                                <h2>Trois raisons de nous faire confiance</h2>
                                <div class="tm-whyus-blocks">
                                    <div class="tm-whyus-block">
                                        <h5><span>1</span>Engagement pour des services fiables</h5>
                                        <p> Forts de plusieurs années d'expérience, nos techniciens qualifiés vous garantissent des installations et des services d'une qualité irréprochable.</p>
                                    </div>
                                    <div class="tm-whyus-block">
                                        <h5><span>2</span>Engagement au service personnalisé</h5>
                                        <p> Chaque projet est unique, c'est pourquoi nous offrons des solutions sur mesure avec un accompagnement complet pour garantir votre satisfaction.</p>
                                    </div>
                                    <div class="tm-whyus-block">
                                        <h5><span>3</span>Engagement écologique et économique</h5>
                                        <p> Nous favorisons des systèmes écoénergétiques qui réduisent votre empreinte carbone et vos factures, tout en optimisant votre confort.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="tm-whyus-image">
                                <img src="{{ url('frontend/assets/images/others/image-2.jpg') }}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// About -->

            <!-- Funfact -->
            <div id="tm-funfact-area" class="tm-funfact-area tm-section tm-padding-section bg-grey">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-12">
                            <h2 class="tm-funfact-heading"><small>Plus de </small><span>10 ans</span> d'expérience
                            </h2>
                        </div>
                        <div class="col-lg-7 col-12">
                            <div class="row mt-30-reverse justify-content-center">

                                <div class="col-lg-4 col-md-4 col-sm-4 col-12 mt-30">
                                    <div class="tm-funfact">
                                        <div class="tm-funfact-icon">
                                            <img src="{{ url('frontend/assets/images/icons/icon-funfact-1.png') }}" alt="funfact icon">
                                        </div>
                                        <div class="tm-funfact-content">
                                            <span class="tm-funfact-number">
                                                <span class="odometer" data-count-to="1299"></span>
                                            </span>
                                            <h6>Installations réalisées</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-12 mt-30">
                                    <div class="tm-funfact">
                                        <div class="tm-funfact-icon">
                                            <img src="{{ url('frontend/assets/images/icons/icon-funfact-2.png') }}" alt="funfact icon">
                                        </div>
                                        <div class="tm-funfact-content">
                                            <span class="tm-funfact-number">
                                                <span class="odometer" data-count-to="30"></span>
                                            </span>
                                            <h6>Techniciens experts</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-12 mt-30">
                                    <div class="tm-funfact">
                                        <div class="tm-funfact-icon">
                                            <img src="{{ url('frontend/assets/images/icons/icon-funfact-3.png') }}" alt="funfact icon">
                                        </div>
                                        <div class="tm-funfact-content">
                                            <span class="tm-funfact-number">
                                                <span class="odometer" data-count-to="100"></span>%
                                            </span>
                                            <h6>Taux de satisfaction</h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Funfact -->

             <!-- Team Area -->
            <div id="tm-team-area" class="tm-member-area tm-section tm-padding-section bg-white">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="tm-sectiontitle text-center">
                                <h2>Nos professionnels</h2>
                                <span class="tm-sectiontitle-divider">
                                    <img src="{{ url('frontend/assets/images/icons/icon-section-title-divider.png') }}" alt="divider icon">
                                </span>
                                <p>Rencontrez notre équipe d'experts en climatisation et chauffage, passionnés par leur métier et dédiés à vous offrir un service exceptionnel à chaque étape de votre projet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row tm-member-slider tm-slider-dots-2">

                        <!-- Single Member -->
                        <div class="col-lg-4">
                            <div class="tm-member text-center">
                                <img src="{{ url('frontend/assets/images/team/team-image-1.jpg') }}" alt="team member">
                                <div class="tm-member-content">
                                    <h5>Brian Bader</h5>
                                    <p>Engineer</p>
                                </div>
                            </div>
                        </div>
                        <!--// Single Member -->

                        <!-- Single Member -->
                        <div class="col-lg-4">
                            <div class="tm-member text-center">
                                <img src="{{ url('frontend/assets/images/team/team-image-2.jpg') }}" alt="team member">
                                <div class="tm-member-content">
                                    <h5>Gerald Jackson</h5>
                                    <p>Machine operator</p>
                                </div>
                            </div>
                        </div>
                        <!--// Single Member -->

                        <!-- Single Member -->
                        <div class="col-lg-4">
                            <div class="tm-member text-center">
                                <img src="{{ url('frontend/assets/images/team/team-image-3.jpg') }}" alt="team member">
                                <div class="tm-member-content">
                                    <h5>Peter Harrison</h5>
                                    <p>Clinical manager</p>
                                </div>
                            </div>
                        </div>
                        <!--// Single Member -->

                        <!-- Single Member -->
                        <div class="col-lg-4">
                            <div class="tm-member text-center">
                                <img src="{{ url('frontend/assets/images/team/team-image-1.jpg') }}" alt="team member">
                                <div class="tm-member-content">
                                    <h5>Brian Bader</h5>
                                    <p>Engineer</p>
                                </div>
                            </div>
                        </div>
                        <!--// Single Member -->

                        <!-- Single Member -->
                        <div class="col-lg-4">
                            <div class="tm-member text-center">
                                <img src="{{ url('frontend/assets/images/team/team-image-2.jpg') }}" alt="team member">
                                <div class="tm-member-content">
                                    <h5>Gerald Jackson</h5>
                                    <p>Machine operator</p>
                                </div>
                            </div>
                        </div>
                        <!--// Single Member -->

                        <!-- Single Member -->
                        <div class="col-lg-4">
                            <div class="tm-member text-center">
                                <img src="{{ url('frontend/assets/images/team/team-image-3.jpg') }}" alt="team member">
                                <div class="tm-member-content">
                                    <h5>Peter Harrison</h5>
                                    <p>Clinical manager</p>
                                </div>
                            </div>
                        </div>
                        <!--// Single Member -->

                    </div>
                </div>
            </div>
            <!--// Team Area -->

            <!-- Faq Area -->
            <div id="tm-faq-area" class="tm-question-area tm-section tm-padding-section bg-grey">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="tm-question-left">
                                <div class="tm-faq-images tm-slider-dots">
                                    <img src="{{ url('frontend/assets/images/others/aboutimage1.jpg') }}" alt="about image">
                                    <img src="{{ url('frontend/assets/images/others/aboutimage2.jpg') }}" alt="about image">
                                    <img src="{{ url('frontend/assets/images/others/aboutimage3.jpg') }}" alt="about image">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="tm-question-right">
                                <h2>Questions Fréquemment Posées</h2>

                                <!-- Accordion -->
                                <div id="tm-accordion" class="tm-accordion">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Quels types de systèmes de climatisation proposez-vous ?
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                            data-parent="#tm-accordion">
                                            <div class="card-body">
                                                <p>Nous proposons des systèmes de climatisation split, multisplit, et des unités de climatiseurs réversibles pour répondre à vos besoins spécifiques.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Quel choix le bon système de climatisation pour ma maison ?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#tm-accordion">
                                            <div class="card-body">
                                                <p>Nous vous recommandons de nous contacter pour une évaluation personnalisée. Nous prendrons en compte la taille de votre espace, l'isolation, et vos préférences pour vous conseiller le système le mieux adapté.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Quels sont les avantages de la maintenance préventive ?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                            data-parent="#tm-accordion">
                                            <div class="card-body">
                                                <p>La maintenance préventive permet de détecter et de résoudre les problèmes avant qu'ils ne deviennent graves, prolonge la durée de vie de vos équipements et améliore leur performance énergétique</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingFour">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                    Que faire en cas de panne de mon système de climatisation ?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                            data-parent="#tm-accordion">
                                            <div class="card-body">
                                                <p>En cas de panne, contactez-nous immédiatement pour planifier une intervention. Nous diagnostiquerons le problème et effectuerons les réparations nécessaires.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--// Accordion -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Faq Area -->
        
        </main>
        <!--// Main Content -->

        <!-- Footer -->
        @include('layouts.frontend.footer')
        <!--// Footer -->

        <!-- Search Form -->
        @include('layouts.frontend.search')
        <!--// Search Form -->

        @endsection