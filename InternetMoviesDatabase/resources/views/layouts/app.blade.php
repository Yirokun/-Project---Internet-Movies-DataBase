<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IMDB - EMPIRE EDITION</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#050505] text-gray-200 font-sans antialiased">
    <nav class="border-b border-yellow-500/10 bg-black/50 backdrop-blur-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between gap-8">
            <a href="{{ route('home') }}" class="text-2xl font-black text-yellow-500 tracking-[0.3em] italic shrink-0">
                SW-IMDB
            </a>

            <!-- Actions -->
            <div class="flex items-center gap-6">
                @auth
                    <a href="{{ route('cart.index') }}" class="group relative flex items-center gap-2">
                        <span class="text-[10px] font-black uppercase tracking-widest text-gray-400 group-hover:text-yellow-500 transition-colors">Panier</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500/50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                        </svg>
                        <livewire:cart-counter />
                    </a>
                @endauth
                    
                <div x-data="{ open: false }" class="relative">
                            <button @click="open = !open" @click.away="open = false" class="flex items-center gap-3 group">
                                <div class="flex flex-col items-end">
                                    <span class="text-[10px] font-black uppercase tracking-widest text-white group-hover:text-yellow-500 transition-colors">
                                        {{ Auth::user()?->name ?? 'Invité' }}
                                    </span>
                                </div>
                                
                                <div class="w-8 h-8 rounded-full border border-yellow-500/30 flex items-center justify-center bg-yellow-500/10 group-hover:border-yellow-500 transition-all">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                            </button>

                            {{-- Dropdown Menu --}}
                            <div x-show="open" 
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 scale-95"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-cloak
                                class="absolute right-0 mt-3 w-48 py-2 bg-[#0A0A0A] border border-white/10 rounded-2xl shadow-2xl z-[60]">
                                
                                {{-- Lien Modifier Profil --}}
                                <a href="{{ route('profile.edit') }}" class="flex items-center gap-3 px-4 py-3 text-[10px] uppercase tracking-widest text-gray-400 hover:text-yellow-500 hover:bg-white/5 transition-all">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    Paramètres
                                </a>

                                <div class="h-px bg-white/5 mx-2 my-1"></div>

                                {{-- Déconnexion --}}
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="w-full flex items-center gap-3 px-4 py-3 text-[10px] uppercase tracking-widest text-red-500 hover:bg-red-500/10 transition-all text-left">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                        </svg>
                                        Déconnexion
                                    </button>
                                </form>
                            </div>
                        </div>
            </div>
        </div>
    </nav>

    <main class="py-12">
        {{-- Affichage des notifications impériales --}}
        @if (session('success'))
            <div class="max-w-7xl mx-auto px-6 mb-8">
                <div class="bg-yellow-500/10 border border-yellow-500/50 text-yellow-500 px-6 py-4 rounded-xl text-xs font-black uppercase tracking-widest">
                    {{ session('success') }}
                </div>
            </div>
        @endif

        @yield('content')
    </main>
</body>
</html>