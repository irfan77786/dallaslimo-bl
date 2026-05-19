<?php

/**
 * Convert Help pages: Contact us, FAQs, Terms, Privacy, Cancellation
 */

$baseDir = __DIR__ . '/dallaslimo-bl';
$urlReplacements = [
    'href="/services/airport-transfer-dallas/"' => 'href="/services/airport-transfers-dallas/"',
    'href="/services/private-car-service-dallas/"' => 'href="/services/private-car-service-in-dallas/"',
    'href="/booking/"' => 'href="/book-now/"',
];

$pages = [
    'contact-us' => ['contact-us', 'Contact us', 'Have a question, need a quote, or planning upcoming travel? Our team is ready to assist with bookings, custom requests, and real-time support—every step of the way.'],
    'faqs' => ['faqs', 'Frequently Asked Questions', 'Find answers to common questions about our black car service, airport transfers, and chauffeur transportation in Dallas.'],
    'terms-and-conditions' => ['terms-and-conditions', 'Terms and Conditions', 'Review our terms and conditions for Dallas black car service.'],
    'privacy-policy' => ['privacy-policy', 'Privacy Policy', 'Review our privacy policy for Dallas black car service.'],
    'cancellation-policy' => ['cancellation-policy', 'Cancellation Policy', 'Learn about our cancellation policy for Dallas black car service.'],
];

foreach ($pages as $htmlDir => list($bladeName, $h1, $p)) {
    $htmlFile = $baseDir . '/' . $htmlDir . '/index.html';
    if (!file_exists($htmlFile)) {
        echo "Skip $htmlDir - not found\n";
        continue;
    }

    $content = file_get_contents($htmlFile);

    // Extract main content: from first <section class="py-40"> to </main>
    $start = strpos($content, '<section class="py-40">');
    if ($start === false) {
        $start = strpos($content, '<section class="py-');
    }
    $end = strpos($content, '</main>');
    if ($start === false || $end === false) {
        echo "Skip $htmlDir - structure not found\n";
        continue;
    }
    $mainContent = substr($content, $start, $end - $start);

    // Asset replacements
    $mainContent = preg_replace('#src="\.\./\.\./assets/([^"]+)"#', 'src="{{ asset(\'dallaslimo-bl-design/assets/$1\') }}"', $mainContent);
    $mainContent = preg_replace('#src="\./\.\./assets/([^"]+)"#', 'src="{{ asset(\'dallaslimo-bl-design/assets/$1\') }}"', $mainContent);
    $mainContent = str_replace('<?xml version="1.0" encoding="utf-8"?>', '{!! \'<?xml version="1.0" encoding="utf-8"?>\' !!}', $mainContent);

    foreach ($urlReplacements as $from => $to) {
        $mainContent = str_replace($from, $to, $mainContent);
    }

    $blade = <<<BLADE
@extends('master-home')

@section('content')
    <div class="px-md-15">
        <section class="banner-section bdr-radius position-relative">
            <div class="container-fluid">
                <span class="bg-img-cover bdr-radius only-m">
                    <img src="{{ asset('dallaslimo-bl-design/img/black-car-service-dallas-banner.webp') }}" alt="Hero Banner Image" class="img-fluid">
                </span>
                <span class="bg-img-cover bdr-radius only-d">
                    <img src="{{ asset('dallaslimo-bl-design/assets/banner-01.webp') }}" alt="Hero Banner Image" class="img-fluid">
                </span>
            </div>
            <div class="container py-30 pb-md-50">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-11 col-xl-10">
                        <header class="mb-md-15 text-center">
                            <h1 class="h1 fw-semibold text-center">{$h1}</h1>
                            <p class="font-md">{$p}</p>
                            <div class="text-center">
                                <a href="tel:+12148978056" class="btn btn-primary text-capitalize">Call Now: +1 214-919-5377</a>
                            </div>
                        </header>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {$mainContent}
@endsection
BLADE;

    file_put_contents(__DIR__ . '/resources/views/website/' . $bladeName . '.blade.php', $blade);
    echo "Created $bladeName.blade.php\n";
}

echo "Done.\n";
