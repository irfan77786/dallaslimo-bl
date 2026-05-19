<img src="{{ $src ?? ($brandLogoAsset ?? brand_logo_asset()) }}"
    alt="{{ $alt ?? ($brandLogoAlt ?? config('brand.logo_alt')) }}"
    @if(!empty($width)) width="{{ $width }}" @endif
    @if(!empty($height)) height="{{ $height }}" @endif
    class="{{ $class ?? 'img-fluid' }}"
    @if(!empty($style)) style="{{ $style }}" @endif>
