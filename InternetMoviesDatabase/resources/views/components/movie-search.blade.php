<?php

use Livewire\Component;
use App\Models\CartItem;
use App\Models\Movie;
use Livewire\Attributes\Layout;

new class extends Component
{
    public $search = '';

    public function with(): array
    {
        // On récupère les films en fonction de la recherche
        $movies = Movie::where('title', 'like', "%{$this->search}%")
            ->orWhere('director', 'like', "%{$this->search}%")
            ->get();

        // On retourne un tableau : la clé 'movies' deviendra la variable $movies en bas
        return [
            'movies' => $movies,
        ];
    }

    public function addToCart($movieId)
    {
        if (!auth()->check()) {
            return $this->redirect(route('login'), navigate: true);
        }

        CartItem::firstOrCreate(['user_id' => auth()->id(), 'movie_id' => $movieId]);

        $this->dispatch('cart-updated');
    }
}; ?>

<div class="max-w-6xl mx-auto px-6 py-12">
    <div class="mb-12 max-w-md mx-auto">
        <input 
            wire:model.live.debounce.300ms="search" 
            type="text" 
            placeholder="Rechercher un film..." 
            class="w-full bg-[#0A0A0A] border border-white/10 rounded-full px-6 py-3 text-sm focus:outline-none focus:border-yellow-500/50 transition-all text-gray-300 outline-none shadow-xl"
        >
    </div>

   
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
        
        @forelse($movies as $movie)
            {{-- Carte du film --}}
            <div class="relative group bg-[#0A0A0A] border border-white/5 rounded-2xl overflow-hidden hover:border-yellow-500/50 transition-all duration-500 shadow-2xl flex flex-col">
                <a href="{{ route('movie.show', $movie->id) }}" class="absolute inset-0 z-10" aria-label="Voir les détails de {{ $movie->title }}"></a>
                
                <div class="relative aspect-[2/3] overflow-hidden">
                    <img src="{{ asset($movie->image) }}" 
                         alt="{{ $movie->title }}" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 opacity-80 group-hover:opacity-100">
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-[#050505] via-transparent to-transparent opacity-60"></div>
                    
                    {{-- Badge Prix --}}
                    <div class="absolute bottom-4 right-4 bg-black/80 backdrop-blur-md border border-white/10 px-3 py-1 rounded-lg">
                        <span class="text-yellow-500 font-bold text-sm">{{ $movie->price }} €</span>
                    </div>
                </div>

                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <span class="text-[10px] uppercase tracking-widest text-gray-600 font-bold italic">
                            {{ $movie->category }}
                        </span>
                    </div>
                    <h3 class="text-xl font-bold text-white group-hover:text-yellow-500 transition-colors uppercase tracking-tight">
                        {{ $movie->title }}
                    </h3>
                    <p class="text-gray-500 text-xs mt-3 line-clamp-2 font-light leading-relaxed">
                        {{ $movie->description }}
                    </p>

                    <button 
                        wire:click.stop="addToCart({{ $movie->id }})"
                        class="relative z-20 w-full mt-6 py-3 border border-yellow-500/30 text-yellow-500 text-[10px] uppercase tracking-[0.2em] font-black hover:bg-yellow-500 hover:text-black transition-all rounded-xl shadow-lg shadow-yellow-500/5 group/btn flex items-center justify-center gap-2"
                    >
                        <span class="group-hover/btn:scale-110 transition-transform">Enrôler dans le Panier</span>
                    </button>
                </div>
            </div>
        @empty
            <div class="col-span-full py-24 text-center border-2 border-dashed border-white/5 rounded-3xl">
                <p class="text-gray-600 uppercase tracking-widest text-sm font-bold">Transmission interrompue : Aucun film trouvé</p>
            </div>
        @endforelse

    </div>
</div>
