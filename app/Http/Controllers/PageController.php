<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $testimonials = [
            ['name' => 'Marc L. (Le François)', 'rating' => 5, 'service' => 'Forfait 3 Soins', 'text' => 'J\'avais un problème de chute de cheveux depuis des années. Après le diagnostic et les 3 soins de Lulu, la différence est incroyable. Mes cheveux sont plus denses et ma confiance est revenue. Un service exceptionnel !', 'date' => 'Il y a 1 semaine'],
            ['name' => 'Sophie D. (Schoelcher)', 'rating' => 5, 'service' => 'Coupe + Soin', 'text' => 'En tant que femme, je cherchais quelqu\'un de fiable pour couper mes cheveux courts. Lulu est un vrai professionnel, il a parfaitement compris ce que je voulais. Le soin herboriste était un vrai plus, ma chevelure n\'a jamais été aussi douce.', 'date' => 'Il y a 2 semaines'],
            ['name' => 'David S. (Fort-de-France)', 'rating' => 5, 'service' => 'Taille Barbe + Rasage', 'text' => 'Le rasage traditionnel au coude est une expérience inoubliable. Détente absolue et un résultat parfait. Lulu vient à mon bureau, ce qui me fait gagner un temps précieux. Je le recommande les yeux fermés.', 'date' => 'Il y a 3 semaines'],
            ['name' => 'Karim B. (Le Robert)', 'rating' => 5, 'service' => 'Diagnostic Capillaire', 'text' => 'Je souffrais de pellicules et de démangeaisons. Le diagnostic a été très instructif et le traitement naturel à base de plantes locales a résolu le problème en 2 semaines seulement. Merci Lulu !', 'date' => 'Il y a 1 mois'],
            ['name' => 'Elodie M. (Ducos)', 'rating' => 5, 'service' => 'Coupe Enfant', 'text' => 'Mon fils de 8 ans est très timide. Lulu a été incroyablement patient et doux avec lui. La coupe est parfaite et mon fils était fier de sa nouvelle coiffure. On a trouvé notre barbier de famille !', 'date' => 'Il y a 1 mois'],
            ['name' => 'Jean-Pierre C. (Le Lamentin)', 'rating' => 5, 'service' => 'Soin Barbe Complet', 'text' => 'Un service de luxe à domicile. Le massage du visage et le masque pour la barbe étaient divins. Ma peau est nette et ma barbe est douce comme jamais. C\'est le meilleur soin que j\'ai jamais reçu.', 'date' => 'Il y a 2 mois'],
        ];

        return view('pages.home', compact('testimonials'));
    }

    public function services()
    {
        $services = [
            'barber' => [
                'category' => 'Services Barbier',
                'icon' => 'fa-cut',
                'description' => 'L\'art de la coupe précise et du style impeccable. Des techniques traditionnelles aux tendances modernes.',
                'items' => [
                    [
                        'name' => 'Coupe Classique Homme',
                        'description' => 'Coupe au ciseau ou à la tondeuse, finition au rasoir.',
                        'duration' => '30 min',
                        'price' => '30€',
                        'popular' => true
                    ],
                    [
                        'name' => 'Coupe Moderne & Dégradé',
                        'description' => 'Travail sur les textures, dégradés haute définition, style personnalisé.',
                        'duration' => '45 min',
                        'price' => '40€',
                    ],
                    [
                        'name' => 'Coupe Enfant (-12 ans)',
                        'description' => 'Coupe simple et rapide dans une ambiance bienveillante.',
                        'duration' => '20 min',
                        'price' => '20€',
                    ],
                ]
            ],
            'beard' => [
                'category' => 'Services Barbe',
                'icon' => 'fa-beard',
                'description' => 'Sculptez votre barbe avec des soins de qualité professionnelle pour un look net et soigné.',
                'items' => [
                    [
                        'name' => 'Taille de Barbe & Contour',
                        'description' => 'Taille précise, dessin des contours, application d\'huile à barbe.',
                        'duration' => '30 min',
                        'price' => '25€',
                        'popular' => true
                    ],
                    [
                        'name' => 'Rasage Traditionnel au Coude',
                        'description' => 'Experience premium avec serviettes chaudes, savon à barbe et baume après-rasage.',
                        'duration' => '45 min',
                        'price' => '40€',
                    ],
                    [
                        'name' => 'Soin Complet Barbe',
                        'description' => 'Taille + masque nourrissant + massage du visage.',
                        'duration' => '60 min',
                        'price' => '55€',
                    ],
                ]
            ],
            'capillary' => [
                'category' => 'Services Docteur Capillaire & Herboriste',
                'icon' => 'fa-leaf',
                'description' => 'Diagnostic et solutions naturelles pour la santé de votre cuir chevelu et de vos cheveux.',
                'items' => [
                    [
                        'name' => 'Diagnostic Capillaire Complet',
                        'description' => 'Analyse microscopique du cuir chevelu, identification des problèmes (chute, pellicules...).',
                        'duration' => '30 min',
                        'price' => '35€',
                        'popular' => true
                    ],
                    [
                        'name' => 'Soin Anti-Chute Naturel',
                        'description' => 'Massage crânien + application de sérum à base de plantes locales (romarin, ortie...).',
                        'duration' => '45 min',
                        'price' => '50€',
                    ],
                    [
                        'name' => 'Soin Hydratation Profonde',
                        'description' => 'Masque à l\'aloe vera et à l\'huile de coco pour cheveux secs et abîmés.',
                        'duration' => '40 min',
                        'price' => '45€',
                    ],
                    [
                        'name' => 'Forfait 3 Soins Capillaires',
                        'description' => 'Programme sur mesure pour une cure de 3 semaines. Résultats garantis.',
                        'duration' => '3x 45 min',
                        'price' => '135€',
                    ],
                ]
            ]
        ];

        return view('pages.services', compact('services'));
    }

    public function gallery()
    {
        $galleries = [
            'coupes' => [
                'title' => 'Coupes de Prestige',
                'images' => [
                    ['src' => 'https://images.unsplash.com/photo-1593702275677-f916c6c7004d', 'alt' => 'Coupe Homme Moderne'],
                    ['src' => 'https://images.unsplash.com/photo-1635273051731-299f06742514', 'alt' => 'Dégradé Haute Définition'],
                    ['src' => 'https://images.unsplash.com/photo-1522337360788-8b13dee7a37e', 'alt' => 'Coupe Classique Rasée'],
                    ['src' => 'https://images.unsplash.com/photo-1560184915-9945b8170a1e', 'alt' => 'Style Texturé'],
                ]
            ],
            'barbes' => [
                'title' => 'Sculptures de Barbe',
                'images' => [
                    ['src' => 'https://images.unsplash.com/photo-1621605815971-fbc98d665033', 'alt' => 'Barbe Longue Soignée'],
                    ['src' => 'https://images.unsplash.com/photo-1621607512214-68297480165e', 'alt' => 'Barbe Courte et Net'],
                    ['src' => 'https://images.unsplash.com/photo-1517831907240-fb5653d22b98', 'alt' => 'Rasage Traditionnel'],
                    ['src' => 'https://images.unsplash.com/photo-1622286332618-f2802b9c339c', 'alt' => 'Contour de Barbe Parfait'],
                ]
            ],
            'soins' => [
                'title' => 'Soins Capillaires Naturels',
                'images' => [
                    ['src' => 'https://images.unsplash.com/photo-1512690118294-7043896658cd', 'alt' => 'Soin Herboriste'],
                    ['src' => 'https://images.unsplash.com/photo-1560069007-67cba84360e0', 'alt' => 'Massage Crânien'],
                    ['src' => 'https://images.unsplash.com/photo-1559548331-f9cb98001426', 'alt' => 'Application de Masque'],
                    ['src' => 'https://images.unsplash.com/photo-1570172619644-dfd8ed534e0a', 'alt' => 'Diagnostic Capillaire'],
                ]
            ],
            'avant-apres' => [
                'title' => 'Transformations Avant / Après',
                'images' => [
                    ['src' => 'https://images.unsplash.com/photo-1503951914875-452162b0f3f1', 'alt' => 'Avant Soin Barbe'],
                    ['src' => 'https://images.unsplash.com/photo-1621605815971-fbc98d665033', 'alt' => 'Après Soin Barbe'],
                    ['src' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb', 'alt' => 'Avant Coupe'],
                    ['src' => 'https://images.unsplash.com/photo-1595358444254-1e8c8e3c4a3e', 'alt' => 'Après Coupe'],
                ]
            ],
        ];

        return view('pages.gallery', compact('galleries'));
    }

    public function about()
    {
        $about = [
            'intro' => [
                'title' => 'L\'Histoire de Lulu Barber',
                'text' => 'Bien plus qu\'un barbier, je suis un passionné dévoué à l\'art de la transformation capillaire. Mon parcours, de la Martinique aux plus grandes capitales de la mode, m\'a permis de développer une expertise unique que je mets aujourd\'hui à votre service, directement chez vous.',
                'image' => 'https://images.unsplash.com/photo-1610992015738-7149e7e03d15'
            ],
            'philosophy' => [
                'title' => 'Ma Philosophie : Le Luxe Naturel',
                'points' => [
                    'Allier la technique de pointe à la puissance des plantes locales.',
                    'Offrir un service premium dans le confort de votre foyer.',
                    'Traiter chaque client comme une œuvre d\'art unique.',
                    'Éduquer et accompagner pour une santé capillaire durable.'
                ]
            ],
            'timeline' => [
                [
                    'year' => '2017',
                    'title' => 'Le Début',
                    'description' => 'Formation en coiffure masculine à Paris, spécialisation en techniques de rasage traditionnel.'
                ],
                [
                    'year' => '2019',
                    'title' => 'Spécialisation Capillaire',
                    'description' => 'Diplôme de trichologie (science du cheveu) et certification en phytothérapie appliquée.'
                ],
                [
                    'year' => '2021',
                    'title' => 'Retour aux Sources',
                    'description' => 'Installation en Martinique et lancement de Lulu Barber, le premier service itinérant "Barbier & Docteur Capillaire".'
                ],
                [
                    'year' => 'Aujourd\'hui',
                    'title' => 'Excellence Reconnue',
                    'description' => 'Plus de 500 clients satisfaits, une note de 5/5 et une réputation d\'excellence sur toute l\'île.'
                ]
            ],
            'certifications' => [
                ['name' => 'Diplôme de Coiffure Professionnelle', 'issuer' => 'Académie de Paris'],
                ['name' => 'Certification Trichologie Clinique', 'issuer' => 'Institut International de Santé Capillaire'],
                ['name' => 'Expert en Phytothérapie Capillaire', 'issuer' => 'Centre de Recherche sur les Plantes Médicinales'],
                ['name' => 'Maître Barbier - Technique au Coude', 'issuer' => 'The London School of Barbering'],
            ]
        ];

        return view('pages.about', compact('about'));
    }

    public function testimonials()
    {
        $testimonials = [
            ['name' => 'Marc L. (Le François)', 'rating' => 5, 'service' => 'Forfait 3 Soins', 'text' => 'J\'avais un problème de chute de cheveux depuis des années. Après le diagnostic et les 3 soins de Lulu, la différence est incroyable. Mes cheveux sont plus denses et ma confiance est revenue. Un service exceptionnel !', 'date' => 'Il y a 1 semaine'],
            ['name' => 'Sophie D. (Schoelcher)', 'rating' => 5, 'service' => 'Coupe + Soin', 'text' => 'En tant que femme, je cherchais quelqu\'un de fiable pour couper mes cheveux courts. Lulu est un vrai professionnel, il a parfaitement compris ce que je voulais. Le soin herboriste était un vrai plus, ma chevelure n\'a jamais été aussi douce.', 'date' => 'Il y a 2 semaines'],
            ['name' => 'David S. (Fort-de-France)', 'rating' => 5, 'service' => 'Taille Barbe + Rasage', 'text' => 'Le rasage traditionnel au coude est une expérience inoubliable. Détente absolue et un résultat parfait. Lulu vient à mon bureau, ce qui me fait gagner un temps précieux. Je le recommande les yeux fermés.', 'date' => 'Il y a 3 semaines'],
            ['name' => 'Karim B. (Le Robert)', 'rating' => 5, 'service' => 'Diagnostic Capillaire', 'text' => 'Je souffrais de pellicules et de démangeaisons. Le diagnostic a été très instructif et le traitement naturel à base de plantes locales a résolu le problème en 2 semaines seulement. Merci Lulu !', 'date' => 'Il y a 1 mois'],
            ['name' => 'Elodie M. (Ducos)', 'rating' => 5, 'service' => 'Coupe Enfant', 'text' => 'Mon fils de 8 ans est très timide. Lulu a été incroyablement patient et doux avec lui. La coupe est parfaite et mon fils était fier de sa nouvelle coiffure. On a trouvé notre barbier de famille !', 'date' => 'Il y a 1 mois'],
            ['name' => 'Jean-Pierre C. (Le Lamentin)', 'rating' => 5, 'service' => 'Soin Barbe Complet', 'text' => 'Un service de luxe à domicile. Le massage du visage et le masque pour la barbe étaient divins. Ma peau est nette et ma barbe est douce comme jamais. C\'est le meilleur soin que j\'ai jamais reçu.', 'date' => 'Il y a 2 mois'],
        ];

        return view('pages.testimonials', compact('testimonials'));
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
