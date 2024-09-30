@extends('layouts.frontend.app')

@section('title', 'Accueil')

@section('content')

        <!-- Header -->
        @include('layouts.frontend.header')
        <!--// Header -->

        <!-- Heroslider Area -->
        <div class="tm-heroslider">
            <div class="tm-heroslider-images tm-slider-dots-2">
                <div class="tm-heroslider-image" data-bgimage="{{ url('frontend/assets/images/heroslider/bg-1.jpg') }}"></div>
                <div class="tm-heroslider-image" data-bgimage="{{ url('frontend/assets/images/heroslider/bg-2.jpg') }}"></div>
                <div class="tm-heroslider-image" data-bgimage="{{ url('frontend/assets/images/heroslider/bg-3.jpg') }}"></div>
            </div>

            <div class="tm-heroslider-content tm-heroslider-content-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-10">
                            <h1>Spécialiste du confort en matière de chauffage et de climatisation</h1>
                            <p>Votre confort est notre priorité : Installation, maintenance et réparation de systèmes de climatisation et de chauffage</p>
                            <a href="{{ url('/a-propos') }}" class="tm-button hash-scroll-link">En Savoir Plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Heeroslider Area -->

        <!-- Main Content -->
        <main class="page-content">

            <!-- Features -->
            <div id="tm-features-area" class="tm-feature-area tm-section bg-grey">
                <div class="container">
                    <div class="row mt-30-reverse justify-content-center">
                        <div class="col-lg-3 col-md-6 col-12 mt-30">
                            <div class="tm-feature">
                                <div class="tm-feature-icon">
                                    <img src="{{ url('frontend/assets/images/icons/icon-feature-4.png') }}" alt="feature icon">
                                </div>
                                <div class="tm-feature-content">
                                    <h5>Installation</h5>
                                    <p>Installation professionnelle de solutions frigorifiques efficaces.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-30">
                            <div class="tm-feature">
                                <div class="tm-feature-icon">
                                    <img src="{{ url('frontend/assets/images/icons/icon-feature-2.png') }}" alt="feature icon">
                                </div>
                                <div class="tm-feature-content">
                                    <h5>Reparation</h5>
                                    <p>Service de réparation efficace pour systèmes frigorifiques.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-30">
                            <div class="tm-feature">
                                <div class="tm-feature-icon">
                                    <img src="{{ url('frontend/assets/images/icons/icon-feature-3.png') }}" alt="feature icon">
                                </div>
                                <div class="tm-feature-content">
                                    <h5>Maintenance</h5>
                                    <p>Optimisation continue pour performance maximale en réfrigération.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-30">
                            <div class="tm-feature">
                                <div class="tm-feature-icon">
                                    <img src="{{ url('frontend/assets/images/icons/icon-feature-2.png') }}" alt="feature icon">
                                </div>
                                <div class="tm-feature-content">
                                    <h5>Depannage</h5>
                                    <p>Dépannage rapide et efficace pour systèmes frigorifiques.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Features -->

            <!-- Products Area -->
            <div id="tm-products-area" class="tm-products-area tm-section tm-padding-section bg-white">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="tm-sectiontitle text-center">
                                <h2>Nos Différents Produits</h2>
                                <span class="tm-sectiontitle-divider">
                                    <img src="{{ url('frontend/assets/images/icons/icon-section-title-divider.png') }}" alt="divider icon">
                                </span>
                                <p>Découvrez nos dernières nouveautés en climatisation et équipements, conçues pour vous offrir le meilleur du confort et de l'efficacité énergétique.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row tm-products-slider tm-slider-arrows">

                        <!-- Single Product -->
                        @foreach ($articles as $article )
                        <div class="col">
                            <div class="tm-product">
                                <div class="tm-product-top">
                                    <img src="{{ url('uploads/articles/', $article->image) }}" alt="articles_facis"  height="300">
                                    <ul class="tm-product-actions">
                                        <li>
                                            <button class="btn-view-product"  data-toggle="modal" data-target="#exampleModal"  data-name="{{ $article->nom }}" data-description="{{ $article->description }}" data-price="{{ $article->prix }}" data-image="{{ url('uploads/articles/', $article->image) }}" data-id="{{ $article->id }}">
                                                <i class="ion-eye"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <a a href="#" class="add-to-cart-btn" data-id="{{ $article->id }}" >
                                                <i class="ion-android-cart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tm-product-bottom">
                                    <h6><a href="product-details.html">{{ Str::limit($article->nom, 15, '...') }}</a></h6>
                                    <span class="tm-product-price">{{ $article->prix }} F CFA</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!--// Single Product -->
 
                    </div>
                </div>
            </div>
            <!--// Products Area -->

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
                                <ul class="stylish-list-color">
                                    <li><i class="ion-android-checkmark-circle"></i> Excellence et Fiabilité </li>
                                    <li><i class="ion-android-checkmark-circle"></i> Innovation et Service Client</li>
                                </ul>
                                <div class="tm-about-buttons tm-buttongroup">
                                    <a href="{{ url('/a-propos') }}" class="tm-button">Voir Plus</a>
                                    <a href="tel:+18009156270" class="tm-callbutton">
                                        <img src="{{ url('frontend/assets/images/icons/icon-callbutton-phone.png') }}" alt="call icon">
                                        <h5>24/7 Service client</h5>
                                        <h4>+225-0102-03040-50607</h4>
                                    </a>
                                </div>
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
                                <img src="{{ url('frontend/assets/images/others/image-2.jpg')}}" alt="image">
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

            

            <!-- Call To Action -->
            <div id="tm-calltoaction-area" class="tm-cta-area tm-section tm-padding-section" data-overlay="4" data-bgimage="{{ url('frontend/assets/images/bg/bg-cta.jpg') }}">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-lg-12 col-md-10">
                            <div class="tm-cta text-center">
                                <h2>Votre maison a-t-elle besoin d'un climatiseur ou d'installation ?</h2>
                                <h4><i class="ion-phone"></i> Téléphone: <a href="tel:+18009156270">1-800-915-6270</a></h4>
                                <h4>OU</h4>
                                <a href="{{ url('/contact') }}" class="tm-button tm-button-white ">Contactez-nous</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Call To Action -->

            <!-- Testimonial Area -->
            <div id="tm-testimonial-area" class="tm-testimonial-area tm-section tm-padding-section bg-white">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="tm-sectiontitle text-center">
                                <h2>Témoignages de clients</h2>
                                <span class="tm-sectiontitle-divider">
                                    <img src="{{ url('frontend/assets/images/icons/icon-section-title-divider.png') }}" alt="divider icon">
                                </span>
                                <p>Ce que nos clients disent de nous : des témoignages qui reflètent notre engagement à fournir un service de qualité et des solutions sur mesure.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10">
                            <div class="tm-testimonial-slider tm-slider-arrows">
                                <div class="tm-testimonial text-center">
                                    <span class="tm-testimonial-quoteicon">
                                        <img src="{{ url('frontend/assets/images/icons/icon-testimonial-quote.png') }}" alt="quote icon">
                                    </span>
                                    <p>“J'ai fait installer une climatisation par cette entreprise et je suis ravi du résultat ! Le système est silencieux, efficace, et l'équipe a été très professionnelle du début à la fin.”</p>
                                    <div class="tm-testimonial-author">
                                        <h6>Jean Kouakou</h6>
                                        <p>Comptable</p>
                                    </div>
                                </div>
                                <div class="tm-testimonial text-center">
                                    <span class="tm-testimonial-quoteicon">
                                        <img src="{{ url('frontend/assets/images/icons/icon-testimonial-quote.png') }}" alt="quote icon">
                                    </span>
                                    <p>“Excellent service ! La climatisation que j'ai achetée fonctionne parfaitement et a transformé le confort de ma maison. Je recommande vivement cette entreprise.”</p>
                                    <div class="tm-testimonial-author">
                                        <h6>Sophie Laurent</h6>
                                        <p>Opératrice de saisie</p>
                                    </div>
                                </div>
                                <div class="tm-testimonial text-center">
                                    <span class="tm-testimonial-quoteicon">
                                        <img src="{{ url('frontend/assets/images/icons/icon-testimonial-quote.png') }}" alt="quote icon">
                                    </span>
                                    <p>“Depuis l'installation de ma nouvelle climatisation, ma maison est bien plus agréable en été. L'équipe a été ponctuelle, professionnelle, et très à l'écoute.”</p>
                                    <div class="tm-testimonial-author">
                                        <h6>Carmel Amani</h6>
                                        <p>Assistant</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Testimonial Area -->

            <!-- Call To Action -->
            <div id="tm-calltoaction-area-2" class="tm-cta-2-area tm-section tm-padding-section bg-theme">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-8">
                            <div class="tm-cta tm-cta-2 text-center">
                                <h2>Faites la Différence avec FACIS</h2>
                                <h5>" Le confort optimal commence avec une réfrigération fiable. "</h5>
                                <span class="mail-btn"><a href="mailto:contact@oyoxo.com">infos@facis-ci.com</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Call To Action -->

            <!-- Brand Logos -->
            <div class="tm-brandlogo-area tm-section tm-padding-section bg-grey">
                <div class="container">
                    <div class="tm-brandlogo-slider">

                        <!-- Brang Logo Single -->
                        <div class="tm-brandlogo">
                            <a href="#">
                                <img src="{{ url('frontend/assets/images/brandlogo/logo-carrier.png') }}" alt="brand-logo" height="50">
                            </a>
                        </div>
                        <!--// Brang Logo Single -->

                        <!-- Brang Logo Single -->
                        <div class="tm-brandlogo">
                            <a href="#">
                                <img src="{{ url('frontend/assets/images/brandlogo/logo-lg.png') }}" alt="brand-logo" height="50">
                            </a>
                        </div>
                        <!--// Brang Logo Single -->

                        <!-- Brang Logo Single -->
                        <div class="tm-brandlogo">
                            <a href="#">
                                <img src="{{ url('frontend/assets/images/brandlogo/logo-nasco.png') }}" alt="brand-logo" height="50"> 
                            </a>
                        </div>
                        <!--// Brang Logo Single -->

                        <!-- Brang Logo Single -->
                        <div class="tm-brandlogo">
                            <a href="#">
                                <img src="{{ url('frontend/assets/images/brandlogo/logo-midea.png') }}" alt="brand-logo" height="50">
                            </a>
                        </div>
                        <!--// Brang Logo Single -->

                        <!-- Brang Logo Single -->
                        <div class="tm-brandlogo">
                            <a href="#">
                                <img src="{{ url('frontend/assets/images/brandlogo/logo-hisense.png') }}" alt="brand-logo" height="50">
                            </a>
                        </div>
                        <!--// Brang Logo Single -->

                        <!-- Brang Logo Single -->
                        <div class="tm-brandlogo">
                            <a href="#">
                                <img src="{{ url('frontend/assets/images/brandlogo/logo-beko.png') }}" alt="brand-logo" height="50">
                            </a>
                        </div>
                        <!--// Brang Logo Single -->

                        <!-- Brang Logo Single -->
                        <div class="tm-brandlogo">
                            <a href="#">
                                <img src="{{ url('frontend/assets/images/brandlogo/logo-haier.png') }}" alt="brand-logo" height="50">
                            </a>
                        </div>
                        <!--// Brang Logo Single -->

                        <!-- Brang Logo Single -->
                        <div class="tm-brandlogo">
                            <a href="#">
                                <img src="{{ url('frontend/assets/images/brandlogo/logo-bosch.png') }}" alt="brand-logo" height="50">
                            </a>
                        </div>
                        <!--// Brang Logo Single -->

                        <!-- Brang Logo Single -->
                        <div class="tm-brandlogo">
                            <a href="#">
                                <img src="{{ url('frontend/assets/images/brandlogo/logo-samsung.png') }}" alt="brand-logo" height="50">
                            </a>
                        </div>
                        <!--// Brang Logo Single -->

                        <!-- Brang Logo Single -->
                        <div class="tm-brandlogo">
                            <a href="#">
                                <img src="{{ url('frontend/assets/images/brandlogo/logo-delonghi.png') }}" alt="brand-logo" height="50">
                            </a>
                        </div>
                        <!--// Brang Logo Single -->

                    </div>
                </div>
            </div>
            <!--// Brand Logos -->

        </main>
        <!--// Main Content -->

        <!-- Footer -->
        @include('layouts.frontend.footer')
        <!--// Footer -->

        <!-- Search Form -->
        @include('layouts.frontend.search')
        <!--// Search Form -->
  

@endsection