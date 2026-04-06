<header class="absolute top-0 left-0 w-full z-50 bg-black/40 backdrop-blur-sm border-b border-white/10" x-data="{ mobileMenuOpen: false }">
    <nav class="container mx-auto px-6 py-3 flex items-center justify-between">
        <a href="{{ route('home') }}" class="flex items-center group">
            <img src="{{ asset('images/logo.png') }}" alt="Lulu Barber Logo" class="h-12 w-auto object-contain transition-transform duration-300 group-hover:scale-105">
        </a>

        <ul class="hidden md:flex items-center gap-10 text-[13px] uppercase tracking-[0.2em] text-white/90">
            <li><a href="{{ route('home') }}" class="hover:text-gold transition-colors">Accueil</a></li>
            <li><a href="{{ route('services') }}" class="hover:text-gold transition-colors">Services</a></li>
            <li><a href="{{ route('gallery') }}" class="hover:text-gold transition-colors">Galerie</a></li>
            <li><a href="{{ route('about') }}" class="hover:text-gold transition-colors">À Propos</a></li>
            <li><a href="{{ route('contact') }}" class="hover:text-gold transition-colors">Contact</a></li>
        </ul>

        <div class="flex items-center gap-6">
            <a href="{{ route('contact') }}" class="hidden sm:inline-block border border-gold text-gold text-[11px] uppercase tracking-[0.2em] px-6 py-2.5 hover:bg-gold hover:text-black transition-all duration-300">
                Rendez-vous
            </a>

            <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden text-white relative z-[60] p-2" aria-label="Menu">
                <i x-show="!mobileMenuOpen" class="fa-solid fa-bars-staggered text-2xl"></i>
                <i x-show="mobileMenuOpen" class="fa-solid fa-xmark text-2xl"></i>
            </button>
        </div>
    </nav>

    <div x-show="mobileMenuOpen"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         x-cloak
         class="fixed inset-0 z-[55] bg-black/95 flex flex-col items-center justify-center min-h-screen">

        <ul class="flex flex-col items-center gap-10 text-white text-xl uppercase tracking-[0.3em] font-light">

            <li><a href="{{ route('home') }}" @click="mobileMenuOpen = false" class="hover:text-gold transition-colors">Accueil</a></li>
            <li><a href="{{ route('services') }}" @click="mobileMenuOpen = false" class="hover:text-gold transition-colors">Services</a></li>
            <li><a href="{{ route('gallery') }}" @click="mobileMenuOpen = false" class="hover:text-gold transition-colors">Galerie</a></li>
            <li><a href="{{ route('about') }}" @click="mobileMenuOpen = false" class="hover:text-gold transition-colors">À Propos</a></li>
            <li><a href="{{ route('contact') }}" @click="mobileMenuOpen = false" class="hover:text-gold transition-colors">Contact</a></li>
            <li class="mt-4">
                <a href="{{ route('contact') }}" @click="mobileMenuOpen = false" class="border border-gold text-gold text-sm px-8 py-3">
                    Rendez-vous
                </a>
            </li>
        </ul>
    </div>
</header>
