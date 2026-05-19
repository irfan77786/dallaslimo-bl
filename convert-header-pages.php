<?php

/**
 * Convert Fleet, FIFA, Get a Quote, Book Now pages to dallaslimo-bl design
 */

$baseDir = __DIR__ . '/dallaslimo-bl';
$urlReplacements = [
    'href="/services/airport-transfer-dallas/"' => 'href="/services/airport-transfers-dallas/"',
    'href="/services/private-car-service-dallas/"' => 'href="/services/private-car-service-in-dallas/"',
    'href="/dallas-to-austin-car-service/"' => 'href="/dallas-to-austin-car-service"',
    'href="/dallas-to-houston-car-service/"' => 'href="/dallas-to-houston-car-service"',
    'href="/dallas-to-college-station-car-service/"' => 'href="/city-to-city-ride/dallas-to-college-station/"',
    'href="/dallas-to-oklahoma-city-car-service/"' => 'href="/dallas-to-oklahoma-city-ok"',
    'href="/dallas-to-tyler-car-service/"' => 'href="/dallas-to-tyler-car-service"',
    'href="/dfw-to-waco-car-service/"' => 'href="/dfw-to-waco-car-service"',
    'href="/airports/love-field-airport-car-service/"' => 'href="/airports/dallas-love-field-airport-car-service/"',
    'href="/airports/dfw-car-service/"' => 'href="/airports/dfw-car-service/"',
    'href="/booking/"' => 'href="/book-now/"',
];

function processPage($htmlFile, $outPath, $bladeName, $urlReplacements, $mobileBanner = null, $desktopBanner = null)
{
    if (!file_exists($htmlFile)) {
        echo "Skip - file not found: $htmlFile\n";
        return false;
    }

    $content = file_get_contents($htmlFile);

    preg_match('#<h1[^>]*>([\s\S]*?)</h1>#', $content, $h1Match);
    preg_match('#<p class="font-md">\s*([\s\S]*?)</p>#', $content, $pMatch);
    $h1 = trim($h1Match[1] ?? '');
    $p = isset($pMatch[1]) ? trim($pMatch[1]) : '';
    $h1 = str_replace('$', '\\$', $h1);
    $p = str_replace('$', '\\$', $p);

    $start = strpos($content, '<section class="py-40">');
    if ($start === false) {
        $start = strpos($content, '<section class="py-');
    }
    $end = strpos($content, '</main>');
    if ($start === false || $end === false) {
        echo "Skip - structure not found in $htmlFile\n";
        return false;
    }
    $mainContent = substr($content, $start, $end - $start);

    // Asset replacements - handle ../../ and ../
    $mainContent = preg_replace('#src="../../assets/([^"]+)"#', 'src="{{ asset(\'dallaslimo-bl-design/assets/$1\') }}"', $mainContent);
    $mainContent = preg_replace('#src="../../img/([^"]+)"#', 'src="{{ asset(\'dallaslimo-bl-design/img/$1\') }}"', $mainContent);
    $mainContent = preg_replace('#src="\.\./\.\./assets/([^"]+)"#', 'src="{{ asset(\'dallaslimo-bl-design/assets/$1\') }}"', $mainContent);
    $mainContent = preg_replace('#src="\.\./\.\./img/([^"]+)"#', 'src="{{ asset(\'dallaslimo-bl-design/img/$1\') }}"', $mainContent);
    $mainContent = preg_replace('#src="\./\.\./assets/([^"]+)"#', 'src="{{ asset(\'dallaslimo-bl-design/assets/$1\') }}"', $mainContent);
    $mainContent = str_replace('<?xml version="1.0" encoding="utf-8"?>', '{!! \'<?xml version="1.0" encoding="utf-8"?>\' !!}', $mainContent);

    foreach ($urlReplacements as $from => $to) {
        $mainContent = str_replace($from, $to, $mainContent);
    }

    $mobileImg = $mobileBanner ?? 'dallaslimo-bl-design/img/black-car-service-dallas-banner.webp';
    $desktopImg = $desktopBanner ?? 'dallaslimo-bl-design/assets/banner-01.webp';
    if (!str_starts_with($mobileImg, 'dallaslimo-bl-design/')) {
        $mobileImg = 'dallaslimo-bl-design/' . $mobileImg;
    }
    if (!str_starts_with($desktopImg, 'dallaslimo-bl-design/')) {
        $desktopImg = 'dallaslimo-bl-design/' . $desktopImg;
    }

    $blade = <<<BLADE
@extends('master-home')

@section('content')
    <div class="px-md-15">
        <section class="banner-section bdr-radius position-relative">
            <div id="map" class="position-absolute w-100 h-100" style="top:0; left:0; z-index: 1; display:none; border-radius: inherit;"></div>
            <div class="container-fluid">
                <span class="bg-img-cover bdr-radius only-m">
                    <img src="{{ asset('$mobileImg') }}" alt="Hero Banner Image" class="img-fluid">
                </span>
                <span class="bg-img-cover bdr-radius only-d">
                    <img src="{{ asset('$desktopImg') }}" alt="Hero Banner Image" class="img-fluid">
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
                            <h1 class="h1 fw-semibold text-center">{$h1}</h1>
                            <p class="font-md">{$p}</p>
                            <div class="text-center">
                                <a href="tel:+12148978056" class="btn btn-primary text-capitalize">Call Now: +1 214-919-5377</a>
                            </div>
                        </header>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6"></div>
                    <div class="col-12 col-md-6 d-none d-md-block pr-md-30">
                        <div class="distance-form-holder">
                            @include('partials.search', ['id_suffix' => '_form'])
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <style>
        .banner-section .distance-form-holder { position: relative; z-index: 10; }
    </style>

    {$mainContent}
@endsection
BLADE;

    file_put_contents($outPath . '/' . $bladeName . '.blade.php', $blade);
    echo "Created $bladeName.blade.php\n";
    return true;
}

// Fleet
processPage(
    $baseDir . '/our-fleet/index.html',
    __DIR__ . '/resources/views/website',
    'our-fleet',
    $urlReplacements
);

// FIFA World Cup 26 - custom mobile banner
processPage(
    $baseDir . '/fifa-world-cup-2026-car-service-dallas/index.html',
    __DIR__ . '/resources/views/website',
    'fifa-world-cup-2026-car-service-dallas',
    $urlReplacements,
    'dallaslimo-bl-design/img/fifa-world-cup-2026-car-service-dallas-banner.webp',
    null
);

// Book Now (booking page)
processPage(
    $baseDir . '/booking/index.html',
    __DIR__ . '/resources/views/pages',
    'book-now',
    $urlReplacements
);

echo "Fleet, FIFA, Book Now done.\n";
echo "Get a Quote requires manual form integration - creating...\n";
