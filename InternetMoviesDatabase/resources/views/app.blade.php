<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Wars IMDB</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
</head>
<body class="bg-black text-gray-200 font-sans">

    <header class="py-10 border-b border-yellow-600/30 text-center bg-gray-900">
        <h1 class="text-5xl font-extrabold text-yellow-500 tracking-tighter uppercase">
            Star Wars <span class="text-white">Database</span>
        </h1>
        <p class="text-gray-400 mt-2 font-light italic text-sm tracking-widest">Que la Force soit avec votre code.</p>
    </header>

    <main class="max-w-7xl mx-auto px-4 py-12">
        @livewire('movie-search')
    </main>

    @livewireScripts
</body>
</html>