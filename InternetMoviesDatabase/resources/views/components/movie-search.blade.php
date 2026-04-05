<?php

use Livewire\Component;
use App\Models\CartItem;
use App\Models\Movie;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;

new class extends Component
{
    #[Url]
    public $search = '';

    #[Url]
    public $category = '';

    public function with(): array
    {
        $query = Movie::query();

        if ($this->category) {
            $query->where('category', $this->category);
        }
        
        if ($this->search) {
            $query->where(function($q) {
                $q->where('title', 'like', "%{$this->search}%")
                  ->orWhere('director', 'like', "%{$this->search}%");
            });
        }

        return [ 'movies' => $query->get() ];
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

<div>
    <div class="mb-12">
        <input 
            wire:model.live.debounce.300ms="search" 
            type="text" 
            placeholder="RECHERCHER DANS LES ARCHIVES..." 
            class="w-full bg-black/40 border border-white/5 rounded-xl px-6 py-4 text-xs font-bold tracking-widest focus:outline-none focus:border-yellow-500/50 transition-all text-yellow-500 placeholder:text-gray-700 outline-none"
        >
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
        @forelse($movies as $movie)
            <div class="relative group bg-black border border-white/5 rounded-2xl overflow-hidden hover:border-yellow-500/30 transition-all duration-500 flex flex-col">
                <a href="{{ route('movie.show', $movie->id) }}" class="absolute inset-0 z-10"></a>
                
                <div class="relative aspect-[2/3] overflow-hidden">
                    <img src="{{ asset($movie->image) }}" 
                         alt="{{ $movie->title }}" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 opacity-80 group-hover:opacity-100">
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-[#050505] via-transparent to-transparent opacity-60"></div>

                    <div class="absolute bottom-4 right-4 bg-black/80 backdrop-blur-md border border-white/10 px-3 py-1 rounded-lg">
                        <span class="text-yellow-500 font-black text-xs">{{ $movie->price }} €</span>
                    </div>
                </div>

                <div class="p-5 flex-1 flex flex-col">
                    <span class="text-[9px] uppercase tracking-[0.2em] text-yellow-500/50 font-black mb-1 italic">{{ $movie->category }}</span>
                    <h3 class="text-md font-black text-white group-hover:text-yellow-500 transition-colors uppercase leading-none">{{ $movie->title }}</h3>

                    <button 
                        wire:click.stop="addToCart({{ $movie->id }})"
                        wire:loading.attr="disabled"
                        wire:target="addToCart({{ $movie->id }})"
                        class="relative z-20 w-full mt-auto pt-4 text-[9px] uppercase tracking-[0.3em] font-black text-gray-500 hover:text-yellow-500 transition-colors flex items-center justify-center gap-2"
                    >
                        <span wire:loading.remove wire:target="addToCart({{ $movie->id }})">+ Ajouter au panier</span>
                        <span wire:loading wire:target="addToCart({{ $movie->id }})">Synchronisation...</span>
                    </button>
                </div>
            </div>
        @empty
            <div class="col-span-full py-24 text-center border border-dashed border-white/5 rounded-3xl">
                <p class="text-gray-600 uppercase tracking-widest text-sm font-bold">Transmission interrompue : Aucun film trouvé</p>
            </div>
        @endforelse

    </div>
</div>
