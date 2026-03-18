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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mona+Sans:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @yield('styles')
</head>

<body>
    @include('partials.dallaslimo_header')

    <main>
        @yield('content')
    </main>

    @include('partials.dallaslimo_footer')

    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>
    <script src="{{ asset('assets/js/slick-min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    @yield('scripts')
</body>

</html>
