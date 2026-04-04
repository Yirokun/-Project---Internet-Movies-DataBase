<?php

use Livewire\Volt\Component; // Assure-toi d'utiliser le bon namespace pour Volt
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;

new class extends Component {
    
    // Action pour supprimer un article
    public function removeItem($id)
    {
        // On sécurise la suppression en vérifiant l'appartenance à l'utilisateur
        CartItem::where('id', $id)
            ->where('user_id', Auth::id())
            ->delete();

        // Émet un événement pour mettre à jour d'autres composants (ex: compteur de nav)
        $this->dispatch('cart-updated');
    }

    // Fournit les données à la vue
    public function with(): array
    {
        // Eager loading de 'movie' pour optimiser les performances
        $items = CartItem::where('user_id', Auth::id())
            ->with('movie')
            ->get();

        // Calcul du total via une collection Laravel
        $total = $items->sum(function($item) {
            return $item->movie->price ?? 0;
        });

        return [
            'items' => $items,
            'total' => $total,
        ];
    }
}; ?>

<div class="max-w-4xl mx-auto px-6 py-12">
    <h2 class="text-3xl font-black text-yellow-500 mb-10 uppercase tracking-widest italic border-b border-yellow-500/20 pb-4">
        Inventaire de la Cargaison
    </h2>

    <div class="grid gap-6">
        @forelse($items as $item)
            <div wire:key="{{ $item->id }}" class="flex items-center gap-6 bg-[#0A0A0A] border border-white/5 p-5 rounded-2xl group hover:border-yellow-500/30 transition-all">
                <img src="{{ asset($item->movie->image) }}" class="w-20 h-28 object-cover rounded-lg shadow-lg" alt="{{ $item->movie->title }}">
                
                <div class="flex-1">
                    <h3 class="text-lg font-bold text-white uppercase">{{ $item->movie->title }}</h3>
                    <p class="text-xs text-yellow-500/60 uppercase tracking-widest">{{ $item->movie->category }}</p>
                </div>

                <div class="text-right">
                    <p class="text-xl font-black text-yellow-500">{{ number_format($item->movie->price, 2) }} €</p>
                    
                    {{-- Bouton avec état de chargement --}}
                    <button 
                        wire:click="removeItem({{ $item->id }})" 
                        wire:loading.attr="disabled"
                        wire:target="removeItem({{ $item->id }})"
                        class="text-[10px] uppercase font-bold text-red-500/50 hover:text-red-500 mt-2 transition-colors disabled:opacity-50">
                        <span wire:loading.remove wire:target="removeItem({{ $item->id }})">Abandonner l'article</span>
                        <span wire:loading wire:target="removeItem({{ $item->id }})">Désintégration...</span>
                    </button>
                </div>
            </div>
        @empty
            <div class="text-center py-20 bg-[#0A0A0A] rounded-3xl border border-dashed border-white/10">
                <p class="text-gray-500 uppercase tracking-widest text-sm text-balance">Aucune donnée dans les banques de mémoire.</p>
                <a href="/" class="inline-block mt-6 px-6 py-2 border border-yellow-500 text-yellow-500 rounded-full hover:bg-yellow-500 hover:text-black transition-all">
                    Explorer la galaxie
                </a>
            </div>
        @endforelse
    </div>

    @if($items->count() > 0)
        <div class="mt-12 p-8 bg-yellow-500 rounded-2xl flex flex-col md:flex-row justify-between items-center gap-6 shadow-[0_0_30px_rgba(234,179,8,0.15)]">
            <div>
                <p class="text-black/60 uppercase text-[10px] font-black tracking-widest text-center md:text-left">Crédits Galactiques Totaux</p>
                <p class="text-4xl font-black text-black">{{ number_format($total, 2) }} €</p>
            </div>
            <button class="w-full md:w-auto px-10 py-4 bg-black text-yellow-500 font-black uppercase text-xs rounded-xl hover:scale-105 transition-transform shadow-xl">
                Lancer le transfert
            </button>
        </div>
    @endif
</div>