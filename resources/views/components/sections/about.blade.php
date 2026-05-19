<section id="about" class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid md:grid-cols-2 gap-16 items-center">

            {{-- Photo side --}}
            @if($profile?->photo)
            <div class="relative">
                <div class="absolute -inset-4 bg-gradient-to-br from-[#4648d4]/10 to-[#b4136d]/10 rounded-3xl blur-2xl"></div>
                <img src="{{ Storage::url($profile->photo) }}" alt="{{ $profile->name }}"
                     class="relative w-full max-w-sm mx-auto aspect-square object-cover rounded-2xl shadow-indigo">
            </div>
            @endif

            {{-- Text side --}}
            <div>
                <p class="font-mono text-xs font-medium text-[#4648d4] uppercase tracking-widest mb-3">// About Me</p>
                <h2 class="text-3xl md:text-4xl font-bold text-[#0b1c30] mb-6 leading-tight">
                    Passionate Developer,<br><span class="text-gradient">Problem Solver</span>
                </h2>
                <p class="text-[#464554] text-base leading-relaxed mb-6">
                    {{ $profile?->bio ?? '' }}
                </p>

                @if($profile?->location)
                <div class="flex items-center gap-2 text-[#767586] text-sm mb-8">
                    <svg class="w-4 h-4 text-[#4648d4]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                    </svg>
                    {{ $profile->location }}
                </div>
                @endif

                {{-- Stats grid --}}
                <div class="grid grid-cols-2 gap-4 mb-8">
                    @php
                        $stats = [
                            ['label' => 'Years Experience', 'value' => $experiences->count() > 0 ? now()->year - ($experiences->min('start_date')?->year ?? now()->year) . '+' : '0'],
                            ['label' => 'Projects Done', 'value' => $projects->count() . '+'],
                            ['label' => 'Technologies', 'value' => \App\Models\Skill::visible()->count() . '+'],
                            ['label' => 'Happy Clients', 'value' => \App\Models\Testimonial::visible()->count() . '+'],
                        ];
                    @endphp
                    @foreach($stats as $stat)
                    <div class="bg-[#eff4ff] rounded-xl p-4 text-center">
                        <div class="text-2xl font-extrabold text-[#4648d4] mb-1">{{ $stat['value'] }}</div>
                        <div class="text-xs text-[#767586] font-medium">{{ $stat['label'] }}</div>
                    </div>
                    @endforeach
                </div>

                @if($profile?->cv_file)
                <a href="{{ route('cv.download') }}"
                   class="inline-flex items-center gap-2 px-6 py-3 bg-[#4648d4] text-white font-semibold rounded-lg hover:bg-[#3335b0] transition shadow-indigo">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                    Download Resume
                </a>
                @endif
            </div>

        </div>
    </div>
</section>
