<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">

    {{-- SEO Meta Tags --}}
    <title>{{ $seo['title'] ?? 'Black Car Service Dallas | Luxury Chauffeur & Limo Service' }}</title>
    <meta name="description" content="{{ $seo['description'] ?? 'Professional black car service in Dallas TX offering luxury chauffeur, airport transfers, and executive transportation. Serving Dallas, Plano, Frisco & Allen.' }}" />
    <meta name="keywords" content="{{ $seo['keywords'] ?? 'black car service dallas, chauffeur service dallas, dfw airport black car service, professional chauffeur service, airport transportation dallas, dallas limo service' }}" />

    <meta property="og:title" content="{{ $seo['og_title'] ?? $seo['title'] ?? 'Black Car Service Dallas | Luxury Chauffeur & Limo Service' }}" />
    <meta property="og:description" content="{{ $seo['og_description'] ?? $seo['description'] ?? 'Professional black car service in Dallas TX offering luxury chauffeur, airport transfers, and executive transportation.' }}" />
    <meta property="og:image" content="{{ $seo['og_image'] ?? asset('img/black-car-service.webp') }}" />
    <meta property="og:image:alt" content="Black Car Service Dallas">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="Dallas Limos and Black Car Service">
    <link rel="canonical" href="{{ url()->current() }}" />

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $seo['og_title'] ?? $seo['title'] ?? 'Black Car Service Dallas | Luxury Chauffeur & Limo Service' }}">
    <meta name="twitter:description" content="{{ $seo['og_description'] ?? $seo['description'] ?? 'Professional black car service in Dallas TX.' }}">
    <meta name="twitter:image" content="{{ $seo['og_image'] ?? asset('img/black-car-service.webp') }}">

    {{-- Dallaslimo-bl design: Mona Sans font + core CSS --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mona+Sans:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    {{-- Booking form & dashboard: load only when needed --}}
    @stack('styles')
    @yield('styles')
</head>

<body>
    @php
    $hideHeaderItems = request()->is('booking/point-to-point')
    || request()->is('booking/point-to-point/*')
    || request()->is('user-login/*/*')
    || request()->is('submit-passengerInfo')
    || request()->is('submit-passengerInfo/*')
    || request()->is('bookRide');
    @endphp
    @if($hideHeaderItems)
    <header class="py-15 py-lg-20">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-6 col-md-3">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('img/black-car-service-dallas-tx.png') }}" width="200" height="72" alt="Dallas Limos and Black Car Service" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-6 col-lg-9 d-flex align-items-center justify-content-end">
                    <a href="tel:+12149195377" class="text-dark fw-semibold text-decoration-none d-inline-flex align-items-center gap-2">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.33321 8.9568C2.6222 7.71698 2.27889 6.70461 2.07188 5.67841C1.76571 4.16069 2.46636 2.67811 3.62703 1.7321C4.11759 1.33229 4.67992 1.46889 4.97 1.9893L5.62488 3.16418C6.14397 4.09543 6.4035 4.56104 6.35202 5.05469C6.30055 5.54834 5.95053 5.9504 5.25048 6.75451L3.33321 8.9568Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/></svg>
                        <span>214-919-5377</span>
                    </a>
                </div>
            </div>
        </div>
    </header>
    @else
    @include('partials.dallaslimo_header')
    @endif
    <main>
        @yield('content')
    </main>
    @include('partials.dallaslimo_footer')

    {{-- Dallaslimo-bl design: core scripts --}}
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>
    <script src="{{ asset('assets/js/slick-min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    {{-- Google Maps for booking form --}}
    <script src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google_maps.api_key') }}&libraries=places&callback=initAutocomplete"></script>

    {{-- Booking & dashboard scripts (flatpickr, DataTables, etc.) --}}
    @stack('scripts')
    @yield('scripts')
</body>

</html>
