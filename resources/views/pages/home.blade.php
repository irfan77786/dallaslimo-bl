@extends('master-home')

@section('content')
    <section class="d-md-none">
        <div class="ah-container">
            <div class="search-form-mobile">
                @include('partials.search', ['id_suffix' => '_mobile'])
            </div>
        </div>
    </section>

    <section class="home-banner-section">
        <div id="hero-banner-container" class="py-60 ah-container position-relative py-sm-70 py-md-80 py-lg-100"
             style="z-index: 2; background-image: url('https://dallaslimoandblackcars.com/img/dallas-limo-and-black-cars-banner.webp');">
            <!-- Map Container (Initially hidden, shows up when location is selected) -->
            <div id="map" class="position-absolute w-100 h-100" style="top:0; left:0; z-index: 1; display:none;">
            </div>

            <div class="row" style="pointer-events: none;">
                <div id="home-text-content" class="col-12 col-md-6 d-flex flex-column justify-content-center" style="pointer-events: auto; position: relative; z-index: 0;">
                    <h1 class="text-white h2 fw-bold mb-15">Premier Black Car Service Dallas</h1>
                    <div class="d-none d-md-block">
                        <p class="text-white font-lg fw-medium mb-30">Luxury black car and limo service in Dallas, TX. Professional chauffeurs for airport transfers, corporate travel, and special events. Serving Dallas, Plano, Frisco, Allen, and the entire DFW area.</p>
                       
                        <p class="text-white font-base d-flex align-items-center  mb-30 mb-md-0">
                            Call Now: <a href="tel:+12148978056" class="mx-2 fw-bold font-lg theme-color">+1
                                214-897-8056</a>
                        </p>
                    </div>
                </div>
                <div class="d-none col-12 col-md-6 d-md-block" style="pointer-events: auto; position: relative; z-index: 2;">
                    <!-- Booking Form -->
                    <div class="search-form-wrapper-desktop">
                        @include('partials.search', ['id_suffix' => ''])
                    </div>
                </div>
            </div>
        </div>

        <style>
            @media (max-width: 767px) {
                #hero-banner-container {
                    min-height: 300px !important;
                    height: 300px !important;
                    background-size: cover !important;
                    background-position: center center !important;
                    background-repeat: no-repeat !important;
                    display: flex !important;
                    align-items: center !important;
                    justify-content: center !important;
                }
                #hero-banner-container .row {
                    width: 100%;
                    margin: 0;
                    justify-content: center !important;
                    align-items: center !important;
                }
                #home-text-content {
                    justify-content: center !important;
                    align-items: center !important;
                    text-align: center !important;
                }
                #home-text-content h1 {
                    text-align: center !important;
                    white-space: nowrap !important;
                }
            }
            @media (min-width: 768px) {
                #hero-banner-container {
                    min-height: 570px;
                }
                #home-text-content {
                    margin-top: 130px;
                }
                .search-form-wrapper-desktop {
                    position: absolute;
                    width: 100%;
                    z-index: 10;
                }
            }
        </style>
    </section>

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
