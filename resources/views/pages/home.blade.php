@extends('master-home')

@section('content')
<div class="px-md-15">
    <section class="banner-section bdr-radius position-relative">
        <div id="map" class="position-absolute w-100 h-100"
            style="top:0; left:0; z-index: 1; display:none; border-radius: inherit;"></div>
        <div class="container-fluid">
            <span class="bg-img-cover bdr-radius only-m">
                <img src="{{ asset('dallaslimo-bl-design/img/black-car-service-dallas-banner.webp') }}"
                    alt="Hero Banner Image" class="img-fluid">
            </span>
            <span class="bg-img-cover bdr-radius only-d">
                <img src="{{ asset('dallaslimo-bl-design/assets/banner-01.webp') }}" alt="Hero Banner Image"
                    class="img-fluid">
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
                        <h1 class="h1 fw-semibold text-center">Dallas Limos and Black Car Service</h1>
                        <p class="font-md">Experience reliable black car service in Dallas with professional chauffeurs,
                            luxury vehicles, and on-time<br class="d-none d-md-block"> service for airports, business
                            travel, and special occasions across Plano, Frisco, and Allen.</p>
                        <div class="text-center">
                            <a href="tel:+12148978056" class="btn btn-primary text-capitalize">Call Now: +1
                                214-919-5377</a>
                        </div>
                    </header>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6"></div>
                <div class="col-12 col-md-6 d-none d-md-block pr-md-30">
                    <div class="distance-form-holder">
                        @include('partials.search', ['id_suffix' => ''])
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
    /* Form stays above map when map is shown */
    .banner-section .distance-form-holder {
        position: relative;
        z-index: 10;
    }
</style>

@include('partials.home-dallaslimo-content')

@section('scripts')
<script>
    // Show success/error alerts if messages exist
@if (session('success'))
    Swal.fire({
        title: 'Success!',
        text: '{{ session('success') }}',
        icon: 'success',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'OK'
    }).then((result) => {
        if (result.isConfirmed) {
            document.querySelector('.news-letter-form').reset();
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

@endsection