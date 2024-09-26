<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Facis- Entreprise specialisé dans le froid</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" href="{{ url('frontend/assets/images/favicon.png') }}">
    <link rel="shortcut icon" href="{{ url('frontend/assets/images/favicon.ico') }}">

    <!-- Google Font (font-family: 'Open Sans', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700" rel="stylesheet">
    <!-- Google Font (font-family: 'PT Serif', serif;) -->
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/assets/css/style.css') }}">

    <link rel="stylesheet" href="{{ url('frontend/assets/css/custom.css') }}">
</head>

<body>

    <!-- Preloader -->
    <div class="tm-preloader">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="tm-preloader-logo">
                        <img src="{{ url('frontend/assets/images/logo/logo-facis.png') }}" alt="logo">
                    </div>
                    <span class="tm-preloader-progress"></span>
                </div>
            </div>
        </div>
    </div>
    <!--// Preloader -->

    <!-- Wrapper -->
    <div class="wrapper">

        @yield('content')

        <button id="back-top-top"><i class="ion-ios-arrow-thin-up"></i></button>

    </div>
    <!--// Wrapper -->

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgwgIuDRkO7HlxvpWN-vPePnGVWss5r5g"></script>
    <script src="{{ url('frontend/assets/js/google-map.js') }}"></script>

    <!-- Js Files -->
    <script src="{{ url('frontend/assets/js/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ url('frontend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ url('frontend/assets/js/popper.min.js') }}"></script>
    <script src="{{ url('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('frontend/assets/js/plugins.js') }}"></script>
    <script src="{{ url('frontend/assets/js/main.js') }}"></script>


    {{-- Script pour ajouter au panier --}}
    <script>
        $(document).on('click', '.add-to-cart-btn', function(e) {
            e.preventDefault();
            var articleId = $(this).data('id');
    
            $.ajax({
                url: "{{ route('add_to_cart', '') }}/" + articleId,
                method: "GET",
                success: function(response) {
                    if (response.success) {
                        // Afficher le message dynamiquement
                        $('.alert-container').html('<div class="alert alert-success alert-dismissible fade show" role="alert">' +
                            response.message + '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                            '<span aria-hidden="true">&times;</span>' +
                            '</button></div>');

                        
                    } else {
                        alert('Erreur lors de l\'ajout au panier');
                    }
                },

                error: function(xhr, status, error) {
                    alert('Erreur de communication avec le serveur');
                }
            });
        });
    </script>

    {{-- Script pour augmenter la quantité d'articles --}}
    <script>
        $(document).ready(function() {
            $('.tm-quantity-input').on('change', function() {
                var newQuantity = $(this).val();
                var panierId = $(this).data('id');
    
                // Vérifiez si la nouvelle quantité est supérieure à 0
                if (newQuantity < 1) {
                    alert("La quantité doit être au moins 1");
                    $(this).val(1);  // Rétablir à 1 si la quantité est inférieure
                    return;
                }
    
                $.ajax({
                    url: "{{ route('panier.updateQuantity', '') }}/" + panierId,
                    method: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        action: 'update',
                        quantity: newQuantity
                    },
                    success: function(response) {
                        if(response.success) {
                            // Mettre à jour le prix total
                            $('#totalprice-' + panierId).text(response.newTotalPrice + ' F CFA');

                            // Mettre à jour le total général du panier
                            $('#total-panier').text(response.totalPanier);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log('Erreur: ' + error);
                    }
                });
            });
        });
    </script>

    {{-- Script pour supprimer un article du panier --}}
    <script>
        $(document).on('click', '.tm-cart-removeproduct', function(e) {
            e.preventDefault();

            var panierId = $(this).data('id');

            // Confirmation avant suppression
            if (confirm("Voulez-vous vraiment retirer cet article du panier ?")) {
                $.ajax({
                    url: "{{ route('panier.remove', '') }}/" + panierId,
                    method: "DELETE",
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        if (response.success) {
                            // Retirer l'article du DOM
                            $('#panier-item-' + panierId).remove();

                            // Mettre à jour le total général du panier
                            $('#total-panier').text(response.totalPanier + ' F CFA');

                            alert(response.message);
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        alert('Erreur lors de la suppression de l\'article');
                    }
                });
            }
        });
    </script>

    {{-- Script pour afficher les details de l'article --}}
    <script>
        $(document).on('click', '.btn-view-product', function() {
            // Récupérer les données du produit à partir des attributs `data-*`
            var productName = $(this).data('name');
            var productDescription = $(this).data('description');
            var productPrice = $(this).data('price');
            var productImage = $(this).data('image');
            var productId = $(this).data('id');
            
            // Injecter les données dans la modale
            $('#productModalLabel').text(productName);
            $('#modalProductImage').attr('src', productImage);
            $('#modalProductName').text(productName);
            $('#modalProductDescription').text(productDescription);
            $('#modalProductPrice').text(productPrice);
            
            // Ajouter le lien d'ajout au panier
            $('#modalAddToCart').attr('href', '{{ route("add_to_cart", "") }}/' + productId);
        });

    </script>

    {{-- <script>
        $(document).ready(function() {
    
            // Ajouter un produit au panier
            $(document).on('click', '.add-to-cart-btn', function(e) {
                e.preventDefault();
                var articleId = $(this).data('id');
                
                $.ajax({
                    url: "{{ route('add_to_cart', '') }}/" + articleId,
                    method: "GET",
                    success: function(response) {
                        if (response.success) {
                            // Afficher le message de succès
                            $('.alert-container').html('<div class="alert alert-success alert-dismissible fade show" role="alert">' +
                                response.message + '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                                '<span aria-hidden="true">&times;</span></button></div>');
                        } else {
                            alert('Erreur lors de l\'ajout au panier');
                        }
                    },
                    error: function(xhr, status, error) {
                        alert('Erreur de communication avec le serveur');
                    }
                });
            });

            // Mettre à jour la quantité dans le panier
            $('.tm-quantity-input').on('change', function() {
                var newQuantity = $(this).val();
                var panierId = $(this).data('id');
                
                if (newQuantity < 1) {
                    alert("La quantité doit être au moins 1");
                    $(this).val(1);  // Rétablir à 1 si la quantité est inférieure
                    return;
                }

                $.ajax({
                    url: "{{ route('panier.updateQuantity', '') }}/" + panierId,
                    method: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        action: 'update',
                        quantity: newQuantity
                    },
                    success: function(response) {
                        if (response.success) {
                            // Mettre à jour le prix total pour cet article
                            $('#totalprice-' + panierId).text(response.newTotalPrice + ' F CFA');
                            // Mettre à jour le total général du panier
                            $('#total-panier').text(response.totalPanier);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log('Erreur: ' + error);
                    }
                });
            });

            // Retirer un produit du panier
            $(document).on('click', '.tm-cart-removeproduct', function(e) {
                e.preventDefault();
                var panierId = $(this).data('id');

                if (confirm("Voulez-vous vraiment retirer cet article du panier ?")) {
                    $.ajax({
                        url: "{{ route('panier.remove', '') }}/" + panierId,
                        method: "DELETE",
                        data: {
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            if (response.success) {
                                // Retirer l'article du DOM
                                $('#panier-item-' + panierId).remove();
                                // Mettre à jour le total général du panier
                                $('#total-panier').text(response.totalPanier + ' F CFA');
                                alert(response.message);
                            } else {
                                alert(response.message);
                            }
                        },
                        error: function(xhr, status, error) {
                            alert('Erreur lors de la suppression de l\'article');
                        }
                    });
                }
            });

            // Afficher les détails du produit dans la modale
            $(document).on('click', '.btn-view-product', function() {
                var productName = $(this).data('name');
                var productDescription = $(this).data('description');
                var productPrice = $(this).data('price');
                var productImage = $(this).data('image');
                var productId = $(this).data('id');
                
                // Injecter les données dans la modale
                $('#productModalLabel').text(productName);
                $('#modalProductImage').attr('src', productImage);
                $('#modalProductName').text(productName);
                $('#modalProductDescription').text(productDescription);
                $('#modalProductPrice').text(productPrice);
                
                // Ajouter le lien d'ajout au panier
                $('#modalAddToCart').attr('href', '{{ route("add_to_cart", "") }}/' + productId);
            });

        });

    </script> --}}
    <!--// Js Files -->
</body>

</html>