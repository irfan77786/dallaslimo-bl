@extends('master')
@section('content')
@include('partials.search_form')
<section class="fleet-section py-50 py-sm-60 py-md-70 py-lg-80">
    <div class="ah-container">
        <div class="row justify-content-center">
            <div class="text-center col-12 col-xl-10">
                <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-30">Dallas Executive Airport Car Service – Ride in Comfort and Style
                    with <span class="theme-color fw-bold">Dallas Limo and Black Cars Service</span></h2>
            </div>
            <div class="col-12 mb-15">
                <p class="font-base">Private black car and chauffeur service for Dallas Executive Airport (RBD). Luxury sedans, SUVs, and group transfers with on-time pickups for private aviation and executive travel. Professional chauffeurs available 24/7.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <ul class="list-unstyled">
                    <li>
                        <strong class="mb-2 font-lg gray-700 fw-bold d-block">Luxury Sedans:</strong>
                        <p class="font-base">Pick from the Cadillac CT6, Volvo S90, or Mercedes-Benz S-Class for effortless driving to and from Dallas Executive Airport.</p>
                    </li>
                    <li>
                        <strong class="mb-2 font-lg gray-700 fw-bold d-block">Black SUVs:</strong>
                        <p class="font-base">Our Cadillac Escalade, Chevy Suburban, and GMC Yukon XL provide spacious transportation for groups and luggage.</p>
                    </li>
                    <li>
                        <strong class="mb-2 font-lg gray-700 fw-bold d-block">Executive Sprinter Vans:</strong>
                        <p class="font-base">Ideal for large groups, our Mercedes-Benz Sprinter Vans offer ample storage and comfortable seating for airport transfers.</p>
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
<section class="detail-content-section bg-gray py-50 py-sm-60 py-md-70 py-lg-80">
    <div class="ah-container">
        <div class="row justify-content-center">
            <div class="mb-20 text-center col-12 col-lg-11 col-xl-10 mb-md-30 mb-lg-40">
                <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-30">Why Choose Us for <span class="theme-color">Dallas Executive Airport Transfers</span></h2>
                <p class="font-base">Traveling to or from Dallas Executive Airport (RBD) should be safe & stress-free. We provide reliable black car service for private aviation, corporate travel, and executive transfers with professional chauffeurs.</p>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <ul class="pl-0 custom-unorder-list">
                    <li>
                        <p class="mb-0"><b>FBO Coordination:</b> We coordinate with Dallas Executive Airport for smooth pickups and drop-offs.</p>
                    </li>
                    <li>
                        <p class="mb-0"><b>Flight Tracking:</b> We monitor your arrival for on-time curbside service.</p>
                    </li>
                    <li>
                        <p class="mb-0"><b>Luggage Assistance:</b> Helping you handle bags with ease from aircraft to vehicle.</p>
                    </li>
                    <li>
                        <p class="mb-0"><b>24/7 Availability:</b> No matter the time, we're ready for your Dallas Executive Airport transfer.</p>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-6 h-100">
                <div class="img-holder ms-md-auto">
                    <img src="{{ asset('new_assets/assets/airport-transfer.JPG') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
@include('partials.top-cities')
@include('partials.companies_strip')
@include('partials.testimonials')
@include('partials.faq')
@endsection
