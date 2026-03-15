<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idy Cissokho — Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
    <style>
        .gradient-text {
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 40px rgba(99,102,241,0.15);
        }
    </style>
</head>
<body class="bg-gray-950 text-gray-100 font-sans">

    <nav class="fixed top-0 w-full z-50 bg-gray-950/80 backdrop-blur border-b border-gray-800">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#hero" class="text-xl font-bold gradient-text">Portfolio</a>
            <ul class="hidden md:flex gap-8 text-sm text-gray-400">
                <li><a href="#about" class="hover:text-white transition">À propos</a></li>
                <li><a href="#education" class="hover:text-white transition">Éducation</a></li>
                <li><a href="#skills" class="hover:text-white transition">Expertise</a></li>
                <li><a href="#projects" class="hover:text-white transition">Projets</a></li>
                <li><a href="#contact" class="hover:text-white transition">Contact</a></li>
            </ul>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="border-t border-gray-800 py-8 text-center text-gray-500 text-sm">
        <p>© {{ date('Y') }} Idy Cissokho — Fait avec ❤️ et Laravel</p>
    </footer>

</body>
</html>
