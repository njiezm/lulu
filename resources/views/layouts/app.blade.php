<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Lulu Barber - Barbier & Docteur Capillaire')</title>

    <meta name="description" content="@yield('description', 'Lulu Barber, votre barbier et docteur capillaire en Martinique.')">

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400&family=Inter:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'gold': '#C5A059', // Un doré plus brossé, moins "jaune"
                        'dark': '#121212',
                    },
                    fontFamily: {
                        'serif': ['Playfair Display', 'serif'],
                        'sans': ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        [x-cloak] { display: none !important; }
        body { letter-spacing: 0.01em; }
        h1, h2, h3 { letter-spacing: 0.05em; }
    </style>
</head>
<body class="font-sans bg-[#FDFDFD] text-dark antialiased">
    <div class="relative">
        <x-header />
        <main>
            @yield('content')
        </main>
        <x-footer />
    </div>
    @stack('scripts')
</body>
</html>
