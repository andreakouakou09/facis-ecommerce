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

                // error: function(xhr, status, error) {
                //     alert('Erreur de communication avec le serveur');
                // }

                error: function(xhr, status, error) {
                if (xhr.status === 401) {
                    // alert('Vous devez être connecté pour ajouter des articles au panier.');
                    // // Optionnel : rediriger vers la page de connexion
                    // window.location.href = "{{ route('login') }}";

                    $('#authModal').modal('show');

                } else {
                    alert('Erreur de communication avec le serveur.');
                }
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
                    <a href="#" id="modalAddToCart" class="btn btn-primary btn-lg" role="button">Ajouter au panier</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Modale Bootstrap -->
    <div class="modal fade" id="authModal" tabindex="-1" role="dialog" aria-labelledby="authModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="authModalLabel">Non connecté</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            Vous devez être connecté pour ajouter des articles au panier.
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
            <a href="{{ route('login') }}" class="btn btn-primary btn-lg" role="button">Se connecter</a>
            </div>
        </div>
        </div>
    </div>

</body>

</html>