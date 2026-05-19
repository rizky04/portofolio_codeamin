@extends('layouts.app')

@php $pageTitle = 'Experience' @endphp

@section('content')

{{-- Page Header --}}
<section class="pt-32 pb-16 bg-[#f8f9ff]">
    <div class="max-w-6xl mx-auto px-6">
        <p class="anim-fade-up opacity-0 font-mono text-xs font-medium text-primary uppercase tracking-widest mb-3">// Background</p>
        <h1 class="anim-fade-up opacity-0 text-4xl md:text-5xl font-extrabold text-on-surface mb-4">Pengalaman & Pendidikan</h1>
        <p class="anim-fade-up opacity-0 text-on-surface-variant text-lg max-w-2xl">
            Riwayat perjalanan karir dan latar belakang pendidikan yang membentuk keahlian saya.
        </p>
    </div>
</section>

{{-- Timeline --}}
<section class="py-16 bg-white">
    <div class="max-w-5xl mx-auto px-6">
        <div class="grid md:grid-cols-2 gap-12">

            {{-- Work Experience --}}
            <div>
                <h2 class="flex items-center gap-3 text-xl font-bold text-on-surface mb-10">
                    <span class="flex items-center justify-center w-9 h-9 bg-primary/10 rounded-xl">
                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </span>
                    Pengalaman Kerja
                </h2>

                <div class="relative pl-5 border-l-2 border-surface-high space-y-6 anim-stagger-parent">
                    @forelse($experiences as $exp)
                    <div class="relative anim-stagger-child opacity-0">
                        <div class="timeline-dot absolute -left-[21px] w-3 h-3 rounded-full bg-primary border-2 border-white shadow-sm mt-1.5 scale-0"></div>
                        <div class="glass-card rounded-xl p-5 hover:shadow-indigo transition-shadow duration-200">
                            <div class="flex items-start justify-between gap-2 mb-1">
                                <h3 class="text-on-surface font-semibold text-sm">{{ $exp->position }}</h3>
                                @if($exp->is_current)
                                <span class="chip bg-emerald-100 text-emerald-700 shrink-0">Aktif</span>
                                @endif
                            </div>
                            <p class="text-primary text-sm font-semibold mb-1">{{ $exp->company }}</p>
                            <p class="font-mono text-xs text-outline mb-3">
                                {{ $exp->start_date->format('M Y') }} —
                                {{ $exp->is_current ? 'Sekarang' : ($exp->end_date?->format('M Y') ?? '—') }}
                            </p>
                            @if($exp->description)
                            <p class="text-on-surface-variant text-sm leading-relaxed">{{ $exp->description }}</p>
                            @endif
                        </div>
                    </div>
                    @empty
                    <p class="text-outline text-sm pl-2">Belum ada data pengalaman.</p>
                    @endforelse
                </div>
            </div>

            {{-- Education --}}
            <div>
                <h2 class="flex items-center gap-3 text-xl font-bold text-on-surface mb-10">
                    <span class="flex items-center justify-center w-9 h-9 bg-secondary/10 rounded-xl">
                        <svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 7v-7m0 0l-9-5m9 5l9-5"/>
                        </svg>
                    </span>
                    Pendidikan & Sertifikasi
                </h2>

                <div class="relative pl-5 border-l-2 border-surface-high space-y-6 anim-stagger-parent">
                    @forelse($educations as $edu)
                    <div class="relative anim-stagger-child opacity-0">
                        <div class="timeline-dot absolute -left-5.25 w-3 h-3 rounded-full bg-secondary border-2 border-white shadow-sm mt-1.5 scale-0"></div>
                        <div class="glass-card rounded-xl p-5 hover:shadow-indigo transition-shadow duration-200">
                            <h3 class="text-on-surface font-semibold text-sm mb-1">{{ $edu->degree }} — {{ $edu->field }}</h3>
                            <p class="text-secondary text-sm font-semibold mb-1">{{ $edu->institution }}</p>
                            <p class="font-mono text-xs text-outline mb-3">
                                {{ $edu->start_year }} — {{ $edu->end_year ?? 'Sekarang' }}
                            </p>
                            @if($edu->description)
                            <p class="text-on-surface-variant text-sm leading-relaxed">{{ $edu->description }}</p>
                            @endif
                        </div>
                    </div>
                    @empty
                    <p class="text-outline text-sm pl-2">Belum ada data pendidikan.</p>
                    @endforelse
                </div>
            </div>

        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-16 bg-[#f8f9ff] border-t border-surface-container">
    <div class="max-w-3xl mx-auto px-6 text-center">
        <p class="text-outline text-sm font-mono uppercase tracking-widest mb-3">// Interested?</p>
        <h2 class="text-2xl font-bold text-on-surface mb-4">Lihat CV lengkap atau hubungi saya</h2>
        <div class="flex flex-wrap justify-center gap-4">
            @if($profile?->cv_file)
            <a href="{{ route('cv.download') }}"
               class="inline-flex items-center gap-2 px-6 py-3 bg-primary text-white font-semibold rounded-lg hover:bg-[#3335b0] transition shadow-indigo text-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                Download CV
            </a>
            @endif
            <a href="{{ route('contact') }}"
               class="inline-flex items-center gap-2 px-6 py-3 border border-primary text-primary font-semibold rounded-lg hover:bg-[#eff4ff] transition text-sm">
                Hubungi Saya
            </a>
        </div>
    </div>
</section>

@endsection
