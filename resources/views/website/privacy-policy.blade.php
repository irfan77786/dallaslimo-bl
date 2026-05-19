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
                        <h1 class="h1 fw-semibold text-center">Privacy Policy</h1>
                        <p class="font-md">Review our privacy policy for Dallas black car service.</p>
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
                <!-- <h2 class="h3 fw-bold mb-15">Privacy Policy</h2>
                        <p class="font-base">Dallas Limos and Black Car Service values your privacy and is committed to
                            protecting the personal information you share with us. This Privacy Policy explains how we
                            collect, use, store, and safeguard your data when you access our website, mobile
                            applications, and transportation services. By using our services, you agree to the practices
                            described in this Privacy Policy.</p> -->

                <h3 class="h5 fw-medium">1. Data Security</h3>
                <p>We implement strong administrative, technical, and physical safeguards to protect your
                    personal and financial information from unauthorized access, misuse, alteration, or loss.
                    Our security practices are regularly reviewed and updated to maintain data protection
                    standards.</p>
                <h3 class="h5 fw-medium">2. Use of Our Services</h3>
                <p>Dallas Limos and Black Car Service provides professional black car and chauffeured
                    transportation services through our website, mobile applications, and related digital
                    platforms. By accessing or using these platforms, you consent to the collection, use, and
                    storage of your information in accordance with this Privacy Policy.</p>
                <h3 class="h5 fw-medium">3. Cookies and Tracking Technologies</h3>
                <p>We use cookies, pixels, beacons, and similar technologies to improve functionality, analyze
                    usage, and personalize content. These tools help us understand how users interact with our
                    services. Additional details can be found in our Cookie Policy.</p>
                <h3 class="h5 fw-medium">4. Mobile Application Features</h3>
                <p>Our mobile applications may collect certain information, including location data, to enhance
                    service functionality and user experience. You can manage permissions and privacy settings
                    directly within your device or application settings.</p>
                <h3 class="h5 fw-medium">5. Social Media Integration</h3>
                <p>Our website and platforms may include social media features or plugins. These services
                    operate independently and may collect information according to their own privacy policies.
                    We encourage users to review the privacy practices of third-party platforms.</p>
                <h3 class="h5 fw-medium">6. Data Collection During Bookings</h3>
                <p>When you book a ride or use our services, we may collect personal information such as your
                    name, contact details, payment information, and ride preferences. This data is used to
                    manage reservations, process payments, communicate service details, and improve our
                    offerings.</p>
                <h3 class="h5 fw-medium">7. Payments and Fraud Prevention</h3>
                <p>We use secure payment processing systems and encryption technologies to protect financial
                    data. Payment information is handled through trusted providers to reduce fraud risk and
                    ensure secure transactions.</p>
                <h3 class="h5 fw-medium">8. Communications</h3>
                <p>We may contact you regarding reservations, service updates, account information, or important
                    notices. Providing your contact information indicates consent to receive service-related
                    communications. Communication preferences may be adjusted where applicable.</p>
                <h3 class="h5 fw-medium">9. Email Marketing</h3>
                <p>With your consent, we may send newsletters, promotional offers, or service updates. You may
                    opt out of marketing emails at any time by using the unsubscribe option included in each
                    message.</p>
                <h3 class="h5 fw-medium">10. Third-Party Service Providers</h3>
                <p>We may engage third-party processors such as payment processors, IT service providers, and
                    marketing platforms to support our operations. These providers are contractually required to
                    protect your data and use it only for authorized purposes.</p>
                <h3 class="h5 fw-medium">11. Automated Decision-Making</h3>
                <p>Dallas Limos and Black Car Service does not use automated decision-making systems that
                    produce legal or significant effects on users. All service decisions involve human review
                    and oversight.</p>
                <h3 class="h5 fw-medium">12. Data Retention and Deletion</h3>
                <p>Personal information is retained only for as long as necessary to fulfill service obligations
                    or comply with legal requirements. When no longer needed, data is securely deleted or
                    anonymized.</p>
                <h3 class="h5 fw-medium">13. Policy Updates</h3>
                <p>This Privacy Policy may be updated periodically. Any changes will be posted on our website.
                    Continued use of our services after updates constitutes acceptance of the revised policy.
                </p>
                <h3 class="h5 fw-medium">14. SMS and MMS Communications</h3>
                <p>By providing your phone number, you consent to receive SMS or MMS messages related to
                    bookings, confirmations, service updates, and promotional content. Message and data rates
                    may apply. You may opt out of promotional messages by replying STOP.</p>
                <h3 class="h5 fw-medium">15. Your Rights and Contact Information</h3>
                <p>You have the right to request access to, correction of, or deletion of your personal
                    information. For privacy-related inquiries or requests, please contact:</p>
                <p class="mb-0">
                    <strong>Dallas Limos and Black Car Service</strong>
                </p>
                <address class="mb-0">
                    <p class="mb-0">Dallas, Texas 75201</p>
                </address>
                <p class="mb-0">Email: <strong>
                        <a class="font-base single-line-ellipses"
                            href="mailto:info@dallaslimosandblackcarservice.com.com">info@dallaslimosandblackcarservice.com.com
                        </a></strong>
                </p>
                <p class="mb-0">Phone: <strong>+1 214-919-5377</strong></p>

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