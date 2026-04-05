@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto">
    {{-- Appel du composant Livewire Volt pour la gestion du panier --}}
    <livewire:cart-page />
</div>
@endsection