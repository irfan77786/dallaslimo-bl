@php
    $logoData = brand_logo_base64();
    $mime = brand_logo_mime();
    $logoStyle = $style ?? 'max-width: 250px; max-height: 60px; height: auto;';
@endphp
@if($logoData)
    <img src="data:{{ $mime }};base64,{{ $logoData }}" alt="{{ config('brand.logo_alt') }}" style="{{ $logoStyle }}" />
@else
    <div style="font-weight: bold; font-size: 18px;">{{ config('brand.logo_alt') }}</div>
@endif
