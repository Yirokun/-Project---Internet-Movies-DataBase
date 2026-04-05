<nav x-data="{ open: false }" class="border-b border-[#EAB308]/20 bg-[#050505] sticky top-0 z-[100] w-full backdrop-blur-md bg-opacity-90">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            <!-- Logo Section -->
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="font-starwars text-[#EAB308] text-3xl tracking-tighter hover:drop-shadow-[0_0_10px_#EAB308] transition-all">
                    SWDB
                </a>
            </div>

            <!-- Right side Desktop -->
            <div class="hidden sm:flex sm:items-center sm:gap-6">
                @auth
                    <a href="{{ route('cart') }}" class="relative group flex items-center gap-3 px-6 py-2 border border-[#EAB308]/50 text-[#EAB308] rounded-full font-bold uppercase text-[10px] tracking-[0.2em] transition-all duration-300 hover:bg-[#EAB308] hover:text-black hover:shadow-[0_0_15px_#EAB308]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                        <span>Panier</span>
                        <livewire:cart-counter />
                    </a>

                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-4 py-2 text-[10px] uppercase tracking-widest font-bold rounded-full text-gray-400 bg-white/5 hover:text-yellow-500 hover:border-yellow-500/50 focus:outline-none transition-all duration-300 ease-in-out shadow-lg">
                                <span class="w-1.5 h-1.5 rounded-full bg-green-500 mr-2 shadow-[0_0_8px_rgba(34,197,94,0.6)]"></span>
                                <div class="mr-1 ">{{ Auth::user()->name }}</div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <div class="bg-[#0A0A0A] border rounded-xl overflow-hidden shadow-2xl">
                                <x-dropdown-link :href="route('profile.edit')" class="block px-4 py-3 text-[10px] uppercase tracking-widest font-bold text-gray-400 hover:bg-yellow-500 hover:text-black transition-colors border-b border-white/5">
                                    {{ __('Profil') }}
                                </x-dropdown-link>  
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')" 
                                            onclick="event.preventDefault(); this.closest('form').submit();"
                                            class="block px-4 py-3 text-[10px] uppercase tracking-widest font-bold text-red-500/70 hover:bg-red-600 hover:text-white transition-colors">
                                        {{ __('Déconnexion') }}
                                    </x-dropdown-link>
                                </form>
                            </div>
                        </x-slot>
                    </x-dropdown>
                @else
                    <a href="{{ route('login') }}" class="text-[10px] uppercase tracking-[0.2em] text-gray-400 hover:text-[#EAB308] font-bold">Connexion</a>
                    <a href="{{ route('register') }}" class="px-6 py-2 bg-[#EAB308] text-black rounded-full font-black uppercase text-[10px] tracking-[0.1em] hover:scale-105 transition-transform">Rejoindre</a>
                @endauth
            </div>

            <!-- Hamburger (Mobile) -->
            <div class="sm:hidden">
                <button @click="open = ! open" class="text-yellow-500 p-2"><svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path :class="{'hidden': open, 'inline-flex': ! open }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /><path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg></button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden bg-black border-t border-white/10">
        @auth
            <div class="p-4 space-y-3">
                <div class="text-yellow-500 font-bold uppercase text-xs">{{ Auth::user()->name }}</div>
                <x-responsive-nav-link :href="route('cart')" class="text-white">Panier</x-responsive-nav-link>
                <x-responsive-nav-link :href="route('profile.edit')" class="text-white">Profil</x-responsive-nav-link>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="text-red-500">
                        Déconnexion
                    </x-responsive-nav-link>
                </form>
            </div>
        @else
            <div class="p-4 space-y-3">
                <x-responsive-nav-link :href="route('login')" class="text-yellow-500">Connexion</x-responsive-nav-link>
                <x-responsive-nav-link :href="route('register')" class="text-white">Rejoindre</x-responsive-nav-link>
            </div>
        @endauth
    </div>
</nav>
