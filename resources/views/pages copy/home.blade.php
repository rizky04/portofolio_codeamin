@extends('layouts.app')
@php $pageTitle = 'Home' @endphp

@section('content')

{{-- ══════════════════════════════════════════════════════════
     HERO — Dark immersive section
══════════════════════════════════════════════════════════ --}}
<section class="hero-bg relative min-h-screen flex items-center overflow-hidden">

    {{-- Grid overlay --}}
    <div class="hero-grid absolute inset-0 opacity-100"></div>

    {{-- Floating orbs --}}
    <div class="orb w-[500px] h-[500px] bg-indigo-600/20 -top-32 -left-32"></div>
    <div class="orb w-[400px] h-[400px] bg-pink-600/15 top-1/3 right-0"></div>
    <div class="orb w-[300px] h-[300px] bg-cyan-500/10 bottom-0 left-1/3"></div>

    <div class="relative max-w-6xl mx-auto px-6 pt-28 pb-24 w-full" id="hero-content">
        <div class="grid lg:grid-cols-2 gap-16 items-center">

            {{-- ── Left Text ── --}}
            <div>
                {{-- Available badge --}}
                <div id="hero-badge" class="opacity-0 inline-flex items-center gap-2.5 px-4 py-2 mb-8
                     bg-white/5 border border-indigo-400/30 rounded-full backdrop-blur-sm">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-green-400"></span>
                    </span>
                    <span class="font-mono text-xs font-semibold text-green-400 tracking-widest uppercase">Open to Work</span>
                </div>

                {{-- Name --}}
                <h1 id="hero-heading" class="opacity-0 text-5xl lg:text-7xl font-black leading-[1.05] tracking-tight text-white mb-5">
                    {{ $profile?->name ?? 'Your Name' }}
                </h1>

                {{-- Tagline --}}
                <h2 id="hero-tagline" class="opacity-0 text-xl lg:text-2xl font-bold mb-6 leading-snug">
                    <span class="text-gradient">{{ $profile?->tagline ?? 'Full Stack Developer' }}</span>
                </h2>

                {{-- Bio --}}
                <p id="hero-bio" class="opacity-0 text-white/55 text-base leading-relaxed mb-10 max-w-md">
                    {{ Str::limit($profile?->bio ?? '', 160) }}
                </p>

                {{-- CTAs --}}
                <div id="hero-cta" class="opacity-0 flex flex-wrap gap-3 mb-10">
                    <a href="{{ route('portfolio') }}"
                       class="inline-flex items-center gap-2 px-6 py-3 btn-gradient text-white font-semibold rounded-full hover:opacity-90 transition glow-sm text-sm">
                        Lihat Portfolio
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center gap-2 px-6 py-3 bg-white/8 text-white font-semibold rounded-full hover:bg-white/15 transition border border-white/15 backdrop-blur-sm text-sm">
                        Hubungi Saya
                    </a>
                </div>

                {{-- Social links --}}
                <div id="hero-socials" class="opacity-0 flex items-center gap-3">
                    @if($profile?->github)
                    <a href="{{ $profile->github }}" target="_blank"
                       class="w-10 h-10 flex items-center justify-center rounded-full bg-white/8 hover:bg-primary/30 border border-white/10 text-white/60 hover:text-white transition">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/></svg>
                    </a>
                    @endif
                    @if($profile?->linkedin)
                    <a href="{{ $profile->linkedin }}" target="_blank"
                       class="w-10 h-10 flex items-center justify-center rounded-full bg-white/8 hover:bg-blue-500/30 border border-white/10 text-white/60 hover:text-white transition">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                    @endif
                    @if($profile?->email)
                    <a href="mailto:{{ $profile->email }}"
                       class="w-10 h-10 flex items-center justify-center rounded-full bg-white/8 hover:bg-secondary/30 border border-white/10 text-white/60 hover:text-white transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    </a>
                    @endif
                    @if($profile?->whatsapp)
                    <a href="https://wa.me/{{ preg_replace('/\D/', '', $profile->whatsapp) }}" target="_blank"
                       class="w-10 h-10 flex items-center justify-center rounded-full bg-white/8 hover:bg-green-500/30 border border-white/10 text-white/60 hover:text-white transition">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    </a>
                    @endif
                </div>
            </div>

            {{-- ── Right: Code Card ── --}}
            <div id="hero-code-card" class="opacity-0 relative hidden lg:flex items-center justify-center">
                {{-- Glow --}}
                <div class="absolute inset-0 bg-gradient-to-br from-primary/20 via-secondary/10 to-transparent rounded-3xl blur-3xl"></div>

                <div class="relative w-full max-w-md">
                    {{-- Floating profile chip --}}
                    @if($profile?->photo)
                    <div class="absolute -top-5 -right-5 z-10 glass-dark rounded-2xl px-4 py-3 flex items-center gap-3 border border-primary/20">
                        <img src="{{ Storage::url($profile->photo) }}" alt="{{ $profile->name }}"
                             class="w-9 h-9 rounded-full object-cover ring-2 ring-primary/40">
                        <div>
                            <p class="text-white text-xs font-semibold">{{ $profile->name }}</p>
                            <p class="text-white/40 text-xs">{{ $profile->location ?? 'Remote' }}</p>
                        </div>
                        <span class="ml-1 w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                    </div>
                    @endif

                    {{-- Code window --}}
                    <div class="glass-dark rounded-2xl overflow-hidden border border-white/8">
                        {{-- Titlebar --}}
                        <div class="flex items-center gap-2 px-5 py-3.5 bg-white/3 border-b border-white/5">
                            <span class="w-3 h-3 rounded-full bg-red-500"></span>
                            <span class="w-3 h-3 rounded-full bg-yellow-400"></span>
                            <span class="w-3 h-3 rounded-full bg-green-500"></span>
                            <span class="ml-auto font-mono text-xs text-white/30">~/profile.ts</span>
                        </div>
                        {{-- Code --}}
                        <div class="px-6 py-6 font-mono text-sm leading-7 text-white/80">
                            <div class="text-indigo-300/70">interface <span class="text-cyan-300">Developer</span> <span class="text-white/50">{</span></div>
                            <div class="pl-5">
                                <span class="text-indigo-300">name</span><span class="text-white/50">: </span><span class="text-amber-300">"{{ $profile?->name ?? 'Your Name' }}"</span><span class="text-white/50">;</span>
                            </div>
                            <div class="pl-5">
                                <span class="text-indigo-300">role</span><span class="text-white/50">: </span><span class="text-amber-300">"Full Stack Developer"</span><span class="text-white/50">;</span>
                            </div>
                            <div class="pl-5">
                                <span class="text-indigo-300">location</span><span class="text-white/50">: </span><span class="text-amber-300">"{{ $profile?->location ?? 'Indonesia' }}"</span><span class="text-white/50">;</span>
                            </div>
                            @if($skills->isNotEmpty())
                            <div class="pl-5">
                                <span class="text-indigo-300">skills</span><span class="text-white/50">: [</span>
                                <div class="pl-5">
                                    @foreach($skills->flatten()->take(4) as $s)
                                    <span class="text-green-300">"{{ $s->name }}"</span>@if(!$loop->last)<span class="text-white/50">, </span>@endif
                                    @endforeach
                                </div>
                                <span class="text-white/50">];</span>
                            </div>
                            @endif
                            <div class="pl-5"><span class="text-indigo-300">available</span><span class="text-white/50">: </span><span class="text-green-400">true</span><span class="text-white/50">;</span></div>
                            <div class="text-white/50">}</div>
                            <div class="mt-3 flex items-center gap-2">
                                <span class="text-white/25">▶</span>
                                <span class="text-green-400 text-xs">Compiled successfully</span>
                            </div>
                        </div>
                    </div>

                    {{-- Stats badge --}}
                    <div class="absolute -bottom-5 -left-5 glass-dark rounded-2xl px-4 py-3 border border-white/8">
                        <div class="flex items-center gap-4">
                            @php $projCount = \App\Models\Project::published()->count(); @endphp
                            <div class="text-center">
                                <div class="text-xl font-black text-white">{{ $projCount }}+</div>
                                <div class="text-white/40 text-xs">Projects</div>
                            </div>
                            <div class="w-px h-8 bg-white/10"></div>
                            <div class="text-center">
                                <div class="text-xl font-black text-white">7+</div>
                                <div class="text-white/40 text-xs">Years</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        {{-- Scroll indicator --}}
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 text-white/20">
            <span class="font-mono text-xs tracking-widest uppercase">Scroll</span>
            <div class="w-px h-10 bg-gradient-to-b from-white/20 to-transparent animate-bounce"></div>
        </div>
    </div>
</section>

{{-- ══════════════════════════════════════════════════════════
     STATS — Minimal dark strip
══════════════════════════════════════════════════════════ --}}
<section class="bg-dark-base py-10 border-y border-white/5">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-0 anim-stagger-parent">
            @php
                $allExp = \App\Models\Experience::orderByDesc('start_date')->get();
                $stats = [
                    ['n' => ($allExp->count() > 0 ? now()->year - ($allExp->min('start_date')?->year ?? now()->year) : 0), 's' => '+', 'l' => 'Years Exp'],
                    ['n' => \App\Models\Project::published()->count(), 's' => '+', 'l' => 'Projects'],
                    ['n' => \App\Models\Skill::visible()->count(), 's' => '+', 'l' => 'Technologies'],
                    ['n' => \App\Models\Testimonial::visible()->count(), 's' => '+', 'l' => 'Happy Clients'],
                ];
            @endphp
            @foreach($stats as $i => $stat)
            <div class="anim-stagger-child opacity-0 text-center py-6 {{ $i < 3 ? 'border-r border-white/5' : '' }}">
                <div class="text-4xl font-black text-white mb-1">
                    <span data-count="{{ $stat['n'] }}">{{ $stat['n'] }}</span>{{ $stat['s'] }}
                </div>
                <div class="text-white/35 text-xs font-mono uppercase tracking-widest">{{ $stat['l'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ══════════════════════════════════════════════════════════
     SELECTED PROJECTS
══════════════════════════════════════════════════════════ --}}
<section class="py-24 bg-surface">
    <div class="max-w-6xl mx-auto px-6">
        <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-6 mb-14 anim-fade-up opacity-0">
            <div>
                <div class="section-label">Selected Work</div>
                <h2 class="text-3xl md:text-4xl font-black text-on-surface">Project Terbaru</h2>
            </div>
            <a href="{{ route('portfolio') }}"
               class="inline-flex items-center gap-2 text-sm font-semibold text-primary hover:gap-3 transition-all group">
                Lihat Semua
                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 anim-stagger-parent">
            @forelse($projects as $project)
            @php $colors = [['bg-primary/10 text-primary border-primary/15','from-primary/5'],['bg-secondary/10 text-secondary border-secondary/15','from-secondary/5'],['bg-cyan-100 text-cyan-700 border-cyan-200','from-cyan-50'],['bg-amber-100 text-amber-700 border-amber-200','from-amber-50']]; $ci = $loop->index % 4; @endphp
            <div class="project-card anim-stagger-child opacity-0 group relative bg-white rounded-2xl overflow-hidden border border-surface-container hover:border-primary/30 transition-all duration-300 shadow-card hover:shadow-card-hover cursor-pointer flex flex-col">

                {{-- Thumbnail --}}
                <div class="relative h-48 overflow-hidden bg-gradient-to-br {{ $colors[$ci][1] }} to-white">
                    @if($project->thumbnail)
                        <img src="{{ Storage::url($project->thumbnail) }}" alt="{{ $project->title }}"
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    @else
                        <div class="w-full h-full flex items-center justify-center">
                            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-primary/20 to-secondary/20 flex items-center justify-center">
                                <svg class="w-7 h-7 text-primary/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                                </svg>
                            </div>
                        </div>
                    @endif
                    {{-- Category badge --}}
                    @if($project->category)
                    <div class="absolute top-3 left-3">
                        <span class="chip bg-dark-base/70 text-white/80 backdrop-blur-sm text-xs">{{ $project->category }}</span>
                    </div>
                    @endif
                </div>

                {{-- Body --}}
                <div class="p-5 flex flex-col flex-1">
                    @if($project->technologies->isNotEmpty())
                    <div class="flex flex-wrap gap-1.5 mb-3">
                        @foreach($project->technologies->take(3) as $i => $tech)
                        <span class="chip {{ $colors[$i % 4][0] }} border">{{ $tech->name }}</span>
                        @endforeach
                        @if($project->technologies->count() > 3)
                        <span class="chip bg-surface-low text-outline border border-surface-container">+{{ $project->technologies->count()-3 }}</span>
                        @endif
                    </div>
                    @endif

                    <h3 class="font-bold text-on-surface text-base mb-1.5 group-hover:text-primary transition">{{ $project->title }}</h3>
                    <p class="text-on-surface-variant text-sm leading-relaxed line-clamp-2 mb-4 flex-1">{{ $project->description }}</p>

                    <div class="flex gap-3 pt-3 border-t border-surface-container mt-auto">
                        @if($project->demo_url)
                        <a href="{{ $project->demo_url }}" target="_blank"
                           class="flex items-center gap-1.5 text-xs font-semibold text-primary hover:underline">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                            Live Demo
                        </a>
                        @endif
                        @if($project->github_url)
                        <a href="{{ $project->github_url }}" target="_blank"
                           class="flex items-center gap-1.5 text-xs font-semibold text-on-surface-variant hover:text-on-surface ml-auto">
                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/></svg>
                            Code
                        </a>
                        @endif
                    </div>
                </div>
            </div>
            @empty
            <p class="col-span-3 text-center text-outline py-20">Belum ada proyek.</p>
            @endforelse
        </div>
    </div>
</section>

{{-- ══════════════════════════════════════════════════════════
     EXPERIENCE PREVIEW — Dark card strip
══════════════════════════════════════════════════════════ --}}
<section class="py-24 bg-dark-base relative overflow-hidden">
    <div class="orb w-96 h-96 bg-primary/10 -top-20 right-10 opacity-60"></div>
    <div class="max-w-6xl mx-auto px-6 relative">
        <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-6 mb-14 anim-fade-up opacity-0">
            <div>
                <div class="section-label text-indigo-400">Career Path</div>
                <h2 class="text-3xl md:text-4xl font-black text-white">Pengalaman Kerja</h2>
            </div>
            <a href="{{ route('experience') }}"
               class="inline-flex items-center gap-2 text-sm font-semibold text-indigo-400 hover:text-indigo-300 hover:gap-3 transition-all group">
                Lihat Semua
                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>

        <div class="space-y-3 anim-stagger-parent">
            @forelse($experiences as $exp)
            <div class="anim-stagger-child opacity-0 group flex flex-col sm:flex-row sm:items-center justify-between gap-4
                        bg-white/3 hover:bg-white/6 border border-white/6 hover:border-indigo-400/30
                        rounded-2xl px-6 py-5 transition-all duration-200 cursor-default">
                <div class="flex items-center gap-4">
                    {{-- Icon --}}
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-primary/20 to-secondary/20 flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-white font-semibold text-sm">{{ $exp->position }}</p>
                        <p class="text-indigo-400 text-xs font-mono">{{ $exp->company }}</p>
                    </div>
                </div>
                <div class="flex items-center gap-3 shrink-0">
                    @if($exp->is_current)
                    <span class="chip bg-green-500/15 text-green-400 border border-green-500/20">● Aktif</span>
                    @endif
                    <span class="font-mono text-xs text-white/30">
                        {{ $exp->start_date->format('Y') }} — {{ $exp->is_current ? 'Now' : ($exp->end_date?->format('Y') ?? '?') }}
                    </span>
                </div>
            </div>
            @empty
            <p class="text-white/30 text-center py-10">Belum ada data.</p>
            @endforelse
        </div>
    </div>
</section>

{{-- ══════════════════════════════════════════════════════════
     TESTIMONIALS
══════════════════════════════════════════════════════════ --}}
@if($testimonials->isNotEmpty())
<section class="py-24 bg-surface-low">
    <div class="max-w-5xl mx-auto px-6">
        <div class="text-center mb-14 anim-fade-up opacity-0">
            <div class="section-label justify-center">Testimonials</div>
            <h2 class="text-3xl md:text-4xl font-black text-on-surface">Kata Klien</h2>
        </div>
        <div class="grid md:grid-cols-3 gap-6 anim-stagger-parent">
            @foreach($testimonials as $t)
            <div class="anim-stagger-child opacity-0 bg-white rounded-2xl p-6 shadow-card hover:shadow-card-hover transition-all border border-surface-container flex flex-col gap-4">
                {{-- Stars --}}
                <div class="flex gap-1">
                    @for($i=0;$i<5;$i++)<svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>@endfor
                </div>
                <p class="text-on-surface-variant text-sm leading-relaxed flex-1">"{{ $t->content }}"</p>
                <div class="flex items-center gap-3 pt-3 border-t border-surface-container">
                    @if($t->photo)
                    <img src="{{ Storage::url($t->photo) }}" class="w-9 h-9 rounded-full object-cover ring-2 ring-primary/20" alt="{{ $t->name }}">
                    @else
                    <div class="w-9 h-9 rounded-full btn-gradient flex items-center justify-center font-black text-white text-sm">
                        {{ strtoupper(substr($t->name, 0, 1)) }}
                    </div>
                    @endif
                    <div>
                        <p class="text-sm font-bold text-on-surface">{{ $t->name }}</p>
                        @if($t->position)<p class="text-xs text-outline">{{ $t->position }}@if($t->company), {{ $t->company }}@endif</p>@endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- ══════════════════════════════════════════════════════════
     CTA SECTION
══════════════════════════════════════════════════════════ --}}
<section class="relative py-28 hero-bg overflow-hidden cta-section">
    <div class="hero-grid absolute inset-0 opacity-60"></div>
    <div class="orb w-96 h-96 bg-primary/20 -top-20 -left-20"></div>
    <div class="orb w-64 h-64 bg-secondary/15 bottom-0 right-10"></div>

    <div class="relative max-w-3xl mx-auto px-6 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-1.5 bg-white/5 border border-white/10 rounded-full mb-6">
            <span class="text-yellow-400 text-sm">✦</span>
            <span class="font-mono text-xs text-white/50 uppercase tracking-widest">Let's Build Together</span>
        </div>
        <h2 class="opacity-0 text-4xl md:text-5xl font-black text-white leading-tight mb-5">
            Punya project?<br><span class="text-gradient">Let's talk.</span>
        </h2>
        <p class="opacity-0 text-white/50 text-lg mb-10 max-w-lg mx-auto">
            Saya terbuka untuk project freelance, kolaborasi, maupun peluang kerja baru.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('contact') }}"
               class="opacity-0 inline-flex items-center gap-2 px-8 py-3.5 btn-gradient text-white font-bold rounded-full hover:opacity-90 transition glow-primary text-sm">
                Hubungi Saya
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            @if($profile?->cv_file)
            <a href="{{ route('cv.download') }}"
               class="opacity-0 inline-flex items-center gap-2 px-8 py-3.5 bg-white/8 hover:bg-white/15 text-white font-bold rounded-full transition border border-white/15 text-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                Download CV
            </a>
            @endif
        </div>
    </div>
</section>

@endsection
