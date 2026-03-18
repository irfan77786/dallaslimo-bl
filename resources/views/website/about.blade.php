@extends('master-home')

@section('content')
    <div class="px-md-15">
        <section class="banner-section bdr-radius position-relative">
            <div id="map" class="position-absolute w-100 h-100" style="top:0; left:0; z-index: 1; display:none; border-radius: inherit;"></div>
            <div class="container-fluid">
                <span class="bg-img-cover bdr-radius only-m">
                    <img src="{{ asset('dallaslimo-bl-design/img/black-car-service-dallas-banner.webp') }}" alt="Hero Banner Image" class="img-fluid">
                </span>
                <span class="bg-img-cover bdr-radius only-d">
                    <img src="{{ asset('dallaslimo-bl-design/assets/banner-01.webp') }}" alt="Hero Banner Image" class="img-fluid">
                </span>
                <div class="px-20">
                    <div class="distance-form-holder d-md-none">
                        @include('partials.search', ['id_suffix' => '_mobile'])
                    </div>
                </div>
            </div>
            <div class="container py-30 pb-md-50">
                <div class="row justify-content-center">
                    <div id="home-text-content" class="col-12 col-lg-11 col-xl-10">
                        <header class="mb-md-15 text-center">
                            <h1 class="h1 fw-semibold text-center">About Dallas Limos and Black Car Service</h1>
                            <p class="font-md">A trusted provider of Premier Black Car Service in Dallas, delivering professional chauffeur transportation<br class="d-none d-md-block"> for airport transfers, corporate travel, and private transportation across Plano, Frisco, and Allen.</p>
                            <div class="text-center">
                                <a href="tel:+12148978056" class="btn btn-primary text-capitalize">Call Now: +1 214-897-8056</a>
                            </div>
                        </header>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6"></div>
                    <div class="col-12 col-md-6 d-none d-md-block pr-md-30">
                        <div class="distance-form-holder">
                            @include('partials.search', ['id_suffix' => '_form'])
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <style>
        .banner-section .distance-form-holder {
            position: relative;
            z-index: 10;
        }
    </style>

    @include('partials.about-dallaslimo-content')
@endsection
