@extends('layouts.app')

@section('content')
    {{-- Navigation simplifiée pour l'auth --}}
    <nav class="border-b border-yellow-500/20 bg-black/90 backdrop-blur-lg fixed top-0 left-0 w-full z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="/" class="font-starwars text-2xl font-black text-yellow-500 tracking-tighter neon-text">
                SW<span class="text-white">DB</span>
            </a>
            <a href="{{ route('login') }}" class="text-[10px] uppercase tracking-[0.2em] text-gray-400 hover:text-yellow-500 transition-colors">Déjà enrôlé ?</a>
        </div>
    </nav>

    <div class="min-h-[80vh] flex flex-col items-center justify-center pt-12">
        <div class="w-full max-w-md px-8 py-10 bg-[#0F0F0F] border border-yellow-500/20 shadow-2xl rounded-2xl relative overflow-hidden">
            <div class="absolute -top-24 -right-24 w-48 h-48 bg-yellow-500/5 rounded-full blur-3xl"></div>

            <h2 class="font-starwars text-2xl font-black text-yellow-500 mb-8 text-center uppercase tracking-widest neon-text">
                Enrôlement Galactique
            </h2>

            <form method="POST" action="{{ route('register') }}" class="space-y-5">
                @csrf

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Nom du Pilote')" class="text-gray-400 uppercase text-[10px] tracking-widest mb-2" />
                    <x-text-input id="name" 
                        class="block w-full bg-black/50 border-white/10 text-white focus:border-yellow-500 focus:ring-yellow-500 rounded-lg transition-all" 
                        type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Canal de Communication (Email)')" class="text-gray-400 uppercase text-[10px] tracking-widest mb-2" />
                    <x-text-input id="email" 
                        class="block w-full bg-black/50 border-white/10 text-white focus:border-yellow-500 focus:ring-yellow-500 rounded-lg transition-all" 
                        type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div>
                    <x-input-label for="password" :value="__('Nouveau Code d\'Accès')" class="text-gray-400 uppercase text-[10px] tracking-widest mb-2" />
                    <x-text-input id="password" 
                        class="block w-full bg-black/50 border-white/10 text-white focus:border-yellow-500 focus:ring-yellow-500 rounded-lg transition-all"
                        type="password"
                        name="password"
                        required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div>
                    <x-input-label for="password_confirmation" :value="__('Confirmation du Code')" class="text-gray-400 uppercase text-[10px] tracking-widest mb-2" />
                    <x-text-input id="password_confirmation" 
                        class="block w-full bg-black/50 border-white/10 text-white focus:border-yellow-500 focus:ring-yellow-500 rounded-lg transition-all"
                        type="password"
                        name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="pt-4">
                    <x-primary-button class="w-full justify-center py-3 bg-transparent border border-yellow-500 text-yellow-500 hover:bg-yellow-500 hover:text-black font-bold uppercase tracking-[0.2em] text-xs rounded-full transition-all shadow-[0_0_10px_rgba(234,179,8,0.1)]">
                        {{ __('Confirmer l\'Enrôlement') }}
                    </x-primary-button>
                </div>
            </form>

            <div class="mt-8 text-center">
                <div class="h-px bg-gradient-to-r from-transparent via-yellow-500/20 to-transparent w-full mb-6"></div>
                <p class="text-[9px] text-gray-600 uppercase tracking-[0.3em] leading-loose">
                    En vous inscrivant, vous acceptez de servir la volonté de l'Empereur.<br>Que la Force soit avec vous.
                </p>
            </div>
        </div>
    </div>
@endsection
