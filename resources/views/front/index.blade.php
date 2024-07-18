@extends('front.master')

@section('title', 'Home')

@section('hero')
    <div class="container-xxl bg-primary hero-header">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="text-white mb-4 animated zoomIn">We Help To Push Your Business To The Top Level</h1>
                    <p class="text-white pb-3 animated zoomIn">Tempor rebum no at dolore lorem clita rebum rebum ipsum rebum
                        stet dolor sed justo kasd. Ut dolor sed magna dolor sea diam. Sit diam sit justo amet ipsum vero
                        ipsum clita lorem</p>
                    <a href=""
                        class="btn btn-outline-light rounded-pill border-2 py-3 px-5 animated slideInRight">Learn More</a>
                </div>
                <div class="col-lg-6 text-center text-lg-start">
                    <img class="img-fluid animated zoomIn" src="img/hero.png" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')

    <!-- About Start -->
    <x-about></x-about>
    <!-- About End -->

    <!-- Newsletter Start -->
    <div class="container-xxl bg-primary my-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container px-lg-5">
            <div class="row align-items-center" style="height: 250px;">
                <div class="col-12 col-md-6">
                    <h3 class="text-white">Ready to get started</h3>
                    <small class="text-white">Diam elitr est dolore at sanctus nonumy.</small>
                    @session('success')
                        <x-alert type="success" message="{{ session('success') }}"></x-alert>
                    @endsession
                    <form action="{{ route('admin.subscribers.store') }}" method="POST">
                        @csrf
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text"
                                placeholder="Enter Your Email" style="height: 48px;" name='email'>
                            <x-validation-error field="email"></x-validation-error>
                            <button type="submit" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                    class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                    <img class="img-fluid mt-5" style="max-height: 250px;"
                        src="{{ asset('front-assets') }}/img/newsletter.png">
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->

    <!-- Service Start -->
    <x-services></x-services>
    <!-- Service End -->

    <!-- Features Start -->
    <x-features></x-features>
    <!-- Features End -->

    <!-- Client Start -->
    <div class="container-xxl bg-primary my-6 py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="owl-carousel client-carousel">
                @if (count($companies) > 0)
                    @foreach ($companies as $company)
                        <a href="#"><img class="img-fluid" src="{{ asset("storage/companies/$company->image") }}"></a>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <!-- Client End -->

    <!-- Testimonial Start -->
    <x-testimonials></x-testimonials>
    <!-- Testimonial End -->

    <!-- Team Start -->
    <x-members></x-members>
    <!-- Team End -->
@endsection
