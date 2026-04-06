@extends('layouts.app')

@section('title', 'Services de Prestige - Barbier & Soins Capillaires | Lulu Barber')
@section('description', 'Découvrez une carte de soins exclusive : coupes haute précision, trichologie et rituels herboristes à domicile en Martinique.')

@section('content')
<x-hero
    title="La Carte des Soins"
    subtitle="L'excellence du geste au service de votre identité. Une approche holistique de la beauté masculine."
    backgroundImage="https://images.unsplash.com/photo-1512690118294-700397ad31a7?auto=format&fit=crop&q=80&w=1920"
/>

<section class="py-24 bg-[#FDFDFD]">
    <div class="max-w-7xl mx-auto px-6">
        @foreach($services as $categoryKey => $category)
        <div class="mb-32 last:mb-0">
            <div class="flex flex-col md:flex-row items-baseline gap-6 mb-16 border-b border-stone-100 pb-8">
                <span class="text-gold font-serif text-4xl italic opacity-50">{{ sprintf('%02d', $loop->iteration) }}</span>
                <div>
                    <h2 class="font-serif text-3xl text-dark font-medium uppercase tracking-tight mb-2">{{ $category['category'] }}</h2>
                    <p class="text-stone-500 text-sm font-light tracking-wide max-w-xl italic">{{ $category['description'] }}</p>
                </div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-x-12 gap-y-16">
                @foreach($category['items'] as $item)
                <div class="group relative flex flex-col h-full">
                    @if($item['popular'] ?? false)
                        <span class="absolute -top-4 left-0 text-[9px] uppercase tracking-[0.3em] text-gold font-bold">
                            Recommandé
                        </span>
                    @endif

                    <div class="flex justify-between items-start mb-4">
                        <h3 class="font-serif text-xl text-dark group-hover:text-gold transition-colors duration-300">
                            {{ $item['name'] }}
                        </h3>
                        <span class="font-serif text-lg text-dark/80 italic ml-4">{{ $item['price'] }}</span>
                    </div>

                    <p class="text-stone-500 text-[13px] leading-relaxed font-light mb-6 flex-grow">
                        {{ $item['description'] }}
                    </p>

                    <div class="flex items-center justify-between mt-auto pt-6 border-t border-stone-50">
                        <span class="text-[11px] uppercase tracking-widest text-stone-400">
                            <i class="far fa-clock mr-2 text-gold/50"></i>{{ $item['duration'] }}
                        </span>

                        <button onclick="selectService('{{ $item['name'] }}')"
                                class="text-[10px] uppercase tracking-[0.2em] font-bold text-dark border-b border-dark/20 pb-1 hover:border-gold hover:text-gold transition-all duration-300">
                            Réserver
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</section>

<section class="py-24 bg-dark text-white overflow-hidden relative">
    <div class="absolute right-0 top-0 h-full w-1/3 bg-gold/5 -skew-x-12 translate-x-20"></div>

    <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
        <h2 class="font-serif text-3xl md:text-4xl text-gold mb-8 italic font-medium">L'Expérience sur Mesure</h2>
        <p class="text-stone-400 text-sm md:text-base font-light mb-12 leading-relaxed tracking-wide">
            Pour vos événements d'exception — mariages, tournages ou séances privées —
            je conçois des protocoles de soins et de stylisme exclusifs.
            Définissons ensemble l'excellence qui vous ressemble.
        </p>

        <div class="flex flex-col sm:flex-row justify-center gap-8 items-center">
            <a href="tel:0696919266" class="text-[11px] uppercase tracking-[0.3em] font-bold border border-white/20 px-10 py-4 hover:bg-gold hover:text-dark transition-all duration-500">
                Discuter de mon projet
            </a>
            <span class="text-stone-600 font-serif italic text-sm">ou</span>
            <a href="{{ route('contact') }}" class="text-[11px] uppercase tracking-[0.3em] font-bold border-b border-gold pb-1 hover:text-gold transition-colors">
                Demander un devis
            </a>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    function selectService(serviceName) {
        // Optionnel : Effet visuel lors du clic
        localStorage.setItem('selected_service', serviceName);

        // Redirection vers le contact avec une transition douce
        window.location.href = "{{ route('contact') }}?service=" + encodeURIComponent(serviceName);
    }
</script>
@endpush
