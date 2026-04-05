<?php

use Livewire\Component;
use App\Models\CartItem;

new class extends Component {
    public $movieId;

    public function addToCart()
    {
        if (!auth()->check()) {
            return $this->redirect(route('login'), navigate: true);
        }

        CartItem::firstOrCreate([
            'user_id' => auth()->id(),
            'movie_id' => $this->movieId
        ]);

        $this->dispatch('cart-updated');
    }
}; ?>

<button wire:click="addToCart" class="w-full mt-4 px-8 py-4 bg-yellow-500 text-black font-black uppercase tracking-[0.2em] text-xs rounded-xl hover:bg-yellow-400 transition-all shadow-[0_0_20px_rgba(234,179,8,0.2)] flex items-center justify-center gap-3 group">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover:scale-110 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
    </svg>
    Ajouter au Panier
</button>