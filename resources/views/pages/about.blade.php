@extends('layouts.app')

@section('title', 'L\'Expertise de Lulu - Barbier & Trichologue en Martinique')
@section('description', 'Découvrez le parcours de Lulu : maître barbier, docteur capillaire et expert herboriste. Une philosophie du soin naturel alliée au prestige.')

@section('content')
<x-hero
    title="L'Homme & L'Expertise"
    subtitle="Au-delà de la coupe, une quête permanente de la santé capillaire et de l'élégance naturelle."
    backgroundImage="https://images.unsplash.com/photo-1610992015738-7149e7e03d15?auto=format&fit=crop&q=80&w=1920"
/>

<section class="py-24 bg-white overflow-hidden">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid md:grid-cols-12 gap-16 items-center">
            <div class="md:col-span-7 space-y-8">
                <span class="text-gold text-[11px] uppercase tracking-[0.4em] font-bold">Mon Histoire</span>
                <h2 class="font-serif text-3xl md:text-5xl text-dark italic font-medium leading-tight">
                    {{ $about['intro']['title'] }}
                </h2>
                <div class="w-20 h-[1px] bg-gold/50"></div>
                <div class="text-stone-500 text-sm md:text-base font-light leading-[1.8] space-y-6 tracking-wide">
                    <p>{{ $about['intro']['text'] }}</p>
                    <p class="italic border-l-2 border-gold/20 pl-6 text-dark font-normal">
                        "Mon approche est simple : combiner le meilleur de la technique traditionnelle avec les innovations les plus douces en matière de trichologie."
                    </p>
                </div>
            </div>
            <div class="md:col-span-5 relative">
                <div class="absolute -inset-4 border border-gold/10 -z-10 translate-x-8 translate-y-8 hidden md:block"></div>
                <img src="{{ $about['intro']['image'] }}?auto=format&fit=crop&w=800"
                     alt="Lulu Barber à l'œuvre"
                     class="w-full grayscale-[0.2] hover:grayscale-0 transition-all duration-700 shadow-xl">
            </div>
        </div>
    </div>
</section>

<section class="py-24 bg-[#F9F9F9] border-y border-stone-100">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-20">
            <h2 class="font-serif text-3xl text-dark italic">{{ $about['philosophy']['title'] }}</h2>
            <p class="text-[10px] uppercase tracking-[0.3em] text-stone-400 mt-4 font-bold">Valeurs & Engagements</p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-12 md:gap-8">
            @foreach($about['philosophy']['points'] as $point)
            <div class="text-center space-y-4 group">
                <div class="w-px h-10 bg-gold/30 mx-auto group-hover:h-14 transition-all duration-500"></div>
                <p class="text-[12px] md:text-[13px] text-stone-600 font-light uppercase tracking-widest leading-relaxed">
                    {{ $point }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-24 bg-dark text-white overflow-hidden">
    <div class="max-w-4xl mx-auto px-6">
        <div class="text-center mb-20">
            <h2 class="font-serif text-4xl text-gold italic font-medium mb-4">Le Parcours</h2>
            <div class="w-12 h-[1px] bg-white/20 mx-auto"></div>
        </div>

        <div class="relative">
            <div class="absolute left-1/2 transform -translate-x-1/2 w-[1px] h-full bg-white/10"></div>

            @foreach($about['timeline'] as $index => $event)
            <div class="relative flex items-center mb-24 last:mb-0 {{ $index % 2 === 0 ? 'md:flex-row' : 'md:flex-row-reverse' }}">
                <div class="w-full md:w-5/12 {{ $index % 2 === 0 ? 'md:text-right md:pr-12' : 'md:text-left md:pl-12' }}">
                    <span class="text-gold font-serif text-2xl italic opacity-80">{{ $event['year'] }}</span>
                    <h3 class="font-serif text-xl text-white mt-2 mb-4 tracking-wide">{{ $event['title'] }}</h3>
                    <p class="text-stone-500 text-[13px] font-light leading-relaxed tracking-wide">
                        {{ $event['description'] }}
                    </p>
                </div>

                <div class="absolute left-1/2 transform -translate-x-1/2 w-2 h-2 bg-gold rounded-full border border-dark"></div>

                <div class="hidden md:block w-5/12"></div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-6">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 border-b border-stone-100 pb-8">
            <div>
                <h2 class="font-serif text-3xl text-dark italic font-medium">Expertise Reconnue</h2>
                <p class="text-stone-500 text-sm font-light mt-2 tracking-wide">Certifications & Formations Internationales</p>
            </div>
            <div class="hidden md:block">
                <i class="fa-solid fa-award text-gold/30 text-4xl"></i>
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-x-16 gap-y-12">
            @foreach($about['certifications'] as $cert)
            <div class="flex items-start gap-6 group">
                <div class="text-gold mt-1 group-hover:scale-110 transition-transform duration-300">
                    <i class="fa-solid fa-certificate text-lg opacity-40"></i>
                </div>
                <div>
                    <h4 class="text-[13px] uppercase tracking-[0.2em] font-bold text-dark mb-1">{{ $cert['name'] }}</h4>
                    <p class="text-[12px] text-stone-400 italic font-light tracking-widest">{{ $cert['issuer'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
