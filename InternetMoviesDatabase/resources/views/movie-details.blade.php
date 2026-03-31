<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>{{ $movie->title }} - Star Wars Database</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-white">

    <div class="relative h-[500px] w-full overflow-hidden">
        <img src="{{ asset($movie->image) }}" alt="{{ $movie->title }}" class="w-full h-full object-cover opacity-30 blur-sm absolute">
        <div class="absolute inset-0 bg-gradient-to-t from-black"></div>
        
        <div class="relative z-10 max-w-6xl mx-auto h-full flex items-end pb-12 px-6">
            <img src="{{ asset($movie->image) }}" class="w-64 rounded-lg shadow-2xl border-4 border-yellow-500 mr-8 hidden md:block">
            <div>
                
                <a href="/" class="group relative inline-flex items-center gap-3 px-6 py-3 font-bold text-yellow-500 transition-all duration-300 border-2 border-yellow-500/30 rounded-full hover:border-yellow-500 hover:text-black bg-black overflow-hidden mb-8">
                    <span class="absolute inset-0 w-0 h-full transition-all duration-500 ease-out bg-yellow-500 group-hover:w-full"></span>
                    
                    <span class="relative flex items-center transition-transform duration-300 group-hover:-translate-x-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                    </span>

                    <span class="relative uppercase tracking-[0.2em] text-xs">
                        Retour à la galaxie
                    </span>
                </a>

            
                <h1 class="text-6xl font-black uppercase tracking-tighter">{{ $movie->title }}</h1>
                <p class="text-2xl text-yellow-500 mt-2">{{ $movie->category }}</p>
            </div>
        </div>
    </div>

    <main class="max-w-6xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-3 gap-12">
        <div class="md:col-span-2">
            <h2 class="text-3xl font-bold mb-6 border-b border-yellow-500 pb-2 italic">Synopsis</h2>
            <p class="text-gray-300 text-xl leading-relaxed">{{ $movie->description }}</p>
        </div>

        <div class="space-y-6 bg-gray-900 p-8 rounded-2xl border border-gray-800">
            <div>
                <h3 class="text-gray-500 uppercase text-xs tracking-widest mb-1">Réalisateur</h3>
                <p class="text-xl font-bold">{{ $movie->director }}</p>
            </div>
            <div>
                <h3 class="text-gray-500 uppercase text-xs tracking-widest mb-1">Acteurs</h3>
                <p class="text-gray-400 italic leading-snug">{{ $movie->actors }}</p>
            </div>
            <div class="pt-6 border-t border-gray-800">
    <span class="text-4xl font-black text-yellow-500">{{ $movie->price }} €</span>
    
    @if($movie->category === 'Collector')
        <p class="text-xs text-gray-500 mt-1 uppercase tracking-widest animate-pulse">
            Prix de l'édition collector
        </p>
    @endif
</div>
        </div>
    </main>

</body>
</html>