@extends('layouts.app')

@php $pageTitle = 'Blog' @endphp

@section('content')

<section class="pt-32 pb-16 bg-[#f8f9ff]">
    <div class="max-w-6xl mx-auto px-6">
        <p class="font-mono text-xs font-medium text-primary uppercase tracking-widest mb-3">// Blog</p>
        <h1 class="text-4xl md:text-5xl font-extrabold text-on-surface mb-4">Artikel & Tulisan</h1>
        <p class="text-on-surface-variant text-lg max-w-2xl">Catatan, tutorial, dan berbagi pengalaman seputar dunia IT dan web development.</p>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-6">
        @if($posts->isEmpty())
            <p class="text-center text-outline py-20">Belum ada artikel yang dipublikasikan.</p>
        @else
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($posts as $post)
            <a href="{{ route('blog.show', $post->slug) }}"
               class="group gradient-border rounded-2xl overflow-hidden hover:-translate-y-1 hover:shadow-indigo transition-all duration-300 bg-white">
                @if($post->cover_image)
                <div class="h-48 overflow-hidden">
                    <img src="{{ Storage::url($post->cover_image) }}" alt="{{ $post->title }}"
                         class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                </div>
                @endif
                <div class="p-6">
                    @if($post->category)
                    <span class="chip bg-primary/10 text-primary mb-3 inline-block">{{ $post->category }}</span>
                    @endif
                    <h2 class="text-on-surface font-semibold text-lg mb-2 group-hover:text-primary transition">{{ $post->title }}</h2>
                    @if($post->excerpt)
                    <p class="text-on-surface-variant text-sm line-clamp-3 mb-4">{{ $post->excerpt }}</p>
                    @endif
                    <p class="text-outline text-xs font-mono">{{ $post->published_at?->diffForHumans() }}</p>
                </div>
            </a>
            @endforeach
        </div>

        <div class="mt-10">
            {{ $posts->links() }}
        </div>
        @endif
    </div>
</section>

@endsection
