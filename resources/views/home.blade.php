@extends('layouts.app')

@section('content')
    @include('components.sections.hero')
    @include('components.sections.about')
    @include('components.sections.skills')
    @include('components.sections.projects')
    @include('components.sections.experience')
    @if($testimonials->isNotEmpty())
        @include('components.sections.testimonials')
    @endif
    @include('components.sections.contact')
@endsection
