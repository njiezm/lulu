@extends('layouts.app')

@section('title', 'Conciergerie & Réservations | Lulu Barber Martinique')
@section('description', 'Prenez rendez-vous avec Lulu Barber. Service exclusif de barbier et trichologie à domicile sur toute la Martinique. Réponse sous 2h.')

@section('content')
<x-hero
    title="Contact & Réservations"
    subtitle="Confiez votre style à un expert. Je me déplace sur toute l'île pour vous offrir une expérience de soin hors du temps."
    backgroundImage="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?auto=format&fit=crop&q=80&w=1920"
/>

<section class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid md:grid-cols-12 gap-20">

            <div class="md:col-span-5 space-y-16">
                <div>
                    <span class="text-gold text-[10px] uppercase tracking-[0.4em] font-bold block mb-8">Direct</span>
                    <h2 class="font-serif text-3xl text-dark italic mb-10">Parlons de votre projet capillaire</h2>

                    <div class="space-y-10">
                        <a href="tel:0696919266" class="group flex items-start gap-6">
                            <i class="fas fa-phone-alt text-gold/40 mt-1 group-hover:text-gold transition-colors"></i>
                            <div>
                                <p class="text-[11px] uppercase tracking-widest text-stone-400 mb-1">Téléphone</p>
                                <p class="text-lg font-light group-hover:text-gold transition-colors">0696 91 92 66</p>
                            </div>
                        </a>

                        <a href="https://wa.me/596696919266" target="_blank" class="group flex items-start gap-6">
                            <i class="fab fa-whatsapp text-gold/40 mt-1 group-hover:text-gold transition-colors"></i>
                            <div>
                                <p class="text-[11px] uppercase tracking-widest text-stone-400 mb-1">WhatsApp</p>
                                <p class="text-lg font-light group-hover:text-gold transition-colors">Message Instantané</p>
                            </div>
                        </a>

                        <div class="group flex items-start gap-6">
                            <i class="far fa-envelope text-gold/40 mt-1"></i>
                            <div>
                                <p class="text-[11px] uppercase tracking-widest text-stone-400 mb-1">Email</p>
                                <p class="text-lg font-light tracking-wide">contact@lulubarber.fr</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border-t border-stone-100 pt-10">
                    <h3 class="text-[11px] uppercase tracking-[0.3em] text-dark font-bold mb-6">Disponibilités</h3>
                    <div class="space-y-3 text-sm text-stone-500 font-light tracking-wide">
                        <div class="flex justify-between">
                            <span>Lundi — Samedi</span>
                            <span class="italic">08:00 – 20:00</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Dimanche</span>
                            <span class="text-gold italic font-normal">Sur demande spéciale</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="md:col-span-7 bg-[#F9F9F9] p-8 md:p-12">
                <form action="{{ route('contact.send') }}" method="POST" class="space-y-8" id="contact-form">
                    @csrf
                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="space-y-2">
                            <label for="name" class="text-[10px] uppercase tracking-widest text-stone-400 ml-1">Nom & Prénom</label>
                            <input type="text" name="name" id="name" required
                                   class="w-full bg-transparent border-b border-stone-200 py-3 px-1 focus:outline-none focus:border-gold transition-colors font-light text-dark">
                        </div>
                        <div class="space-y-2">
                            <label for="phone" class="text-[10px] uppercase tracking-widest text-stone-400 ml-1">Téléphone</label>
                            <input type="tel" name="phone" id="phone" required
                                   class="w-full bg-transparent border-b border-stone-200 py-3 px-1 focus:outline-none focus:border-gold transition-colors font-light text-dark">
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label for="service" class="text-[10px] uppercase tracking-widest text-stone-400 ml-1">Prestation Souhaitée</label>
                        <select name="service" id="service"
                                class="w-full bg-transparent border-b border-stone-200 py-3 px-1 focus:outline-none focus:border-gold transition-colors font-light text-dark appearance-none">
                            <option value="">Sélectionner un service</option>
                            <option value="Coupe" {{ request('service') == 'Coupe' ? 'selected' : '' }}>Coupe Haute Précision</option>
                            <option value="Barbe" {{ request('service') == 'Barbe' ? 'selected' : '' }}>Architecture de Barbe</option>
                            <option value="Trichologie" {{ request('service') == 'Trichologie' ? 'selected' : '' }}>Diagnostic Capillaire</option>
                            <option value="Rituel Herboriste" {{ request('service') == 'Rituel Herboriste' ? 'selected' : '' }}>Rituel Herboriste Naturel</option>
                            <option value="Evenement" {{ request('service') == 'Evenement' ? 'selected' : '' }}>Événement / Mariage</option>
                        </select>
                    </div>

                    <div class="space-y-2">
                        <label for="message" class="text-[10px] uppercase tracking-widest text-stone-400 ml-1">Votre Message</label>
                        <textarea name="message" id="message" rows="4"
                                  placeholder="Décrivez vos besoins ou vos disponibilités..."
                                  class="w-full bg-transparent border-b border-stone-200 py-3 px-1 focus:outline-none focus:border-gold transition-colors font-light text-dark resize-none"></textarea>
                    </div>

                    <div class="pt-6">
                        <button type="submit"
                                class="w-full bg-dark text-white text-[11px] uppercase tracking-[0.3em] font-bold py-5 hover:bg-gold hover:text-dark transition-all duration-500">
                            Envoyer la demande
                        </button>
                        <p class="text-center text-[10px] text-stone-400 mt-6 tracking-widest">
                            RÉPONSE GARANTIE SOUS 48 HEURES
                        </p>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

<section class="py-24 border-t border-stone-100 bg-[#FDFDFD]">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="font-serif text-3xl text-dark mb-6 italic">Un service sans frontières</h2>
        <p class="text-stone-500 text-sm font-light leading-relaxed mb-12 max-w-2xl mx-auto">
            Basé en Martinique, je parcours l'île pour vous apporter l'excellence du salon à domicile.
            Aucune zone n'est inaccessible pour votre bien-être.
        </p>

        <div class="relative inline-block group">
            <div class="absolute -inset-10 bg-gold/5 rounded-full blur-3xl group-hover:bg-gold/10 transition-all duration-700"></div>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/86/Martinique_in_France.svg/800px-Martinique_in_France.svg.png"
                 alt="Martinique" class="w-48 h-auto relative z-10 opacity-60 grayscale group-hover:grayscale-0 transition-all duration-700">
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-16 text-[10px] uppercase tracking-[0.2em] text-stone-400 font-bold">
            <span>Secteur Nord</span>
            <span>Fort-de-France</span>
            <span>Secteur Centre</span>
            <span>Secteur Sud</span>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    // Animation simple des inputs lors du focus
    const inputs = document.querySelectorAll('#contact-form input, #contact-form select, #contact-form textarea');
    inputs.forEach(input => {
        input.addEventListener('focus', () => {
            input.previousElementSibling.classList.add('text-gold');
        });
        input.addEventListener('blur', () => {
            if (input.value === '') {
                input.previousElementSibling.classList.remove('text-gold');
            }
        });
    });

    // Récupération auto du service via l'URL (si cliqué depuis la page Services)
    const urlParams = new URLSearchParams(window.location.search);
    const serviceParam = urlParams.get('service');
    if (serviceParam) {
        document.getElementById('service').value = serviceParam;
    }
</script>
@endpush
