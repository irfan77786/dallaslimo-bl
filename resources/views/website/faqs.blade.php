@extends('master-home')

@section('content')
<div class="px-md-15">
    <section class="banner-section bdr-radius position-relative">
        <div class="container-fluid">
            <span class="bg-img-cover bdr-radius only-m">
                <img src="{{ asset('dallaslimo-bl-design/img/black-car-service-dallas-banner.webp') }}"
                    alt="Hero Banner Image" class="img-fluid">
            </span>
            <span class="bg-img-cover bdr-radius only-d">
                <img src="{{ asset('dallaslimo-bl-design/assets/banner-01.webp') }}" alt="Hero Banner Image"
                    class="img-fluid">
            </span>
        </div>
        <div class="container py-30 pb-md-50">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-10">
                    <header class="mb-md-15 text-center">
                        <h1 class="h1 fw-semibold text-center">Frequently Asked Questions</h1>
                        <p class="font-md">Find answers to common questions about our black car service, airport
                            transfers, and chauffeur transportation in Dallas.</p>
                        <div class="text-center">
                            <a href="tel:+12148978056" class="btn btn-primary text-capitalize">Call Now: +1
                                214-919-5377</a>
                        </div>
                    </header>
                </div>
            </div>
        </div>
    </section>
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
                        <button class="h6 accordion-button px-0 py-15 py-sm-20 py-lg-25 mb-0 fw-semibold collapsed"
                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                            aria-controls="collapseOne">
                            Do you provide FBO pickups (Signature, Atlantic, Million Air, etc.)?

                            <svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
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
                        <button class="h6 accordion-button px-0 py-15 py-sm-20 py-lg-25 mb-0 fw-semibold collapsed"
                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                            aria-controls="collapseTwo">
                            Do you offer corporate accounts and monthly invoicing?
                            <svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
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
                        <button class="h6 accordion-button px-0 py-15 py-sm-20 py-lg-25 mb-0 fw-semibold collapsed"
                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                            aria-expanded="false" aria-controls="collapseThree">
                            Do you offer hourly as-directed service for executives and roadshows?
                            <svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
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
                        <button class="h6 accordion-button px-0 py-15 py-sm-20 py-lg-25 mb-0 fw-semibold collapsed"
                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                            aria-controls="collapseFour">
                            How early will the driver arrive before my pickup time?
                            <svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
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
                        <button class="h6 accordion-button px-0 py-15 py-sm-20 py-lg-25 mb-0 fw-semibold collapsed"
                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                            aria-controls="collapseFive">
                            Can I request a specific driver?
                            <svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
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
                        <button class="h6 accordion-button px-0 py-15 py-sm-20 py-lg-25 mb-0 fw-semibold collapsed"
                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
                            aria-controls="collapseSix">
                            Do you offer VIP airport service for executives?
                            <svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
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
                        <button class="h6 accordion-button px-0 py-15 py-sm-20 py-lg-25 mb-0 fw-semibold collapsed"
                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                            aria-expanded="false" aria-controls="collapseSeven">
                            How much wait time is included for DFW airport pickups?
                            <svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
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
                        <button class="h6 accordion-button px-0 py-15 py-sm-20 py-lg-25 mb-0 fw-semibold collapsed"
                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight"
                            aria-expanded="false" aria-controls="collapseEight">
                            Do you provide round-trip service to AT&T Stadium?
                            <svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
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
<div class="">
    <div class="container-fluid">
        <div class="bg-gray-light sponser-logo-swiper logo-swiper p-30 py-md-50">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="{{ asset('dallaslimo-bl-design/assets/logo-01.png') }}"
                        class="img-fluid"></div>
                <div class="swiper-slide"><img src="{{ asset('dallaslimo-bl-design/assets/logo-02.png') }}"
                        class="img-fluid"></div>
                <div class="swiper-slide"><img src="{{ asset('dallaslimo-bl-design/assets/logo-03.png') }}"
                        class="img-fluid"></div>
                <div class="swiper-slide"><img src="{{ asset('dallaslimo-bl-design/assets/logo-04.png') }}"
                        class="img-fluid"></div>
                <div class="swiper-slide"><img src="{{ asset('dallaslimo-bl-design/assets/logo-05.png') }}"
                        class="img-fluid"></div>
                <div class="swiper-slide"><img src="{{ asset('dallaslimo-bl-design/assets/logo-06.png') }}"
                        class="img-fluid"></div>
                <div class="swiper-slide"><img src="{{ asset('dallaslimo-bl-design/assets/logo-07.png') }}"
                        class="img-fluid"></div>
                <div class="swiper-slide"><img src="{{ asset('dallaslimo-bl-design/assets/logo-08.png') }}"
                        class="img-fluid"></div>

                <div class="swiper-slide"><img src="{{ asset('dallaslimo-bl-design/assets/logo-01.png') }}"
                        class="img-fluid"></div>
                <div class="swiper-slide"><img src="{{ asset('dallaslimo-bl-design/assets/logo-02.png') }}"
                        class="img-fluid"></div>
                <div class="swiper-slide"><img src="{{ asset('dallaslimo-bl-design/assets/logo-03.png') }}"
                        class="img-fluid"></div>
                <div class="swiper-slide"><img src="{{ asset('dallaslimo-bl-design/assets/logo-04.png') }}"
                        class="img-fluid"></div>
                <div class="swiper-slide"><img src="{{ asset('dallaslimo-bl-design/assets/logo-05.png') }}"
                        class="img-fluid"></div>
                <div class="swiper-slide"><img src="{{ asset('dallaslimo-bl-design/assets/logo-06.png') }}"
                        class="img-fluid"></div>
                <div class="swiper-slide"><img src="{{ asset('dallaslimo-bl-design/assets/logo-07.png') }}"
                        class="img-fluid"></div>
                <div class="swiper-slide"><img src="{{ asset('dallaslimo-bl-design/assets/logo-08.png') }}"
                        class="img-fluid"></div>
            </div>
        </div>
    </div>
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
                            <svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                <!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                                <path
                                    d="M169.4 297.4C156.9 309.9 156.9 330.2 169.4 342.7L361.4 534.7C373.9 547.2 394.2 547.2 406.7 534.7C419.2 522.2 419.2 501.9 406.7 489.4L237.3 320L406.6 150.6C419.1 138.1 419.1 117.8 406.6 105.3C394.1 92.8 373.8 92.8 361.3 105.3L169.3 297.3z"
                                    fill="#fff" />
                            </svg>
                        </div>
                        <div class="swiper-button-next">
                            <svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                <!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
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

@endsection