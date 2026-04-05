@extends('layouts.app')

@section('content')
    <div class="relative py-16 border-b border-white/5 bg-[#050505]">
        <div class="max-w-6xl mx-auto px-6">
            <h1 class="text-4xl md:text-6xl font-black uppercase tracking-tighter mb-2 text-white">
                Paramètres du <span class="text-yellow-500 italic">Profil</span>
            </h1>
            <p class="text-gray-500 uppercase tracking-[0.3em] text-[10px] font-bold">
                Gestion des accès à la base de données impériale
            </p>
        </div>
    </div>

    <div class="py-12 bg-[#050505] min-h-screen">
        <div class="max-w-6xl mx-auto px-6 space-y-10">
            
            {{-- Informations du profil --}}
            <div class="p-8 bg-[#0A0A0A] border border-white/5 shadow-2xl rounded-2xl">
                <div class="max-w-xl">
                    <h2 class="text-yellow-500 uppercase tracking-widest text-[10px] font-bold mb-6">Informations personnelles</h2>
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            {{-- Changement de mot de passe --}}
            <div class="p-8 bg-[#0A0A0A] border border-white/5 shadow-2xl rounded-2xl">
                <div class="max-w-xl">
                    <h2 class="text-yellow-500 uppercase tracking-widest text-[10px] font-bold mb-6">Sécurité du compte</h2>
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            {{-- Suppression du compte --}}
            <div class="p-8 bg-[#0A0A0A] border border-red-900/20 shadow-2xl rounded-2xl">
                <div class="max-w-xl">
                    <h2 class="text-red-500 uppercase tracking-widest text-[10px] font-bold mb-6">Zone de danger</h2>
                    @include('profile.partials.delete-user-form')
                </div>
            </div>

        </div>
    </div>
@endsection