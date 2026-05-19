<?php

if (! function_exists('brand_logo_path')) {
    function brand_logo_path(): string
    {
        return public_path(config('brand.logo'));
    }
}

if (! function_exists('brand_logo_asset')) {
    function brand_logo_asset(): string
    {
        return asset(config('brand.logo'));
    }
}

if (! function_exists('brand_logo_url')) {
    function brand_logo_url(): string
    {
        return rtrim((string) config('app.url'), '/') . '/' . ltrim((string) config('brand.logo'), '/');
    }
}

if (! function_exists('brand_logo_base64')) {
    function brand_logo_base64(): ?string
    {
        $path = brand_logo_path();

        if (! is_readable($path)) {
            return null;
        }

        $contents = file_get_contents($path);

        return ($contents !== false && $contents !== '') ? base64_encode($contents) : null;
    }
}

if (! function_exists('brand_logo_mime')) {
    function brand_logo_mime(): string
    {
        return 'image/png';
    }
}
