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
            placeholder="Recherche" 
            class="w-full px-6 py-3 rounded-full bg-gray-800 border-2 border-yellow-500 text-white outline-none"
        >
    </div>

    @forelse($movies as $movie)
    <a href="/movie/{{ $movie->id }}" class="group shadow-2xl">
        <div class="bg-gray-900 rounded-xl overflow-hidden border border-gray-800 group-hover:border-yellow-500 transition-all duration-300">
            <div class="relative h-72">
                <img src="{{ $movie->image }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black p-4 text-white">
                    <h2 class="text-xl font-bold">{{ $movie->title }}</h2>
                </div>
            </div>
            </div>
    </a>
@empty
    @endforelse
</div>


