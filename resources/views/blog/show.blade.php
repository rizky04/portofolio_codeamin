@extends('layouts.app')

@php
    $pageTitle = $post->title;
    $wordCount = str_word_count(strip_tags($post->body ?? ''));
    $readTime  = max(1, ceil($wordCount / 200));
@endphp

@section('content')

{{-- Reading progress --}}
<div id="reading-progress" class="fixed top-0 left-0 h-[3px] z-[60] w-0 transition-none"
     style="background:linear-gradient(90deg,#6366f1,#ec4899,#06b6d4)"></div>

{{-- ══ HERO ══════════════════════════════════════════════════ --}}
<section class="hero-bg relative overflow-hidden">
    <div class="hero-grid absolute inset-0 opacity-40"></div>
    <div class="orb w-[500px] h-[500px] bg-primary/20 -top-32 -left-40"></div>
    <div class="orb w-[400px] h-[400px] bg-secondary/15 -top-10 right-[-80px]"></div>

    <div class="relative z-10 max-w-3xl mx-auto px-6 pt-32 pb-12">

        {{-- Back link --}}
        <a href="{{ route('blog.index') }}"
           class="inline-flex items-center gap-1.5 text-white/40 hover:text-primary/80 text-sm font-mono mb-10 transition group">
            <svg class="w-4 h-4 group-hover:-translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            Kembali ke Blog
        </a>

        {{-- Meta chips --}}
        <div class="flex flex-wrap items-center gap-2 mb-6">
            @if($post->category)
                <span class="chip bg-primary/20 text-primary border border-primary/25">{{ $post->category }}</span>
            @endif
            <span class="inline-flex items-center gap-1.5 text-white/35 font-mono text-xs">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                {{ $readTime }} menit baca
            </span>
        </div>

        {{-- Title --}}
        <h1 class="text-3xl md:text-5xl font-black text-white leading-tight tracking-tight mb-5">
            {{ $post->title }}
        </h1>

        {{-- Excerpt --}}
        @if($post->excerpt)
            <p class="text-white/50 text-lg leading-relaxed mb-8">{{ $post->excerpt }}</p>
        @endif

        {{-- Author / date / word count --}}
        <div class="flex flex-wrap items-center gap-3 text-sm text-white/40 font-mono">
            <div class="flex items-center gap-2">
                <span class="w-7 h-7 rounded-full btn-gradient flex items-center justify-center text-white text-xs font-black shrink-0">
                    {{ strtoupper(substr($post->author?->name ?? 'A', 0, 1)) }}
                </span>
                <span class="text-white/60 font-sans font-medium">{{ $post->author?->name ?? 'Admin' }}</span>
            </div>
            <span class="text-white/20">·</span>
            <span>{{ $post->published_at?->format('d M Y') }}</span>
            @if($wordCount)
                <span class="text-white/20">·</span>
                <span>{{ number_format($wordCount) }} kata</span>
            @endif
        </div>

        {{-- Tags --}}
        @if(is_array($post->tags) && count($post->tags))
            <div class="flex flex-wrap gap-2 mt-6">
                @foreach($post->tags as $tag)
                    <span class="px-3 py-1 rounded-full text-xs font-mono bg-white/5 border border-white/10 text-white/40">
                        #{{ $tag }}
                    </span>
                @endforeach
            </div>
        @endif
    </div>

    {{-- Gradient rule at bottom --}}
    <div class="relative z-10 max-w-3xl mx-auto px-6 pb-0">
        <div class="h-px" style="background:linear-gradient(90deg,transparent,#6366f1,#ec4899,#06b6d4,transparent)"></div>
    </div>
</section>

{{-- ══ COVER IMAGE ════════════════════════════════════════════ --}}
@if($post->cover_image)
<div class="bg-dark-base">
    <div class="max-w-3xl mx-auto px-6 pb-0 -mb-8 relative z-10">
        <div class="relative rounded-2xl overflow-hidden h-56 md:h-80 shadow-2xl">
            <img src="{{ Storage::url($post->cover_image) }}"
                 alt="{{ $post->title }}"
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
        </div>
    </div>
</div>
@endif

{{-- ══ ARTICLE BODY ════════════════════════════════════════════ --}}
<section class="bg-white py-16 @if($post->cover_image) pt-16 @endif">
    <div class="max-w-3xl mx-auto px-6">

        {{-- Article prose --}}
        <div id="article-content" class="
            prose prose-lg max-w-none
            prose-headings:font-black prose-headings:text-on-surface prose-headings:tracking-tight
            prose-h2:text-2xl prose-h2:mt-12 prose-h2:mb-4 prose-h2:pb-3 prose-h2:border-b prose-h2:border-surface-container
            prose-h3:text-xl prose-h3:mt-8 prose-h3:mb-3
            prose-p:text-on-surface-variant prose-p:leading-[1.85]
            prose-a:text-primary prose-a:font-medium prose-a:no-underline hover:prose-a:underline
            prose-strong:text-on-surface
            prose-code:text-primary prose-code:bg-surface-low prose-code:px-1.5 prose-code:py-0.5 prose-code:rounded prose-code:font-mono prose-code:text-sm prose-code:before:content-none prose-code:after:content-none
            prose-pre:bg-[#0d1628] prose-pre:border prose-pre:border-[#1e2d4a] prose-pre:rounded-xl prose-pre:shadow-lg
            prose-blockquote:border-l-4 prose-blockquote:border-primary prose-blockquote:bg-surface-low prose-blockquote:rounded-r-xl prose-blockquote:not-italic prose-blockquote:text-on-surface-variant
            prose-img:rounded-xl prose-img:shadow-card
            prose-li:text-on-surface-variant
            prose-hr:border-surface-container">
            {!! $post->body !!}
        </div>

        {{-- Divider --}}
        <div class="mt-14 mb-10 h-px bg-surface-container"></div>

        {{-- Tags (bottom) --}}
        @if(is_array($post->tags) && count($post->tags))
            <div class="mb-8">
                <p class="text-xs font-mono font-semibold text-outline uppercase tracking-widest mb-3">Tags</p>
                <div class="flex flex-wrap gap-2">
                    @foreach($post->tags as $tag)
                        <span class="px-3 py-1.5 rounded-full text-xs font-mono bg-surface-low border border-surface-container text-on-surface-variant">
                            #{{ $tag }}
                        </span>
                    @endforeach
                </div>
            </div>
        @endif

        {{-- Share --}}
        <div class="mb-10">
            <p class="text-xs font-mono font-semibold text-outline uppercase tracking-widest mb-3">Bagikan</p>
            <div class="flex flex-wrap gap-2">
                <a href="https://twitter.com/intent/tweet?text={{ urlencode($post->title) }}&url={{ urlencode(request()->url()) }}"
                   target="_blank" rel="noopener"
                   class="inline-flex items-center gap-2 px-4 py-2 rounded-full text-sm font-medium border border-surface-container text-on-surface-variant hover:text-primary hover:border-primary/40 hover:bg-surface-low transition">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.746l7.73-8.835L1.254 2.25H8.08l4.259 5.629L18.244 2.25zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                    </svg>
                    Twitter / X
                </a>
                <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->url()) }}&title={{ urlencode($post->title) }}"
                   target="_blank" rel="noopener"
                   class="inline-flex items-center gap-2 px-4 py-2 rounded-full text-sm font-medium border border-surface-container text-on-surface-variant hover:text-primary hover:border-primary/40 hover:bg-surface-low transition">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                    </svg>
                    LinkedIn
                </a>
                <button onclick="copyLink()"
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-full text-sm font-medium border border-surface-container text-on-surface-variant hover:text-primary hover:border-primary/40 hover:bg-surface-low transition">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/>
                    </svg>
                    Salin Link
                </button>
            </div>
        </div>

        {{-- Back button --}}
        <a href="{{ route('blog.index') }}"
           class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full text-sm font-semibold border border-surface-container text-on-surface-variant hover:text-primary hover:border-primary/40 hover:bg-surface-low transition">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            Kembali ke Blog
        </a>
    </div>
</section>

{{-- Toast --}}
<div id="copy-toast"
     class="fixed bottom-8 left-1/2 -translate-x-1/2 flex items-center gap-2 px-5 py-3 rounded-full text-sm font-medium text-white shadow-xl border border-white/10 z-50 pointer-events-none"
     style="background:#080f1e; opacity:0; transform:translate(-50%,12px); transition:opacity .3s,transform .3s">
    <svg class="w-4 h-4 text-green-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
    </svg>
    Link berhasil disalin!
</div>

<script>
    // Reading progress bar
    const bar = document.getElementById('reading-progress');
    const content = document.getElementById('article-content');
    window.addEventListener('scroll', () => {
        if (!content) return;
        const top = content.getBoundingClientRect().top;
        const h   = content.offsetHeight - window.innerHeight;
        bar.style.width = Math.min(100, Math.max(0, (-top / h) * 100)) + '%';
    }, { passive: true });

    // Copy link
    function copyLink() {
        navigator.clipboard.writeText(window.location.href).then(() => {
            const t = document.getElementById('copy-toast');
            t.style.opacity = '1';
            t.style.transform = 'translate(-50%, 0)';
            setTimeout(() => {
                t.style.opacity = '0';
                t.style.transform = 'translate(-50%, 12px)';
            }, 2500);
        });
    }
</script>

@endsection
