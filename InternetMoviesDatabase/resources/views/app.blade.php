<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Wars IMDB</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap');
        body { font-family: 'Inter', sans-serif; background-color: #050505; color: #e5e7eb; }
    </style>
    @livewireStyles
</head>
<body class="antialiased">

    <nav class="border-b border-white/5 bg-black/50 backdrop-blur-md sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center gap-8">
            
            <a href="/" class="text-yellow-500 font-black tracking-tighter uppercase italic text-xl shrink-0">
                Star Wars <span class="text-white font-light">DB</span>
            </a>

            <div class="flex-grow max-w-md relative">
                 {{-- Emplacement pour la recherche si besoin --}}
            </div>
            
            <div class="flex items-center gap-6 shrink-0">
                <a href="/" class="hidden md:block text-[10px] uppercase tracking-widest hover:text-yellow-500 transition-colors">Explorer</a>
                <a href="/panier" class="text-[10px] uppercase tracking-widest bg-white/5 px-4 py-2 rounded-full border border-white/10 hover:border-yellow-500 transition-all">
                    🛒 Panier
                </a>
            </div>
        </div>
    </nav>

    <header class="relative py-16 border-b border-white/5">
        <div class="max-w-6xl mx-auto px-6 text-left"> 
            <h1 class="text-4xl md:text-6xl font-black uppercase tracking-tighter mb-2">
                Archives <span class="text-yellow-500 italic">Galactiques</span>
            </h1>
            <p class="text-gray-500 uppercase tracking-[0.3em] text-[10px] font-bold">
                Répertoire officiel des productions de la galaxie
            </p>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-4 py-12">
        @livewire('movie-search')
    </main>

    <footer class="py-10 border-t border-white/5 text-center text-gray-600 text-[10px] uppercase tracking-[0.3em]">
        Propriété de l'Empire Galactique • 2026
    </footer>

    @livewireScripts
</body>
</html>