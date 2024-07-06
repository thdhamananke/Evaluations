<div class="row">
    <div class="col-5 m-auto">
        <x-guest-layout>
            <div class="mb-4 text-sm text-gray-600">
                {{ __('Vous avez oublié votre mot de passe ? Aucun problème. Indiquez-nous simplement votre adresse e-mail et nous vous enverrons par e-mail un lien de réinitialisation du mot de passe qui vous permettra d’en choisir un nouveau.') }}
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Adresse email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button  style="background: #36329f">
                        {{ __('Lien de réinitialisation du mot de passe par e-mail') }}
                    </x-primary-button>
                </div>
            </form>
        </x-guest-layout>
    </div>
</div>
