@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section id="hero" class="relative max-w-[1400px] mx-auto px-6 md:px-12 py-12 overflow-hidden flex flex-col justify-center min-h-[85vh]">
    {{-- Fond décoratif --}}
    <div class="absolute top-20 right-10 w-64 h-64 bg-orange-600/5 rounded-full blur-3xl -z-10"></div>
    <div class="absolute bottom-10 left-10 w-80 h-80 bg-blue-600/5 rounded-full blur-3xl -z-10"></div>

    <div class="grid md:grid-cols-[40%_60%] gap-8 lg:gap-12 items-stretch w-full mb-10">

        {{-- Colonne gauche : photo + stats --}}
        <div class="order-1 flex flex-col gap-4 w-full max-w-[320px] mx-auto md:ml-auto md:mr-0">
            {{-- Photo --}}
            <div class="relative w-full h-80 group">
                <div class="absolute inset-0 bg-gradient-to-br from-blue-600 to-orange-600 rounded-3xl p-1 opacity-0 group-hover:opacity-100 transition-opacity duration-500 -z-10"></div>
                <div class="relative w-full h-full rounded-3xl bg-[#1e293b] overflow-hidden transition-all duration-300 hover:scale-[1.02] shadow-xl">
                    <img src="/BON.png" alt="Idy Cissokho" class="w-full h-full object-cover object-top" loading="eager">
                </div>
            </div>
            {{-- Stats --}}
            <div class="grid grid-cols-2 gap-3 w-full h-24">
                <div class="bg-[#1e293b] rounded-xl border-2 border-[#334155] hover:border-blue-600 transition-all duration-300 hover:scale-105 cursor-pointer group flex flex-col items-center justify-center text-center h-full">
                    <p class="text-3xl font-bold text-blue-500 group-hover:scale-110 transition-transform duration-300">2+</p>
                    <p class="text-[#64748b] text-xs mt-1 group-hover:text-[#94a3b8] transition-colors">Années d'Exp.</p>
                </div>
                <div class="bg-[#1e293b] rounded-xl border-2 border-[#334155] hover:border-orange-600 transition-all duration-300 hover:scale-105 group flex flex-col items-center justify-center text-center h-full">
                    <p class="text-3xl font-bold text-orange-600 group-hover:scale-110 transition-transform duration-300">5+</p>
                    <p class="text-[#64748b] text-xs mt-1 group-hover:text-[#94a3b8] transition-colors">Projets Réalisés</p>
                </div>
            </div>
        </div>

        {{-- Colonne droite : texte --}}
        <div class="order-2 flex flex-col justify-between h-full pt-1 md:pt-0 text-center md:text-left">
            <div class="flex flex-col justify-start">
                <p class="text-blue-500 font-bold text-xs tracking-widest uppercase mb-2">Jeune diplômé en Génie Logiciel — Full Stack</p>
                <h1 class="text-4xl lg:text-5xl font-bold text-white leading-tight">
                    Idy <span class="text-orange-600">Cissokho</span>
                </h1>
                <p class="text-lg text-[#94a3b8] leading-relaxed mt-4 max-w-lg mx-auto md:mx-0">
                    Développeur Full Stack passionné, spécialisé en Spring Boot, Laravel, React.js et Flutter.
                    Je conçois des applications robustes et intuitives, du mobile au web, avec une attention particulière à la qualité du code et à l'expérience utilisateur.
                </p>
            </div>

            {{-- Réseaux sociaux --}}
            <div class="w-full mt-6 pb-6 border-b border-[#334155] flex justify-center md:justify-start">
                <div class="flex gap-3">
                    @foreach([
                        ['https://www.linkedin.com/in/idy-cissokho', 'fab fa-linkedin', 'LinkedIn'],
                        ['https://github.com/idycissokho', 'fab fa-github', 'GitHub'],
                        ['mailto:idycissokh554@gmail.com', 'fas fa-envelope', 'Email'],
                        ['tel:+221783308811', 'fas fa-phone', 'Téléphone'],
                    ] as [$href, $icon, $label])
                    <a href="{{ $href }}" target="_blank" rel="noopener noreferrer"
                       class="w-12 h-12 rounded-lg bg-[#334155] border-2 border-[#334155] hover:border-blue-500 flex items-center justify-center transition-all duration-300 hover:scale-110 group"
                       aria-label="{{ $label }}">
                        <i class="{{ $icon }} text-lg text-white group-hover:text-blue-400 transition-colors"></i>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {{-- Boutons CTA --}}
    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
        <a href="#projects" class="inline-flex items-center justify-center gap-2 w-[220px] h-[52px] bg-orange-600 text-white text-base font-bold rounded-xl hover:opacity-90 hover:-translate-y-1 active:scale-95 transition-all duration-300 shadow-lg">
            Voir mes projets <i class="fas fa-arrow-right"></i>
        </a>
        <a href="#contact" class="inline-flex items-center justify-center gap-2 w-[220px] h-[52px] border-2 border-blue-500 text-blue-400 text-base font-bold rounded-xl hover:bg-blue-500/10 hover:-translate-y-1 active:scale-95 transition-all duration-300">
            Me contacter
        </a>
    </div>
</section>



{{-- Expérience --}}
<section id="experience" class="py-16 px-6 bg-[#0f172a]">
    <div class="max-w-5xl mx-auto">
        <div class="mb-12">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4 text-center">
                Expérience <span class="text-orange-600">Professionnelle</span>
            </h2>
            <p class="text-[#94a3b8] text-lg text-center">Stages et missions réalisés dans le développement logiciel.</p>
        </div>

        <div class="space-y-8">

            @foreach([
                [
                    1,
                    'Développeur Mobile (Stage)',
                    'EndToEnd Developer',
                    'Dakar, Sénégal',
                    'Fév. 2025 – Fév. 2026',
                    '1 an',
                    null,
                    'Application de Recrutement Intelligent',
                    'Développement d’une application mobile de recrutement intelligent permettant la mise en relation entre recruteurs et candidats avec matching automatique.',
                    [
                        'Développement de l’application mobile avec Flutter',
                        'Intégration des algorithmes de matching candidats/offres',
                        'Implémentation des APIs REST backend',
                        'Gestion des profils recruteurs et candidats',
                        'Notifications push et système de messagerie',
                    ],
                    ['Flutter', 'Dart', 'Laravel', 'MySQL', 'REST API', 'Firebase', 'Git'],
                ],
                [
                    2,
                    'Participant Hackathon — SunuSanté',
                    'Docsen / AMREF',
                    'Dakar, Sénégal',
                    '2024 – 2025',
                    'Hackathon',
                    '🏆 Lauréat',
                    'SunuSanté — Plateforme de Santé Communautaire',
                    'Solution numérique d’une plateforme de gestion des campagnes de vaccination et de suivi des femmes enceintes, développée lors du hackathon organisé par Docsen sous AMREF.',
                    [
                        'Conception et développement de la plateforme SunuSanté',
                        'Gestion des campagnes de vaccination communautaires',
                        'Suivi médical des femmes enceintes (rendez-vous, alertes)',
                        'Interface mobile accessible pour les agents de santé',
                    ],
                    ['Laravel', 'Flutter', 'MySQL', 'REST API', 'Tailwind CSS'],
                ],
                [
                    3,
                    'Développeur Backend Spring Boot',
                    'Dakar Dev',
                    'Dakar, Sénégal',
                    '2023 – 2024',
                    '1 an',
                    null,
                    'Application de Signature Électronique',
                    'Développement d’une application complète de gestion et validation de documents électroniques avec gestion des rôles, chaîne de validation et traçabilité des signatures.',
                    [
                        'Implémentation des micro-services backend avec Spring Boot',
                        'Conception de l’architecture de signature et des flux de validation',
                        'Implémentation des tests unitaires et d’intégration',
                        'Gestion des rôles et sécurité avec JWT',
                    ],
                    ['Spring Boot', 'Java', 'React.js', 'PostgreSQL', 'JWT', 'Docker', 'Git'],
                ],
                [
                    4,
                    'Développeur Full Stack (Stage)',
                    'Dem Bok',
                    'Dakar, Sénégal',
                    '2022 – 2023',
                    '4 mois',
                    'En ligne',
                    'Plateforme de Livraison Moto',
                    'Développement d’une plateforme web/mobile de gestion et suivi des livraisons à moto en temps réel.',
                    [
                        'Implémentation des interfaces web et mobile',
                        'Intégration de la géolocalisation en temps réel',
                        'Développement des APIs REST backend',
                        'Gestion des livreurs et suivi des commandes',
                    ],
                    ['Laravel', 'Flutter', 'MySQL', 'REST API', 'Google Maps API', 'Git'],
                ],
            ] as [$num, $role, $company, $location, $period, $duration, $badge, $project, $desc, $missions, $techs])
            <div class="bg-[#1e293b] border-2 border-[#334155] rounded-xl overflow-hidden hover:border-blue-600 transition-all duration-300 hover:shadow-xl">
                {{-- Header --}}
                <div class="bg-gradient-to-r from-blue-700 to-blue-600 p-6">
                    <div class="flex items-center gap-4 mb-2">
                        <div class="w-12 h-12 bg-gradient-to-br from-orange-600 to-orange-500 rounded-full flex items-center justify-center shadow-lg flex-shrink-0">
                            <span class="text-white text-sm font-bold">{{ $num }}</span>
                        </div>
                        <h3 class="text-xl font-bold text-white">{{ $role }}</h3>
                    </div>
                    <div class="flex flex-wrap items-center gap-3">
                        <span class="text-white font-semibold">{{ $company }}</span>
                        @if($badge)
                        <span class="px-3 py-1 bg-white/20 text-white font-semibold rounded-full text-xs">{{ $badge }}</span>
                        @endif
                        <span class="px-3 py-1 bg-white/10 text-white/80 rounded-full text-xs">{{ $duration }}</span>
                    </div>
                </div>

                {{-- Body --}}
                <div class="p-6 space-y-5">
                    {{-- Méta --}}
                    <div class="flex flex-wrap gap-6 text-[#94a3b8] text-sm">
                        <span class="flex items-center gap-2">
                            <i class="fas fa-calendar text-blue-500"></i> {{ $period }}
                        </span>
                        <span class="flex items-center gap-2">
                            <i class="fas fa-map-marker-alt text-blue-500"></i> {{ $location }}
                        </span>
                    </div>

                    {{-- Projet --}}
                    <div class="border-t border-[#334155] pt-5">
                        <div class="flex items-start gap-3 mb-3">
                            <div class="w-8 h-8 bg-gradient-to-br from-orange-600 to-orange-500 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-rocket text-white text-xs"></i>
                            </div>
                            <div>
                                <h4 class="text-base font-bold text-orange-500 mb-1">{{ $project }}</h4>
                                <p class="text-[#94a3b8] text-sm leading-relaxed">{{ $desc }}</p>
                            </div>
                        </div>
                    </div>

                    {{-- Missions --}}
                    <div class="border-t border-[#334155] pt-5">
                        <p class="text-xs font-bold text-white uppercase tracking-wide mb-3">Missions :</p>
                        <ul class="space-y-2">
                            @foreach($missions as $mission)
                            <li class="flex gap-3 text-[#94a3b8] text-sm">
                                <span class="text-blue-500 font-bold flex-shrink-0">→</span>
                                <span>{{ $mission }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    {{-- Technologies --}}
                    <div class="border-t border-[#334155] pt-5">
                        <p class="text-xs font-bold text-white uppercase tracking-wide mb-3">Technologies :</p>
                        <div class="flex flex-wrap gap-2">
                            @foreach($techs as $tech)
                            <span class="px-3 py-1 bg-[#0f172a] rounded text-xs font-medium text-white border border-[#334155] hover:border-blue-500 hover:text-blue-400 transition-all">{{ $tech }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>


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

        {{-- Projets réalisés & déployés --}}
        <h3 class="text-lg font-semibold text-gray-400 uppercase tracking-widest mb-6 flex items-center gap-3">
            <span class="flex-1 h-px bg-gray-700"></span>
            <span class="flex items-center gap-2">Projets réalisés <span class="text-xs bg-green-500/20 text-green-400 px-2 py-0.5 rounded-full normal-case tracking-normal">✅ Déployés</span></span>
            <span class="flex-1 h-px bg-gray-700"></span>
        </h3>
        <div class="grid md:grid-cols-2 gap-8 mb-16">

            @foreach([
                [
                    'Association des Anciens Élèves du Lycée de Tivaouane',
                    '2025 — En ligne',
                    'Site institutionnel premium pour la génération 1993–1997 : espace membre, actualités, événements, galerie et dashboard complet.',
                    ['Laravel', 'Tailwind CSS', 'MySQL'],
                    '🏫',
                    'https://github.com/idycissokho/association_eleve_tivaoune',
                    'https://gen9397.com/'
                ],
                [
                    'Cabinet Dentaire de Mbao',
                    '2024 — En ligne',
                    'Site vitrine pour un cabinet dentaire : présentation des services, système de réservation, FAQ, informations et témoignages patients.',
                    ['WordPress'],
                    '🦺',
                    null,
                    'https://www.dentistembao.com/'
                ],
            ] as [$title, $period, $desc, $tags, $emoji, $code, $demo])
            <div class="bg-gray-800 rounded-2xl overflow-hidden card-hover border border-green-500/20">
                <div class="h-40 bg-gradient-to-br from-green-600/20 to-indigo-600/30 flex items-center justify-center text-5xl">
                    {{ $emoji }}
                </div>
                <div class="p-6">
                    <span class="text-green-400 text-xs font-semibold">{{ $period }}</span>
                    <h3 class="font-bold text-lg mt-1 mb-2">{{ $title }}</h3>
                    <p class="text-gray-400 text-sm mb-4">{{ $desc }}</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        @foreach($tags as $tag)
                        <span class="text-xs bg-indigo-600/20 text-indigo-400 px-3 py-1 rounded-full">{{ $tag }}</span>
                        @endforeach
                    </div>
                    <div class="flex gap-4 text-sm">
                        @if($code)
                        <a href="{{ $code }}" target="_blank" class="text-gray-400 hover:text-white transition"><i class="fab fa-github mr-1"></i>Code</a>
                        @endif
                        <a href="{{ $demo }}" target="_blank" class="text-gray-400 hover:text-white transition"><i class="fas fa-external-link-alt mr-1"></i>Demo</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

        {{-- Projets académiques --}}
        <h3 class="text-lg font-semibold text-gray-400 uppercase tracking-widest mb-6 flex items-center gap-3">
            <span class="flex-1 h-px bg-gray-700"></span>
            <span class="flex items-center gap-2">Projets académiques <span class="text-xs bg-indigo-500/20 text-indigo-400 px-2 py-0.5 rounded-full normal-case tracking-normal">🎓 Formation</span></span>
            <span class="flex-1 h-px bg-gray-700"></span>
        </h3>
        <div class="grid md:grid-cols-3 gap-8 mb-16">

            @foreach([
                [
                    'M1GL 2026 — Gestion des Mémoires',
                    '2025 – 2026',
                    'Plateforme de gestion des mémoires de fin d’études : étudiants, encadreurs, filières, mémoires. API REST ASP.NET Core + Frontend Blazor + Interface Admin Razor Pages + Tests E2E.',
                    ['ASP.NET Core', 'Blazor', 'PostgreSQL', 'JWT', 'Docker'],
                    '🎓',
                    'https://github.com/idycissokho/M1GL2026C-'
                ],
                [
                    'Application de Signature Électronique',
                    '2023 – 2024',
                    'Application complète de gestion et de validation de documents électroniques avec gestion des rôles, chaîne de validation et traçabilité des signatures.',
                    ['Spring Boot', 'React.js'],
                    '🔐',
                    [
                        ['Backend', 'https://gitlab.com/endtoend3/parapheur_document_backend'],
                        ['Frontend', 'https://gitlab.com/endtoend3/Parapheur_Document_FrontEnd'],
                    ]
                ],
                [
                    'POC AWS S3 — Infrastructure Automatisée',
                    '2024 – 2025',
                    'POC d’infrastructure automatisée pour la création et gestion de buckets AWS S3 avec hébergement de sites web statiques. Intégration complète : interface web, backend Flask, Terraform et GitLab CI/CD.',
                    ['Flask', 'Terraform', 'AWS S3', 'GitLab CI/CD', 'Python'],
                    '☁️',
                    'https://gitlab.com/idycissokh554/poc-bucket-exam'
                ],
            ] as [$title, $period, $desc, $tags, $emoji, $github])
            <div class="bg-gray-800 rounded-2xl overflow-hidden card-hover">
                <div class="h-40 bg-gradient-to-br from-indigo-600/30 to-purple-600/30 flex items-center justify-center text-5xl">
                    {{ $emoji }}
                </div>
                <div class="p-6">
                    <span class="text-indigo-400 text-xs font-semibold">{{ $period }}</span>
                    <h3 class="font-bold text-lg mt-1 mb-2">{{ $title }}</h3>
                    <p class="text-gray-400 text-sm mb-4">{{ $desc }}</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        @foreach($tags as $tag)
                        <span class="text-xs bg-indigo-600/20 text-indigo-400 px-3 py-1 rounded-full">{{ $tag }}</span>
                        @endforeach
                    </div>
                    <div class="flex gap-3">
                        @if(is_array($github))
                            @foreach($github as [$label, $url])
                            <a href="{{ $url }}" target="_blank" class="text-gray-400 hover:text-white transition text-sm">
                                <i class="fab fa-gitlab mr-1"></i>{{ $label }}
                            </a>
                            @endforeach
                        @else
                        <a href="{{ $github }}" target="_blank" class="text-gray-400 hover:text-white transition text-sm">
                            <i class="fab fa-github mr-1"></i>Code
                        </a>
                        @endif
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
