<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Wars IMDB</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&family=Orbitron:wght@400;900&display=swap');
        body { font-family: 'Inter', sans-serif; background-color: #0A0A0A; color: #e5e7eb; }
        .font-starwars { font-family: 'Orbitron', sans-serif; }
        .neon-border { box-shadow: 0 0 10px rgba(234, 179, 8, 0.3); border: 1px solid rgba(234, 179, 8, 0.5); }
        .neon-text { text-shadow: 0 0 8px rgba(234, 179, 8, 0.6); }
    </style>
    @livewireStyles
</head>
<body class="antialiased">
    {{-- Navigation et Header sont maintenant gérés dans les vues spécifiques --}}

    <main class="max-w-7xl mx-auto px-4 py-12">
        @yield('content')
    </main>

    <footer class="py-10 border-t border-white/5 text-center text-gray-600 text-[10px] uppercase tracking-[0.3em]">
        Propriété de l'Empire Galactique • 2026
    </footer>

    @livewireScripts
</body>
</html>