@extends('front.master')

@section('title', 'About')

@section('hero')
    <x-hero-section title="About US" subtitle="About"></x-hero-section>
@endsection

@section('content')
    <!-- About Start -->
    <x-about></x-about>
    <!-- About End -->

    <!-- Features Start -->
    <x-features></x-features>
    <!-- Features End -->

    <!-- Team Start -->
    <x-members></x-members>
    <!-- Team End -->
@endsection
