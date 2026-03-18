<header class="p-15 p-md-0">
    <div class="header py-15 py-lg-15 bdr-radius">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-6 col-md-3">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('img/black-car-service-dallas-tx.png') }}" width="200" height="72"
                                alt="Dallas Limos and Black Car Service" class="img-fluid d-none d-md-block">
                            <img src="{{ asset('img/black-car-service-dallas-tx.png') }}" width="200" height="72"
                                alt="Dallas Limos and Black Car Service" class="img-fluid d-md-none">
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-9">
                    <nav class="custom-navbar navbar navbar-expand-lg p-0 position-static">
                        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 18L20 18" stroke="#fff" stroke-width="2" stroke-linecap="round" />
                                <path d="M4 12L20 12" stroke="#fff" stroke-width="2" stroke-linecap="round" />
                                <path d="M4 6L20 6" stroke="#fff" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </button>
                        <div class="collapse navbar-collapse ms-auto" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-medium">
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('about-us*') ? 'active' : '' }}" href="{{ url('/about-us') }}">About us</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle {{ request()->is('services*') ? 'active' : '' }}" href="#" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Our Service
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="{{ url('/services/airport-transfers-dallas') }}">Airport Transfers</a></li>
                                        <li><a class="dropdown-item" href="{{ url('/services/chauffeur-service-dallas') }}">Chauffeur Service</a></li>
                                        <li><a class="dropdown-item" href="{{ url('/services/corporate-transportation-dallas') }}">Corporate Transportation</a></li>
                                        <li><a class="dropdown-item" href="{{ url('/services/executive-shuttle-services-dallas') }}">Executive shuttle services</a></li>
                                        <li><a class="dropdown-item" href="{{ url('/services/luxury-van-rental-dallas') }}">Luxury van rental</a></li>
                                        <li><a class="dropdown-item" href="{{ url('/services/private-car-service-in-dallas') }}">Private car service</a></li>
                                        <li><a class="dropdown-item" href="{{ url('/services/private-aviation-dallas') }}">Private Aviation/FBO</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle {{ request()->is('airports*') ? 'active' : '' }}" href="#" id="navbarDropdownAirports" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Airports
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownAirports">
                                        <li><a class="dropdown-item" href="{{ url('/airports/addison-airport-car-service') }}">Addison Airport (ADS)</a></li>
                                        <li><a class="dropdown-item" href="{{ url('/airports/dfw-car-service') }}">Dallas/Fort Worth Airport (DFW)</a></li>
                                        <li><a class="dropdown-item" href="{{ url('/airports/dallas-love-field-airport-car-service') }}">Dallas Love Field Airport (DAL)</a></li>
                                        <li><a class="dropdown-item" href="{{ url('/airports/signature-flight-support-car-service') }}">McKinney National Airport (TKI)</a></li>
                                        <li><a class="dropdown-item" href="{{ url('/airports/waco-regional-airport-car-service') }}">Waco Regional Airport (ACT)</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('our-fleet*') ? 'active' : '' }}" href="{{ url('/our-fleet') }}">Fleet</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('fifa-world-cup*') ? 'active' : '' }}" href="{{ url('/fifa-world-cup-2026-car-service-dallas') }}">FIFA World Cup 26</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('get-a-quote*') ? 'active' : '' }}" href="{{ url('/get-a-quote') }}">Get a Quote</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('booking*') && !request()->is('booking/point-to-point*') && !request()->is('booking/hourly-hire*') ? 'active' : '' }}" href="{{ url('/booking') }}">Book Now</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle {{ request()->is('get-a-quote*','contact-us*','faqs*','terms*','privacy*','cancellation*') ? 'active' : '' }}" href="#" id="navbarDropdownHelp" role="button" data-bs-toggle="dropdown" aria-expanded="false">Help</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownHelp">
                                        <li><a class="dropdown-item" href="{{ url('/get-a-quote') }}">Get a quote</a></li>
                                        <li><a class="dropdown-item" href="{{ url('/contact-us') }}">Contact us</a></li>
                                        <li><a class="dropdown-item" href="{{ url('/faqs') }}">FAQs</a></li>
                                        <li><a class="dropdown-item" href="{{ url('/terms-and-conditions') }}">Terms & Conditions</a></li>
                                        <li><a class="dropdown-item" href="{{ url('/privacy-policy') }}">Privacy Policy</a></li>
                                        <li><a class="dropdown-item" href="{{ url('/cancellation-policy') }}">Cancellation Policy</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
