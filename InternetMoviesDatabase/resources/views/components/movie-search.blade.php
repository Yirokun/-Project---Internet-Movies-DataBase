<?php

use Livewire\Component;
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
}; ?>

<div class="p-6">
    <div class="mb-10 max-w-md mx-auto">
        <input 
            wire:model.live.debounce.300ms="search" 
            type="text" 
            placeholder="Recherche en temps réel..." 
            class="w-full px-6 py-3 rounded-full bg-gray-800 border-2 border-yellow-500 text-white outline-none"
        >
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        @forelse($movies as $movie)
            <div class="bg-gray-900 p-4 rounded-xl border border-gray-800">
                <img src="{{ $movie->image }}" class="w-full h-48 object-cover rounded">
                <h2 class="text-white font-bold mt-2">{{ $movie->title }}</h2>
                <p class="text-yellow-500 text-sm">{{ $movie->category }}</p>
            </div>
        @empty
            <p class="text-gray-500">Aucun film trouvé.</p>
        @endforelse
    </div>
</div>