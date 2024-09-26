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

                            {{-- @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif --}}

                            <div class="alert-container">
                                {{ $articles->links() }}
                            </div>

                            
                            {{-- <form action="#" class="tm-shop-header">
                                <p class="tm-shop-countview">Showing 1 to 9 of 16 </p>
                                <select>
                                    <option value="value">Default Sorting</option>
                                    <option value="value">Name A-Z</option>
                                    <option value="value">Date</option>
                                    <option value="value">Best Sellers</option>
                                    <option value="value">Trending</option>
                                </select>
                            </form> --}}
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
                                                            {{-- <button data-fancybox data-src="#tm-product-quickview"><i class="ion-eye"></i></button> --}}
                                                            <button class="btn-view-product"  data-toggle="modal" data-target="#exampleModal"  data-name="{{ $article->nom }}" data-description="{{ $article->description }}" data-price="{{ $article->prix }}" data-image="{{ url('uploads/articles/', $article->image) }}" data-id="{{ $article->id }}"><i class="ion-eye"></i></button>
                                                        </li>
                                                        <li><a href="#" class="add-to-cart-btn" data-id="{{ $article->id }}"><i class="ion-android-cart"></i></a></li>
                                                        {{-- <li><a href="{{ route('add_to_cart', $article->id) }}"><i class="ion-android-cart"></i></a></li> --}}
                                                        
                                                        {{-- {{ route('add_to_cart', $article->id) }} --}}
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
                                    
                                    <!--// Single Product -->

                                    <!-- Single Product -->
                                    {{-- <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-30">
                                        <div class="tm-product">
                                            <div class="tm-product-top">
                                                <img src="{{ url('frontend/assets/images/products/product-image-2.jpg') }}"
                                                    alt="oyoxo product">
                                                <ul class="tm-product-actions">
                                                    <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                                class="ion-eye"></i></button></li>
                                                    <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                    <li><a href="#"><i class="ion-heart"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="tm-product-bottom">
                                                <h6><a href="product-details.html">Multimedia alarm device</a></h6>
                                                <span class="tm-product-price"><ins>$77.55</ins><del>$99.99</del></span>
                                                <div class="tm-ratingbox">
                                                    <span class="is-active"><i class="ion-ios-star"></i></span>
                                                    <span class="is-active"><i class="ion-ios-star"></i></span>
                                                    <span class="is-active"><i class="ion-ios-star"></i></span>
                                                    <span class="is-active"><i class="ion-ios-star"></i></span>
                                                    <span><i class="ion-ios-star"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <!--// Single Product -->

                                    <!-- Single Product -->
                                    {{-- <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-30">
                                        <div class="tm-product">
                                            <div class="tm-product-top">
                                                <img src="{{ url('frontend/assets/images/products/product-image-3.jpg') }}" alt="oyoxo product">
                                                <ul class="tm-product-actions">
                                                    <li><button data-fancybox data-src="#tm-product-quickview"><i class="ion-eye"></i></button></li>
                                                    <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                    <li><a href="#"><i class="ion-heart"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="tm-product-bottom">
                                                <h6><a href="product-details.html">Vacuum cleaner</a></h6>
                                                <span class="tm-product-price">$65.99</span>
                                                <div class="tm-ratingbox">
                                                    <span class="is-active"><i class="ion-ios-star"></i></span>
                                                    <span class="is-active"><i class="ion-ios-star"></i></span>
                                                    <span class="is-active"><i class="ion-ios-star"></i></span>
                                                    <span><i class="ion-ios-star"></i></span>
                                                    <span><i class="ion-ios-star"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <!--// Single Product -->

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

        <!-- Product Quickview -->
        {{-- <div class="tm-product-quickview" id="tm-product-quickview">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-10 col-12">
                        <div class="tm-product-quickview-inner">
                            <!-- Product Details -->
                            <div class="tm-prodetails">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-10 col-12">

                                        <!-- Product Details Images -->
                                        <div class="tm-prodetails-images">
                                            <div class="tm-prodetails-largeimages">
                                                <div class="tm-prodetails-largeimage">
                                                    <img src="{{ url('frontend/assets/images/products/product-image-1.jpg') }}"alt="product image">
                                                </div>
                                                <div class="tm-prodetails-largeimage">
                                                    <img src="{{ url('frontend/assets/images/products/product-image-2.jpg') }}" alt="product image">
                                                </div>
                                                <div class="tm-prodetails-largeimage">
                                                    <img src="{{ url('frontend/assets/images/products/product-image-3.jpg') }}" alt="product image">
                                                </div>
                                                <div class="tm-prodetails-largeimage">
                                                    <img src="{{ url('frontend/assets/images/products/product-image-4.jpg') }}" alt="product image">
                                                </div>
                                                <div class="tm-prodetails-largeimage">
                                                    <img src="{{ url('frontend/assets/images/products/product-image-2.jpg') }}" alt="product image">
                                                </div>
                                                <div class="tm-prodetails-largeimage">
                                                    <img src="{{ url('frontend/assets/images/products/product-image-3.jpg') }}" alt="product image">
                                                </div>
                                            </div>
                                            <div class="tm-prodetails-thumbnails">
                                                <div class="tm-prodetails-thumbnail">
                                                    <img src="{{ url('frontend/assets/images/products/thumbnail/product-image-1.jpg') }}"
                                                        alt="product image">
                                                </div>
                                                <div class="tm-prodetails-thumbnail">
                                                    <img src="{{ url('frontend/assets/images/products/thumbnail/product-image-2.jpg') }}"
                                                        alt="product image">
                                                </div>
                                                <div class="tm-prodetails-thumbnail">
                                                    <img src="{{ url('frontend/assets/images/products/thumbnail/product-image-3.jpg') }}"
                                                        alt="product image">
                                                </div>
                                                <div class="tm-prodetails-thumbnail">
                                                    <img src="{{ url('frontend/assets/images/products/thumbnail/product-image-4.jpg') }}"
                                                        alt="product image">
                                                </div>
                                                <div class="tm-prodetails-thumbnail">
                                                    <img src="{{ url('frontend/assets/images/products/thumbnail/product-image-2.jpg') }}"
                                                        alt="product image">
                                                </div>
                                                <div class="tm-prodetails-thumbnail">
                                                    <img src="{{ url('frontend/assets/images/products/thumbnail/product-image-3.jpg') }}"
                                                        alt="product image">
                                                </div>
                                            </div>
                                        </div>
                                        <!--// Product Details Images -->

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="tm-prodetails-content">
                                            <h3 class="tm-prodetails-title">Industry air ventilation</h3>
                                            <div class="tm-ratingbox">
                                                <span class="is-active"><i class="ion-ios-star"></i></span>
                                                <span class="is-active"><i class="ion-ios-star"></i></span>
                                                <span class="is-active"><i class="ion-ios-star"></i></span>
                                                <span class="is-active"><i class="ion-ios-star"></i></span>
                                                <span class="is-active"><i class="ion-ios-star"></i></span>
                                            </div>
                                            <p class="tm-prodetails-availability">Availalbe: <span>In Stock</span></p>
                                            <div class="tm-prodetails-price">
                                                <span><del>$75.99</del> $59.99</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque mi
                                                dolor,
                                                malesuada id metus a, mattis eleifend elit. Nullam pharetra
                                                consequat ex in dapibus. Vestibulum ante.</p>
                                            <div class="tm-prodetails-quantitycart">
                                                <div class="tm-quantitybox">
                                                    <input type="text" value="1">
                                                </div>
                                                <a href="#" class="tm-button tm-button-dark">Add To Cart<b></b></a>
                                            </div>

                                            <div class="tm-prodetails-categories">
                                                <h6>Categories :</h6>
                                                <ul>
                                                    <li><a href="shop.html">Repair</a></li>
                                                    <li><a href="shop.html">Tools</a></li>
                                                </ul>
                                            </div>

                                            <div class="tm-prodetails-tags">
                                                <h6>Tags :</h6>
                                                <ul>
                                                    <li><a href="shop.html">Electronic</a></li>
                                                    <li><a href="shop.html">Repair Tools</a></li>
                                                    <li><a href="shop.html">Best</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="tm-prodetails-share">
                                            <h6>Share :</h6>
                                            <ul>
                                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                                <li><a href="#"><i class="ion-social-instagram-outline"></i></a>
                                                </li>
                                                <li><a href="#"><i class="ion-social-pinterest-outline"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--// Product Details -->
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!--// Product Quickview -->

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Détail du Produit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-7">
                                <img id="modalProductImage" src="" alt="Image du produit" height="350" width="450" />
                            </div>
                            <div class="col-md-5">
                                <h5 id="modalProductName"></h5>
                                <p id="modalProductDescription"></p>
                                <p>
                                    <strong>Prix:</strong> <span id="modalProductPrice"></span> F CFA
                                </p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <a href="#" id="modalAddToCart" class="btn btn-primary">Ajouter au panier</a>
                    </div>
                </div>
            </div>
        </div>

        
    
@endsection


