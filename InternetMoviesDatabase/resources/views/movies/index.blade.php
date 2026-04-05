@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-6">
    <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
        <div>
            <h2 class="text-4xl font-black text-white uppercase tracking-tighter">Archives Galactiques</h2>
            <p class="text-yellow-500 text-xs font-bold uppercase tracking-[0.3em] mt-2">Disponibilité : Secteur Bordure Extérieure</p>
        </div>
        
        <!-- Filtres Catégories -->
        <div class="flex gap-2 overflow-x-auto pb-2 no-scrollbar">
            <a href="{{ route('movies.index') }}" wire:navigate class="px-4 py-2 rounded-full border border-white/10 text-[10px] font-black uppercase tracking-widest {{ !request('category') ? 'bg-yellow-500 text-black border-yellow-500' : 'text-gray-500 hover:border-white/30' }}">Tous</a>
            @foreach($categories as $cat)
                <a href="{{ route('movies.index', ['category' => $cat]) }}" 
                   wire:navigate
                   class="px-4 py-2 rounded-full border border-white/10 text-[10px] font-black uppercase tracking-widest whitespace-nowrap {{ request('category') == $cat ? 'bg-yellow-500 text-black border-yellow-500' : 'text-gray-500 hover:border-white/30' }}">
                    {{ $cat }}
                </a>
            @endforeach
        </div>
    </div>

    <livewire:movie-search />
</div>
@endsection