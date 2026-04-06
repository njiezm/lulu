<footer class="bg-dark text-white pt-20 pb-10 border-t border-white/5">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
            <div class="md:col-span-1">
                <img src="{{ asset('images/logo.png') }}" alt="Lulu Barber" class="h-10 w-auto mb-6 opacity-90">
                <p class="text-stone-500 text-[13px] leading-relaxed font-light">
                    L'expertise capillaire et l'art du barbier traditionnel, avec le confort du service à domicile.
                </p>
            </div>

            <div>
                <h4 class="text-gold text-[11px] uppercase tracking-[0.2em] mb-6">Navigation</h4>
                <ul class="space-y-3 text-[13px] text-stone-400 font-light">
                    <li><a href="#" class="hover:text-white transition-colors">Prestations</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Réalisations</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Philosophie</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-gold text-[11px] uppercase tracking-[0.2em] mb-6">Contact</h4>
                <ul class="space-y-3 text-[13px] text-stone-400 font-light">
                    <li class="flex items-center gap-3 italic">0696 91 92 66</li>
                    <li>contact@lulubarber.fr</li>
                </ul>
            </div>

            <div>
                <h4 class="text-gold text-[11px] uppercase tracking-[0.2em] mb-6">Suivez-moi</h4>
                <div class="flex gap-5">
                    <a href="#" class="text-stone-400 hover:text-gold transition-colors text-sm"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-stone-400 hover:text-gold transition-colors text-sm"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-stone-400 hover:text-gold transition-colors text-sm"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>

        <div class="pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-4 text-[10px] text-stone-600 uppercase tracking-widest">
            <p>&copy; {{ date('Y') }} Lulu Barber. Édition Prestige.</p>
            <div class="flex gap-6">
                <a href="#" class="hover:text-stone-400">Mentions</a>
                <a href="#" class="hover:text-stone-400">Confidentialité</a>
            </div>
        </div>
    </div>
</footer>
