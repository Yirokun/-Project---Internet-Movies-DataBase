@extends('layouts.app')

@section('content')
    {{-- Navigation simplifiée pour l'auth --}}
    <nav class="border-b border-yellow-500/20 bg-black/90 backdrop-blur-lg fixed top-0 left-0 w-full z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="/" class="font-starwars text-2xl font-black text-yellow-500 tracking-tighter neon-text">
                SW<span class="text-white">DB</span>
            </a>
            <a href="{{ route('register') }}" class="text-[10px] uppercase tracking-[0.2em] text-gray-400 hover:text-yellow-500 transition-colors">Créer un compte</a>
        </div>
    </nav>

    <div class="min-h-[80vh] flex flex-col items-center justify-center pt-12">
        <div class="w-full max-w-md px-8 py-10 bg-[#0F0F0F] border border-yellow-500/20 shadow-2xl rounded-2xl relative overflow-hidden">
            {{-- Effet de lueur en arrière-plan --}}
            <div class="absolute -top-24 -left-24 w-48 h-48 bg-yellow-500/5 rounded-full blur-3xl"></div>

            <h2 class="font-starwars text-2xl font-black text-yellow-500 mb-8 text-center uppercase tracking-widest neon-text">
                Accès aux Archives
            </h2>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Identifiant Impérial')" class="text-gray-400 uppercase text-[10px] tracking-widest mb-2" />
                    <x-text-input id="email" 
                        class="block w-full bg-black/50 border-white/10 text-white focus:border-yellow-500 focus:ring-yellow-500 rounded-lg transition-all" 
                        type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div>
                    <x-input-label for="password" :value="__('Code de Sécurité')" class="text-gray-400 uppercase text-[10px] tracking-widest mb-2" />
                    <x-text-input id="password" 
                        class="block w-full bg-black/50 border-white/10 text-white focus:border-yellow-500 focus:ring-yellow-500 rounded-lg transition-all"
                        type="password"
                        name="password"
                        required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between">
                    <label for="remember_me" class="inline-flex items-center cursor-pointer">
                        <input id="remember_me" type="checkbox" class="rounded bg-black border-white/20 text-yellow-500 shadow-sm focus:ring-yellow-500" name="remember">
                        <span class="ms-2 text-[10px] uppercase tracking-widest text-gray-500 hover:text-gray-300 transition-colors">{{ __('Rester connecté') }}</span>
                    </label>
                    
                    @if (Route::has('password.request'))
                        <a class="text-[10px] uppercase tracking-widest text-gray-500 hover:text-yellow-500 transition-colors" href="{{ route('password.request') }}">
                            {{ __('Oublié ?') }}
                        </a>
                    @endif
                </div>

                <div class="pt-4">
                    <x-primary-button class="w-full justify-center py-3 bg-yellow-500 hover:bg-yellow-400 text-black font-bold uppercase tracking-[0.2em] text-xs rounded-full transition-all shadow-[0_0_15px_rgba(234,179,8,0.2)]">
                        {{ __('Initialiser la session') }}
                    </x-primary-button>
                </div>
            </form>

            <div class="mt-8 text-center">
                <div class="h-px bg-gradient-to-r from-transparent via-yellow-500/20 to-transparent w-full mb-6"></div>
                <p class="text-[9px] text-gray-600 uppercase tracking-[0.3em]">Propriété de l'Empire - Transmission Cryptée</p>
            </div>
        </div>
    </div>
@endsection
