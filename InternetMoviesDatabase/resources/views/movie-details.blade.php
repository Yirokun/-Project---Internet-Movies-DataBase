@extends('layouts.app')

@section('title', $movie->title . ' - Star Wars Database')

@section('content')
    
    <div class="relative w-full min-h-[600px] flex items-end overflow-hidden">
        
        <div class="absolute inset-0 z-0">
            <img src="{{ $movie->image }}" alt="{{ $movie->title }}" class="w-full h-full object-cover opacity-30 blur-sm scale-105">
            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
        </div>
        
        
        <div class="relative z-10 max-w-6xl mx-auto w-full pb-12 px-6 flex items-end">
            <img src="{{ $movie->image }}" class="w-64 rounded-lg shadow-2xl border-4 border-yellow-500 mr-8 hidden md:block transition-transform hover:rotate-2 duration-500">
            
            <div class="flex-1">
                {{-- Bouton Retour --}}
                <a href="/" class="group relative inline-flex items-center gap-3 px-6 py-3 font-bold text-yellow-500 transition-all duration-300 border-2 border-yellow-500/30 rounded-full hover:border-yellow-500 hover:text-black bg-black/50 backdrop-blur-sm overflow-hidden mb-8">
                    <span class="absolute inset-0 w-0 h-full transition-all duration-500 ease-out bg-yellow-500 group-hover:w-full"></span>
                    <span class="relative flex items-center transition-transform duration-300 group-hover:-translate-x-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                    </span>
                    <span class="relative uppercase tracking-[0.2em] text-xs">Retour à la galaxie</span>
                </a>

                <h1 class="text-6xl font-black uppercase tracking-tighter text-white drop-shadow-lg">{{ $movie->title }}</h1>
                <p class="text-2xl text-yellow-500 mt-2 font-bold uppercase tracking-widest">{{ $movie->category }}</p>
            </div>
        </div>
    </div>

    <main class="max-w-6xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-3 gap-12">
        <div class="md:col-span-2">
            <h2 class="text-3xl font-bold mb-6 border-b border-yellow-500/50 pb-2 italic text-white">Synopsis</h2>
            <p class="text-gray-300 text-xl leading-relaxed">{{ $movie->description }}</p>
        </div>

        <div class="space-y-6 bg-gray-900/50 backdrop-blur-md p-8 rounded-2xl border border-white/5 h-fit">
            <div>
                <h3 class="text-gray-500 uppercase text-[10px] tracking-widest mb-1 font-black">Réalisateur</h3>
                <p class="text-xl font-bold text-white">{{ $movie->director }}</p>
            </div>
            
            <div>
                <h3 class="text-gray-500 uppercase text-[10px] tracking-widest mb-1 font-black">Acteurs</h3>
                <p class="text-gray-400 italic leading-snug">{{ $movie->actors }}</p>
            </div>
            
            <div class="pt-6 border-t border-white/10">
                <div class="flex flex-col gap-4">
                    <span class="text-4xl font-black text-yellow-500">{{ number_format($movie->price, 2) }} €</span>
                    
                    <livewire:add-cart-button :movie-id="$movie->id" />

                    @if($movie->category === 'Collector')
                        <p class="text-[10px] text-gray-500 mt-1 uppercase tracking-widest animate-pulse">
                            Prix de l'édition collector
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </main>
@endsection