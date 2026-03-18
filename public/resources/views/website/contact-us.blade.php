@extends('master')

@section('content')
    <section class="d-md-none">
        <div class="ah-container">
            <div class="search-form-mobile">
                @include('partials.search', ['id_suffix' => '_mobile'])
            </div>
        </div>
    </section>

    <section class="home-banner-section">
        <div id="hero-banner-container" class="hero-banner-container py-60 ah-container position-relative py-sm-70 py-md-80 py-lg-100"
             style="z-index: 2; background-image: url('{{ asset('assets/new_theme/img/banner-1.webp') }}'); background-size: cover; background-position: center;">
            <div id="map" class="position-absolute w-100 h-100" style="top:0; left:0; z-index: 1; display:none;"></div>

            <div class="row" style="pointer-events: none;">
                <div id="home-text-content" class="banner-text-content col-12 col-md-6 d-flex flex-column justify-content-center" style="pointer-events: auto; position: relative; z-index: 0;">
                    <h1 class="h1 fw-bold text-white mb-15">Contact Us – Dallas Black Cars Service</h1>
                    <p class="font-lg fw-medium text-white mb-0">Request Instant Pricing for Black Car, SUV, or Group Travel in DFW.</p>
                    <strong class="font-base text-white fw-semibold d-block my-15">24/7 Service Available, Click to Call Now!</strong>
                    <p class="text-white font-base d-flex align-items-center mb-30 mb-md-0">
                        Call: <a href="tel:+12148978056" class="mx-2 fw-bold font-lg theme-color">+1 214-897-8056</a>
                    </p>
                </div>
                <div class="d-none col-12 col-md-6 d-md-block" style="pointer-events: auto; position: relative; z-index: 2;">
                    <div class="search-form-wrapper-desktop">
                        @include('partials.search', ['id_suffix' => ''])
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-50 py-sm-60 py-md-70 py-lg-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-10 text-center mb-20 mb-md-30 mb-lg-40">
                    <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-30">Contact us</h2>
                    <p class="font-md">Have a question, need a quote, or planning upcoming travel? Our team is ready to assist with bookings, custom requests, and real-time support—every step of the way.</p>
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

                    <form action="{{ route('contact_us_post') }}" method="post" class="contact-us-form bg-white px-20 px-sm-30 py-30 shadow-sm rounded">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4 mb-15">
                                <label for="full_name" class="form-label mb-1 fw-medium">Full Name</label>
                                <input type="text" class="form-control @error('full_name') is-invalid @enderror" id="full_name" name="full_name" placeholder="Full Name" value="{{ old('full_name') }}" required>
                                @error('full_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mb-15">
                                <label for="email" class="form-label mb-1 fw-medium">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Your email address" value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mb-15">
                                <label for="phone" class="form-label mb-1 fw-medium">Phone</label>
                                <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Your phone number" value="{{ old('phone') }}" required>
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb-3">
                                <label for="message" class="form-label mb-1 fw-medium">Message</label>
                                <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="4" required>{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb-15">
                                <p class="font-sm mb-2">
                                    Do you agree to receive texts from Dallas Black Cars Limo Service (+1 214-897-8056)? Messages may include reservation reminders/updates. Msg &amp; data rates may apply. Reply STOP to unsubscribe or HELP for support.</p>
                                <div class="form-check d-flex">
                                    <input class="form-check-input flex-shrink-0 @error('sms_consent') is-invalid @enderror" type="checkbox" id="sms_consent" name="sms_consent" value="1" style="margin-left: 0;" required>
                                    <label class="form-check-label small d-inline-block ms-2" for="sms_consent" style="margin-top: -2px;">
                                        Yes, I agree to receive text messages from Dallas Black Cars Service sent from (+1 214-897-8056).
                                    </label>
                                </div>
                                @error('sms_consent')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
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

    <section class="bg-gray pt-50 pb-25 pb-md-20">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30">
                    <article class="text-center">
                        <span class="icon-holder mb-10 d-block">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/phone.svg') }}" alt="Phone" class="img-fluid" width="40">
                        </span>
                        <h3 class="h6 fw-semibold">Call or Text Our Team</h3>
                        <p class="font-base"><strong>Phone: </strong>(214) 897-8056</p>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30">
                    <article class="text-center">
                        <span class="icon-holder mb-10 d-block">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/email.svg') }}" alt="Email" class="img-fluid" width="40">
                        </span>
                        <h3 class="h6 fw-semibold">Email Our Reservations Desk</h3>
                        <p class="font-base"><strong>Email: </strong>info@dallasblacklimoservice.com</p>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30">
                    <article class="text-center">
                        <span class="icon-holder mb-10 d-block">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/24-hours.svg') }}" alt="24 Hours" class="img-fluid" width="40">
                        </span>
                        <h3 class="h6 fw-semibold">24/7 Service Availability</h3>
                        <p class="font-base">Our service operates around the clock, 365 days a year.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    @include('partials.testimonials')
    @include('partials.faq')
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
@if (session('success'))
    Swal.fire({
        title: 'Success!',
        text: '{{ session('success') }}',
        icon: 'success',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'OK'
    }).then((result) => {
        if (result.isConfirmed) {
            document.querySelector('.contact-us-form')?.reset();
        }
    });
@endif

@if (session('error'))
    Swal.fire({
        title: 'Error!',
        text: '{{ session('error') }}',
        icon: 'error',
        confirmButtonColor: '#d33',
        confirmButtonText: 'OK'
    });
@endif
</script>
@endsection
