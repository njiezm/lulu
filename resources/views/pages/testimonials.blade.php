@extends('layouts.app')

@section('title', 'Témoignages Clients - Avis 5 Étoiles sur Lulu Barber en Martinique')
@section('description', 'Lisez les avis de nos clients satisfaits. Découvrez pourquoi Lulu Barber est le choix n°1 pour les services de barbier et de docteur capillaire à domicile en Martinique.')

@section('content')
<!-- Hero Section -->
<section class="relative bg-black text-white py-32 overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <img src="https://images.unsplash.com/photo-1512690118294-7043896658cd?auto=format&fit=crop&q=80&w=1920" class="w-full h-full object-cover">
    </div>
    <div class="relative z-10 max-w-4xl mx-auto px-4 text-center">
        <h1 class="font-serif text-5xl md:text-6xl text-gold mb-6 uppercase">Témoignages</h1>
        <p class="text-xl text-stone-300 max-w-2xl mx-auto">
            La voix de ceux qui ont fait confiance à Lulu Barber.
        </p>
    </div>
</section>

<!-- Testimonials Grid -->
<section class="py-24 bg-stone-100">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($testimonials as $testimonial)
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 flex flex-col">
                <div class="flex items-center mb-4">
                    @for($i = 1; $i <= 5; $i++)
                        <i class="fas fa-star text-gold"></i>
                    @endfor
                </div>
                <p class="text-stone-700 mb-6 italic flex-grow">"{{ $testimonial['text'] }}"</p>
                <div class="border-t pt-4">
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="font-bold text-black">{{ $testimonial['name'] }}</div>
                            <div class="text-sm text-stone-500">{{ $testimonial['service'] }}</div>
                        </div>
                        <div class="text-right">
                            <div class="text-xs text-stone-400">{{ $testimonial['date'] }}</div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA to leave a review -->
<section class="py-24 bg-black text-white">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="font-serif text-4xl text-gold mb-6">Vous Avez Testé Lulu Barber ?</h2>
        <p class="text-xl mb-8">
            Votre avis compte ! Partagez votre expérience pour aider d\'autres personnes à faire leur choix.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-6">
            <a href="https://g.page/lulu-barber/review" target="_blank" class="inline-flex items-center gap-3 bg-gold text-black px-8 py-4 rounded-lg font-bold text-lg hover:bg-yellow-500 transition">
                <i class="fab fa-google"></i>
                Laisser un avis Google
            </a>
            <a href="mailto:contact@lulubarber.fr" class="inline-flex items-center gap-3 border-2 border-gold text-gold px-8 py-4 rounded-lg font-bold text-lg hover:bg-gold hover:text-black transition">
                <i class="far fa-envelope"></i>
                Envoyer un témoignage
            </a>
        </div>
    </div>
</section>
@endsection
