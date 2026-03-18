@extends('master')
@section('content')
@include('partials.search_form')
<section class="fleet-section py-50 py-sm-60 py-md-70 py-lg-80">
    <div class="ah-container">
        <div class="row justify-content-center">
            <div class="text-center col-12 col-xl-10">
                <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-30">Black Car Service College Station TX – Ride in Comfort and Style
                    with <span class="theme-color fw-bold">Dallas Limo and Black Cars Service</span></h2>
            </div>
            <div class="col-12 mb-15">
                <p class="font-base">Premium black car service in College Station, TX. Luxury sedans, SUVs, and executive vehicles for airport transfers, corporate travel, and special events. Professional chauffeurs and 24/7 availability.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <ul class="list-unstyled">
                    <li>
                        <strong class="mb-2 font-lg gray-700 fw-bold d-block">Luxury Sedans:</strong>
                        <p class="font-base">Pick from the Cadillac CT6, Volvo S90, or Mercedes-Benz S-Class for effortless driving to the DFW airport, meetings, or any other special event.</p>
                    </li>
                    <li>
                        <strong class="mb-2 font-lg gray-700 fw-bold d-block">Black SUVs:</strong>
                        <p class="font-base">Our Cadillac Escalade, Chevy Suburban, and GMC Yukon XL provide spacious, stylish transportation for groups, corporate travelers, or extra luggage.</p>
                    </li>
                    <li>
                        <strong class="mb-2 font-lg gray-700 fw-bold d-block">Executive Sprinter Vans:</strong>
                        <p class="font-base">Ideal for large gatherings such as meetings and weddings events, our Mercedes-Benz Sprinter Vans offer ample storage as well as comfortable and spacious seating.</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="img-holder">
                    <img src="{{ asset('new_assets/assets/fleet-img.webp') }}" alt="Fleet Image" class="img-fluid">
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
