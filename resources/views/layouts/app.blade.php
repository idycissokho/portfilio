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

        /* Animations scroll */
        .reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }
        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }
        .reveal-left {
            opacity: 0;
            transform: translateX(-40px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }
        .reveal-left.visible {
            opacity: 1;
            transform: translateX(0);
        }
        .reveal-right {
            opacity: 0;
            transform: translateX(40px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }
        .reveal-right.visible {
            opacity: 1;
            transform: translateX(0);
        }
        .delay-1 { transition-delay: 0.1s; }
        .delay-2 { transition-delay: 0.2s; }
        .delay-3 { transition-delay: 0.3s; }
        .delay-4 { transition-delay: 0.4s; }
        .delay-5 { transition-delay: 0.5s; }
    </style>
</head>
<body class="bg-gray-950 text-gray-100 font-sans">

    {{-- Navbar --}}
    <nav class="fixed top-0 w-full z-50 bg-gray-950/80 backdrop-blur border-b border-gray-800">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#hero" class="text-xl font-bold gradient-text">Idy Cissokho</a>

            {{-- Desktop menu --}}
            <ul class="hidden md:flex gap-8 text-sm text-gray-400">
                <li><a href="#about" class="hover:text-white transition">À propos</a></li>
                <li><a href="#education" class="hover:text-white transition">Éducation</a></li>
                <li><a href="#skills" class="hover:text-white transition">Expertise</a></li>
                <li><a href="#projects" class="hover:text-white transition">Projets</a></li>
                <li><a href="#contact" class="hover:text-white transition">Contact</a></li>
            </ul>

            {{-- Burger button --}}
            <button id="burger" class="md:hidden text-gray-400 hover:text-white text-xl focus:outline-none">
                <i class="fas fa-bars" id="burger-icon"></i>
            </button>
        </div>

        {{-- Mobile menu --}}
        <div id="mobile-menu" class="hidden md:hidden bg-gray-900 border-t border-gray-800 px-6 py-4">
            <ul class="flex flex-col gap-4 text-sm text-gray-400">
                <li><a href="#about" class="mobile-link hover:text-white transition block py-1">À propos</a></li>
                <li><a href="#education" class="mobile-link hover:text-white transition block py-1">Éducation</a></li>
                <li><a href="#skills" class="mobile-link hover:text-white transition block py-1">Expertise</a></li>
                <li><a href="#projects" class="mobile-link hover:text-white transition block py-1">Projets</a></li>
                <li><a href="#contact" class="mobile-link hover:text-white transition block py-1">Contact</a></li>
            </ul>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="border-t border-gray-800 py-8 text-center text-gray-500 text-sm">
        <p>© {{ date('Y') }} Idy Cissokho — Fait avec ❤️ et Laravel</p>
    </footer>

    <script>
        // Menu burger
        const burger = document.getElementById('burger');
        const mobileMenu = document.getElementById('mobile-menu');
        const burgerIcon = document.getElementById('burger-icon');

        burger.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            burgerIcon.classList.toggle('fa-bars');
            burgerIcon.classList.toggle('fa-times');
        });

        document.querySelectorAll('.mobile-link').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                burgerIcon.classList.add('fa-bars');
                burgerIcon.classList.remove('fa-times');
            });
        });

        // Animations au scroll
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.reveal, .reveal-left, .reveal-right').forEach(el => {
            observer.observe(el);
        });
    </script>

</body>
</html>
