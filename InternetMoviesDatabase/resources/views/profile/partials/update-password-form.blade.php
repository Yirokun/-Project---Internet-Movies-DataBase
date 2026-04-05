<section>
    <header>
        <h2 class="text-lg font-bold text-yellow-500 uppercase tracking-widest italic">
            {{ __('Chiffrement de sécurité') }}
        </h2>

        <p class="mt-2 text-sm text-gray-500 font-light leading-relaxed">
            {{ __('Assurez-vous que votre compte utilise un mot de passe long et complexe pour rester protégé contre le piratage rebelle.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-8 space-y-6 max-w-xl">
        @csrf
        @method('put')

        {{-- Mot de passe actuel --}}
        <div>
            <label for="update_password_current_password" class="block text-[10px] uppercase tracking-widest text-gray-600 font-bold mb-2">
                {{ __('Code d\'accès actuel') }}
            </label>
            <input 
                id="update_password_current_password" 
                name="current_password" 
                type="password" 
                class="block w-full bg-black border border-white/10 rounded-xl px-4 py-3 text-white focus:border-yellow-500/50 focus:ring-0 transition-all placeholder-gray-800" 
                autocomplete="current-password" 
            />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2 text-red-500 text-[10px] uppercase font-bold tracking-widest" />
        </div>

        {{-- Nouveau mot de passe --}}
        <div>
            <label for="update_password_password" class="block text-[10px] uppercase tracking-widest text-gray-600 font-bold mb-2">
                {{ __('Nouveau code d\'accès') }}
            </label>
            <input 
                id="update_password_password" 
                name="password" 
                type="password" 
                class="block w-full bg-black border border-white/10 rounded-xl px-4 py-3 text-white focus:border-yellow-500/50 focus:ring-0 transition-all placeholder-gray-800" 
                autocomplete="new-password" 
            />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2 text-red-500 text-[10px] uppercase font-bold tracking-widest" />
        </div>

        {{-- Confirmation --}}
        <div>
            <label for="update_password_password_confirmation" class="block text-[10px] uppercase tracking-widest text-gray-600 font-bold mb-2">
                {{ __('Confirmer le code') }}
            </label>
            <input 
                id="update_password_password_confirmation" 
                name="password_confirmation" 
                type="password" 
                class="block w-full bg-black border border-white/10 rounded-xl px-4 py-3 text-white focus:border-yellow-500/50 focus:ring-0 transition-all placeholder-gray-800" 
                autocomplete="new-password" 
            />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2 text-red-500 text-[10px] uppercase font-bold tracking-widest" />
        </div>

        <div class="flex items-center gap-6 pt-2">
            {{-- Bouton Sauvegarder (Style Jaune Star Wars) --}}
            <button 
                type="submit"
                class="px-8 py-3 bg-yellow-500 text-black text-[10px] font-black uppercase tracking-widest rounded-xl shadow-[0_0_15px_rgba(234,179,8,0.2)] hover:bg-white hover:shadow-white/20 transition-all active:scale-95"
            >
                {{ __('Mettre à jour') }}
            </button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-[10px] font-bold uppercase tracking-[0.2em] text-yellow-500 italic animate-pulse"
                >{{ __('Chiffrement réussi.') }}</p>
            @endif
        </div>
    </form>
</section>