@extends('layouts.frontend.app')

@section('content')

    <!-- Header -->
    @include('layouts.frontend.header')
    <!--// Header -->

            <!-- Breadcrumb Area -->
            <div class="tm-breadcrumb-area tm-padding-section" data-bgimage="{{ url('frontend/assets/images/bg/bg-breadcrumb.jpg') }}" data-white-overlay="4">
            <div class="container">
                <div class="tm-breadcrumb">
                    <h2>NOS PRODUITS</h2>
                    <ul>
                        <li><a href="index.html">Accueil</a></li>
                        <li>Produits</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--// Breadcrumb Area -->

        <!-- Main Content -->
        <main class="page-content">

            <!-- Products Page Content -->
            <div class="tm-section products-page-content tm-padding-section bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-12">

                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <div class="alert-container">
                                {{ $articles->links() }}
                            </div>

                            <div class="tm-shop-products">
                                <div class="row mt-30-reverse">

                                    <!-- Single Product -->
                                    @if ($articles->isEmpty())
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-30">
                                        <div class="tm-product">
                                            <div class="tm-product-top">
                                                <span>Aucun produit ajouté ici</span>
                                            </div>
                                        </div>
                                    </div>

                                    @else 
                                        @foreach ($articles as $article )
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-30">
                                            <div class="tm-product">
                                                <div class="tm-product-top">
                                                    <img src="{{ url('uploads/articles/', $article->image) }}" alt="oyoxo product" height="300">
                                                    <ul class="tm-product-actions">
                                                        <li>
                                                           
                                                            <button class="btn-view-product"  data-toggle="modal" data-target="#exampleModal"  data-name="{{ $article->nom }}" data-description="{{ $article->description }}" data-price="{{ $article->prix }}" data-image="{{ url('uploads/articles/', $article->image) }}" data-id="{{ $article->id }}"><i class="ion-eye"></i></button>
                                                        </li>
                                                        <li><a href="#" class="add-to-cart-btn" data-id="{{ $article->id }}"><i class="ion-android-cart"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                                <div class="tm-product-bottom">
                                                    <h6><a href="product-details.html">{{ Str::limit($article->nom, 15, '...') }}</a></h6>
                                                    <span class="tm-product-price">{{ $article->prix }} F CFA</span>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    @endif
                                  
                                </div>
                            </div>
                            <div class="alert-containern mt-50">
                                {{ $articles->links() }}
                            </div>
                        </div>
                        <div class="col-lg-3 col-12">
                            <div class="widgets widgets-sidebar-shop">

                                <!-- Single Widget -->
                                <div class="single-widget widget-search">
                                    <h6 class="widget-title">Recherche</h6>
                                    <form action="#" class="widget-search-form">
                                        <input type="text" placeholder="Entrez votre mot-clé...">
                                        <button type="submit"><i class="ion-android-search"></i></button>
                                    </form>
                                </div>
                                <!--// Single Widget -->

                                <!-- Single Widget -->
                                <div class="single-widget widget-pricefilter">
                                    <h6 class="widget-title">Filtrer par prix</h6>
                                    <div class="widget-pricefilter-inner">
                                        <div class="tm-rangeslider" data-range_min="0" data-range_max="800" data-cur_min="200" data-cur_max="550">
                                            <div class="tm-rangeslider-bar nst-animating"></div>
                                            <span class="tm-rangeslider-leftgrip nst-animating" tabindex="0"></span>
                                            <span class="tm-rangeslider-rightgrip nst-animating" tabindex="0"></span>
                                        </div>
                                        <div class="widget-pricefilter-actions">
                                            <p class="widget-pricefilter-price">Prix: $<span class="tm-rangeslider-leftlabel">308</span>
                                                - $<span class="tm-rangeslider-rightlabel">798</span></p>
                                            <button class="widget-pricefilter-button">Filtrer</button>
                                        </div>
                                    </div>
                                </div>
                                <!--// Single Widget -->

                                <!-- Single Widget -->
                                <div class="single-widget widget-categories">
                                    <h6 class="widget-title">Categories</h6>
                                    <ul>
                                        @foreach ($categories as $categorie )
                                        <li><a href="shop.html">{{ $categorie->nom }}</a></li>
                                        @endforeach
                                        
                                    </ul>
                                </div>
                                <!--// Single Widget -->

                                <!-- Single Widget -->
                                <div class="single-widget widget-popularproduct">
                                    <h6 class="widget-title">Produits Récents</h6>
                                    <ul>
                                        <li>
                                            <a href="product-details.html" class="widget-popularproduct-image">
                                                <img src="{{ url('frontend/assets/images/products/thumbnail/product-image-1.jpg') }}"
                                                    alt="product thumbnail">
                                            </a>
                                            <div class="widget-popularproduct-content">
                                                <h6><a href="product-details.html">Brown liquid inside</a></h6>
                                                <span>$20.00</span>
                                            </div>
                                        </li>

                                        <li>
                                            <a href="product-details.html" class="widget-popularproduct-image">
                                                <img src="{{ url('frontend/assets/images/products/thumbnail/product-image-2.jpg') }}"
                                                    alt="product thumbnail">
                                            </a>
                                            <div class="widget-popularproduct-content">
                                                <h6><a href="product-details.html">Top of amber bottle</a></h6>
                                                <span>$35.99</span>
                                            </div>
                                        </li>

                                        <li>
                                            <a href="product-details.html" class="widget-popularproduct-image">
                                                <img src="{{ url('frontend/assets/images/products/thumbnail/product-image-3.jpg') }}"
                                                    alt="product thumbnail">
                                            </a>
                                            <div class="widget-popularproduct-content">
                                                <h6><a href="product-details.html">Mario badescu bottle</a></h6>
                                                <span>$99.99</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!--// Single Widget -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Products Page Content -->

        </main>
        <!--// Main Content -->

        <!-- Footer -->
        @include('layouts.frontend.footer')
        <!--// Footer -->

        <!-- Search Form -->
        @include('layouts.frontend.search')
        <!--// Search Form -->
       
@endsection


