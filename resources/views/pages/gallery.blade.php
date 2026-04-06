@extends('layouts.app')

@section('content')
<x-hero
    title="Le Portfolio"
    subtitle="L'expression visuelle de notre savoir-faire."
    backgroundImage="{{ asset('images/hero-portfolio.jpg') }}"
/>

<section class="sticky top-[60px] md:top-[80px] z-30 bg-white/90 backdrop-blur-md border-b border-stone-100" x-data="{ activeFilter: 'all' }">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-start md:justify-center overflow-x-auto no-scrollbar py-4 gap-6 md:gap-12 text-[10px] uppercase tracking-[0.2em] font-bold">
            <button @click="activeFilter = 'all'; filterGallery('all')" :class="activeFilter === 'all' ? 'text-gold border-gold' : 'text-stone-400 border-transparent'" class="border-b-2 pb-2 transition-all whitespace-nowrap">Toutes</button>
            <button @click="activeFilter = 'coupe'; filterGallery('coupe')" :class="activeFilter === 'coupe' ? 'text-gold border-gold' : 'text-stone-400 border-transparent'" class="border-b-2 pb-2 transition-all whitespace-nowrap">Coupes</button>
            <button @click="activeFilter = 'barbe'; filterGallery('barbe')" :class="activeFilter === 'barbe' ? 'text-gold border-gold' : 'text-stone-400 border-transparent'" class="border-b-2 pb-2 transition-all whitespace-nowrap">Barbe</button>
            <button @click="activeFilter = 'soin'; filterGallery('soin')" :class="activeFilter === 'soin' ? 'text-gold border-gold' : 'text-stone-400 border-transparent'" class="border-b-2 pb-2 transition-all whitespace-nowrap">Soins</button>
        </div>
    </div>
</section>

<section class="py-12 bg-white">
    <div class="max-w-[1600px] mx-auto px-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4" id="gallery-grid">

            <div class="gallery-item group relative aspect-[4/5] overflow-hidden bg-stone-100" data-category="coupe">
                <img src="{{ asset('images/lulu3.jpg') }}" alt="Dégradé Américain" class="w-full h-full object-cover grayscale-[0.2] group-hover:grayscale-0 group-hover:scale-105 transition-all duration-700 cursor-pointer" onclick="openLightbox(this.src, 'Dégradé Américain')">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex flex-col justify-end p-6 pointer-events-none">
                    <span class="text-gold text-[9px] uppercase tracking-[0.2em]">Coupes</span>
                    <h3 class="text-white font-serif text-lg italic">Dégradé avec motif</h3>
                </div>
            </div>

            <div class="gallery-item group relative aspect-[4/5] overflow-hidden bg-stone-100" data-category="barbe">
                <img src="{{ asset('images/barbe.jpg') }}" alt="Barbe Sculptée" class="w-full h-full object-cover grayscale-[0.2] group-hover:grayscale-0 group-hover:scale-105 transition-all duration-700 cursor-pointer" onclick="openLightbox(this.src, 'Barbe Sculptée')">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex flex-col justify-end p-6 pointer-events-none">
                    <span class="text-gold text-[9px] uppercase tracking-[0.2em]">Barbe</span>
                    <h3 class="text-white font-serif text-lg italic">Barbe Sculptée</h3>
                </div>
            </div>

            <div class="gallery-item group relative aspect-[4/5] overflow-hidden bg-stone-100" data-category="soin">
                <img src="{{ asset('images/soinslulu.jpg') }}" alt="Soin Vapeur" class="w-full h-full object-cover grayscale-[0.2] group-hover:grayscale-0 group-hover:scale-105 transition-all duration-700 cursor-pointer" onclick="openLightbox(this.src, 'Soin Vapeur')">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex flex-col justify-end p-6 pointer-events-none">
                    <span class="text-gold text-[9px] uppercase tracking-[0.2em]">Soins</span>
                    <h3 class="text-white font-serif text-lg italic">Rituel Bien-être</h3>
                </div>
            </div>

            <div class="gallery-item group relative aspect-[4/5] overflow-hidden bg-stone-100" data-category="coupe">
                <img src="{{ asset('images/lulu1.jpg') }}" alt="Coupe Ciseaux" class="w-full h-full object-cover grayscale-[0.2] group-hover:grayscale-0 group-hover:scale-105 transition-all duration-700 cursor-pointer" onclick="openLightbox(this.src, 'Coupe Ciseaux')">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex flex-col justify-end p-6 pointer-events-none">
                    <span class="text-gold text-[9px] uppercase tracking-[0.2em]">Coupes</span>
                    <h3 class="text-white font-serif text-lg italic">Coupe Classique</h3>
                </div>
            </div>

        </div>
    </div>
</section>

<div id="lightbox" class="fixed inset-0 bg-black/95 z-[100] hidden flex-col items-center justify-center p-4" onclick="closeLightbox()">
    <button class="absolute top-6 right-6 text-white text-4xl">&times;</button>
    <img id="lightbox-img" src="" class="max-w-full max-h-[85vh] object-contain">
    <p id="lightbox-caption" class="text-white mt-4 font-serif italic text-xl"></p>
</div>
@endsection

@push('scripts')
<script>
    function filterGallery(category) {
        const items = document.querySelectorAll('.gallery-item');
        items.forEach(item => {
            if (category === 'all' || item.getAttribute('data-category') === category) {
                item.style.display = 'block';
                setTimeout(() => item.style.opacity = '1', 10);
            } else {
                item.style.opacity = '0';
                item.style.display = 'none';
            }
        });
    }

    function openLightbox(src, caption) {
        document.getElementById('lightbox-img').src = src;
        document.getElementById('lightbox-caption').innerText = caption;
        document.getElementById('lightbox').classList.remove('hidden');
        document.getElementById('lightbox').classList.add('flex');
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
        document.getElementById('lightbox').classList.add('hidden');
        document.body.style.overflow = '';
    }
</script>
<style>
    .no-scrollbar::-webkit-scrollbar { display: none; }
    .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
</style>
@endpush
