<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idy Cissokho — Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        'primary-blue': '#2563eb',
                        'primary-orange': '#ea580c',
                        'bg-primary': '#0f172a',
                        'bg-secondary': '#1e293b',
                        'bg-tertiary': '#334155',
                        'text-primary': '#f1f5f9',
                        'text-secondary': '#94a3b8',
                        'text-tertiary': '#64748b',
                        'border-color': '#334155',
                    }
                }
            }
        }
    </script>
    <style>
        body { background-color: #0f172a; color: #f1f5f9; }
        body.light { background-color: #f8fafc; color: #0f172a; }
        body.light .bg-secondary { background-color: #ffffff; }
        body.light .bg-tertiary { background-color: #f1f5f9; }
        body.light .text-secondary { color: #475569; }
        body.light .border-color { border-color: #e2e8f0; }
        .card-hover { transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .card-hover:hover { transform: translateY(-4px); box-shadow: 0 20px 40px rgba(37,99,235,0.15); }
    </style>
</head>
<body id="body" class="font-sans transition-colors duration-300">

    {{-- Navbar --}}
    <nav class="fixed top-0 left-0 right-0 z-50 bg-[#1e293b]/95 backdrop-blur-xl border-b border-[#334155] shadow-lg">
        {{-- Barre de progression --}}
        <div class="fixed top-0 left-0 w-full h-1 bg-[#334155] z-50">
            <div id="progress-bar" class="h-full bg-gradient-to-r from-blue-600 to-orange-600 transition-all duration-300" style="width:0%"></div>
        </div>
        <div class="max-w-[1400px] mx-auto px-6 md:px-12">
            <div class="flex items-center justify-between h-20">
                <a href="#hero" class="text-xl font-bold text-white">Idy <span class="text-orange-600">Cissokho</span></a>

                {{-- Desktop menu --}}
                <div class="hidden md:flex items-center gap-8">
                    @foreach([['#experience','Expérience'],['#education','Éducation'],['#skills','Compétences'],['#projects','Projets'],['#languages','Langues'],['#contact','Contact']] as [$href,$label])
                    <a href="{{ $href }}" class="px-3 py-2 rounded-lg text-sm font-medium text-[#94a3b8] hover:text-blue-400 hover:bg-[#334155]/50 transition-all duration-300">{{ $label }}</a>
                    @endforeach
                </div>

                <div class="flex items-center gap-3">
                    {{-- Toggle thème --}}
                    <button id="theme-toggle" class="p-2 text-[#94a3b8] hover:bg-[#334155] rounded-lg transition-all hover:text-blue-400" title="Basculer le thème">
                        <i id="theme-icon" class="fas fa-sun w-5 h-5"></i>
                    </button>
                    <a href="#" download class="hidden sm:flex items-center gap-2 px-4 py-2 bg-orange-600 text-white rounded-lg font-semibold hover:opacity-90 transition-all shadow-lg text-sm">
                        <i class="fas fa-download w-4 h-4"></i> Télécharger CV
                    </a>
                    {{-- Burger --}}
                    <button id="burger" class="md:hidden p-2 text-[#94a3b8] hover:bg-[#334155] rounded-lg transition-colors">
                        <i id="burger-icon" class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>

            {{-- Mobile menu --}}
            <div id="mobile-menu" class="hidden md:hidden border-t border-[#334155] py-4">
                <div class="flex flex-col gap-2">
                    @foreach([['#experience','Expérience'],['#education','Éducation'],['#skills','Compétences'],['#projects','Projets'],['#languages','Langues'],['#contact','Contact']] as [$href,$label])
                    <a href="{{ $href }}" class="mobile-link px-3 py-2 rounded-lg text-sm font-medium text-[#94a3b8] hover:text-white hover:bg-[#334155] transition-all">{{ $label }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </nav>

    <main class="pt-20">
        @yield('content')
    </main>

    <footer class="border-t-4 border-orange-600 bg-[#1e293b] py-8">
        <div class="max-w-[1400px] mx-auto px-6 md:px-12 text-center">
            <p class="text-[#64748b] text-sm">© {{ date('Y') }} Idy Cissokho — Tous droits réservés</p>
        </div>
    </footer>

    {{-- Bouton retour en haut --}}
    <button id="back-to-top" class="fixed bottom-8 right-8 w-14 h-14 flex items-center justify-center rounded-full bg-orange-600 text-white shadow-lg hover:scale-110 transition-all duration-300 z-50 opacity-0 translate-y-10 pointer-events-none" aria-label="Retour en haut">
        <i class="fas fa-arrow-up text-xl"></i>
    </button>

    <script>
        // Burger menu
        const burger = document.getElementById('burger');
        const mobileMenu = document.getElementById('mobile-menu');
        const burgerIcon = document.getElementById('burger-icon');
        burger.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            burgerIcon.classList.toggle('fa-bars');
            burgerIcon.classList.toggle('fa-times');
        });
        document.querySelectorAll('.mobile-link').forEach(l => l.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
            burgerIcon.classList.add('fa-bars');
            burgerIcon.classList.remove('fa-times');
        }));

        // Barre de progression + bouton retour en haut
        const progressBar = document.getElementById('progress-bar');
        const backToTop = document.getElementById('back-to-top');
        window.addEventListener('scroll', () => {
            const scrolled = (window.scrollY / (document.body.scrollHeight - window.innerHeight)) * 100;
            progressBar.style.width = scrolled + '%';
            if (window.scrollY > 300) {
                backToTop.classList.remove('opacity-0', 'translate-y-10', 'pointer-events-none');
                backToTop.classList.add('opacity-100', 'translate-y-0');
            } else {
                backToTop.classList.add('opacity-0', 'translate-y-10', 'pointer-events-none');
                backToTop.classList.remove('opacity-100', 'translate-y-0');
            }
        });
        backToTop.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

        // Toggle thème
        const themeToggle = document.getElementById('theme-toggle');
        const themeIcon = document.getElementById('theme-icon');
        themeToggle.addEventListener('click', () => {
            document.documentElement.classList.toggle('dark');
            themeIcon.classList.toggle('fa-sun');
            themeIcon.classList.toggle('fa-moon');
        });
    </script>
</body>
</html>
