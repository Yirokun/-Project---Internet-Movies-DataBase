<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Star Wars DB - Archives Galactiques')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-[#050505] text-gray-200">
        <div class="min-h-screen">
            @include('layouts.navigation')

            <!-- Galactic Archives Header -->
            <header class="bg-[#0a0a0a] shadow border-b border-gray-800">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold text-yellow-500 tracking-tighter uppercase">
                        Archives Galactiques
                    </h1>
                </div>
            </header>

            <!-- Page Content -->
            <main class="py-12">
                @yield('content')
            </main>
        </div>
    </body>
</html>