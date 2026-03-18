{{-- Reusable banner section from dallaslimo-bl design - use with @include('partials.dallaslimo_banner', ['title' => 'Page Title', 'subtitle' => 'Subtitle text', 'mobileImage' => 'img/xxx.webp', 'desktopImage' => 'assets/banner-01.webp']) --}}
<div class="px-md-15">
    <section class="banner-section bdr-radius position-relative">
        <div class="container-fluid">
            <span class="bg-img-cover bdr-radius only-m">
                <img src="{{ asset($mobileImage ?? 'img/black-car-service-dallas-banner.webp') }}" alt="Hero Banner Image" class="img-fluid">
            </span>
            <span class="bg-img-cover bdr-radius only-d">
                <img src="{{ asset($desktopImage ?? 'assets/banner-01.webp') }}" alt="Hero Banner Image" class="img-fluid">
            </span>
        </div>
        <div class="container py-30 pb-md-50">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-10">
                    <header class="mb-md-15 text-center">
                        <h1 class="h1 fw-semibold text-center">{{ $title ?? 'Page Title' }}</h1>
                        <p class="font-md">{{ $subtitle ?? '' }}</p>
                        <div class="text-center">
                            <a href="tel:214-919-5377" class="btn btn-primary text-capitalize">Call Now: 214-919-5377</a>
                        </div>
                    </header>
                </div>
            </div>
        </div>
    </section>
</div>
