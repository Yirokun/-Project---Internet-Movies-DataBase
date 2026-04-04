<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Wars IMDB</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
    <nav class="border-b border-[#EAB308]/20 bg-[#050505] sticky top-0 z-[100] w-full">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center gap-8">
                    <a href="{{ route('home') }}" class="font-starwars text-[#EAB308] text-2xl tracking-tighter neon-text">
                        SWDB
                    </a>
                </div>

                <div class="flex items-center gap-4">
                    @auth
                        <a href="{{ route('cart') }}" 
                           class="relative group flex items-center gap-3 px-6 py-2 border-2 border-[#EAB308] text-[#EAB308] rounded-full font-bold uppercase text-[11px] tracking-[0.2em] transition-all duration-300 hover:bg-[#EAB308] hover:text-black hover:shadow-[0_0_20px_#EAB308] active:scale-95 z-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <span>Panier</span>
                            <div class="ml-1">
                                <livewire:cart-counter />
                            </div>
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="text-[11px] uppercase tracking-widest text-gray-400 hover:text-[#EAB308] transition-colors font-bold">Connexion</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-4 py-12">
        {{ $slot ?? '' }} @yield('content')
    </main>

    <footer class="py-10 border-t border-white/5 text-center text-gray-600 text-[10px] uppercase tracking-[0.3em]">
        Propriété de l'Empire Galactique • 2026
    </footer>

    @livewireScripts
</body>
</html>