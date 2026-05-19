@extends('master-home')

@section('content')
<div class="px-md-15 py-40 py-md-60">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 col-xl-7">
                <div class="bg-white bdr-radius px-20 px-sm-30 py-40 text-center">
                    <div class="mb-20">
                        <svg width="64" height="64" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true">
                            <circle cx="12" cy="12" r="10" fill="#e7f3f7" />
                            <path d="M9 12.5L11 14.5L15.5 10" stroke="#1B9CCC" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h1 class="h2 fw-semibold mb-15">Thank You</h1>
                    <p class="font-md mb-25">Your quote request has been received. Our team will review your trip
                        details and send you a customized quote shortly.</p>
                    <p class="text-secondary mb-30">Need immediate assistance? Call <a href="tel:+12148978056"
                            class="fw-semibold">+1 214-919-5377</a></p>
                    <div class="d-flex flex-wrap gap-2 justify-content-center">
                        <a href="{{ route('booking') }}" class="btn btn-primary">Back to Home</a>
                        <a href="{{ route('get_a_quote') }}" class="btn btn-outline-secondary">Request Another Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    @if (session('success'))
    Swal.fire({
        title: 'Success!',
        text: @json(session('success')),
        icon: 'success',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'OK'
    });
@endif
</script>
@endsection