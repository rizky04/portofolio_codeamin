<section id="experience" class="py-24 bg-surface">
    <div class="max-w-5xl mx-auto px-6">

        <div class="text-center mb-16">
            <p class="font-mono text-xs font-medium text-primary uppercase tracking-widest mb-3">// Background</p>
            <h2 class="text-3xl md:text-4xl font-bold text-on-surface">Experience & Education</h2>
        </div>

        <div class="grid md:grid-cols-2 gap-12">

            {{-- Work Experience --}}
            <div>
                <h3 class="flex items-center gap-3 text-base font-bold text-on-surface mb-8">
                    <span class="flex items-center justify-center w-8 h-8 bg-primary/10 rounded-lg">
                        <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </span>
                    Work Experience
                </h3>

                <div class="relative pl-5 border-l-2 border-surface-high space-y-6">
                    @forelse($experiences as $exp)
                    <div class="relative">
                        <div class="absolute -left-[21px] w-3 h-3 rounded-full bg-primary border-2 border-white shadow-sm mt-1.5"></div>
                        <div class="glass-card rounded-xl p-5 hover:shadow-indigo transition-shadow duration-200">
                            <div class="flex items-start justify-between gap-2 mb-1">
                                <h4 class="text-on-surface font-semibold text-sm">{{ $exp->position }}</h4>
                                @if($exp->is_current)
                                <span class="chip bg-emerald-100 text-emerald-700 shrink-0">Active</span>
                                @endif
                            </div>
                            <p class="text-primary text-sm font-semibold mb-1">{{ $exp->company }}</p>
                            <p class="font-mono text-xs text-outline mb-3">
                                {{ $exp->start_date->format('M Y') }} —
                                {{ $exp->is_current ? 'Present' : ($exp->end_date?->format('M Y') ?? '—') }}
                            </p>
                            @if($exp->description)
                            <p class="text-on-surface-variant text-sm leading-relaxed">{{ $exp->description }}</p>
                            @endif
                        </div>
                    </div>
                    @empty
                    <p class="text-outline text-sm pl-2">No experience data yet.</p>
                    @endforelse
                </div>
            </div>

            {{-- Education --}}
            <div>
                <h3 class="flex items-center gap-3 text-base font-bold text-on-surface mb-8">
                    <span class="flex items-center justify-center w-8 h-8 bg-secondary/10 rounded-lg">
                        <svg class="w-4 h-4 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 7v-7m0 0l-9-5m9 5l9-5"/>
                        </svg>
                    </span>
                    Education
                </h3>

                <div class="relative pl-5 border-l-2 border-surface-high space-y-6">
                    @forelse($educations as $edu)
                    <div class="relative">
                        <div class="absolute -left-[21px] w-3 h-3 rounded-full bg-secondary border-2 border-white shadow-sm mt-1.5"></div>
                        <div class="glass-card rounded-xl p-5 hover:shadow-indigo transition-shadow duration-200">
                            <h4 class="text-on-surface font-semibold text-sm mb-1">{{ $edu->degree }} — {{ $edu->field }}</h4>
                            <p class="text-secondary text-sm font-semibold mb-1">{{ $edu->institution }}</p>
                            <p class="font-mono text-xs text-outline mb-3">
                                {{ $edu->start_year }} — {{ $edu->end_year ?? 'Present' }}
                            </p>
                            @if($edu->description)
                            <p class="text-on-surface-variant text-sm leading-relaxed">{{ $edu->description }}</p>
                            @endif
                        </div>
                    </div>
                    @empty
                    <p class="text-outline text-sm pl-2">No education data yet.</p>
                    @endforelse
                </div>
            </div>

        </div>
    </div>
</section>
