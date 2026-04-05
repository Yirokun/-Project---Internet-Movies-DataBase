<section class="space-y-6">
    <header>
        <h2 class="text-lg font-bold text-red-500 uppercase tracking-widest italic">
            {{ __('Destruction du compte') }}
        </h2>

        <p class="mt-2 text-sm text-gray-500 font-light leading-relaxed">
            {{ __('Une fois votre compte supprimé, toutes ses ressources et données seront définitivement effacées de la base de données impériale.') }}
        </p>
    </header>

    {{-- Bouton d'ouverture (Style Danger Galactique) --}}
    <button 
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        class="px-6 py-3 bg-red-600/10 border border-red-600/50 text-red-500 text-[10px] font-black uppercase tracking-[0.2em] rounded-xl hover:bg-red-600 hover:text-white transition-all duration-300"
    >
        {{ __('Supprimer le compte') }}
    </button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-8 bg-[#0A0A0A] border border-white/5 shadow-2xl rounded-2xl">
            @csrf
            @method('delete')

            <h2 class="text-xl font-black text-white uppercase tracking-tighter">
                {{ __('Confirmation de suppression') }}
            </h2>

            <p class="mt-4 text-sm text-gray-500 italic">
                {{ __('Entrez votre code d\'accès (mot de passe) pour confirmer la suppression définitive de votre profil.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                {{-- Input stylisé sombre --}}
                <input 
                    id="password"
                    name="password"
                    type="password"
                    class="block w-full md:w-3/4 bg-black border border-white/10 rounded-xl px-4 py-3 text-white focus:border-red-500/50 focus:ring-0 transition-all placeholder-gray-700"
                    placeholder="{{ __('Mot de passe') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2 text-red-500 text-[10px] uppercase font-bold tracking-widest" />
            </div>

            <div class="mt-8 flex justify-end gap-4">
                {{-- Bouton Annuler --}}
                <button 
                    type="button"
                    x-on:click="$dispatch('close')"
                    class="px-5 py-2 text-[10px] uppercase font-bold tracking-widest text-gray-500 hover:text-white transition-colors"
                >
                    {{ __('Annuler') }}
                </button>

                {{-- Bouton Confirmer (Rouge) --}}
                <button 
                    type="submit"
                    class="px-6 py-2 bg-red-600 text-white text-[10px] font-black uppercase tracking-widest rounded-lg shadow-[0_0_15px_rgba(220,38,38,0.3)] hover:shadow-red-600/50 transition-all active:scale-95"
                >
                    {{ __('Confirmer la suppression') }}
                </button>
            </div>
        </form>
    </x-modal>
</section>