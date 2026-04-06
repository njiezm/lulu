<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Lulu Barber') }}</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet"/>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="bg-slate-950 font-sans text-white antialiased">
        <div class="relative min-h-screen overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-slate-950/80 via-slate-900 to-black/90"></div>
            <div class="absolute inset-0 pointer-events-none">
                <div class="absolute -top-24 -right-8 h-64 w-64 rounded-full bg-pink-500/30 blur-[120px]"></div>
                <div class="absolute bottom-0 left-1/2 h-72 w-72 -translate-x-1/2 rounded-full bg-cyan-500/20 blur-[140px]"></div>
            </div>

            <div class="relative z-10 mx-auto flex max-w-6xl flex-col gap-20 px-6 py-10">
                <header class="grid items-center gap-12 lg:grid-cols-[1.1fr_0.9fr]">
                    <div class="space-y-6">
                        <div class="flex items-center gap-3">
                            <div class="h-16 w-16 overflow-hidden rounded-2xl border border-white/20 bg-white/10 shadow-lg">
                                <img src="{{ asset('images/logo.png') }}" alt="Logo Lulu Barber" class="h-full w-full object-contain p-3"/>
                            </div>
                            <p class="text-xs uppercase tracking-[0.6em] text-slate-400">Lulu Barber</p>
                        </div>
                        <p class="text-sm uppercase tracking-[0.3em] text-pink-300/80">Studio premium</p>
                        <h1 class="text-4xl font-semibold leading-tight text-white md:text-5xl lg:text-6xl">
                            Transformez la présentation de votre salon avec une vitrine digitale qui respire l’élégance.
                        </h1>
                        <p class="text-lg text-slate-200/80">
                            Une mise en page pensée pour mettre vos coupes, soins et ambiances en valeur. Ajoutez simplement vos images et vos vidéos dans les dossiers indiqués, et la page adapte automatiquement les visuels pour garder la cohérence graphique.
                        </p>
                        <div class="flex flex-wrap gap-3">
                            <a href="#contact" class="rounded-full bg-pink-500 px-6 py-3 text-sm font-semibold uppercase tracking-wide text-white shadow-lg transition hover:bg-pink-400">
                                Contacter
                            </a>
                            <a href="#portfolio" class="rounded-full border border-white/30 px-6 py-3 text-sm font-semibold uppercase tracking-wide text-white transition hover:border-pink-200/70">
                                Voir la galerie
                            </a>
                        </div>
                    </div>

                    <div class="relative">
                        <div class="relative overflow-hidden rounded-[32px] border border-white/10 bg-slate-900/80 shadow-2xl">
                            <video class="h-64 w-full object-cover" autoplay muted loop playsinline poster="{{ asset('images/hero-poster.jpg') }}">
                                <source src="{{ asset('media/hero.mp4') }}" type="video/mp4">
                            </video>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/0 to-black/20"></div>
                            <div class="absolute left-5 bottom-5 space-y-2 text-sm">
                                <p class="font-semibold text-white">Ambiance immersive</p>
                                <p class="text-xs text-slate-300">Vidéo automatique : placez `hero.mp4` dans `public/media/`.</p>
                            </div>
                        </div>
                        <div class="mt-4 rounded-2xl bg-black/40 p-5 text-sm text-slate-300 shadow-lg">
                            <p>Éditez <span class="font-semibold text-white">public/media/hero.mp4</span> pour changer le mouvement, ou remplacez le poster dans <span class="font-semibold text-white">public/images/hero-poster.jpg</span>.</p>
                            <p class="mt-2 text-xs text-slate-400">
                                Les vidéos et images de la page reprennent automatiquement le ratio et les filtres mis en place ci-dessus.
                            </p>
                        </div>
                    </div>
                </header>

                <section class="space-y-6">
                    <div class="flex items-center justify-between gap-6">
                        <div>
                            <p class="text-sm font-semibold uppercase tracking-[0.35em] text-pink-300/90">Services</p>
                            <h2 class="text-3xl font-semibold text-white">Ce que vous proposez</h2>
                        </div>
                        <span class="text-xs uppercase tracking-[0.4em] text-slate-500">Prêt à être personnalisé</span>
                    </div>

                    <div class="grid gap-6 md:grid-cols-3">
                        @foreach ([
                            ['title' => 'Coupe signature', 'description' => 'Des lignes précises, des textures qui brillent sous chaque angle.'],
                            ['title' => 'Coloration & soins', 'description' => 'Couleurs profondes, soins haute performance, toujours une finition impeccable.'],
                            ['title' => 'Expériences VIP', 'description' => 'Bar à visage, coiffage express de soirée, ou rendez-vous privé.']
                        ] as $service)
                            <article class="rounded-3xl border border-white/10 bg-white/5 p-6 backdrop-blur">
                                <p class="text-xs uppercase tracking-[0.4em] text-pink-200/80">Service</p>
                                <h3 class="mt-4 text-2xl font-semibold text-white">{{ $service['title'] }}</h3>
                                <p class="mt-3 text-sm leading-relaxed text-slate-200">{{ $service['description'] }}</p>
                            </article>
                        @endforeach
                    </div>
                </section>

                <section id="portfolio" class="space-y-6">
                    <div class="flex items-center justify-between gap-6">
                        <div>
                            <p class="text-sm font-semibold uppercase tracking-[0.35em] text-cyan-200/80">Portfolio</p>
                            <h2 class="text-3xl font-semibold text-white">Galerie à remplir</h2>
                        </div>
                        <p class="text-sm text-slate-400">Les visuels ci-dessous tiennent un ratio carré, glissez vos propres fichiers dans <code class="rounded-full bg-white/10 px-3 py-1 text-xs font-medium text-white">public/images/</code>.</p>
                    </div>

                    <div class="grid gap-4 md:grid-cols-2">
                        @foreach (['portfolio-1.jpg', 'portfolio-2.jpg', 'portfolio-3.jpg', 'portfolio-4.jpg'] as $image)
                            <figure class="group relative overflow-hidden rounded-3xl border border-white/10 bg-white/5 shadow-lg">
                                <img src="{{ asset('images/'.$image) }}" alt="Portfolio placeholder" class="h-60 w-full object-cover transition duration-500 group-hover:scale-105"/>
                                <figcaption class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-black/0 p-6 opacity-0 transition duration-500 group-hover:opacity-100">
                                    <p class="text-sm tracking-[0.3em] text-pink-200">Futur projet</p>
                                    <h3 class="mt-4 text-xl font-semibold text-white">Titre & description</h3>
                                    <p class="mt-2 text-xs text-slate-200">Remplacez {{ $image }} avec vos images 4:3 ou 1:1.</p>
                                </figcaption>
                            </figure>
                        @endforeach
                    </div>
                </section>

                <section class="space-y-6 rounded-3xl border border-white/10 bg-gradient-to-b from-slate-900/40 via-slate-900/60 to-slate-950/80 p-8 shadow-[0_35px_120px_-30px_rgba(14,23,45,0.9)]">
                    <div class="flex flex-col gap-2 md:flex-row md:items-center md:justify-between">
                        <div>
                            <p class="text-sm text-cyan-200/80">Vidéos & ambiances</p>
                            <h2 class="text-3xl font-semibold text-white">Laissez parler le mouvement</h2>
                        </div>
                        <span class="text-sm uppercase tracking-[0.4em] text-slate-500">Plug & play</span>
                    </div>
                    <p class="text-base text-slate-300">
                        Cette section peut devenir votre film de présentation. Copiez vos rushes dans <code class="rounded-full bg-white/10 px-3 py-1 text-xs font-medium text-white">public/media/</code> et nommez-les de manière logique (hero, service, ambiance). La vidéo qui tourne en boucle respecte les ratio 16:9 et profite du filtre sombre pour rester harmonieuse.
                    </p>
                    <div class="grid gap-6 md:grid-cols-3">
                        @foreach ([
                            ['label' => 'Ambiance salon', 'file' => 'media/ambiance.mp4'],
                            ['label' => 'Avant / après', 'file' => 'media/avant-apres.mp4'],
                            ['label' => 'Rendez-vous VIP', 'file' => 'media/vip.mp4'],
                        ] as $item)
                            <article class="space-y-3 rounded-2xl border border-white/10 bg-black/40 p-4 text-sm text-slate-200 backdrop-blur">
                                <div class="text-xs uppercase tracking-[0.4em] text-slate-500">Vidéo prête</div>
                                <p class="text-lg font-semibold text-white">{{ $item['label'] }}</p>
                                <p class="text-xs text-slate-400">{{ $item['file'] }}</p>
                                <p class="text-xs text-slate-500">Ajoutez un clip MP4 de 12-45 secondes ici, il sera lu dans la section dédiée.</p>
                            </article>
                        @endforeach
                    </div>
                </section>

                <section id="contact" class="space-y-6 rounded-3xl border border-white/10 bg-white/5 p-8 shadow-2xl">
                    <div class="space-y-1">
                        <p class="text-sm uppercase tracking-[0.35em] text-pink-200">Accueil</p>
                        <h2 class="text-3xl font-semibold text-white">Prêt ?</h2>
                    </div>
                    <p class="text-base leading-relaxed text-slate-300">
                        Fournissez votre contenu en glissant vos fichiers dans les dossiers <code class="rounded-full bg-white/10 px-3 py-1 text-xs font-medium text-white">public/images/</code> et <code class="rounded-full bg-white/10 px-3 py-1 text-xs font-medium text-white">public/media/</code>. La structure actuelle conserve :
                    </p>
                    <ul class="space-y-3 text-sm text-slate-200">
                        <li>• Des titres percutants pour vos offres</li>
                        <li>• Une grille modulable pour vos photos</li>
                        <li>• Une carte vidéo prête à jouer un clip 16:9</li>
                    </ul>
                    <form class="grid gap-4 md:grid-cols-2" method="POST" action="#" novalidate>
                        <label class="space-y-2 text-sm text-slate-300">
                            <span class="text-xs uppercase tracking-[0.3em] text-slate-500">Nom</span>
                            <input type="text" name="name" placeholder="Votre prénom" class="w-full rounded-2xl border border-white/20 bg-black/30 px-4 py-3 text-sm text-white placeholder:text-slate-500 focus:border-pink-400 focus:outline-none"/>
                        </label>
                        <label class="space-y-2 text-sm text-slate-300">
                            <span class="text-xs uppercase tracking-[0.3em] text-slate-500">Email</span>
                            <input type="email" name="email" placeholder="vous@email.com" class="w-full rounded-2xl border border-white/20 bg-black/30 px-4 py-3 text-sm text-white placeholder:text-slate-500 focus:border-cyan-400 focus:outline-none"/>
                        </label>
                        <label class="space-y-2 text-sm text-slate-300 md:col-span-2">
                            <span class="text-xs uppercase tracking-[0.3em] text-slate-500">Message</span>
                            <textarea name="message" rows="4" placeholder="Décrivez votre projet ou votre besoin" class="w-full rounded-2xl border border-white/20 bg-black/30 px-4 py-3 text-sm text-white placeholder:text-slate-500 focus:border-indigo-400 focus:outline-none"></textarea>
                        </label>
                        <button type="submit" class="md:col-span-2 rounded-full bg-rose-500 px-6 py-3 text-sm font-semibold uppercase tracking-wide text-white transition hover:bg-rose-400">Envoyer</button>
                    </form>
                    <div class="flex flex-wrap gap-3">
                        <a href="mailto:contact@lulu-barber.local" class="rounded-full bg-rose-500/20 px-6 py-3 text-sm font-semibold uppercase tracking-wide text-white transition hover:bg-rose-400/70">Contact direct</a>
                        <a href="tel:+59112345678" class="rounded-full border border-white/20 px-6 py-3 text-sm font-semibold uppercase tracking-wide text-white transition hover:border-rose-200/70">Téléphone</a>
                        <span class="rounded-full border border-dashed border-white/10 px-6 py-3 text-sm text-slate-400">Vitrine & contact uniquement</span>
                    </div>
                </section>
            </div>
        </div>
    </body>
</html>
