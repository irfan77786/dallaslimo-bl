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
                            <h1 class="h1 fw-semibold text-center">Book Your Ride</h1>
                            <p class="font-md">Reserve your premium black car or limousine service in Dallas. Professional chauffeurs available 24/7 for airport transfers, corporate travel, and special events.
                                    <br class="d-none d-md-block"> Experience luxury transportation with competitive rates.</p>
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
        .banner-section .distance-form-holder { position: relative; z-index: 10; }
    </style>

    <section class="py-40">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-11 col-xl-10">
                        <header class="mb-15 text-center">
                            <h2 class="h2 fw-semibold text-center">Executive Vehicles Designed for Comfort, Privacy, and
                                Control</h2>
                            <p>Our fleet supports clients who rely on professional black car and chauffeur service for
                                airport transfers, corporate transportation, VIP travel, and group movement. Executive
                                sedans are ideal for individual travelers and business schedules, luxury and premium
                                SUVs provide added space and privacy for airport and VIP travel, and Sprinter vans
                                accommodate corporate teams and group transfers. Every vehicle is professionally
                                chauffeured, commercially insured, and maintained to consistent executive standards for
                                a quiet, reliable experience.</p>
                        </header>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="swiper fleet-swiper custom-swiper-01">
                            <div class="d-flex justify-content-end gap-3 swiper-arrows-holder mb-10">
                                <div class="swiper-button-prev">
                                    <svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                                        <path
                                            d="M169.4 297.4C156.9 309.9 156.9 330.2 169.4 342.7L361.4 534.7C373.9 547.2 394.2 547.2 406.7 534.7C419.2 522.2 419.2 501.9 406.7 489.4L237.3 320L406.6 150.6C419.1 138.1 419.1 117.8 406.6 105.3C394.1 92.8 373.8 92.8 361.3 105.3L169.3 297.3z"
                                            fill="#fff" />
                                    </svg>
                                </div>
                                <div class="swiper-button-next">
                                    <svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                                        <path
                                            d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"
                                            fill="#fff" />
                                    </svg>
                                </div>
                            </div>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <article class="luxury-cars-item">
                                        <div class="img-holder mb-15">
                                            <img loading="lazy" decoding="async" src="{{ asset('dallaslimo-bl-design/assets/Sedan.webp') }}"
                                                alt="Black car service Dallas luxury sedan" class="img-fluid"
                                                width="750" height="410">
                                        </div>
                                        <h3 class="fw-medium h5 mb-2">Premier Sadan</h3>
                                        <p class="mb-15">Mercedes S550, BMW 750 or similar</p>
                                        <ul class="list-unstyled pl-0 mb-0 d-flex detail-info-list gap-2">
                                            <li class="d-flex gap-2 align-items-center">
                                                <span class="d-inline-flex" style="width: 20px;height: 20px;">
                                                    {!! '<?xml version="1.0" encoding="utf-8"?>' !!}<!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10.1992 12C12.9606 12 15.1992 9.76142 15.1992 7C15.1992 4.23858 12.9606 2 10.1992 2C7.43779 2 5.19922 4.23858 5.19922 7C5.19922 9.76142 7.43779 12 10.1992 12Z"
                                                            stroke="#000000" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M1 22C1.57038 20.0332 2.74795 18.2971 4.36438 17.0399C5.98081 15.7827 7.95335 15.0687 10 15C14.12 15 17.63 17.91 19 22"
                                                            stroke="#000000" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M17.8205 4.44006C18.5822 4.83059 19.1986 5.45518 19.579 6.22205C19.9594 6.98891 20.0838 7.85753 19.9338 8.70032C19.7838 9.5431 19.3674 10.3155 18.7458 10.9041C18.1243 11.4926 17.3302 11.8662 16.4805 11.97"
                                                            stroke="#000000" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M17.3203 14.5701C18.6543 14.91 19.8779 15.5883 20.8729 16.5396C21.868 17.4908 22.6007 18.6827 23.0003 20"
                                                            stroke="#000000" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span> 3
                                            </li>
                                            <li class="d-flex gap-2 align-items-center">
                                                <span class="d-inline-flex" style="width: 20px;height: 20px;">
                                                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none"
                                                        style="margin: -5px;" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M4 12V9C4 8.44771 4.44772 8 5 8H9M4 12V17C4 17.5523 4.44772 18 5 18H19C19.5523 18 20 17.5523 20 17V12M4 12L11 13H13L20 12M20 12V9C20 8.44771 19.5523 8 19 8H15M9 8V7C9 6.44772 9.44772 6 10 6H14C14.5523 6 15 6.44772 15 7V8M9 8H15M11 14.5H13"
                                                            stroke="#464455" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span> 3
                                            </li>
                                        </ul>
                                    </article>
                                </div>
                                <div class="swiper-slide">
                                    <article class="luxury-cars-item">
                                        <div class="img-holder mb-15">
                                            <img loading="lazy" decoding="async" src="{{ asset('dallaslimo-bl-design/assets/suv.webp') }}"
                                                alt="Black car service Dallas luxury sedan" class="img-fluid"
                                                width="750" height="410">
                                        </div>
                                        <h3 class="fw-medium h5 mb-10">Premier SUV</h3>
                                        <p class="mb-15">Chevrolet Suburban or similar</p>
                                        <ul class="list-unstyled pl-0 mb-0 d-flex detail-info-list gap-2">
                                            <li class="d-flex gap-2 align-items-center">
                                                <span class="d-inline-flex" style="width: 20px;height: 20px;">
                                                    {!! '<?xml version="1.0" encoding="utf-8"?>' !!}<!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10.1992 12C12.9606 12 15.1992 9.76142 15.1992 7C15.1992 4.23858 12.9606 2 10.1992 2C7.43779 2 5.19922 4.23858 5.19922 7C5.19922 9.76142 7.43779 12 10.1992 12Z"
                                                            stroke="#000000" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M1 22C1.57038 20.0332 2.74795 18.2971 4.36438 17.0399C5.98081 15.7827 7.95335 15.0687 10 15C14.12 15 17.63 17.91 19 22"
                                                            stroke="#000000" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M17.8205 4.44006C18.5822 4.83059 19.1986 5.45518 19.579 6.22205C19.9594 6.98891 20.0838 7.85753 19.9338 8.70032C19.7838 9.5431 19.3674 10.3155 18.7458 10.9041C18.1243 11.4926 17.3302 11.8662 16.4805 11.97"
                                                            stroke="#000000" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M17.3203 14.5701C18.6543 14.91 19.8779 15.5883 20.8729 16.5396C21.868 17.4908 22.6007 18.6827 23.0003 20"
                                                            stroke="#000000" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span> 6
                                            </li>
                                            <li class="d-flex gap-2 align-items-center">
                                                <span class="d-inline-flex" style="width: 20px;height: 20px;">
                                                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none"
                                                        style="margin: -5px;" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M4 12V9C4 8.44771 4.44772 8 5 8H9M4 12V17C4 17.5523 4.44772 18 5 18H19C19.5523 18 20 17.5523 20 17V12M4 12L11 13H13L20 12M20 12V9C20 8.44771 19.5523 8 19 8H15M9 8V7C9 6.44772 9.44772 6 10 6H14C14.5523 6 15 6.44772 15 7V8M9 8H15M11 14.5H13"
                                                            stroke="#464455" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span> 6
                                            </li>
                                        </ul>
                                    </article>
                                </div>
                                <div class="swiper-slide">
                                    <article class="luxury-cars-item">
                                        <div class="img-holder mb-15">
                                            <img loading="lazy" decoding="async" src="{{ asset('dallaslimo-bl-design/assets/luxury-suv.webp') }}"
                                                alt="Black car service Dallas luxury sedan" class="img-fluid"
                                                width="750" height="410">
                                        </div>
                                        <h3 class="fw-medium h5 mb-10">Luxury SUV</h3>
                                        <p class="mb-15">Cadillac Escalade ESV, Lincoln Navigator or similar</p>
                                        <ul class="list-unstyled pl-0 mb-0 d-flex detail-info-list gap-2">
                                            <li class="d-flex gap-2 align-items-center">
                                                <span class="d-inline-flex" style="width: 20px;height: 20px;">
                                                    {!! '<?xml version="1.0" encoding="utf-8"?>' !!}<!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10.1992 12C12.9606 12 15.1992 9.76142 15.1992 7C15.1992 4.23858 12.9606 2 10.1992 2C7.43779 2 5.19922 4.23858 5.19922 7C5.19922 9.76142 7.43779 12 10.1992 12Z"
                                                            stroke="#000000" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M1 22C1.57038 20.0332 2.74795 18.2971 4.36438 17.0399C5.98081 15.7827 7.95335 15.0687 10 15C14.12 15 17.63 17.91 19 22"
                                                            stroke="#000000" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M17.8205 4.44006C18.5822 4.83059 19.1986 5.45518 19.579 6.22205C19.9594 6.98891 20.0838 7.85753 19.9338 8.70032C19.7838 9.5431 19.3674 10.3155 18.7458 10.9041C18.1243 11.4926 17.3302 11.8662 16.4805 11.97"
                                                            stroke="#000000" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M17.3203 14.5701C18.6543 14.91 19.8779 15.5883 20.8729 16.5396C21.868 17.4908 22.6007 18.6827 23.0003 20"
                                                            stroke="#000000" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span> 6
                                            </li>
                                            <li class="d-flex gap-2 align-items-center">
                                                <span class="d-inline-flex" style="width: 20px;height: 20px;">
                                                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none"
                                                        style="margin: -5px;" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M4 12V9C4 8.44771 4.44772 8 5 8H9M4 12V17C4 17.5523 4.44772 18 5 18H19C19.5523 18 20 17.5523 20 17V12M4 12L11 13H13L20 12M20 12V9C20 8.44771 19.5523 8 19 8H15M9 8V7C9 6.44772 9.44772 6 10 6H14C14.5523 6 15 6.44772 15 7V8M9 8H15M11 14.5H13"
                                                            stroke="#464455" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span> 6
                                            </li>
                                        </ul>
                                    </article>
                                </div>
                                <div class="swiper-slide">
                                    <article class="luxury-cars-item">
                                        <div class="img-holder mb-15">
                                            <img loading="lazy" decoding="async" src="{{ asset('dallaslimo-bl-design/assets/sprinter.webp') }}"
                                                alt="Black car service Dallas luxury sedan" class="img-fluid"
                                                width="750" height="410">
                                        </div>
                                        <h3 class="fw-medium h5 mb-10">Busniess Sprinter</h3>
                                        <p class="mb-15">Mercedes benz Sprinter Van or similar</p>
                                        <ul class="list-unstyled pl-0 mb-0 d-flex detail-info-list gap-2">
                                            <li class="d-flex gap-2 align-items-center">
                                                <span class="d-inline-flex" style="width: 20px;height: 20px;">
                                                    {!! '<?xml version="1.0" encoding="utf-8"?>' !!}<!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10.1992 12C12.9606 12 15.1992 9.76142 15.1992 7C15.1992 4.23858 12.9606 2 10.1992 2C7.43779 2 5.19922 4.23858 5.19922 7C5.19922 9.76142 7.43779 12 10.1992 12Z"
                                                            stroke="#000000" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M1 22C1.57038 20.0332 2.74795 18.2971 4.36438 17.0399C5.98081 15.7827 7.95335 15.0687 10 15C14.12 15 17.63 17.91 19 22"
                                                            stroke="#000000" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M17.8205 4.44006C18.5822 4.83059 19.1986 5.45518 19.579 6.22205C19.9594 6.98891 20.0838 7.85753 19.9338 8.70032C19.7838 9.5431 19.3674 10.3155 18.7458 10.9041C18.1243 11.4926 17.3302 11.8662 16.4805 11.97"
                                                            stroke="#000000" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M17.3203 14.5701C18.6543 14.91 19.8779 15.5883 20.8729 16.5396C21.868 17.4908 22.6007 18.6827 23.0003 20"
                                                            stroke="#000000" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span> 12
                                            </li>
                                            <li class="d-flex gap-2 align-items-center">
                                                <span class="d-inline-flex" style="width: 20px;height: 20px;">
                                                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none"
                                                        style="margin: -5px;" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M4 12V9C4 8.44771 4.44772 8 5 8H9M4 12V17C4 17.5523 4.44772 18 5 18H19C19.5523 18 20 17.5523 20 17V12M4 12L11 13H13L20 12M20 12V9C20 8.44771 19.5523 8 19 8H15M9 8V7C9 6.44772 9.44772 6 10 6H14C14.5523 6 15 6.44772 15 7V8M9 8H15M11 14.5H13"
                                                            stroke="#464455" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span> 30
                                            </li>
                                        </ul>
                                    </article>
                                </div>
                                <div class="swiper-slide">
                                    <article class="luxury-cars-item">
                                        <div class="img-holder mb-15">
                                            <img loading="lazy" decoding="async" src="{{ asset('dallaslimo-bl-design/assets/mini-bus.webp') }}"
                                                alt="Black car service Dallas luxury sedan" class="img-fluid"
                                                width="750" height="410">
                                        </div>
                                        <h3 class="fw-medium h5 mb-10">Mini Bus</h3>
                                        <p class="mb-15">24-Seater Mini Bus</p>
                                        <ul class="list-unstyled pl-0 mb-0 d-flex detail-info-list gap-2">
                                            <li class="d-flex gap-2 align-items-center">
                                                <span class="d-inline-flex" style="width: 20px;height: 20px;">
                                                    {!! '<?xml version="1.0" encoding="utf-8"?>' !!}<!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10.1992 12C12.9606 12 15.1992 9.76142 15.1992 7C15.1992 4.23858 12.9606 2 10.1992 2C7.43779 2 5.19922 4.23858 5.19922 7C5.19922 9.76142 7.43779 12 10.1992 12Z"
                                                            stroke="#000000" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M1 22C1.57038 20.0332 2.74795 18.2971 4.36438 17.0399C5.98081 15.7827 7.95335 15.0687 10 15C14.12 15 17.63 17.91 19 22"
                                                            stroke="#000000" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M17.8205 4.44006C18.5822 4.83059 19.1986 5.45518 19.579 6.22205C19.9594 6.98891 20.0838 7.85753 19.9338 8.70032C19.7838 9.5431 19.3674 10.3155 18.7458 10.9041C18.1243 11.4926 17.3302 11.8662 16.4805 11.97"
                                                            stroke="#000000" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M17.3203 14.5701C18.6543 14.91 19.8779 15.5883 20.8729 16.5396C21.868 17.4908 22.6007 18.6827 23.0003 20"
                                                            stroke="#000000" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span> 24
                                            </li>
                                            <li class="d-flex gap-2 align-items-center">
                                                <span class="d-inline-flex" style="width: 20px;height: 20px;">
                                                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none"
                                                        style="margin: -5px;" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M4 12V9C4 8.44771 4.44772 8 5 8H9M4 12V17C4 17.5523 4.44772 18 5 18H19C19.5523 18 20 17.5523 20 17V12M4 12L11 13H13L20 12M20 12V9C20 8.44771 19.5523 8 19 8H15M9 8V7C9 6.44772 9.44772 6 10 6H14C14.5523 6 15 6.44772 15 7V8M9 8H15M11 14.5H13"
                                                            stroke="#464455" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span> 30
                                            </li>
                                        </ul>
                                    </article>
                                </div>
                            </div>

                            <!-- Optional -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="detail-content-section pt-40 pb-20">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- mb-md-20 mb-lg-30 -->
                    <div class="col-12 col-lg-11 col-xl-10 text-md-center">
                        <!-- mb-15 mb-sm-20 mb-lg-30 -->
                        <h2 class="h2 fw-bold mb-10 text-center">Why Choose Dallas Black Limo Service</h2>
                        <p class="font-md">Executives trust us for trained chauffeurs, on-time airport transfers, and
                            consistently reliable black car service across Dallas.</p>
                    </div>
                </div>
                <div class="row py-20">
                    <div class="col-12 col-md-8">
                        <h3 class="h4 fw-semibold">Why Executives Choose Our Dallas Black Car Service</h3>
                        <p class="font-md">Built for executives, corporate teams, and VIP travelers who need
                            transportation done right, without excuses or guesswork.
                        </p>
                        <ul class="list-unstyled custom-unorder-list">
                            <li>
                                <p class="mb-0">
                                    <strong>Professional Chauffeurs You Can Trust:</strong> Our chauffeurs are
                                    background-checked, professionally trained, and chosen for executive travel
                                    experience. Every ride delivers consistent service, discretion, and polished
                                    professionalism.
                                </p>
                            </li>
                            <li>
                                <p class="mb-0">
                                    <strong>Clean, Modern Vehicles Every Time:</strong> Late-model sedans, luxury SUVs,
                                    and executive vans are kept clean, comfortable, and presentable through scheduled
                                    inspections never outdated, never improvised.
                                </p>
                            </li>
                            <li>
                                <p class="mb-0">
                                    <strong>Airport Pickups That Match Your Flight:</strong> We use live flight
                                    tracking, smart buffer timing, and route monitoring to protect schedules at DFW and
                                    Love Field even with early landings or long delays
                                </p>
                            </li>
                            <li>
                                <p class="mb-0">
                                    <strong>Live Trip Monitoring for Every Ride:</strong> Each trip is monitored by
                                    dispatch from start to finish, with backup vehicles ready to prevent missed pickups,
                                    delays, or last-minute issues.
                                </p>
                            </li>
                            <li>
                                <p class="mb-0">
                                    <strong>Your Privacy Is Always Protected:</strong> Quiet rides, respectful conduct,
                                    and strict confidentiality standards trusted by executives, attorneys, and
                                    high-profile clients.
                                </p>
                            </li>
                            <li>
                                <p class="mb-0">
                                    <strong>Easy Planning for Corporate Travel:</strong> Designed for executive
                                    assistants and corporate planners managing meetings, airport travel, roadshows, and
                                    multi-stop schedules without surprises.
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-4 h-100">
                        <div class="img-holder ms-md-auto">
                            <img loading="lazy" decoding="async"
                                src="{{ asset('dallaslimo-bl-design/assets/why-choose-dallas-black-limo-service.webp') }}" width="406" height="233"
                                class="img-fluid" alt="Uniformed chauffeur for executive travel Dallas">
                        </div>
                    </div>
                </div>
                <div class="row flex-row-reverse py-20 d-none d-md-flex">
                    <div class="col-12 col-md-8 pr-xl">
                        <h3 class="h4 fw-semibold">Areas We Serve</h3>
                        <p class="font-md">Executive black car service built around how professionals actually move
                            across Dallas–Fort Worth.</p>
                        <ul class="list-unstyled custom-unorder-list">
                            <li>
                                <p class="mb-0">
                                    <strong>Dallas Corporate Hub:</strong> Downtown, Uptown, and key business districts
                                    where executive travel demands precision timing and professional presentation.
                                </p>
                            </li>
                            <li>
                                <p class="mb-0">
                                    <strong>Airport-First Coverage:</strong> Daily operations to and from DFW
                                    International Airport and Dallas Love Field with flight-aware dispatch and schedule
                                    protection.
                                </p>
                            </li>
                            <li>
                                <p class="mb-0">
                                    <strong>North Dallas Executive Markets:</strong> Plano, Frisco, Richardson, Las
                                    Colinas, and surrounding corporate hubs supporting recurring business travel.
                                </p>
                            </li>
                            <li>
                                <p class="mb-0">
                                    <strong>Fort Worth & Arlington:</strong> Reliable chauffeured transportation for
                                    conventions, corporate meetings, and professional events.
                                </p>
                            </li>
                            <li>
                                <p class="mb-0">
                                    <strong>Major Event & Sports Venues:</strong> Coordinated arrivals and departures at
                                    AT&T Stadium, American Airlines Center, Globe Life Field, and Cotton Bowl
                                    Stadium.</b>
                                </p>
                            </li>
                            <li>
                                <p class="mb-0">
                                    <strong>City-to-City Travel Across DFW:</strong> Chauffeur-driven service designed
                                    for multi-stop itineraries, executive schedules, and regional travel consistency.
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-4 h-100 d-none d-md-flex">
                        <div class="img-holder">
                            <img loading="lazy" decoding="async" src="{{ asset('dallaslimo-bl-design/assets/areas-we-serve.webp') }}" width="406"
                                height="233" class="img-fluid" alt="Black car service Dallas city transportation">
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-15">
                <div class="bg-gray-light py-30 d-md-none bdr-radius">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="fifa-image-holder">
                                    <img loading="lazy" decoding="async" src="{{ asset('dallaslimo-bl-design/assets/fifa-image.jpg') }}"
                                        class="img-fluid" alt="FIFA Image">
                                </div>
                                <a href="" class="btn btn-primary w-100 fw-medium text-capitalize">Visit our FIFA World
                                    Cup 2026
                                    page</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row align-items-center flex-row-reverse py-20 d-md-none">
                    <div class="col-12 col-md-6 pr-xl">
                        <h3 class="h5 fw-semibold">Areas We Serve</h3>
                        <p class="font-md">Executive black car service built around how professionals actually move
                            across Dallas–Fort Worth.</p>
                        <ul class="list-unstyled custom-unorder-list">
                            <li>
                                <p class="mb-0">
                                    <strong>Dallas Corporate Core:</strong> Downtown, Uptown, and key business districts
                                    where executive travel demands precision timing and professional presentation.
                                </p>
                            </li>
                            <li>
                                <p class="mb-0">
                                    <strong>Airport-First Coverage:</strong> Daily operations to and from DFW
                                    International Airport and Dallas Love Field with flight-aware dispatch and schedule
                                    protection.
                                </p>
                            </li>
                            <li>
                                <p class="mb-0">
                                    <strong>North Dallas Executive Markets:</strong> Plano, Frisco, Richardson, Las
                                    Colinas, and surrounding corporate hubs supporting recurring business travel.
                                </p>
                            </li>
                            <li>
                                <p class="mb-0">
                                    <strong>Fort Worth & Arlington:</strong> Reliable chauffeured transportation for
                                    conventions, corporate meetings, and professional events.
                                </p>
                            </li>
                            <li>
                                <p class="mb-0">
                                    <strong>Major Event & Sports Venues:</strong> Coordinated arrivals and departures at
                                    AT&T Stadium, American Airlines Center, Globe Life Field, and Cotton Bowl
                                    Stadium.</b>
                                </p>
                            </li>
                            <li>
                                <p class="mb-0">
                                    <strong>City-to-City Travel Across DFW:</strong> Chauffeur-driven service designed
                                    for multi-stop itineraries, executive schedules, and regional travel consistency.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-40 overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <header class="mb-15">
                            <h2 class="h2 fw-semibold text-center">Trusted by Corporate Teams and Executive Assistants
                            </h2>
                        </header>
                    </div>
                </div>
                <div class="row position-relative">
                    <div class="col-12">
                        <div class="swiper testimonial-swiper custom-swiper-01">
                            <div class="d-flex justify-content-end gap-3 swiper-arrows-holder">
                                <div class="swiper-button-prev">
                                    <svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                                        <path
                                            d="M169.4 297.4C156.9 309.9 156.9 330.2 169.4 342.7L361.4 534.7C373.9 547.2 394.2 547.2 406.7 534.7C419.2 522.2 419.2 501.9 406.7 489.4L237.3 320L406.6 150.6C419.1 138.1 419.1 117.8 406.6 105.3C394.1 92.8 373.8 92.8 361.3 105.3L169.3 297.3z"
                                            fill="#fff" />
                                    </svg>
                                </div>
                                <div class="swiper-button-next">
                                    <svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                                        <path
                                            d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"
                                            fill="#fff" />
                                    </svg>
                                </div>
                            </div>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <blockquote class="text-center">
                                            <q class="font-md ">
                                                As an executive assistant, I need airport transportation handled without
                                                reminders or follow-ups. Flights are tracked, drivers are positioned on
                                                time, and any schedule changes are managed quietly. That reliability is
                                                why I use them for executive airport transfers in Dallas
                                            </q>
                                            <cite class="name"> — Emily Carter, Executive Assistant</cite>
                                        </blockquote>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <blockquote class="text-center">
                                            <q class="font-md ">
                                                As an executive assistant, I need airport transportation handled without
                                                reminders or follow-ups. Flights are tracked, drivers are positioned on
                                                time, and any schedule changes are managed quietly. That reliability is
                                                why I use them for executive airport transfers in Dallas
                                            </q>
                                            <cite class="name"> — Emily Carter, Executive Assistant</cite>
                                        </blockquote>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <blockquote class="text-center">
                                            <q class="font-md ">
                                                As an executive assistant, I need airport transportation handled without
                                                reminders or follow-ups. Flights are tracked, drivers are positioned on
                                                time, and any schedule changes are managed quietly. That reliability is
                                                why I use them for executive airport transfers in Dallas
                                            </q>
                                            <cite class="name"> — Emily Carter, Executive Assistant</cite>
                                        </blockquote>
                                    </div>
                                </div>

                            </div>

                            <!-- Optional -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-40">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <header class="mb-15">
                            <h2 class="h2 fw-semibold text-center">Frequently Asked Questions</h2>
                        </header>
                    </div>
                </div>
                <div class="row" id="faqAccordion">
                    <div class="col-12 col-md-6 accordion-holder accordion">
                        <div class="accordion-item ">
                            <h2 class="accordion-header" id="headingOne">
                                <button
                                    class="h6 accordion-button px-0 py-15 py-sm-20 py-lg-25 mb-0 fw-semibold collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                    aria-expanded="false" aria-controls="collapseOne">
                                    Do you provide FBO pickups (Signature, Atlantic, Million Air, etc.)?

                                    <svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640">
                                        <path
                                            d="M297.4 470.6C309.9 483.1 330.2 483.1 342.7 470.6L534.7 278.6C547.2 266.1 547.2 245.8 534.7 233.3C522.2 220.8 501.9 220.8 489.4 233.3L320 402.7L150.6 233.4C138.1 220.9 117.8 220.9 105.3 233.4C92.8 245.9 92.8 266.2 105.3 278.7L297.3 470.7z" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body pl-0 px-20 mb-0 pr-0">
                                    <p class="font-base">Yes. We provide professional FBO pickup and drop-off service at
                                        all major private aviation terminals across Dallas–Fort Worth, including
                                        Signature Flight Support, Atlantic Aviation, and Million Air. Chauffeur arrivals
                                        are coordinated discreetly around flight timing and FBO protocols to ensure
                                        smooth, on-time transfers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item ">
                            <h2 class="accordion-header" id="headingTwo">
                                <button
                                    class="h6 accordion-button px-0 py-15 py-sm-20 py-lg-25 mb-0 fw-semibold collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    Do you offer corporate accounts and monthly invoicing?
                                    <svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640">
                                        <path
                                            d="M297.4 470.6C309.9 483.1 330.2 483.1 342.7 470.6L534.7 278.6C547.2 266.1 547.2 245.8 534.7 233.3C522.2 220.8 501.9 220.8 489.4 233.3L320 402.7L150.6 233.4C138.1 220.9 117.8 220.9 105.3 233.4C92.8 245.9 92.8 266.2 105.3 278.7L297.3 470.7z" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body pl-0 px-20 mb-0 pr-0">
                                    <p class="font-base mb-0">Yes. We offer corporate accounts with consolidated monthly
                                        invoicing for companies, executive assistants, and travel managers. Billing is
                                        itemized and structured for clear reporting, internal tracking, and ongoing
                                        executive travel throughout the Dallas–Fort Worth area.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item ">
                            <h2 class="accordion-header" id="headingThree">
                                <button
                                    class="h6 accordion-button px-0 py-15 py-sm-20 py-lg-25 mb-0 fw-semibold collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">
                                    Do you offer hourly as-directed service for executives and roadshows?
                                    <svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640">
                                        <path
                                            d="M297.4 470.6C309.9 483.1 330.2 483.1 342.7 470.6L534.7 278.6C547.2 266.1 547.2 245.8 534.7 233.3C522.2 220.8 501.9 220.8 489.4 233.3L320 402.7L150.6 233.4C138.1 220.9 117.8 220.9 105.3 233.4C92.8 245.9 92.8 266.2 105.3 278.7L297.3 470.7z" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body pl-0 px-20 mb-0 pr-0">
                                    <p class="font-base mb-0">Yes. We provide hourly as-directed black car service for
                                        executives and roadshows, supporting flexible, multi-stop itineraries.
                                        Chauffeurs remain on standby while dispatch actively monitors timing and routing
                                        to support assistant-managed schedules, meetings, and investor roadshow
                                        logistics.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item ">
                            <h2 class="accordion-header" id="headingFour">
                                <button
                                    class="h6 accordion-button px-0 py-15 py-sm-20 py-lg-25 mb-0 fw-semibold collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                    aria-expanded="false" aria-controls="collapseFour">
                                    How early will the driver arrive before my pickup time?
                                    <svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640">
                                        <path
                                            d="M297.4 470.6C309.9 483.1 330.2 483.1 342.7 470.6L534.7 278.6C547.2 266.1 547.2 245.8 534.7 233.3C522.2 220.8 501.9 220.8 489.4 233.3L320 402.7L150.6 233.4C138.1 220.9 117.8 220.9 105.3 233.4C92.8 245.9 92.8 266.2 105.3 278.7L297.3 470.7z" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body pl-0 px-20 mb-0 pr-0">
                                    <p class="font-base mb-0">For most Dallas–Fort Worth pickups, chauffeurs arrive
                                        10–15
                                        minutes early. This arrival buffer supports smooth loading, schedule protection,
                                        and reliable on-time departures for airport transfers, corporate meetings, and
                                        executive appointments.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 accordion-holder accordion">
                        <div class="accordion-item ">
                            <h2 class="accordion-header" id="headingFive">
                                <button
                                    class="h6 accordion-button px-0 py-15 py-sm-20 py-lg-25 mb-0 fw-semibold collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                    aria-expanded="false" aria-controls="collapseFive">
                                    Can I request a specific driver?
                                    <svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640">
                                        <path
                                            d="M297.4 470.6C309.9 483.1 330.2 483.1 342.7 470.6L534.7 278.6C547.2 266.1 547.2 245.8 534.7 233.3C522.2 220.8 501.9 220.8 489.4 233.3L320 402.7L150.6 233.4C138.1 220.9 117.8 220.9 105.3 233.4C92.8 245.9 92.8 266.2 105.3 278.7L297.3 470.7z" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body pl-0 px-20 mb-0 pr-0">
                                    <p class="font-base mb-0">Yes. You may request a preferred chauffeur when available,
                                        particularly for recurring corporate travel or airport transportation in
                                        Dallas–Fort Worth. Advance requests help maintain consistency, familiarity, and
                                        efficient pickups for executives and executive assistants.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item ">
                            <h2 class="accordion-header" id="headingSix">
                                <button
                                    class="h6 accordion-button px-0 py-15 py-sm-20 py-lg-25 mb-0 fw-semibold collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                    aria-expanded="false" aria-controls="collapseSix">
                                    Do you offer VIP airport service for executives?
                                    <svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640">
                                        <path
                                            d="M297.4 470.6C309.9 483.1 330.2 483.1 342.7 470.6L534.7 278.6C547.2 266.1 547.2 245.8 534.7 233.3C522.2 220.8 501.9 220.8 489.4 233.3L320 402.7L150.6 233.4C138.1 220.9 117.8 220.9 105.3 233.4C92.8 245.9 92.8 266.2 105.3 278.7L297.3 470.7z" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body pl-0 px-20 mb-0 pr-0">
                                    <p class="font-base mb-0">Yes. We provide VIP airport service at Dallas Fort Worth
                                        International Airport and Dallas Love Field. Service includes discreet
                                        coordination, real-time flight monitoring, and schedule-focused handling
                                        designed for senior executives and visiting leaders.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item ">
                            <h2 class="accordion-header" id="headingSeven">
                                <button
                                    class="h6 accordion-button px-0 py-15 py-sm-20 py-lg-25 mb-0 fw-semibold collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                    aria-expanded="false" aria-controls="collapseSeven">
                                    How much wait time is included for DFW airport pickups?
                                    <svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640">
                                        <path
                                            d="M297.4 470.6C309.9 483.1 330.2 483.1 342.7 470.6L534.7 278.6C547.2 266.1 547.2 245.8 534.7 233.3C522.2 220.8 501.9 220.8 489.4 233.3L320 402.7L150.6 233.4C138.1 220.9 117.8 220.9 105.3 233.4C92.8 245.9 92.8 266.2 105.3 278.7L297.3 470.7z" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body pl-0 px-20 mb-0 pr-0">
                                    <p class="font-base mb-0">Included wait time depends on your reservation type and
                                        arrival
                                        details. Grace periods are designed to accommodate deplaning and baggage claim
                                        at DFW, with trips monitored in real time to support smooth coordination in the
                                        event of early arrivals or delays.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item ">
                            <h2 class="accordion-header" id="headingEight">
                                <button
                                    class="h6 accordion-button px-0 py-15 py-sm-20 py-lg-25 mb-0 fw-semibold collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight"
                                    aria-expanded="false" aria-controls="collapseEight">
                                    Do you provide round-trip service to AT&T Stadium?
                                    <svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640">
                                        <path
                                            d="M297.4 470.6C309.9 483.1 330.2 483.1 342.7 470.6L534.7 278.6C547.2 266.1 547.2 245.8 534.7 233.3C522.2 220.8 501.9 220.8 489.4 233.3L320 402.7L150.6 233.4C138.1 220.9 117.8 220.9 105.3 233.4C92.8 245.9 92.8 266.2 105.3 278.7L297.3 470.7z" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body pl-0 px-20 mb-0 pr-0">
                                    <p class="font-base mb-0">Yes. We provide round-trip chauffeur service to major
                                        Dallas–Fort Worth venues, including AT&T Stadium. Drop-off and return pickup
                                        planning is coordinated in advance to simplify arrival, post-event departures,
                                        and overall event transportation logistics.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    
@endsection