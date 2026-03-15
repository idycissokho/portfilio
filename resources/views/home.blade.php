@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section id="hero" class="min-h-screen flex items-center justify-center text-center px-6 pt-20">
    <div>
        <p class="text-indigo-400 text-sm uppercase tracking-widest mb-4">Jeune diplômé en Génie Logiciel</p>
        <h1 class="text-5xl md:text-7xl font-extrabold mb-4">
            <span class="gradient-text">IDY CISSOKHO</span>
        </h1>
        <p class="text-gray-400 text-xl md:text-2xl mb-10">Développeur Full Stack · Spring Boot · Laravel · React.js · Flutter</p>
        <div class="flex justify-center gap-4 flex-wrap">
            <a href="#projects" class="bg-indigo-600 hover:bg-indigo-500 text-white px-8 py-3 rounded-full font-semibold transition">Voir mes projets</a>
            <a href="#contact" class="border border-gray-600 hover:border-indigo-500 text-gray-300 hover:text-white px-8 py-3 rounded-full font-semibold transition">Me contacter</a>
        </div>
        <div class="flex justify-center gap-6 mt-10 text-gray-500 text-xl">
            <a href="https://www.linkedin.com/in/idy-cissokho" target="_blank" class="hover:text-white transition"><i class="fab fa-linkedin"></i></a>
            <a href="mailto:idycissokh554@gmail.com" class="hover:text-white transition"><i class="fas fa-envelope"></i></a>
            <a href="tel:+221783308811" class="hover:text-white transition"><i class="fas fa-phone"></i></a>
        </div>
    </div>
</section>

{{-- À propos --}}
<section id="about" class="py-24 px-6 max-w-5xl mx-auto">
    <h2 class="text-3xl font-bold mb-12 text-center">À <span class="gradient-text">propos</span></h2>
    <div class="grid md:grid-cols-2 gap-12 items-center">
        <div class="flex justify-center">
            <img src="/moi.jpg" class="w-56 h-56 rounded-full object-cover ring-4 ring-indigo-500">
        </div>
        <div class="text-gray-400 space-y-4 text-lg">
            <p>Je suis un ingénieur logiciel junior expérimenté, spécialisé dans la création d'applications robustes et intuitives.</p>
            <p>Avec une maîtrise approfondie des technologies frontend et backend, je conçois des solutions complètes allant du mobile au web.</p>
            <div class="flex gap-4 mt-2 text-sm text-gray-500">
                <span><i class="fas fa-map-marker-alt mr-1 text-indigo-400"></i>Avenue Metal Afrique Mbao</span>
            </div>
            <a href="#" class="inline-block mt-4 text-indigo-400 hover:text-indigo-300 font-semibold transition">
                Télécharger mon CV <i class="fas fa-download ml-1"></i>
            </a>
        </div>
    </div>
</section>

{{-- Éducation --}}
<section id="education" class="py-24 px-6 bg-gray-900/50">
    <div class="max-w-4xl mx-auto">
        <h2 class="text-3xl font-bold mb-12 text-center">Édu<span class="gradient-text">cation</span></h2>
        <div class="relative border-l-2 border-indigo-600 pl-8 space-y-10">
            @foreach([
                ['2025 – 2027', 'Master 1 (en cours)', 'Institut Supérieur Informatique (ISI)', 'fas fa-graduation-cap'],
                ['2022 – 2025', 'Licence', 'Institut Supérieur Informatique (ISI)', 'fas fa-university'],
                ['2021 – 2022', 'BAC Scientifique', 'Lycée Cheikh Hamidou Kane', 'fas fa-school'],
                ['2018 – 2019', 'BFEM', 'Ama Coumba Seck', 'fas fa-book'],
            ] as [$period, $degree, $school, $icon])
            <div class="relative">
                <div class="absolute -left-11 w-6 h-6 bg-indigo-600 rounded-full flex items-center justify-center">
                    <i class="{{ $icon }} text-white text-xs"></i>
                </div>
                <span class="text-indigo-400 text-sm font-semibold">{{ $period }}</span>
                <h3 class="text-white font-bold text-lg">{{ $degree }}</h3>
                <p class="text-gray-400">{{ $school }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Compétences --}}
<section id="skills" class="py-24 px-6">
    <div class="max-w-5xl mx-auto">
        <h2 class="text-3xl font-bold mb-12 text-center">Mes <span class="gradient-text">compétences</span></h2>
        <div class="grid md:grid-cols-2 gap-8">

            @foreach([
                ['Développement Backend', 'fas fa-server', ['Spring Boot', 'Laravel', 'Node.js', 'Python']],
                ['Développement Frontend', 'fas fa-desktop', ['Angular', 'React.js', 'Vue.js', 'Next.js']],
                ['Mobile', 'fas fa-mobile-alt', ['Flutter', 'React Native']],
                ['Bases de données', 'fas fa-database', ['MySQL', 'PostgreSQL', 'Oracle']],
                ['DevOps & Outils', 'fab fa-docker', ['Git', 'GitLab CI/CD', 'Docker', 'Linux']],
                ['Autres', 'fas fa-tools', ['WordPress', 'Drupal', 'Microsoft Office']],
            ] as [$category, $icon, $techs])
            <div class="bg-gray-800 rounded-2xl p-6 card-hover">
                <div class="flex items-center gap-3 mb-4">
                    <i class="{{ $icon }} text-indigo-400 text-xl"></i>
                    <h3 class="font-bold text-white">{{ $category }}</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    @foreach($techs as $tech)
                    <span class="text-xs bg-indigo-600/20 text-indigo-300 px-3 py-1 rounded-full">{{ $tech }}</span>
                    @endforeach
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

{{-- Projets --}}
<section id="projects" class="py-24 px-6 bg-gray-900/50">
    <div class="max-w-5xl mx-auto">
        <h2 class="text-3xl font-bold mb-12 text-center">Mes <span class="gradient-text">projets</span></h2>
        <div class="grid md:grid-cols-3 gap-8">

            @foreach([
                [
                    'Application de Signature Électronique',
                    '2023 – 2024',
                    'Application complète de gestion et de validation de documents électroniques avec gestion des rôles, chaîne de validation et traçabilité des signatures.',
                    ['Spring Boot', 'React.js'],
                    '🔐'
                ],
                [
                    'Application Web de Gestion de Restaurant',
                    '2022 – 2023',
                    'Application web pour optimiser la gestion des activités d\'un restaurant : commandes, utilisateurs (admin, serveur, caissier), suivi des ventes.',
                    ['Laravel', 'Angular'],
                    '🍽️'
                ],
                [
                    'Application Mobile Météo',
                    '2024 – 2025',
                    'Application mobile de consultation des données météorologiques en temps réel via API externe, avec carte interactive et jauge de progression.',
                    ['Flutter'],
                    '🌤️'
                ],
            ] as [$title, $period, $desc, $tags, $emoji])
            <div class="bg-gray-800 rounded-2xl overflow-hidden card-hover">
                <div class="h-40 bg-gradient-to-br from-indigo-600/30 to-purple-600/30 flex items-center justify-center text-5xl">
                    {{ $emoji }}
                </div>
                <div class="p-6">
                    <span class="text-indigo-400 text-xs font-semibold">{{ $period }}</span>
                    <h3 class="font-bold text-lg mt-1 mb-2">{{ $title }}</h3>
                    <p class="text-gray-400 text-sm mb-4">{{ $desc }}</p>
                    <div class="flex flex-wrap gap-2">
                        @foreach($tags as $tag)
                        <span class="text-xs bg-indigo-600/20 text-indigo-400 px-3 py-1 rounded-full">{{ $tag }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

{{-- Langues --}}
<section id="languages" class="py-16 px-6">
    <div class="max-w-3xl mx-auto text-center">
        <h2 class="text-3xl font-bold mb-10">Lan<span class="gradient-text">gues</span></h2>
        <div class="flex justify-center gap-10">
            @foreach([['Français', '95'], ['Anglais', '65']] as [$lang, $level])
            <div class="bg-gray-800 rounded-2xl p-8 w-40 card-hover">
                <div class="text-4xl mb-3">{{ $lang === 'Français' ? '🇫🇷' : '🇬🇧' }}</div>
                <p class="font-semibold mb-3">{{ $lang }}</p>
                <div class="w-full bg-gray-700 rounded-full h-1.5">
                    <div class="bg-indigo-500 h-1.5 rounded-full" style="width: {{ $level }}%"></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Contact --}}
<section id="contact" class="py-24 px-6 bg-gray-900/50">
    <div class="max-w-2xl mx-auto text-center">
        <h2 class="text-3xl font-bold mb-4">Me <span class="gradient-text">contacter</span></h2>
        <p class="text-gray-400 mb-8">Une idée de projet ? N'hésite pas à me contacter !</p>

        <div class="flex justify-center gap-6 mb-10 flex-wrap text-sm text-gray-400">
            <a href="mailto:idycissokh554@gmail.com" class="flex items-center gap-2 hover:text-indigo-400 transition">
                <i class="fas fa-envelope text-indigo-400"></i> idycissokh554@gmail.com
            </a>
            <a href="tel:+221783308811" class="flex items-center gap-2 hover:text-indigo-400 transition">
                <i class="fas fa-phone text-indigo-400"></i> +221 78 330 88 11
            </a>
            <a href="https://www.linkedin.com/in/idy-cissokho" target="_blank" class="flex items-center gap-2 hover:text-indigo-400 transition">
                <i class="fab fa-linkedin text-indigo-400"></i> LinkedIn
            </a>
        </div>

        <form class="space-y-4 text-left">
            <div class="grid md:grid-cols-2 gap-4">
                <input type="text" placeholder="Nom" class="w-full bg-gray-800 border border-gray-700 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-indigo-500 transition"/>
                <input type="email" placeholder="Email" class="w-full bg-gray-800 border border-gray-700 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-indigo-500 transition"/>
            </div>
            <input type="text" placeholder="Sujet" class="w-full bg-gray-800 border border-gray-700 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-indigo-500 transition"/>
            <textarea rows="5" placeholder="Message" class="w-full bg-gray-800 border border-gray-700 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-indigo-500 transition resize-none"></textarea>
            <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-500 text-white py-3 rounded-xl font-semibold transition">
                Envoyer le message <i class="fas fa-paper-plane ml-2"></i>
            </button>
        </form>
    </div>
</section>

@endsection
