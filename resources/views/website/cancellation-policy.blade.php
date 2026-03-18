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
                            <h1 class="h1 fw-semibold text-center">Cancellation Policy</h1>
                            <p class="font-md">Learn about our cancellation policy for Dallas black car service.</p>
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
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ol class="list-unstyled custom-order-list">
                            <li class="h5">
                                <div>
                                    <h3 class="h5 fw-medium">General Cancellation Policy</h3>
                                    <p>Cancellations must be made within the applicable timeframes listed for each
                                        vehicle category. Reservations canceled outside the permitted window will be
                                        subject to full charges for the scheduled service.</p>
                                </div>
                            </li>
                            <li class="h5">
                                <div>
                                    <h3 class="h5 fw-medium">Vehicle-Specific Cancellation Terms</h3>
                                </div>
                            </li>
                            <ol class="list-unstyled custom-order-list">
                                <li class="h6">
                                    <div>
                                        <h3 class="h6 fw-medium">Sedans &amp; Luxury Sedans</h3>
                                        <ul class="list-unstyled custom-unorder-list">
                                            <li class="mb-0">
                                                <p class="mb-0">Cancellation notice: Minimum 24 hours prior to scheduled
                                                    pickup</p>
                                            </li>
                                            <li class="mb-0">
                                                <p class="mb-0">Late cancellation: 100% of the reservation amount will
                                                    be charged</p>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="h6">
                                    <div>
                                        <h3 class="h6 fw-medium">SUVs</h3>
                                        <ul class="list-unstyled custom-unorder-list">
                                            <li class="mb-0">
                                                <p class="mb-0">Cancellation notice: Minimum 24 hours prior to scheduled
                                                    pickup</p>
                                            </li>
                                            <li class="mb-0">
                                                <p class="mb-0">Late cancellation: 100% of the reservation amount will
                                                    be charged</p>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="h6">
                                    <div>
                                        <h3 class="h6 fw-medium">Mercedes Sprinters &amp; Luxury Vans</h3>
                                        <ul class="list-unstyled custom-unorder-list">
                                            <li class="mb-0">
                                                <p class="mb-0">Cancellation notice: Minimum 72 hours prior to service
                                                </p>
                                            </li>
                                            <li class="mb-0">
                                                <p class="mb-0">Late cancellation: Full charge applies</p>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="h6">
                                    <div>
                                        <h3 class="h6 fw-medium">Mini Buses</h3>
                                        <ul class="list-unstyled custom-unorder-list">
                                            <li class="mb-0">
                                                <p class="mb-0">Cancellation notice: Minimum 7 days prior to service</p>
                                            </li>
                                            <li class="mb-0">
                                                <p class="mb-0">Late cancellation: Full charge applies</p>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="h6">
                                    <div>
                                        <h3 class="h6 fw-medium">Motor Coaches</h3>
                                        <ul class="list-unstyled custom-unorder-list">
                                            <li class="mb-0">
                                                <p class="mb-0">Cancellation notice: Minimum 7 days prior to service</p>
                                            </li>
                                            <li class="mb-0">
                                                <p class="mb-0">Late cancellation: Full charge applies, including any
                                                    deposits</p>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ol>
                            <li class="h5">
                                <div>
                                    <h3 class="h5 fw-medium">Deposit &amp; Payment Policy</h3>
                                    <ul class="list-unstyled custom-unorder-list">
                                        <li class="mb-0">
                                            <p class="mb-0">A 50% non-refundable deposit is required within 24 hours of
                                                agreement confirmation</p>
                                        </li>
                                        <li class="mb-0">
                                            <p class="mb-0">Remaining balance must be paid no later than 7 days before
                                                the service date</p>
                                        </li>
                                        <li class="mb-0">
                                            <p class="mb-0">All cancellations must be submitted in writing</p>
                                        </li>
                                        <li class="mb-0">
                                            <p class="mb-0">Failure to provide proper notice results in forfeiture of
                                                the deposit and any additional payments</p>
                                        </li>
                                        <li class="mb-0">
                                            <p class="mb-0">A completed credit card authorization form is required for
                                                all bookings</p>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="h5">
                                <div>
                                    <h3 class="h5 fw-medium"> Alcohol, Smoking &amp; Illegal Substances</h3>
                                    <ul class="list-unstyled custom-unorder-list">
                                        <li class="mb-0">
                                            <p class="mb-0">Alcohol consumption is permitted only for passengers aged 21
                                                and over</p>
                                        </li>
                                        <li class="mb-0">
                                            <p class="mb-0">Illegal substances are strictly prohibited</p>
                                        </li>
                                        <li class="mb-0">
                                            <p class="mb-0">Smoking is not allowed in any vehicle</p>
                                        </li>
                                        <li class="mb-0">
                                            <p class="mb-0">Violations will result in immediate service termination with
                                                no refund and may involve legal action</p>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="h5">
                                <div>
                                    <h3 class="h5 fw-medium"> Vehicle Damage Responsibility</h3>
                                    <p>Clients are fully responsible for any damage caused by passengers, including but
                                        not limited to:</p>
                                    <ul class="list-unstyled custom-unorder-list">
                                        <li class="mb-0">
                                            <p class="mb-0">Spills, stains, or excessive mess requiring special cleaning
                                            </p>
                                        </li>
                                        <li class="mb-0">
                                            <p class="mb-0">Burns, tears, or physical damage to vehicle interior or
                                                exterior</p>
                                        </li>
                                        <li class="mb-0">
                                            <p class="mb-0">Loss of revenue if the vehicle is removed from service</p>
                                        </li>
                                    </ul>
                                    <p>A minimum charge of <b>$250</b> applies for damage or deep cleaning, with
                                        additional fees assessed based on severity.</p>
                                </div>
                            </li>
                            <li class="h5">
                                <div>
                                    <h3 class="h5 fw-medium">Force Majeure</h3>
                                    <p>Dallas Limos and Black Car Service is not liable for delays or cancellations
                                        caused by events beyond reasonable control, including:</p>
                                    <ul class="list-unstyled custom-unorder-list">
                                        <li class="mb-0">
                                            <p class="mb-0">
                                                Severe weather conditions
                                            </p>
                                        </li>
                                        <li class="mb-0">
                                            <p class="mb-0">Natural disasters</p>
                                        </li>
                                        <li class="mb-0">
                                            <p class="mb-0">Acts of terrorism</p>
                                        </li>
                                        <li class="mb-0">
                                            <p class="mb-0">Government restrictions</p>
                                        </li>
                                        <li class="mb-0">
                                            <p class="mb-0">Mechanical issues</p>
                                        </li>
                                    </ul>
                                    <p>When possible, we will make reasonable efforts to reschedule services or issue refunds minus non-refundable costs.</p>
                                </div>
                            </li>
                            <li class="h5">
                                <div>
                                    <h3 class="h5 fw-medium">Indemnification</h3>
                                    <p>By booking our services, you agree to indemnify and hold harmless Dallas Limos and Black Car Service from any claims, losses, or damages arising from:</p>
                                    <ul class="list-unstyled custom-unorder-list">
                                        <li class="mb-0">
                                            <p class="mb-0">Use of our services</p>
                                        </li>
                                        <li class="mb-0">
                                            <p class="mb-0">Violations of these policies</p>
                                        </li>
                                        <li class="mb-0">
                                            <p class="mb-0">Actions or damages caused by you or members of your party</p>
                                        </li>
                                    </ul>
                                    <p></p>
                                </div>
                            </li>
                            <li class="h5">
                                <div>
                                    <h3 class="h5 fw-medium">Wait Time Policy</h3>
                                    <p><strong>Airport Transfers</strong></p>
                                    <ul class="list-unstyled custom-unorder-list">
                                        <li class="mb-0">
                                            <p class="mb-0">Domestic flights: 30-minute grace period</p>
                                        </li>
                                        <li class="mb-0">
                                            <p class="mb-0">International flights: 60-minute grace period</p>
                                        </li>
                                        <li class="mb-0">
                                            <p class="mb-0">After grace period: $15 charged per 15 minutes</p>
                                        </li>
                                    </ul>
                                    <p><strong>Point-to-Point &amp; Hourly Services</strong></p>
                                    <ul class="list-unstyled custom-unorder-list">
                                        <li class="mb-0">
                                            <p class="mb-0">15-minute grace period</p>
                                        </li>
                                        <li class="mb-0">
                                            <p class="mb-0">After grace period: $15 charged per 15 minutes</p>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="h5">
                                <div>
                                    <h3 class="h5 fw-medium">No-Show Policy</h3>
                                    <ul class="list-unstyled custom-unorder-list">
                                        <li class="mb-0">
                                            <p class="mb-0">No-shows are billed at 100% of the reservation cost</p>
                                        </li>
                                        <li class="mb-0">
                                            <p class="mb-0">Clients must confirm pickup details and remain reachable to avoid no-show charges</p>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="h5">
                                <div>
                                    <h3 class="h5 fw-medium">Special Event Reservations</h3>
                                    <ul class="list-unstyled custom-unorder-list">
                                        <li class="mb-0">
                                            <p class="mb-0">Events such as weddings, concerts, and sporting events require a 14-day cancellation notice</p>
                                        </li>
                                        <li class="mb-0">
                                            <p class="mb-0">A 50% deposit is required to secure special event bookings</p>
                                        </li>
                                        <li class="mb-0">
                                            <p class="mb-0">Deposits are non-refundable if canceled within the 14-day window</p>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="h5">
                                <div>
                                    <h3 class="h5 fw-medium">Refund Policy</h3>
                                    <ul class="list-unstyled custom-unorder-list">
                                        <li class="mb-0">
                                            <p class="mb-0">Approved refunds are processed within 5–7 business days</p>
                                        </li>
                                        <li class="mb-0">
                                            <p class="mb-0">No refunds are issued for Motor Coaches, Mini Buses, or Special Event services once the cancellation window has passed</p>
                                        </li> 
                                    </ul>
                                </div>
                            </li>
                        </ol>
                        <p>Dallas Limos and Black Car Service is dedicated to providing professional, reliable transportation supported by fair and clearly defined policies. We appreciate your trust in our services.</p>
                        <p class="mb-0"><strong>Contact Information:</strong></p>
                         <p class="mb-0">Email: <strong>
                            <a class="font-base single-line-ellipses" href="mailto:info@dallasblacklimoservice.com.com">info@dallasblacklimoservice.com.com
                            </a></strong>
                        </p>
                        <p class="mb-0">Phone: <strong>+1 123-456-7890</strong></p>
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
    
@endsection