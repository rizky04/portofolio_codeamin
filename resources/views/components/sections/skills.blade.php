<section id="skills" class="py-24 bg-[#f8f9ff]">
    <div class="max-w-6xl mx-auto px-6">

        {{-- Header --}}
        <div class="text-center mb-16">
            <p class="font-mono text-xs font-medium text-primary uppercase tracking-widest mb-3">// The Toolchain</p>
            <h2 class="text-3xl md:text-4xl font-bold text-on-surface">Modern Tech Stack</h2>
        </div>

        @php
            $categoryConfig = [
                'frontend'  => ['label' => 'Frontend',   'color' => 'bg-[#4648d4]/10 text-[#4648d4]',   'dot' => 'bg-[#4648d4]'],
                'backend'   => ['label' => 'Backend',    'color' => 'bg-[#b4136d]/10 text-[#b4136d]',   'dot' => 'bg-[#b4136d]'],
                'devops'    => ['label' => 'DevOps',     'color' => 'bg-[#00685d]/10 text-[#00685d]',   'dot' => 'bg-[#00685d]'],
                'tools'     => ['label' => 'Tools',      'color' => 'bg-amber-100 text-amber-700',       'dot' => 'bg-amber-500'],
                'soft'      => ['label' => 'Soft Skills','color' => 'bg-violet-100 text-violet-700',     'dot' => 'bg-violet-500'],
            ];
            $levelBadge = [
                'beginner'     => 'bg-slate-100 text-slate-500',
                'intermediate' => 'bg-amber-100 text-amber-700',
                'advanced'     => 'bg-emerald-100 text-emerald-700',
            ];
        @endphp

        @if($skills->isEmpty())
            <p class="text-center text-on-surface-variant py-12">Belum ada data keahlian. Tambahkan melalui admin panel.</p>
        @else
            @foreach($skills as $category => $categorySkills)
            @php $cfg = $categoryConfig[$category] ?? ['label' => ucfirst($category), 'color' => 'bg-slate-100 text-slate-600', 'dot' => 'bg-slate-400']; @endphp

            <div class="mb-12">
                {{-- Category label --}}
                <div class="flex items-center gap-3 mb-6">
                    <span class="w-2 h-2 rounded-full {{ $cfg['dot'] }}"></span>
                    <h3 class="font-mono text-sm font-semibold text-on-surface-variant uppercase tracking-wider">{{ $cfg['label'] }}</h3>
                    <div class="flex-1 h-px bg-outline-variant"></div>
                </div>

                {{-- Skill cards --}}
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                    @foreach($categorySkills as $skill)
                    <div class="glass-card rounded-xl p-4 flex flex-col items-center gap-3 hover:-translate-y-1 transition-all duration-200 group cursor-default">
                        {{-- Icon --}}
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

                        {{-- Level badge --}}
                        <span class="chip {{ $levelBadge[$skill->level] ?? 'bg-slate-100 text-slate-500' }}">
                            {{ ucfirst($skill->level) }}
                        </span>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        @endif

    </div>
</section>
