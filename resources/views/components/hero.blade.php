@props(['title', 'subtitle' => '', 'backgroundImage'])

<section class="relative h-[70vh] flex items-center justify-center overflow-hidden bg-dark">
    <div class="absolute inset-0">
        <img src="{{ $backgroundImage }}" alt="{{ $title }}" class="w-full h-full object-cover opacity-40">
        <div class="absolute inset-0 bg-gradient-to-b from-dark/60 via-transparent to-dark"></div>
    </div>

    <div class="relative z-10 text-center px-4">
        <span class="block text-gold text-[12px] uppercase tracking-[0.4em] mb-4">Lulu Barber Martinique</span>
        <h1 class="font-serif text-3xl md:text-5xl text-white font-medium italic mb-6">
            {{ $title }}
        </h1>
        @if($subtitle)
            <div class="w-12 h-[1px] bg-gold mx-auto mb-6"></div>
            <p class="text-stone-300 text-sm md:text-base font-light max-w-xl mx-auto leading-relaxed tracking-wide">
                {{ $subtitle }}
            </p>
        @endif
    </div>
</section>
