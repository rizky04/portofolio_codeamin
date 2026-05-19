<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $profile?->tagline ?? 'Portfolio' }} — {{ $profile?->name ?? '' }}">
    <title>{{ $pageTitle ?? ($profile?->name ?? 'Portfolio') }} | {{ $profile?->tagline ?? 'Developer' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=geist:400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body class="bg-surface text-on-surface font-sans antialiased">

    {{-- ── Navbar ─────────────────────────────────────────── --}}
    <header id="navbar" class="fixed top-0 inset-x-0 z-50 transition-all duration-300">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="flex items-center justify-between h-16">

                {{-- Logo --}}
                <a href="{{ route('home') }}"
                   class="font-mono font-bold text-base tracking-tight text-primary flex items-center gap-1.5 group">
                    <span class="w-7 h-7 rounded-lg bg-primary flex items-center justify-center text-white text-xs font-black group-hover:rotate-12 transition-transform duration-300">&lt;/&gt;</span>
                    <span class="hidden sm:block">{{ $profile?->name ?? 'Dev' }}</span>
                </a>

                {{-- Desktop Nav --}}
                <nav class="hidden md:flex items-center gap-1 bg-white/80 backdrop-blur-xl border border-white/60 rounded-full px-2 py-1.5 shadow-sm">
                    @php
                        $navLinks = [
                            ['route' => 'home',       'label' => 'Home'],
                            ['route' => 'about',      'label' => 'About'],
                            ['route' => 'portfolio',  'label' => 'Portfolio'],
                            // ['route' => 'experience', 'label' => 'Experience'],
                            ['route' => 'contact',    'label' => 'Contact'],
                            ['route' => 'blog.index', 'label' => 'Blog', 'routeIs' => 'blog.*'],
                        ];
                    @endphp
                    @foreach($navLinks as $nav)
                    @php
                        $isActive = isset($nav['routeIs'])
                            ? request()->routeIs($nav['routeIs'])
                            : request()->routeIs($nav['route']);
                    @endphp
                    <a href="{{ route($nav['route']) }}"
                       class="nav-link {{ $isActive ? 'active' : '' }}">
                        {{ $nav['label'] }}
                    </a>
                    @endforeach
                </nav>

                {{-- CTA + Hamburger --}}
                <div class="flex items-center gap-3">
                    @if($profile?->cv_file)
                    <a href="{{ route('cv.download') }}"
                       class="hidden md:inline-flex items-center gap-1.5 px-4 py-2 btn-gradient text-white text-sm font-semibold rounded-full hover:opacity-90 transition shadow-sm">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                        Resume
                    </a>
                    @endif

                    <button id="menu-btn"
                            class="md:hidden w-9 h-9 flex items-center justify-center rounded-full bg-white border border-surface-container text-on-surface-variant hover:text-primary hover:border-primary/30 transition">
                        <svg id="menu-icon-open" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        <svg id="menu-icon-close" class="w-4 h-4 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        {{-- Mobile Menu --}}
        <div id="mobile-menu"
             class="hidden md:hidden mx-4 mt-1 mb-2 rounded-2xl bg-white/95 backdrop-blur-xl border border-surface-container shadow-card overflow-hidden">
            <div class="flex flex-col p-3 gap-0.5">
                @php
                    $mobileLinks = [
                        ['route' => 'home',       'label' => 'Home'],
                        ['route' => 'about',      'label' => 'About'],
                        ['route' => 'portfolio',  'label' => 'Portfolio'],
                        // ['route' => 'experience', 'label' => 'Experience'],
                        ['route' => 'contact',    'label' => 'Contact'],
                        ['route' => 'blog.index', 'label' => 'Blog', 'routeIs' => 'blog.*'],
                    ];
                @endphp
                @foreach($mobileLinks as $nav)
                @php
                    $isActive = isset($nav['routeIs'])
                        ? request()->routeIs($nav['routeIs'])
                        : request()->routeIs($nav['route']);
                @endphp
                <a href="{{ route($nav['route']) }}"
                   class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-sm font-medium transition {{ $isActive ? 'bg-surface-low text-primary font-semibold' : 'text-on-surface-variant hover:bg-surface-low hover:text-primary' }}"
                   onclick="closeMobileMenu()">
                    {{ $nav['label'] }}
                    @if($isActive)
                    <span class="ml-auto w-1.5 h-1.5 rounded-full bg-primary"></span>
                    @endif
                </a>
                @endforeach
                @if($profile?->cv_file)
                <div class="pt-2 mt-1 border-t border-surface-container">
                    <a href="{{ route('cv.download') }}"
                       class="flex items-center justify-center gap-2 px-4 py-2.5 btn-gradient text-white text-sm font-semibold rounded-xl">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                        Download Resume
                    </a>
                </div>
                @endif
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    {{-- ── Footer ──────────────────────────────────────────── --}}
    <footer class="bg-dark-base text-white/60 mt-0">
        <div class="max-w-6xl mx-auto px-6 py-14">
            <div class="flex flex-col md:flex-row items-center justify-between gap-8">
                <div class="text-center md:text-left">
                    <a href="{{ route('home') }}"
                       class="font-mono font-bold text-white text-lg tracking-tight mb-2 inline-block">
                        &lt;{{ $profile?->name ?? 'Portfolio' }} /&gt;
                    </a>
                    <p class="text-sm text-white/40 mt-1">{{ $profile?->tagline ?? 'Developer' }}</p>
                </div>

                <nav class="flex flex-wrap justify-center gap-x-6 gap-y-2 text-sm">
                    @foreach([['home','Home'],['about','About'],['portfolio','Portfolio'],['experience','Experience'],['contact','Contact']] as [$r,$l])
                    <a href="{{ route($r) }}" class="hover:text-white transition">{{ $l }}</a>
                    @endforeach
                </nav>

                <div class="flex gap-3">
                    @if($profile?->github)
                    <a href="{{ $profile->github }}" target="_blank"
                       class="w-9 h-9 flex items-center justify-center rounded-full bg-white/5 hover:bg-primary/20 hover:text-primary border border-white/10 transition text-white/60">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/></svg>
                    </a>
                    @endif
                    @if($profile?->linkedin)
                    <a href="{{ $profile->linkedin }}" target="_blank"
                       class="w-9 h-9 flex items-center justify-center rounded-full bg-white/5 hover:bg-primary/20 hover:text-primary border border-white/10 transition text-white/60">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                    @endif
                    @if($profile?->whatsapp)
                    <a href="https://wa.me/{{ preg_replace('/\D/', '', $profile->whatsapp) }}" target="_blank"
                       class="w-9 h-9 flex items-center justify-center rounded-full bg-white/5 hover:bg-green-500/20 hover:text-green-400 border border-white/10 transition text-white/60">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    </a>
                    @endif
                </div>
            </div>

            <div class="mt-10 pt-6 border-t border-white/5 text-center text-xs text-white/25">
                © {{ date('Y') }} {{ $profile?->name ?? 'Portfolio' }}. Built with Laravel, Tailwind & anime.js.
            </div>
        </div>
    </footer>

    {{-- Back to Top --}}
    <button id="back-to-top"
            class="hidden fixed bottom-6 right-6 w-10 h-10 btn-gradient text-white rounded-full glow-sm flex items-center justify-center hover:opacity-90 transition z-40">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 15l7-7 7 7"/></svg>
    </button>

    <script>
        // Navbar scroll effect
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 20) {
                navbar.classList.add('bg-white/80', 'backdrop-blur-xl', 'shadow-sm', 'border-b', 'border-white/60');
            } else {
                navbar.classList.remove('bg-white/80', 'backdrop-blur-xl', 'shadow-sm', 'border-b', 'border-white/60');
            }
        }, { passive: true });

        // Mobile menu
        const menuBtn    = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const iconOpen   = document.getElementById('menu-icon-open');
        const iconClose  = document.getElementById('menu-icon-close');
        let menuOpen = false;

        menuBtn.addEventListener('click', () => {
            menuOpen = !menuOpen;
            mobileMenu.classList.toggle('hidden', !menuOpen);
            iconOpen.classList.toggle('hidden', menuOpen);
            iconClose.classList.toggle('hidden', !menuOpen);
        });

        function closeMobileMenu() {
            menuOpen = false;
            mobileMenu.classList.add('hidden');
            iconOpen.classList.remove('hidden');
            iconClose.classList.add('hidden');
        }

        // Back to top
        const backToTop = document.getElementById('back-to-top');
        window.addEventListener('scroll', () => {
            backToTop.classList.toggle('hidden', window.scrollY < 400);
        }, { passive: true });
        backToTop.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
    </script>
</body>
</html>
