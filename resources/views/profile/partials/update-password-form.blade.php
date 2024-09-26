<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Mise à jour du mot de passe') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Veillez à ce que votre compte utilise un mot de passe long et aléatoire pour rester sécurisé.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <label for="update_password_current_password" class="form-label">Mot de passe actuel</label>
            <input type="password" name="current_password" id="update_password_current_password" class="form-control" autocomplete="current-password">
            @error('current_password')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            {{-- <x-input-label for="update_password_current_password" :value="__('Current Password')" />
            <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" /> --}}
        </div>

        <div>
            <label for="update_password_password" class="form-label">Nouveau mot de passe</label>
            <input type="password" name="current_password" id="update_password_password" class="form-control"  autocomplete="new-password" >
            @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            {{-- <x-input-label for="update_password_password" :value="__('New Password')" />
            <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" /> --}}
        </div>

        <div class="mb-3">
            <label for="update_password_password_confirmation" class="form-label">Confirmer le mot de passe</label>
            <input type="password" name="password_confirmation" id="update_password_password_confirmation" class="form-control"  autocomplete="new-password" >
            @error('password_confirmation')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="flex items-center gap-4">
            <button class="btn btn-primary">Enregistrer</button>
            {{-- <x-primary-button>{{ __('Save') }}</x-primary-button> --}}

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
