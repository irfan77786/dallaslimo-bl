@extends('master')
@section('content')
@include('partials.search_form')
<section class="fleet-section py-50 py-sm-60 py-md-70 py-lg-80">
    <div class="ah-container">
        <div class="row justify-content-center">
            <div class="text-center col-12 col-xl-10">
                <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-30">Dallas to College Station Car Service – Ride in Comfort and Style
                    with <span class="theme-color fw-bold">Dallas Limo and Black Cars Service</span></h2>
            </div>
            <div class="col-12 mb-15">
                <p class="font-base">Enjoy a smooth, private ride from Dallas to College Station with our luxury black car service. Perfect for campus visits, Aggie game days, or business travel. Our sedans, SUVs & executive vehicles provide comfort & reliability with professional chauffeurs & timely service.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <ul class="list-unstyled">
                    <li>
                        <strong class="mb-2 font-lg gray-700 fw-bold d-block">Luxury Sedans:</strong>
                        <p class="font-base">Cadillac CT6, Volvo S90, and Mercedes-Benz S-Class for discreet, chauffeur-driven rides to Texas A&M and College Station.</p>
                    </li>
                    <li>
                        <strong class="mb-2 font-lg gray-700 fw-bold d-block">Black SUVs:</strong>
                        <p class="font-base">Our Cadillac Escalade, Chevy Suburban, and GMC Yukon XL provide comfortable seating for students, families, or professionals.</p>
                    </li>
                    <li>
                        <strong class="mb-2 font-lg gray-700 fw-bold d-block">Executive Sprinter Vans:</strong>
                        <p class="font-base">Mercedes-Benz Sprinters are perfect for alumni events, college visits, or group transfers between Dallas and College Station.</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="img-holder">
                    <img src="{{ asset('new_assets/assets/fleet-img.webp') }}" alt="Dallas to College Station Car Service" class="img-fluid">
                </div>
            </div>
            <div class="text-center col-12 pt-15">
                <a href="/booking" class="btn btn-primary">Book Now</a>
            </div>
        </div>
    </div>
</section>
@include('partials.top-cities')
@include('partials.companies_strip')
@include('partials.testimonials')
@include('partials.faq')
@endsection
