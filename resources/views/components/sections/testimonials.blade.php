<section id="testimonials" class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-6">

        <div class="text-center mb-16">
            <p class="font-mono text-xs font-medium text-primary uppercase tracking-widest mb-3">// Testimonials</p>
            <h2 class="text-3xl md:text-4xl font-bold text-on-surface">What They Say</h2>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($testimonials as $testimonial)
            <div class="glass-card rounded-2xl p-6 flex flex-col gap-4 hover:-translate-y-1 hover:shadow-indigo transition-all duration-200">
                {{-- Quote icon --}}
                <svg class="w-8 h-8 text-primary/20" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                </svg>

                <p class="text-on-surface-variant text-sm leading-relaxed italic flex-1">"{{ $testimonial->quote }}"</p>

                <div class="flex items-center gap-3 pt-4 border-t border-surface-container">
                    @if($testimonial->photo)
                        <img src="{{ Storage::url($testimonial->photo) }}" alt="{{ $testimonial->name }}"
                             class="w-10 h-10 rounded-full object-cover border-2 border-primary/10">
                    @else
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center font-bold text-primary text-sm">
                            {{ strtoupper(substr($testimonial->name, 0, 1)) }}
                        </div>
                    @endif
                    <div>
                        <p class="text-on-surface font-semibold text-sm">{{ $testimonial->name }}</p>
                        <p class="text-outline text-xs font-mono">
                            {{ $testimonial->position }}{{ $testimonial->company ? ', ' . $testimonial->company : '' }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
