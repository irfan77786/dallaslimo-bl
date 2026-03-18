@extends('master-home')

@section('content')
    <div class="px-md-15">
        <section class="banner-section bdr-radius position-relative">
            <div class="container-fluid">
                <span class="bg-img-cover bdr-radius only-m">
                    <img src="{{ asset('dallaslimo-bl-design/img/black-car-service-dallas-banner.webp') }}" alt="Hero Banner Image" class="img-fluid">
                </span>
                <span class="bg-img-cover bdr-radius only-d">
                    <img src="{{ asset('dallaslimo-bl-design/assets/banner-01.webp') }}" alt="Hero Banner Image" class="img-fluid">
                </span>
            </div>
            <div class="container py-30 pb-md-50">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-11 col-xl-10">
                        <header class="mb-md-15 text-center">
                            <h1 class="h1 fw-semibold text-center">Contact us</h1>
                            <p class="font-md">Have a question, need a quote, or planning upcoming travel? Our team is ready to assist with bookings, custom requests, and real-time support—every step of the way.</p>
                            <div class="text-center">
                                <a href="tel:+12148978056" class="btn btn-primary text-capitalize">Call Now: +1 214-897-8056</a>
                            </div>
                        </header>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="py-40">
                <div class="container position-relative">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-11 col-xl-10">
                            <header class="mb-35 mb-sm-40 text-center mb-md-50">
                                <h2 class="h2 fw-semibold text-center">Contact us</h2>
                                <p>Have a question, need a quote, or planning upcoming travel? Our team is ready to
                                    assist with bookings, custom requests, and real-time support—every step of the way.
                                </p>
                            </header>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-11 col-xl-10">
                            @if ($message = session('success'))
                                <div class="alert alert-success alert-dismissible fade show mb-20" role="alert">
                                    {{ $message }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            @if ($message = session('error'))
                                <div class="alert alert-danger alert-dismissible fade show mb-20" role="alert">
                                    {{ $message }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            <form action="{{ route('contact_us_post') }}" method="post" class="contact-us-form bg-white px-20 px-sm-30 py-30">
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-4 mb-15">
                                        <label for="full_name" class="form-label mb-1 fw-medium">Full Name</label>
                                        <input type="text" class="form-control @error('full_name') is-invalid @enderror" id="full_name" name="full_name" placeholder="Full Name" required>
                                        @error('full_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 mb-15">
                                        <label for="email" class="form-label mb-1 fw-medium">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Your email address" required>
                                        @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 mb-15">
                                        <label for="phone" class="form-label mb-1 fw-medium">Phone</label>
                                        <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Your phone number" required>
                                        @error('phone')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-12">
                                        <label for="message" class="form-label mb-1 fw-medium">Message</label>
                                        <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="5" required></textarea>
                                        @error('message')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-12 mb-15">
                                        <p class="font-sm mb-2">Do you agree to receive texts from Dallas Black Cars Limo Service (+1 214-897-8056)? Messages may include reservation reminders/updates. Msg &amp; data rates may apply. Reply STOP to unsubscribe or HELP for support.</p>
                                        <div class="form-check pl-0 d-flex mt-2">
                                            <input class="form-check-input ml-0 flex-shrink-0 @error('sms_consent') is-invalid @enderror" type="checkbox" id="sms_consent" name="sms_consent" value="1" style="margin-left: 0;" required>
                                            <label class="form-check-label small d-inline-block ms-2" for="sms_consent" style="margin-top: -2px;">Yes, I agree to receive text messages from Dallas Black Cars Service sent from (+1 214-897-8056).</label>
                                        </div>
                                        @error('sms_consent')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-12 text-end">
                                        <button type="submit" class="btn btn-primary fw-bold" id="submitBtn">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        <div class="px-15">
            <section class="bg-gray-light pt-40 pb-20 bdr-radius">
                <div class="container position-relative">
                    <div class="row card-with-icon-list">
                        <div class="col-12 col-sm-6 col-lg-4 card-with-icon-list-item mb-20">
                            <article class="card-with-icon">
                                <span class="icon-holder d-flex align-items-center justify-content-center mb-15">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50px" height="50px"
                                        viewBox="0 0 1024 1024">
                                        <path fill="#fff"
                                            d="M262.2 37c37.4 51.6 82.002 118.197 133.602 199.598c13 22 11 48.4-5.8 79.4c-6.4 13-22.6 42.6-48.4 89.2c28.4 40 71.6 89.2 129.8 147.2s106.602 101.4 145.2 129.8c46.401-27.2 76.201-43.8 89.201-50.399c16.8-9 33-13.6 48.4-13.6c11.6 0 22 2.6 31 7.8c59.4 36.2 126.601 80.8 201.4 133.6c14.2 10.4 22.2 24.601 24.2 42.601c2 18.2-3.599 37.4-16.399 58.2c-6.4 9-16.8 22.2-31 39.8c-14.201 17.4-35.601 39.4-64.002 65.8s-51.6 39.802-69.8 39.802h-2c-136.6-5.4-305-107.801-504.4-307.201c-199.6-199.6-302-367.8-307.2-504.6c0-18 13.2-41.6 39.8-70.8c26.4-29 48.2-50 64.799-63c16.8-12.8 31-23.2 42.6-31c14.2-10.4 30.4-15.4 48.4-15.4c22.2 0 38.8 7.8 50.6 23.2zm-63.998 40.598c-27.2 19.4-52.603 41.198-76.603 64.998c-23.8 24-37.8 41.6-41.6 53.2c5.2 120.2 101 273.2 287.6 459.2c186.6 186 340 282.2 460 288.6c10.4-3.8 27.4-18 51.4-42.6s45.6-50.399 64.8-77.399c3.8-5.2 5.2-9.6 3.8-13.6c-77.4-54.2-142-97.4-193.8-129.801c-5.2 0-11.6 2-19.4 5.8c-11.6 6.4-40.6 22.6-87.2 48.4l-33 19.4l-33-21.4c-42.6-29.6-94.199-75.6-154.999-137.6c-60.6-60.6-105.8-112.4-135.6-155l-23.2-31l19.4-34.799c25.8-46.4 42-75.6 48.4-87.2c3.8-7.8 5.8-14.2 5.8-19.4c-46-73.401-88.599-138-127.398-193.6h-2c-5 0-9.6 1.4-13.4 3.8z" />
                                    </svg>

                                </span>
                                <h3 class="h5 fw-medium mb-15">Call or Text Our Team</h3>
                                <p>Need immediate assistance or a last-minute ride? Call or text us anytime to speak
                                    directly with a booking specialist. <br>
                                    <b>Phone</b>: <a href="tel:+12148978056">+1 214-897-8056</a>
                                </p>

                            </article>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 card-with-icon-list-item mb-20">
                            <article class="card-with-icon">
                                <span class="icon-holder d-flex align-items-center justify-content-center mb-15">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="50px" height="50px"
                                        viewBox="0 0 24 24">
                                        <path fill="#fff"
                                            d="m16.484 11.976l6.151-5.344v10.627zm-7.926.905l2.16 1.875c.339.288.781.462 1.264.462h.017h-.001h.014c.484 0 .926-.175 1.269-.465l-.003.002l2.16-1.875l6.566 5.639H1.995zM1.986 5.365h20.03l-9.621 8.356a.612.612 0 0 1-.38.132h-.014h.001h-.014a.61.61 0 0 1-.381-.133l.001.001zm-.621 1.266l6.15 5.344l-6.15 5.28zm21.6-2.441c-.24-.12-.522-.19-.821-.19H1.859a1.87 1.87 0 0 0-.835.197l.011-.005A1.856 1.856 0 0 0 0 5.855v12.172a1.86 1.86 0 0 0 1.858 1.858h20.283a1.86 1.86 0 0 0 1.858-1.858V5.855c0-.727-.419-1.357-1.029-1.66l-.011-.005z" />
                                    </svg>
                                </span>
                                <h3 class="h5 fw-medium mb-15">Email Our Reservations Desk</h3>
                                <p>For corporate accounts, event transportation, group travel, or detailed requests,
                                    email our team and receive a prompt response. <br>
                                    <b>Email</b>: <a href="mailto:info@dallaslimosandblackcarservice.com">info@dallaslimosandblackcarservice.com</a>
                                </p>
                            </article>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 card-with-icon-list-item mb-20">
                            <article class="card-with-icon">
                                <span class="icon-holder d-flex align-items-center justify-content-center mb-15">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="50px" height="50px"
                                        viewBox="0 0 24 24">
                                        <path fill="#fff"
                                            d="M12.005 13.003a3 3 0 0 1 2.08 5.162l-1.91 1.838h2.83v2h-6l-.001-1.724l3.694-3.555a1 1 0 1 0-1.693-.72h-2a3 3 0 0 1 3-3.001Zm6 0v4h2v-4h2v9h-2v-3h-4v-6h2Zm-14-1a7.985 7.985 0 0 0 3 6.246v2.416a9.996 9.996 0 0 1-5-8.662h2Zm8-10c5.185 0 9.449 3.947 9.95 9h-2.012A8.001 8.001 0 0 0 5.87 6.868l2.135 2.135h-6v-6L4.45 5.449a9.977 9.977 0 0 1 7.554-3.446Z" />
                                    </svg>
                                </span>
                                <h3 class="h5 fw-medium mb-15">24/7 Service Availability</h3>
                                <p>Our service operates around the clock, including weekends and holidays. Early
                                    departures, late arrivals, and overnight travel are always covered.</p>
                            </article>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 card-with-icon-list-item mb-20">
                            <article class="card-with-icon">
                                <span class="icon-holder d-flex align-items-center justify-content-center mb-15">
                                    
<svg xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 16 16">
<path fill="#fff" d="M8 .52a5.39 5.39 0 0 0-5.59 5.15c0 5 3.88 8.61 5.17 9.66a.66.66 0 0 0 .84 0c1.29-1.05 5.17-4.63 5.17-9.66A5.39 5.39 0 0 0 8 .52zM8 14a15.2 15.2 0 0 1-2.46-2.76a9.85 9.85 0 0 1-1.88-5.57A4.14 4.14 0 0 1 8 1.77a4.14 4.14 0 0 1 4.34 3.9c0 4.08-2.96 7.16-4.34 8.33z"/>
<path fill="#fff" d="M8 2.54a2.73 2.73 0 0 0-2.84 2.65A2.74 2.74 0 0 0 8 7.84a2.75 2.75 0 0 0 2.83-2.65A2.74 2.74 0 0 0 8 2.54zm0 4.05a1.49 1.49 0 0 1-1.57-1.4A1.49 1.49 0 0 1 8 3.79a1.5 1.5 0 0 1 1.58 1.4A1.5 1.5 0 0 1 8 6.59z"/>
</svg>
                                </span>
                                <h3 class="h5 fw-medium mb-15">Service Location</h3>
                                <p>Proudly serving Dallas and the surrounding metro area from our centrally located
                                    office. <br>
                                    Dallas, Texas 75201</p>
                            </article>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 card-with-icon-list-item mb-20">
                            <article class="card-with-icon">
                                <span class="icon-holder d-flex align-items-center justify-content-center mb-15">
                                    
<svg xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 24 24" fill="#0e1821"><g fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"><rect width="15" height="18.5" x="4.5" y="2.75" rx="3.5"/><path d="M8.5 6.755h7m-7 4h7m-7 4H12"/></g></svg>
                                </span>
                                <h3 class="h5 fw-medium mb-15">Ways to Book With Us</h3>
                                <p>
                                    Choose the booking option that works best for you: <br>
                                    • <span class="theme-color">Reserve Online</span> <br> • <span
                                        class="theme-color">Request a Quote</span> <br> • <span class="theme-color">View Our
                                        Fleet</span>
                                </p>
                            </article>
                        </div>
                    </div>
                </div>
            </section>
        </div>
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
        <div class="">
            <div class="container-fluid">
                <div class="bg-gray-light sponser-logo-swiper logo-swiper p-30 py-md-50">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{ asset('dallaslimo-bl-design/assets/logo-01.png') }}" class="img-fluid"></div>
                        <div class="swiper-slide"><img src="{{ asset('dallaslimo-bl-design/assets/logo-02.png') }}" class="img-fluid"></div>
                        <div class="swiper-slide"><img src="{{ asset('dallaslimo-bl-design/assets/logo-03.png') }}" class="img-fluid"></div>
                        <div class="swiper-slide"><img src="{{ asset('dallaslimo-bl-design/assets/logo-04.png') }}" class="img-fluid"></div>
                        <div class="swiper-slide"><img src="{{ asset('dallaslimo-bl-design/assets/logo-05.png') }}" class="img-fluid"></div>
                        <div class="swiper-slide"><img src="{{ asset('dallaslimo-bl-design/assets/logo-06.png') }}" class="img-fluid"></div>
                        <div class="swiper-slide"><img src="{{ asset('dallaslimo-bl-design/assets/logo-07.png') }}" class="img-fluid"></div>
                        <div class="swiper-slide"><img src="{{ asset('dallaslimo-bl-design/assets/logo-08.png') }}" class="img-fluid"></div>

                        <div class="swiper-slide"><img src="{{ asset('dallaslimo-bl-design/assets/logo-01.png') }}" class="img-fluid"></div>
                        <div class="swiper-slide"><img src="{{ asset('dallaslimo-bl-design/assets/logo-02.png') }}" class="img-fluid"></div>
                        <div class="swiper-slide"><img src="{{ asset('dallaslimo-bl-design/assets/logo-03.png') }}" class="img-fluid"></div>
                        <div class="swiper-slide"><img src="{{ asset('dallaslimo-bl-design/assets/logo-04.png') }}" class="img-fluid"></div>
                        <div class="swiper-slide"><img src="{{ asset('dallaslimo-bl-design/assets/logo-05.png') }}" class="img-fluid"></div>
                        <div class="swiper-slide"><img src="{{ asset('dallaslimo-bl-design/assets/logo-06.png') }}" class="img-fluid"></div>
                        <div class="swiper-slide"><img src="{{ asset('dallaslimo-bl-design/assets/logo-07.png') }}" class="img-fluid"></div>
                        <div class="swiper-slide"><img src="{{ asset('dallaslimo-bl-design/assets/logo-08.png') }}" class="img-fluid"></div>
                    </div>
                </div>
            </div>
        </div>
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