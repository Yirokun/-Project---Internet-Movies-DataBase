<section>
    <header>
        <h2 class="text-lg font-bold text-yellow-500 uppercase tracking-widest italic">
            {{ __('Identification de l\'agent') }}
        </h2>

        <p class="mt-2 text-sm text-gray-500 font-light leading-relaxed">
            {{ __("Mettez à jour les informations de votre profil et votre adresse de transmission (email).") }}
        </p>
    </header>

    {{-- Formulaire caché pour la vérification --}}
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-8 space-y-6 max-w-xl">
        @csrf
        @method('patch')

        {{-- Champ Nom --}}
        <div>
            <label for="name" class="block text-[10px] uppercase tracking-widest text-gray-600 font-bold mb-2">
                {{ __('Nom de l\'agent') }}
            </label>
            <input 
                id="name" 
                name="name" 
                type="text" 
                class="block w-full bg-black border border-white/10 rounded-xl px-4 py-3 text-white focus:border-yellow-500/50 focus:ring-0 transition-all placeholder-gray-800" 
                value="{{ old('name', $user->name) }}" 
                required 
                autofocus 
                autocomplete="name" 
            />
            <x-input-error class="mt-2 text-red-500 text-[10px] uppercase font-bold tracking-widest" :messages="$errors->get('name')" />
        </div>

        {{-- Champ Email --}}
        <div>
            <label for="email" class="block text-[10px] uppercase tracking-widest text-gray-600 font-bold mb-2">
                {{ __('Canal de transmission (Email)') }}
            </label>
            <input 
                id="email" 
                name="email" 
                type="email" 
                class="block w-full bg-black border border-white/10 rounded-xl px-4 py-3 text-white focus:border-yellow-500/50 focus:ring-0 transition-all placeholder-gray-800" 
                value="{{ old('email', $user->email) }}" 
                required 
                autocomplete="username" 
            />
            <x-input-error class="mt-2 text-red-500 text-[10px] uppercase font-bold tracking-widest" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="mt-4 p-4 bg-yellow-500/5 border border-yellow-500/20 rounded-lg">
                    <p class="text-[10px] uppercase tracking-widest text-yellow-500/70 font-bold">
                        {{ __('Attention : Email non vérifié.') }}

                        <button form="send-verification" class="block mt-2 underline text-yellow-500 hover:text-white transition-colors">
                            {{ __('Renvoyer le code de vérification.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-bold text-[10px] uppercase tracking-widest text-green-500">
                            {{ __('Un nouveau lien a été envoyé vers votre terminal.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-6 pt-2">
            {{-- Bouton Sauvegarder --}}
            <button 
                type="submit"
                class="px-8 py-3 bg-yellow-500 text-black text-[10px] font-black uppercase tracking-widest rounded-xl shadow-[0_0_15px_rgba(234,179,8,0.2)] hover:bg-white hover:shadow-white/20 transition-all active:scale-95"
            >
                {{ __('Enregistrer') }}
            </button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-[10px] font-bold uppercase tracking-[0.2em] text-yellow-500 italic"
                >{{ __('Données synchronisées.') }}</p>
            @endif
        </div>
    </form>
</section>