@extends('app')

@section('content')
    {{-- Hero Section --}}
    <div class="mb-16">
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