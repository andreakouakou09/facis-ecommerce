@extends('layouts.frontend.app')

@section('content')

    <!-- Header -->
    @include('layouts.frontend.header')

    <!-- Breadcrumb Area -->
    <div class="tm-breadcrumb-area tm-padding-section" data-bgimage="{{ url('frontend/assets/images/bg/bg-breadcrumb.jpg') }}" data-white-overlay="4">
        <div class="container">
            <div class="tm-breadcrumb">
                <h2>Panier</h2>
                <ul>
                    <li><a href="{{ url('/') }}">Accueil</a></li>
                    <li><a href="{{ url('/produits') }}">Produits</a></li>
                    <li>Panier</li>
                </ul>
            </div>
        </div>
    </div>
    <!--// Breadcrumb Area -->

    <!-- Main Content -->
    <main class="page-content">

        <!-- Shopping Cart Area -->
        <div class="tm-section shopping-cart-area bg-white tm-padding-section">
            <div class="container">

                <!-- Shopping Cart Table -->
                <div class="tm-cart-table table-responsive">
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th class="tm-cart-col-image" scope="col">Image</th>
                                <th class="tm-cart-col-productname" scope="col">Article</th>
                                <th class="tm-cart-col-price" scope="col">Prix</th>
                                <th class="tm-cart-col-quantity" scope="col">Quantité</th>
                                <th class="tm-cart-col-total" scope="col">Total</th>
                                <th class="tm-cart-col-remove" scope="col">Retirer</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($panier->isEmpty())
                                <tr>
                                    <td colspan="6" class="text-center">Votre panier est vide</td>
                                </tr>
                            @else
                                @foreach ($panier as $panier)
                                    <tr id="panier-item-{{ $panier->id }}">
                                        <td>
                                            <a href="product-details.html" class="tm-cart-productimage">
                                                <img src="{{ url('uploads/articles/', $panier->article->image ) }}" alt="product image">
                                            </a>
                                        </td>
                                        <td>
                                            <a href="product-details.html" class="tm-cart-productname">{{ $panier->article->nom }}</a>
                                        </td>
                                        <td class="tm-cart-price">{{ $panier->article->prix }} F CFA</td>
                                        <td>
                                            <input type="number" id="quantite-{{ $panier->id }}" class="tm-quantity-input"  min="1" value="{{ $panier->quantite }}" data-id="{{ $panier->id }}">
                                        </td>
                                        <td>
                                            <span id="totalprice-{{ $panier->id }}" class="tm-cart-totalprice">{{ $panier->article->prix * $panier->quantite }} F CFA</span>
                                        </td>
                                        <td>
                                            <button class="tm-cart-removeproduct" data-id="{{ $panier->id }}"><i class="ion-android-close"></i></button>
                                        </td>
                                    </tr>


                                @endforeach
                            @endif
                            
                            {{-- <tr>
                                <td>
                                    <a href="product-details.html" class="tm-cart-productimage">
                                        <img src="assets/images/products/thumbnail/product-image-2.jpg"
                                            alt="product image">
                                    </a>
                                </td>
                                <td>
                                    <a href="product-details.html" class="tm-cart-productname">Multimedia alarm device</a>
                                </td>
                                <td class="tm-cart-price">$75.00</td>
                                <td>
                                    <div class="tm-quantitybox">
                                        <input type="text" value="1">
                                    </div>
                                </td>
                                <td>
                                    <span class="tm-cart-totalprice">$75.00</span>
                                </td>
                                <td>
                                    <button class="tm-cart-removeproduct"><i class="ion-android-close"></i></button>
                                </td>
                            </tr> --}}

                        </tbody>
                    </table>
                </div>
                <!--// Shopping Cart Table -->

                <!-- Shopping Cart Content -->
                <div class="tm-cart-bottomarea">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="tm-buttongroup">
                                <a href="{{ url('/produits') }}" class="tm-button">Continue Shopping <b></b></a>
                                
                            </div>
                            
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="tm-cart-pricebox">
                                <h4>Total du panier</h4>
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <tbody>
                                            
                                            <tr class="tm-cart-pricebox-total">
                                                <td>Total</td>
                                                <td><span id="total-panier">{{ $total }}</span> F CFA</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <h4>Informations de l'acheteur</h4>
                            
                            <form action="{{ route('confirm_commande') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">Nom</label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->name }}" name="nom" required>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label for="">Email</label>
                                      <input type="email" value="{{ Auth::user()->email }}" class="form-control" name="email">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="">Telephone</label>
                                      <input type="text" name="telephone" class="form-control" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">Adresse de livraison</label>
                                    <textarea name="adresse" id="" class="form-control" cols="10" rows="3" required></textarea>
                                </div>
                                
                                <button type="submit" class="tm-button">Valider la Commande </button>
                            </form>
                        </div>
                    </div>
                </div>
                <!--// Shopping Cart Content -->

            </div>
        </div>
        <!--// Shopping Cart Area -->

    </main>
    <!--// Main Content -->

     <!-- Footer -->
     @include('layouts.frontend.footer')
     <!--// Footer -->

     <!-- Search Form -->
     @include('layouts.frontend.search')
     <!--// Search Form -->

     

@endsection

