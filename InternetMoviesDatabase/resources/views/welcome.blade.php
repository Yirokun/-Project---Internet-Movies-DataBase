@extends('layouts.app')

@section('content')
    {{-- Navigation Star Wars --}}
    <nav class="border-b border-yellow-500/20 bg-black/90 backdrop-blur-lg fixed top-0 left-0 w-full z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="/" class="font-starwars text-2xl font-black text-yellow-500 tracking-tighter neon-text">
                SW<span class="text-white">DB</span>
            </a>

            <div class="flex items-center gap-8">
                @auth
                    <div class="flex items-center gap-6">
                        <div class="text-right">
                            <p class="text-[10px] text-gray-500 uppercase tracking-widest">Identifié :</p>
                            <p class="text-xs font-bold text-yellow-500 uppercase">{{ Auth::user()->name }}</p>
                        </div>
                        
                        
                        
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="text-[10px] uppercase tracking-[0.2em] text-red-500 border border-red-500/30 px-3 py-1 rounded hover:bg-red-500 hover:text-white transition-all">
                                Déconnexion
                            </button>
                        </form>
                    </div>
                @else
                    <div class="flex items-center gap-4">
                        <a href="{{ route('login') }}" class="text-[10px] uppercase tracking-[0.2em] text-white hover:text-yellow-500">Connexion</a>
                        <a href="{{ route('register') }}" class="text-[10px] uppercase tracking-[0.2em] px-5 py-2 rounded-full neon-border text-yellow-500 hover:bg-yellow-500 hover:text-black transition-all font-bold">
                            S'inscrire
                        </a>
                    </div>
                @endauth
            </div>
        </div>
    </nav>

    {{-- Hero Section --}}
    <div class="pt-24 mb-16">
        <div class="text-center space-y-4">
            <h1 class="text-5xl md:text-7xl font-black uppercase tracking-tighter font-starwars">
                Archives <span class="text-yellow-500 italic">Galactiques</span>
            </h1>
            <p class="text-gray-500 uppercase tracking-[0.5em] text-xs">Accès sécurisé au terminal de données</p>
        </div>
    </div>

    <div class="space-y-12">
        @guest
            <div class="relative overflow-hidden bg-[#0F0F0F] border border-yellow-500/10 rounded-3xl p-10 text-center shadow-2xl">
                <div class="absolute -top-24 -left-24 w-48 h-48 bg-yellow-500/10 rounded-full blur-3xl"></div>
                
                <h2 class="text-2xl font-black uppercase text-yellow-500 mb-4 tracking-widest">Alerte de Sécurité</h2>
                <p class="text-gray-400 max-w-xl mx-auto text-sm leading-relaxed uppercase tracking-widest">
                    Veuillez vous authentifier pour synchroniser vos favoris avec le Cloud Impérial.
                </p>
            </div>
        @endguest

        <livewire:movie-search />
    </div>
@endsection