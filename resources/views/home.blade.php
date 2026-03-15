@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section id="hero" class="min-h-screen flex items-center justify-center text-center px-6 pt-20">
    <div>
        <p class="text-indigo-400 text-sm uppercase tracking-widest mb-4">Bienvenue sur mon portfolio</p>
        <h1 class="text-5xl md:text-7xl font-extrabold mb-6">
            Salut, je suis <span class="gradient-text">Ton Nom</span>
        </h1>
        <p class="text-gray-400 text-xl md:text-2xl mb-10">Développeur Full Stack · Laravel · Vue.js</p>
        <div class="flex justify-center gap-4">
            <a href="#projects" class="bg-indigo-600 hover:bg-indigo-500 text-white px-8 py-3 rounded-full font-semibold transition">Voir mes projets</a>
            <a href="#contact" class="border border-gray-600 hover:border-indigo-500 text-gray-300 hover:text-white px-8 py-3 rounded-full font-semibold transition">Me contacter</a>
        </div>
        <div class="flex justify-center gap-6 mt-10 text-gray-500 text-xl">
            <a href="#" class="hover:text-white transition"><i class="fab fa-github"></i></a>
            <a href="#" class="hover:text-white transition"><i class="fab fa-linkedin"></i></a>
            <a href="#" class="hover:text-white transition"><i class="fab fa-twitter"></i></a>
        </div>
    </div>
</section>

{{-- À propos --}}
<section id="about" class="py-24 px-6 max-w-5xl mx-auto">
    <h2 class="text-3xl font-bold mb-12 text-center">À <span class="gradient-text">propos</span></h2>
    <div class="grid md:grid-cols-2 gap-12 items-center">
        <div class="flex justify-center">
            <div class="w-56 h-56 rounded-full bg-gradient-to-br from-indigo-600 to-purple-600 flex items-center justify-center text-7xl">
                👨‍💻
            </div>
        </div>
        <div class="text-gray-400 space-y-4 text-lg">
            <p>Je suis un développeur passionné avec X ans d'expérience dans la création d'applications web modernes et performantes.</p>
            <p>J'aime résoudre des problèmes complexes et créer des expériences utilisateur fluides et intuitives.</p>
            <a href="#" class="inline-block mt-4 text-indigo-400 hover:text-indigo-300 font-semibold transition">
                Télécharger mon CV <i class="fas fa-download ml-1"></i>
            </a>
        </div>
    </div>
</section>

{{-- Compétences --}}
<section id="skills" class="py-24 px-6 bg-gray-900/50">
    <div class="max-w-5xl mx-auto">
        <h2 class="text-3xl font-bold mb-12 text-center">Mes <span class="gradient-text">compétences</span></h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            @foreach([
                ['PHP', 'fab fa-php', '90'],
                ['Laravel', 'fab fa-laravel', '85'],
                ['JavaScript', 'fab fa-js', '80'],
                ['Vue.js', 'fab fa-vuejs', '75'],
                ['MySQL', 'fas fa-database', '85'],
                ['Git', 'fab fa-git-alt', '90'],
                ['Docker', 'fab fa-docker', '70'],
                ['Linux', 'fab fa-linux', '75'],
            ] as [$name, $icon, $level])
            <div class="bg-gray-800 rounded-2xl p-6 text-center card-hover">
                <i class="{{ $icon }} text-4xl text-indigo-400 mb-3"></i>
                <p class="font-semibold mb-2">{{ $name }}</p>
                <div class="w-full bg-gray-700 rounded-full h-1.5">
                    <div class="bg-indigo-500 h-1.5 rounded-full" style="width: {{ $level }}%"></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Projets --}}
<section id="projects" class="py-24 px-6 max-w-5xl mx-auto">
    <h2 class="text-3xl font-bold mb-12 text-center">Mes <span class="gradient-text">projets</span></h2>
    <div class="grid md:grid-cols-3 gap-8">
        @foreach([
            ['Projet 1', 'Description courte du projet. Technologies utilisées et objectif principal.', ['Laravel', 'Vue.js', 'MySQL']],
            ['Projet 2', 'Description courte du projet. Technologies utilisées et objectif principal.', ['React', 'Node.js', 'MongoDB']],
            ['Projet 3', 'Description courte du projet. Technologies utilisées et objectif principal.', ['PHP', 'Alpine.js', 'Tailwind']],
        ] as [$title, $desc, $tags])
        <div class="bg-gray-800 rounded-2xl overflow-hidden card-hover">
            <div class="h-40 bg-gradient-to-br from-indigo-600/30 to-purple-600/30 flex items-center justify-center text-5xl">🚀</div>
            <div class="p-6">
                <h3 class="font-bold text-lg mb-2">{{ $title }}</h3>
                <p class="text-gray-400 text-sm mb-4">{{ $desc }}</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    @foreach($tags as $tag)
                    <span class="text-xs bg-indigo-600/20 text-indigo-400 px-3 py-1 rounded-full">{{ $tag }}</span>
                    @endforeach
                </div>
                <div class="flex gap-4 text-sm">
                    <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-github mr-1"></i>Code</a>
                    <a href="#" class="text-gray-400 hover:text-white transition"><i class="fas fa-external-link-alt mr-1"></i>Demo</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

{{-- Contact --}}
<section id="contact" class="py-24 px-6 bg-gray-900/50">
    <div class="max-w-2xl mx-auto text-center">
        <h2 class="text-3xl font-bold mb-4">Me <span class="gradient-text">contacter</span></h2>
        <p class="text-gray-400 mb-10">Une idée de projet ? N'hésite pas à me contacter !</p>
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
