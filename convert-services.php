<?php
/**
 * Convert dallaslimo-bl service pages to Laravel blade files
 */

$baseDir = __DIR__ . '/dallaslimo-bl';
$outPath = __DIR__ . '/resources/views/services';

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
];

function processService($htmlFile, $outPath, $bladeName, $urlReplacements) {
    if (!file_exists($htmlFile)) {
        echo "Skip - file not found: $htmlFile\n";
        return false;
    }

    $content = file_get_contents($htmlFile);

    // Extract banner h1 and p
    preg_match('#<h1[^>]*>([\s\S]*?)</h1>#', $content, $h1Match);
    preg_match('#<p class="font-md">\s*([\s\S]*?)</p>#', $content, $pMatch);
    $h1 = trim($h1Match[1] ?? 'Service');
    $p = isset($pMatch[1]) ? trim($pMatch[1]) : '';
    // Escape $ for heredoc
    $h1 = str_replace('$', '\\$', $h1);
    $p = str_replace('$', '\\$', $p);

    // Extract main content: from first <section class="py-40"> to </main>
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

    // Asset replacements
    $mainContent = preg_replace('#src="../../assets/([^"]+)"#', 'src="{{ asset(\'dallaslimo-bl-design/assets/$1\') }}"', $mainContent);
    $mainContent = preg_replace('#src="../../img/([^"]+)"#', 'src="{{ asset(\'dallaslimo-bl-design/img/$1\') }}"', $mainContent);
    $mainContent = str_replace('<?xml version="1.0" encoding="utf-8"?>', '{!! \'<?xml version="1.0" encoding="utf-8"?>\' !!}', $mainContent);

    // URL replacements
    foreach ($urlReplacements as $from => $to) {
        $mainContent = str_replace($from, $to, $mainContent);
    }

    $blade = <<<BLADE
@extends('master-home')

@section('content')
    <div class="px-md-15">
        <section class="banner-section bdr-radius position-relative">
            <div id="map" class="position-absolute w-100 h-100" style="top:0; left:0; z-index: 1; display:none; border-radius: inherit;"></div>
            <div class="container-fluid">
                <span class="bg-img-cover bdr-radius only-m">
                    <img src="{{ asset('dallaslimo-bl-design/img/black-car-service-dallas-banner.webp') }}" alt="Hero Banner Image" class="img-fluid">
                </span>
                <span class="bg-img-cover bdr-radius only-d">
                    <img src="{{ asset('dallaslimo-bl-design/assets/banner-01.webp') }}" alt="Hero Banner Image" class="img-fluid">
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
                                <a href="tel:+12148978056" class="btn btn-primary text-capitalize">Call Now: +1 214-897-8056</a>
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

// Services in dallaslimo-bl/services/
$services = [
    'airport-transfer-dallas' => 'airport-transfer-dallas',
    'corporate-transportation-dallas' => 'dallas-corporate-transportation',
    'chauffeur-service-dallas' => 'chauffeur-service-dallas-texas',
    'executive-shuttle-services-dallas' => 'executive-shuttle-services-dallas-texas',
    'luxury-van-rental-dallas' => 'luxury-van-rental-dallas-texas',
    'private-car-service-dallas' => 'private-car-service-in-dallas-texas',
    'private-aviation-dallas' => 'private-aviation-dallas',
];

foreach ($services as $htmlDir => $bladeName) {
    processService($baseDir . '/services/' . $htmlDir . '/index.html', $outPath, $bladeName, $urlReplacements);
}

// City-to-city and limo (different paths)
processService($baseDir . '/city-to-city-rides/index.html', $outPath, 'city-to-city-rides', $urlReplacements);
processService($baseDir . '/limousine-service-dallas/index.html', $outPath, 'dfw-limo-service', $urlReplacements);

echo "Done.\n";
