<div id="tm-home-area" class="tm-header">
    <div class="tm-header-topside">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <ul class="tm-header-topside-infoleft">
                        <li>
                            <b><i class="ion-android-mail"></i> Email: </b>
                            <a href="mailto:contact@example.com">contact@facis-ci.com</a>
                        </li>
                        <li>
                            <b><i class="ion-android-call"></i> Contact: </b>
                            <a href="tel:+18009156270">+225-01-01-01-01-02</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <ul class="tm-header-topside-inforight">
                        <li>
                            <button class="tm-header-searchtrigger">
                                <i class="ion-ios-search-strong"></i>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="tm-header-bottomside">
        <div class="container">
            <div class="tm-header-bottominner">
                <a href="{{ url('/') }}" class="tm-header-logo">
                    <img src="{{ url('frontend/assets/images/logo/logo-facis.png') }}" alt="facis logo">
                </a>
                <nav class="tm-header-nav">
                    <ul>
                        <li>
                            <a href="{{ url('/') }}">Accueil</a>
                        </li>
                        <li>
                            <a href="{{ url('/a-propos') }}">A Propos</a>
                        </li>
                        <li>
                            <a href="{{ url('/produits') }}">Produits</a>
                        </li>
                        <li>
                            <a href="{{ url('/services') }}">Services</a>
                        </li>
                        <li>
                            <a href="{{ url('/contact') }}">Contact</a>
                        </li>
                    </ul>
                </nav>
                <ul class="tm-header-icons">
                    <li>
                        @if (Auth::check())
                            <!-- L'utilisateur est connecté, on affiche une icône différente -->
                            <a href="{{ route('dashboard') }}"><i class="ion-android-person"></i></a>
                        @else
                            <!-- L'utilisateur n'est pas connecté, on affiche l'icône de connexion -->
                            <a href="{{ route('login') }}"><i class="ion-android-contact"></i></a>
                        @endif
                    </li>

                    <li><a href="{{ url('/monpanier') }}"><i class="ion-android-cart"></i> [ {{ $count }} ]</a></li>

                </ul>
                <div class="tm-mobilenav"></div>
            </div>
        </div>
    </div>
</div>