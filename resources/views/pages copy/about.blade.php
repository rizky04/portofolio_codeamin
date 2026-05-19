@extends('layouts.app')

@php $pageTitle = 'About' @endphp

@section('content')

{{-- Page Header --}}
<section class="pt-32 pb-16 bg-[#f8f9ff]">
    <div class="max-w-6xl mx-auto px-6">
        <p class="anim-fade-up opacity-0 font-mono text-xs font-medium text-primary uppercase tracking-widest mb-3">// About Me</p>
        <h1 class="anim-fade-up opacity-0 text-4xl md:text-5xl font-extrabold text-on-surface mb-4">Tentang Saya</h1>
        <p class="anim-fade-up opacity-0 text-on-surface-variant text-lg max-w-2xl">
            Full Stack Developer dengan 5+ tahun pengalaman membangun sistem web dan aplikasi mobile nyata — dari HRD system, POS, hingga company profile untuk berbagai perusahaan dan klien.
        </p>
    </div>
</section>

{{-- Profile Section --}}
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid md:grid-cols-2 gap-16 items-center">

            @if($profile?->photo)
            <div class="anim-slide-left opacity-0 relative">
                <div class="absolute -inset-4 bg-gradient-to-br from-primary/10 to-secondary/10 rounded-3xl blur-2xl"></div>
                <img src="{{ Storage::url($profile->photo) }}" alt="{{ $profile->name }}"
                     class="relative w-full max-w-sm mx-auto aspect-square object-cover rounded-2xl shadow-indigo">
            </div>
            @endif

            <div class="anim-slide-right opacity-0">
                <h2 class="text-2xl font-bold text-on-surface mb-4">{{ $profile?->name }}</h2>
                <p class="text-primary font-semibold mb-6">{{ $profile?->tagline }}</p>
                <p class="text-on-surface-variant leading-relaxed mb-6">{{ $profile?->bio }}</p>

                @if($profile?->location)
                <div class="flex items-center gap-2 text-outline text-sm mb-6">
                    <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                    </svg>
                    {{ $profile->location }}
                </div>
                @endif

                <div class="flex flex-wrap gap-3">
                    @if($profile?->email)
                    <a href="mailto:{{ $profile->email }}" class="inline-flex items-center gap-2 px-4 py-2 bg-surface-low rounded-lg text-sm text-on-surface hover:bg-surface-container transition">
                        <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        {{ $profile->email }}
                    </a>
                    @endif
                    @if($profile?->whatsapp)
                    <a href="https://wa.me/{{ preg_replace('/\D/', '', $profile->whatsapp) }}" target="_blank"
                       class="inline-flex items-center gap-2 px-4 py-2 bg-surface-low rounded-lg text-sm text-on-surface hover:bg-surface-container transition">
                        <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        WhatsApp
                    </a>
                    @endif
                    @if($profile?->cv_file)
                    <a href="{{ route('cv.download') }}"
                       class="inline-flex items-center gap-2 px-5 py-2 bg-primary text-white font-semibold rounded-lg hover:bg-[#3335b0] transition text-sm shadow-indigo">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                        Download CV
                    </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Stats --}}
<section class="py-12 bg-[#f8f9ff] border-y border-surface-container">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center anim-stagger-parent">
            @php
                $stats = [
                    ['value' => ($experiences->count() > 0 ? now()->year - ($experiences->min('start_date')?->year ?? now()->year) : 0) . '+', 'label' => 'Tahun Pengalaman'],
                    ['value' => \App\Models\Project::published()->count() . '+', 'label' => 'Proyek Selesai'],
                    ['value' => \App\Models\Skill::visible()->count() . '+', 'label' => 'Teknologi'],
                    ['value' => \App\Models\Testimonial::visible()->count() . '+', 'label' => 'Klien Puas'],
                ];
            @endphp
            @foreach($stats as $stat)
            <div class="anim-stagger-child opacity-0 bg-white rounded-xl p-6 shadow-sm">
                <div class="text-3xl font-extrabold text-primary mb-1">{{ $stat['value'] }}</div>
                <div class="text-sm text-outline font-medium">{{ $stat['label'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Skills --}}
<section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-6">
        <div class="anim-fade-up opacity-0 text-center mb-14">
            <p class="font-mono text-xs font-medium text-primary uppercase tracking-widest mb-3">// The Toolchain</p>
            <h2 class="text-3xl md:text-4xl font-bold text-on-surface">Keahlian & Teknologi</h2>
        </div>

        @php
            $categoryConfig = [
                'frontend'  => ['label' => 'Frontend',    'color' => 'bg-primary/10 text-primary',       'dot' => 'bg-primary'],
                'backend'   => ['label' => 'Backend',     'color' => 'bg-secondary/10 text-secondary',   'dot' => 'bg-secondary'],
                'devops'    => ['label' => 'DevOps',      'color' => 'bg-[#00685d]/10 text-[#00685d]',   'dot' => 'bg-[#00685d]'],
                'tools'     => ['label' => 'Tools',       'color' => 'bg-amber-100 text-amber-700',      'dot' => 'bg-amber-500'],
                'soft'      => ['label' => 'Soft Skills', 'color' => 'bg-violet-100 text-violet-700',    'dot' => 'bg-violet-500'],
            ];
            $levelBadge = [
                'beginner'     => 'bg-slate-100 text-slate-500',
                'intermediate' => 'bg-amber-100 text-amber-700',
                'advanced'     => 'bg-emerald-100 text-emerald-700',
            ];
        @endphp

        @foreach($skills as $category => $categorySkills)
        @php $cfg = $categoryConfig[$category] ?? ['label' => ucfirst($category), 'color' => 'bg-slate-100 text-slate-600', 'dot' => 'bg-slate-400']; @endphp
        <div class="mb-12">
            <div class="flex items-center gap-3 mb-6">
                <span class="w-2 h-2 rounded-full {{ $cfg['dot'] }}"></span>
                <h3 class="font-mono text-sm font-semibold text-on-surface-variant uppercase tracking-wider">{{ $cfg['label'] }}</h3>
                <div class="flex-1 h-px bg-outline-variant"></div>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4 anim-stagger-parent">
                @foreach($categorySkills as $skill)
                <div class="skill-card anim-stagger-child opacity-0 glass-card rounded-xl p-4 flex flex-col items-center gap-3">
                    @if($skill->icon)
                        @if(str_starts_with($skill->icon, 'http'))
                            <img src="{{ $skill->icon }}" alt="{{ $skill->name }}" class="w-10 h-10 object-contain">
                        @else
                            <span class="text-3xl">{{ $skill->icon }}</span>
                        @endif
                    @else
                        <div class="w-10 h-10 rounded-lg {{ $cfg['color'] }} flex items-center justify-center font-mono font-bold text-xs">
                            {{ strtoupper(substr($skill->name, 0, 2)) }}
                        </div>
                    @endif
                    <span class="text-on-surface text-xs font-semibold text-center leading-tight">{{ $skill->name }}</span>
                    <span class="chip {{ $levelBadge[$skill->level] ?? 'bg-slate-100 text-slate-500' }}">{{ ucfirst($skill->level) }}</span>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</section>

@endsection
