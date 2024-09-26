<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Login | Administrateur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('backend/assets/images/favicon.ico') }}">

    <!-- Theme Config Js -->
    <script src="{{ url('backend/assets/js/config.js') }}assets/js/config.js"></script>

    <!-- App css -->
    <link href="{{ url('backend/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{ url('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
</head>

<body class="authentication-bg position-relative">
    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-8 col-lg-10">
                    <div class="card overflow-hidden">
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
                                        <h4 class="fs-20">Connexion Administrateur</h4></h4>
                                        <p class="text-muted mb-3">Saisissez votre adresse email et votre mot de passe pour accéder à votre compte.</p>

                                        <!-- form -->
                                        <form method="post" action="{{ route('admin.login') }}">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Adresse Email</label>
                                                <input class="form-control" type="email" id="email"  name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Entrer votre email">
                                            </div>
                                            <div class="mb-3">
                                                {{-- <a href="auth-forgotpw.html" class="text-muted float-end"><small>Mot de passe oublié ?</small></a> --}}
                                                <label for="password" class="form-label">Mot de Passe</label>
                                                <input class="form-control" type="password" name="password" required autocomplete="current-password" id="password" placeholder="Entrer votre mot de passe">
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="checkbox-signin">
                                                    <label class="form-check-label" for="checkbox-signin">Se Souvenir de moi</label>
                                                </div>
                                            </div>
                                            <div class="mb-0 text-start">
                                                <button class="btn btn-soft-primary w-100" type="submit">
                                                    <i class="ri-login-circle-fill me-1"></i> <span class="fw-bold">Se connecter</span> </button>
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
                    <p class="text-dark-emphasis">Vous n'avez pas de compte ?
                        <a href="{{ url('/admin/register') }}" class="text-dark fw-bold ms-1 link-offset-3 text-decoration-underline"><b>S'inscrire</b></a>
                    </p>
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <footer class="footer footer-alt fw-medium">
        <span class="text-dark">
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
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <h4 class="text-center mb-3">Admin Login Page</h4>
    <form method="POST" action="{{ route('admin.login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
