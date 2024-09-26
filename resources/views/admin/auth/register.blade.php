<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>S'inscrire | Administrateur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('backend/assets/images/favicon.ico') }}">

    <!-- Theme Config Js -->
    <script src="{{ url('backend/assets/js/config.js') }}"></script>

    <!-- App css -->
    <link href="{{ url('backend/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{ url('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
</head>

<body class="authentication-bg">

    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-8 col-lg-10">
                    <div class="card overflow-hidden bg-opacity-25">
                        <div class="row g-0">
                            <div class="col-lg-6 d-none d-lg-block p-2">
                                <img src="{{ url('backend/assets/images/auth-img.jpg') }}" alt="" class="img-fluid rounded h-100">
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex flex-column h-100">
                                    <div class="auth-brand p-4">
                                        
                                        <a href="{{ url('/') }}" class="logo-dark">
                                            <img src="{{ url('backend/assets/images/logo-facis.png') }}" alt="dark logo" height="60">
                                        </a>
                                    </div>
                                    <div class="p-4 my-auto">
                                        <h4 class="fs-20">Inscription</h4>
                                        <p class="text-muted mb-3">Saisissez vos informations pour avoir accès au compte.</p>

                                        <!-- form -->
                                        <form method="post" action="{{ route('admin.register') }}">

                                            <div class="mb-3">
                                                <label for="name" class="form-label">Nom</label>
                                                <input class="form-control" type="text" placeholder="Entrer votre nom" id="name" name="name" :value="old('name')" required autofocus autocomplete="name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Adresse Email</label>
                                                <input class="form-control" type="email" id="email" placeholder="Entrer votre email" name="email" :value="old('email')" required autocomplete="username">
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Mot de passe</label>
                                                <input class="form-control" type="password" id="password"  placeholder="Entrer votre mot de passe" name="password" required autocomplete="new-password">
                                            </div>

                                            <div class="mb-3">
                                                <label for="password" class="form-label">Confirmation de mot de passe</label>
                                                <input class="form-control" type="password" id="password_confirmation"  placeholder="Confirmer votre mot de passe" name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                           
                                            <div class="mb-0 d-grid text-center">
                                                <button class="btn btn-primary fw-semibold" type="submit">S'inscrire</button>
                                            </div>

                                        </form>
                                        <!-- end form-->
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <p class="text-dark-emphasis">Avez-vous déjà un compte? 
                        <a href="{{ url('/admin/login') }}" class="text-dark fw-bold ms-1 link-offset-3 text-decoration-underline">
                            <b>Se Connecter</b>
                        </a>
                    </p>
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <footer class="footer footer-alt fw-medium">
        <span class="text-dark-emphasis">
            <script>document.write(new Date().getFullYear())</script> © Facis - Realisé par<b> Firme Attou CO</b>
        </span>
    </footer>

    <!-- Vendor js -->
    <script src="{{ url('backend/assets/js/vendor.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ url('backend/assets/js/app.min.js') }}"></script>

</body>

</html>



{{-- <x-guest-layout>
    <h4 class="text-center mb-3">Admin Register Page</h4>
    <form method="POST" action="{{ route('admin.register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}