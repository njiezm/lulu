@extends('layouts.app')

@section('title', 'Lulu Barber - Barbier & Docteur Capillaire | Martinique')

@section('content')
<section class="relative min-h-screen flex items-center justify-center bg-dark text-white overflow-hidden">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1503951914875-452162b0f3f1?auto=format&fit=crop&q=80&w=1920" class="w-full h-full object-cover opacity-30" alt="Barbier de luxe">
        <div class="absolute inset-0 bg-gradient-to-b from-dark/70 via-transparent to-dark"></div>
    </div>

    <div class="relative z-10 max-w-5xl mx-auto px-6 text-center">
        <div class="mb-10 flex justify-center">
            <div class="w-24 h-24 md:w-32 md:h-32 p-1 border border-gold/30 rounded-full flex items-center justify-center backdrop-blur-sm">
                <img src="{{ asset('images/logo.png') }}" alt="Lulu Barber" class="w-full h-full object-contain">
            </div>
        </div>

        <span class="block text-gold text-[12px] uppercase tracking-[0.5em] mb-4 animate-pulse">L'Art du Soin Capillaire</span>

        <h1 class="font-serif text-5xl md:text-7xl text-white mb-8 font-medium tracking-tight">
            Lulu Barber
        </h1>

        <p class="text-stone-300 text-sm md:text-lg max-w-2xl mx-auto mb-12 font-light leading-relaxed tracking-wide">
            L'expertise d'un maître barbier alliée à la science d'un <span class="text-gold italic">docteur capillaire & herboriste</span>.
            Le luxe du salon, l'intimité de votre demeure en Martinique.
        </p>

        <div class="flex justify-center gap-12 md:gap-20 mb-14 border-y border-white/10 py-6">
            <div class="text-center">
                <div class="text-xl md:text-2xl font-serif text-gold">500+</div>
                <div class="text-[10px] text-stone-500 uppercase tracking-widest mt-1">Clients</div>
            </div>
            <div class="text-center border-x border-white/10 px-12 md:px-20">
                <div class="text-xl md:text-2xl font-serif text-gold">5.0</div>
                <div class="text-[10px] text-stone-500 uppercase tracking-widest mt-1">Avis Google</div>
            </div>
            <div class="text-center">
                <div class="text-xl md:text-2xl font-serif text-gold">7 ans</div>
                <div class="text-[10px] text-stone-500 uppercase tracking-widest mt-1">Savoir-faire</div>
            </div>
        </div>

        <div class="flex flex-col sm:flex-row justify-center gap-6">
            <a href="tel:0696919266"
               class="bg-gold text-dark text-[11px] uppercase tracking-[0.2em] font-bold px-10 py-4 hover:bg-white transition-all duration-300">
                Prendre Rendez-vous
            </a>
            <button onclick="document.getElementById('expertise').scrollIntoView({ behavior: 'smooth' })"
                    class="bg-transparent text-white border border-white/20 text-[11px] uppercase tracking-[0.2em] font-bold px-10 py-4 hover:bg-white hover:text-dark transition-all duration-300">
                Découvrir l'Expertise
            </button>
        </div>
    </div>

    <div class="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2">
        <span class="text-[9px] uppercase tracking-[0.3em] text-stone-500">Scroll</span>
        <div class="w-[1px] h-12 bg-gradient-to-b from-gold to-transparent"></div>
    </div>
</section>

<section id="expertise" class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-20">
            <h2 class="font-serif text-3xl md:text-4xl text-dark mb-4 italic font-medium">Une Approche Holistique</h2>
            <div class="w-16 h-[1px] bg-gold mx-auto mb-4"></div>
            <p class="text-[13px] uppercase tracking-widest text-stone-500">Barbier • Trichologue • Herboriste</p>
        </div>

        <div class="grid md:grid-cols-3 gap-16">
            <div class="text-center group">
                <div class="mb-6 inline-block">
                    <i class="fa-solid fa-scissors text-xl text-gold/60 group-hover:text-gold transition-colors duration-500"></i>
                </div>
                <h3 class="font-serif text-xl mb-4 text-dark font-medium uppercase tracking-wide">Maître Barbier</h3>
                <p class="text-stone-500 text-[14px] leading-relaxed font-light px-4">
                    Des coupes de précision au rasoir, alliant techniques traditionnelles et tendances modernes pour magnifier votre visage.
                </p>
            </div>

            <div class="text-center group">
                <div class="mb-6 inline-block">
                    <i class="fa-solid fa-microscope text-xl text-gold/60 group-hover:text-gold transition-colors duration-500"></i>
                </div>
                <h3 class="font-serif text-xl mb-4 text-dark font-medium uppercase tracking-wide">Docteur Capillaire</h3>
                <p class="text-stone-500 text-[14px] leading-relaxed font-light px-4">
                    Analyse trichologique approfondie de votre cuir chevelu pour traiter durablement la chute et les affections capillaires.
                </p>
            </div>

            <div class="text-center group">
                <div class="mb-6 inline-block">
                    <i class="fa-solid fa-leaf text-xl text-gold/60 group-hover:text-gold transition-colors duration-500"></i>
                </div>
                <h3 class="font-serif text-xl mb-4 text-dark font-medium uppercase tracking-wide">Herboriste Expert</h3>
                <p class="text-stone-500 text-[14px] leading-relaxed font-light px-4">
                    Création de soins botaniques sur-mesure à base de plantes locales martiniquaises pour une vitalité 100% naturelle.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-24 bg-[#F9F9F9]">
    <div class="max-w-6xl mx-auto px-6">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-4">
            <div>
                <h2 class="font-serif text-3xl text-dark mb-2">Expériences Clients</h2>
                <p class="text-stone-500 text-sm font-light">Ceux qui nous font confiance en Martinique.</p>
            </div>
            <a href="{{ route('testimonials') }}" class="text-[11px] uppercase tracking-widest text-gold border-b border-gold/30 pb-1 hover:border-gold transition-all">Voir tous les avis</a>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            @foreach($testimonials ?? [] as $testimonial)
            <div class="bg-white p-10 border border-stone-100 shadow-sm hover:shadow-md transition-shadow duration-500">
                <div class="flex gap-1 mb-6">
                    @for($i = 1; $i <= 5; $i++)
                        <i class="fas fa-star text-[10px] text-gold"></i>
                    @endfor
                </div>
                <p class="text-stone-600 text-[14px] italic leading-relaxed mb-8">"{{ $testimonial['text'] }}"</p>
                <div class="text-[12px] uppercase tracking-widest font-medium text-dark">{{ $testimonial['name'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section id="contact" class="py-24 bg-dark text-white text-center">
    <div class="max-w-3xl mx-auto px-6">
        <h2 class="font-serif text-3xl md:text-4xl mb-8 font-medium italic">Vivez l'Expérience Lulu Barber</h2>
        <p class="text-stone-400 text-sm font-light leading-relaxed mb-12 tracking-wide">
            Consultation privée et services sur-mesure à domicile. Réponse rapide garantie pour une expérience sans compromis.
        </p>

        <div class="flex flex-col md:flex-row justify-center items-center gap-10 md:gap-20">
            <a href="tel:0696919266" class="group">
                <div class="text-gold text-[10px] uppercase tracking-[0.3em] mb-2">Téléphone</div>
                <div class="text-xl font-light group-hover:text-gold transition-colors italic">0696 91 92 66</div>
            </a>
            <div class="hidden md:block w-[1px] h-10 bg-white/10"></div>
            <a href="https://wa.me/596696919266" class="group">
                <div class="text-gold text-[10px] uppercase tracking-[0.3em] mb-2">WhatsApp</div>
                <div class="text-xl font-light group-hover:text-gold transition-colors italic">Message Direct</div>
            </a>
        </div>

        <div class="mt-20">
            <a href="{{ route('contact') }}" class="inline-block bg-white text-dark text-[11px] uppercase tracking-[0.3em] font-bold px-12 py-5 hover:bg-gold transition-all duration-500">
                Formulaire de Contact
            </a>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    // Animations au scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in');
            }
        });
    }, observerOptions);

    document.querySelectorAll('section').forEach(section => {
        observer.observe(section);
    });
</script>
@endpush
