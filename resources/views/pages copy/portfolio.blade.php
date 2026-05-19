@extends('layouts.app')

@php $pageTitle = 'Portfolio' @endphp

@section('content')

{{-- Page Header --}}
<section class="pt-32 pb-16 bg-[#f8f9ff]">
    <div class="max-w-6xl mx-auto px-6">
        <p class="anim-fade-up opacity-0 font-mono text-xs font-medium text-primary uppercase tracking-widest mb-3">// Portfolio</p>
        <h1 class="anim-fade-up opacity-0 text-4xl md:text-5xl font-extrabold text-on-surface mb-4">Semua Proyek</h1>
        <p class="anim-fade-up opacity-0 text-on-surface-variant text-lg max-w-2xl">
            Kumpulan sistem dan aplikasi nyata yang telah dibangun — dari ERP, HRD, e-commerce, hingga company profile.
        </p>
    </div>
</section>

{{-- Projects --}}
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-6">

        {{-- Filter --}}
        @php $categories = $projects->pluck('category')->filter()->unique()->values(); @endphp
        @if($categories->isNotEmpty())
        <div class="flex flex-wrap gap-3 mb-10" id="project-filters">
            <button data-filter="all" class="filter-btn px-4 py-2 rounded-full font-mono text-xs font-semibold bg-primary text-white transition">
                All ({{ $projects->count() }})
            </button>
            @foreach($categories as $cat)
            <button data-filter="{{ Str::slug($cat) }}"
                class="filter-btn px-4 py-2 rounded-full font-mono text-xs font-semibold bg-surface-low text-on-surface-variant hover:bg-surface-container transition">
                {{ $cat }}
            </button>
            @endforeach
        </div>
        @endif

        {{-- Grid --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 anim-stagger-parent" id="projects-grid">
            @forelse($projects as $project)
            @php $tagColors = ['bg-primary/10 text-primary', 'bg-secondary/10 text-secondary', 'bg-[#00685d]/10 text-[#00685d]', 'bg-amber-100 text-amber-700']; @endphp
            <div class="project-card anim-stagger-child opacity-0 gradient-border rounded-2xl overflow-hidden group bg-white"
                 data-category="{{ Str::slug($project->category) }}">

                <div class="h-48 bg-surface-container overflow-hidden">
                    @if($project->thumbnail)
                        <img src="{{ Storage::url($project->thumbnail) }}" alt="{{ $project->title }}"
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    @else
                        <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-primary/5 to-secondary/5">
                            <svg class="w-12 h-12 text-outline-variant" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                    @endif
                </div>

                <div class="p-6">
                    @if($project->technologies->isNotEmpty())
                    <div class="flex flex-wrap gap-2 mb-4">
                        @foreach($project->technologies->take(4) as $i => $tech)
                        <span class="chip {{ $tagColors[$i % count($tagColors)] }}">{{ $tech->name }}</span>
                        @endforeach
                        @if($project->technologies->count() > 4)
                        <span class="chip bg-surface-low text-outline">+{{ $project->technologies->count() - 4 }}</span>
                        @endif
                    </div>
                    @endif

                    <h3 class="text-on-surface font-bold text-lg mb-2">{{ $project->title }}</h3>
                    <p class="text-on-surface-variant text-sm leading-relaxed mb-5 line-clamp-3">{{ $project->description }}</p>

                    <div class="flex gap-3 pt-4 border-t border-surface-container">
                        @if($project->demo_url)
                        <a href="{{ $project->demo_url }}" target="_blank"
                           class="flex items-center gap-1.5 text-sm font-semibold text-primary hover:text-[#3335b0] transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                            Live Demo
                        </a>
                        @endif
                        @if($project->github_url)
                        <a href="{{ $project->github_url }}" target="_blank"
                           class="flex items-center gap-1.5 text-sm font-semibold text-on-surface-variant hover:text-on-surface transition ml-auto">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/></svg>
                            Source
                        </a>
                        @endif
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-3 py-20 text-center text-outline">
                Belum ada proyek. Tambahkan melalui admin panel.
            </div>
            @endforelse
        </div>

    </div>
</section>

<script>
    document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            const filter = btn.dataset.filter;
            document.querySelectorAll('.filter-btn').forEach(b => {
                b.classList.remove('bg-primary', 'text-white');
                b.classList.add('bg-surface-low', 'text-on-surface-variant');
            });
            btn.classList.add('bg-primary', 'text-white');
            btn.classList.remove('bg-surface-low', 'text-on-surface-variant');
            document.querySelectorAll('.project-card').forEach(card => {
                card.style.display = (filter === 'all' || card.dataset.category === filter) ? '' : 'none';
            });
        });
    });
</script>

@endsection
