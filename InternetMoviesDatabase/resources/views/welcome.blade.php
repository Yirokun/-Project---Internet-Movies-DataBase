@extends('layouts.app')

@section('content')
<div class="space-y-24 py-10">
    
    {{-- Section Hero : Présentation du Concept --}}
    <div class="relative overflow-hidden rounded-[40px] bg-gradient-to-b from-[#0A0A0A] to-black border border-white/5 p-12 md:p-20 text-center shadow-2xl">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-1 bg-yellow-500/50 shadow-[0_0_20px_#EAB308]"></div>
        
        <div class="max-w-3xl mx-auto space-y-8">
            <h1 class="text-6xl md:text-8xl font-black uppercase tracking-tighter leading-none">
                L'Archive <span class="text-yellow-500 italic">Ultime</span>
            </h1>
            <p class="text-gray-400 text-sm md:text-base uppercase tracking-[0.4em] leading-relaxed">
                Explorez la plus vaste base de données cinématographique de la bordure extérieure. 
                De Coruscant à Tatooine, accédez aux transmissions holographiques originales.
            </p>
            
            <div class="flex flex-wrap justify-center gap-6 pt-6">
                <a href="{{ route('register') }}" class="px-10 py-4 bg-yellow-500 text-black font-black uppercase text-xs tracking-[0.2em] rounded-xl hover:bg-yellow-400 transition-all shadow-[0_0_30px_rgba(234,179,8,0.2)]">
                    Rejoindre l'Empire
                </a>
                <a href="{{ route('login') }}" class="px-10 py-4 border border-white/10 text-white font-black uppercase text-xs tracking-[0.2em] rounded-xl hover:bg-white/5 transition-all">
                    S'identifier
                </a>
            </div>
        </div>
    </div>

    {{-- Section Features : Pourquoi s'inscrire ? --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
        <div class="p-8 bg-[#0F0F0F] rounded-3xl border border-white/5 space-y-4 group hover:border-yellow-500/30 transition-colors">
            <div class="w-12 h-12 bg-yellow-500/10 rounded-lg flex items-center justify-center text-yellow-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" /></svg>
            </div>
            <h3 class="text-lg font-black uppercase tracking-widest text-white">Inventaire Complet</h3>
            <p class="text-gray-500 text-xs uppercase tracking-widest leading-loose">Accédez à plus de 500 transmissions récupérées dans les débris de l'Étoile de la Mort.</p>
        </div>

        <div class="p-8 bg-[#0F0F0F] rounded-3xl border border-white/5 space-y-4 group hover:border-yellow-500/30 transition-colors">
            <div class="w-12 h-12 bg-yellow-500/10 rounded-lg flex items-center justify-center text-yellow-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
            </div>
            <h3 class="text-lg font-black uppercase tracking-widest text-white">Cargaison Perso</h3>
            <p class="text-gray-500 text-xs uppercase tracking-widest leading-loose">Constituez votre propre collection et sauvegardez-la sur le Cloud Impérial sécurisé.</p>
        </div>

        <div class="p-8 bg-[#0F0F0F] rounded-3xl border border-white/5 space-y-4 group hover:border-yellow-500/30 transition-colors">
            <div class="w-12 h-12 bg-yellow-500/10 rounded-lg flex items-center justify-center text-yellow-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
            </div>
            <h3 class="text-lg font-black uppercase tracking-widest text-white">Vitesse Lumière</h3>
            <p class="text-gray-500 text-xs uppercase tracking-widest leading-loose">Interface optimisée par les ingénieurs de Kuat Drive Yards pour une fluidité maximale.</p>
        </div>
    </div>

    {{-- Section Alerte de Sécurité (Plus discrète mais présente) --}}
    <div class="bg-red-600/5 border border-red-600/20 rounded-3xl p-8 flex flex-col md:flex-row items-center justify-between gap-6">
        <div class="flex items-center gap-6 text-center md:text-left">
            <div class="w-12 h-12 border-2 border-red-600 rounded-full flex items-center justify-center animate-pulse shrink-0">
                <span class="font-black text-red-600">!</span>
            </div>
            <div>
                <h4 class="text-white font-black uppercase tracking-widest">Protocoles de Restriction</h4>
                <p class="text-gray-500 text-[10px] uppercase tracking-widest mt-1">L'accès à la base de données nécessite un jeton d'identification valide.</p>
            </div>
        </div>
        <a href="{{ route('login') }}" class="text-red-600 text-[10px] font-black uppercase tracking-[0.3em] hover:text-red-500 transition-colors">
            S'authentifier maintenant →
        </a>
    </div>

</div>
@endsection