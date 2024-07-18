@extends('front.master')

@section('title', 'Service')

@section('hero')
    <x-hero-section title="Services" subtitle="Services"></x-hero-section>
@endsection

@section('content')

    <!-- Service Start -->
    <x-services></x-services>
    <!-- Service End -->

    <!-- Testimonial Start -->
    <x-testimonials></x-testimonials>
    <!-- Testimonial End -->
@endsection
