@extends('master-home')

@section('content')
    @include('partials.city-to-city-banner', [
        'bannerTitle' => $bannerTitle,
        'bannerSubtitle' => $bannerSubtitle,
        'callLabel' => $callLabel ?? 'Call Now: +1 214-897-8056',
    ])
    @include('partials.home-dallaslimo-content')
@endsection

@section('scripts')
<script>
@if (session('success'))
    Swal.fire({
        title: 'Success!',
        text: '{{ session('success') }}',
        icon: 'success',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'OK'
    }).then((result) => {
        if (result.isConfirmed && document.querySelector('.news-letter-form')) {
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
