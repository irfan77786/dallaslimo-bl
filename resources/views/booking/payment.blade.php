@extends('master')
@section('content')

@section('styles')
    <style>
        .payment-card-option {
            background: linear-gradient(90deg, #e52c43, #ff6c00);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: bold;
        }

    #card-errors{
        line-height: 18px !important;
        margin-left: 0;
    }

 .floating-bordered-input {
   position: relative;
   border: 1px solid #C4C4C4;
   border-radius: 4px;
   padding: 12px 15px !important;
   padding-top: 0px !important;
   padding-bottom: 0px !important;
   background: #fff;
 }
 .floating-bordered-input.card-element-wrapper {
   padding: 0 !important;
   display: flex;
   align-items: center;
   min-height: 50px;
 }

        #card-element.form-control {
        height: 50px;
        padding: 12px 15px;
        background: transparent;
        border: none;
        width: 100%;
        }
        .card-element-wrapper #card-element {
        padding: 12px 15px;
        height: 50px;
        min-height: 50px;
        }
        .card-element-wrapper #card-element iframe {
        pointer-events: auto !important;
        width: 100% !important;
        height: 100% !important;
        }
        .card-element-wrapper .__PrivateStripeElement {
        width: 100%;
        height: 100%;
        }
        #payment-form {
            width: 100%;
            margin: 0 auto;
        }

        button {
            padding: 10px 16px;
            background-color: #5469d4;
            color: white;
            border: none;
            border-radius: 4px;
            font-weight: bold;
            cursor: pointer;
        }
        .input-group-container {
    overflow: hidden;
    width: 100%;
}
    .hover-black:hover {
        color: black !important;
    }
    .hover-black:focus {
        color: black !important;
    }
    .terms-paragraph {
        margin-bottom: 10px;
    }

    .terms-heading {
        font-size: 16px;
        font-style: normal;
        line-height: 25px;
        font-weight: 700;
        margin-top: 20px;
        margin-bottom: 10px;
    }
    
    @media (max-width: 768px) {
      footer.footer.bg-blue {
    display: none !important;
}

        .container.step-wrapper.md-py-3 {
    display: none !important;
}

.d-md-none.mb-3 {
    margin-bottom: 9px !important;
    margin-top: 10px !important;
}


.p-3.mt-3.rounded-lg.shadow-sm.bg-light {
    margin-top: 0px !important;
     padding-top: 0px !important;
}

.mobile-card-methods {
    display: block;
    text-align: center;
    margin-top: 10px;
}

.mobile-card-methods .payment-methods {
    margin-left: 0 !important;
    max-width: 220px;
}

 .payment-methods {
    display: flex !important;
    margin-top: 1px !important;
    max-width: 88% !important;
}

.container.py-md-5 {

    background: #fff !important;
}

    }
    @media (min-width: 769px) {
        .mobile-card-methods {
            display: none;
        }
    }
    
    footer.footer.bg-blue {
    display: block;
}
.InputContainer .InputElement {
    position: absolute;
    top: 0;
    font-size: 16px !important;
}

   .container, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
        max-width: 1171px;
    }
    
    p.text-muted.small.bottom-tx {
       font-size: 11px;
    margin-top: -10px !important;
    margin-bottom: 11px;
}
.mobile-card-methods {
    display: block !important;
    width: 338px;
}
a.hover-black {
    text-decoration: underline !important;
}
.text-muted {
    color: #1E1E1E !important;
}
.p-3.mt-3.rounded-lg.shadow-sm.bg-light {
    background-color: #fafafa !important;
    padding-top: 20px !important;
}


.last-page-img {
    display: flex !important;
    margin-top: 0px !important;
    max-width: 73% !important;
    margin-left: 0px !important;
}


    </style>
@endsection

@include('partials.bookig-top_area')

<div class="container py-md-5 only-for-payments">
<div class="row">
<div class="col-md-8 payment-for-css">

<h5 class="mb-2 fw-bold">Payment Information</h5>
<p class="mb-3 small" style="color: #000;">All transactions are secure and encrypted. Safe and secure payments powered by <b>Stripe</b></p>

@if (session('error'))
<div class="alert alert-danger mb-3" role="alert">{{ session('error') }}</div>
@endif
<form id="payment-form" method="POST" action="{{ route('completeBook') }}">
@csrf
<input type="hidden" name="payment_method_id" id="payment_method_id">

@if(auth()->check())
<label class="p-3 mb-3 rounded  d-flex align-items-center payment-card-option">
    <input type="radio"
           name="payment_method"
           class="me-2 saved-card-radio"
           value=""
           checked>

    <i class="far fa-credit-card fs-2 me-3"></i>
    <span>Pay with a new card</span>
</label>

@forelse($cards as $card)
@php
    $brand = strtolower($card->card->brand);
    $holder = $card->billing_details->name ?? '';
@endphp

<label class="p-3 mb-3 rounded border d-flex align-items-center payment-card-option">
    <input type="radio"
           name="payment_method"
           class="me-2 saved-card-radio"
           value="{{ $card->id }}"
           data-holder="{{ $holder }}">

    {{-- FONT AWESOME ICON --}}
    @if($brand === 'visa')
        <i class="fab fa-cc-visa text-primary fs-2 me-3"></i>
    @elseif($brand === 'mastercard')
        <i class="fab fa-cc-mastercard text-danger fs-2 me-3"></i>
    @elseif($brand === 'amex')
        <i class="fab fa-cc-amex text-info fs-2 me-3"></i>
    @elseif($brand === 'discover')
        <i class="fab fa-cc-discover text-warning fs-2 me-3"></i>
    @else
        <i class="far fa-credit-card fs-2 me-3"></i>
    @endif

    <span>
        **** **** **** {{ $card->card->last4 }}
        ({{ strtoupper($card->card->brand) }})
        Exp: {{ $card->card->exp_month }}/{{ $card->card->exp_year }}
    </span>
</label>
@empty
<p class="text-danger">No saved cards found â€” Please enter card below</p>
@endforelse
@endif

{{-- âœ… FULL NAME + CARD NUMBER (SAME GROUP) --}}
<div id="new-card-fields">

    <!-- Full Name -->
    <div class="mb-3 floating-bordered-input position-relative">
        <span class="floating-label">Full Name</span>
        <input type="text" id="card-name" class="form-control" placeholder="Name On Card*" required>
    </div>

    <!-- Card Number -->
    <div class="mb-3 floating-bordered-input position-relative card-element-wrapper">
        <span class="floating-label">Card Number</span>
        <div id="card-element" class="form-control"></div>
    </div>

    <div class="mobile-card-methods">
        <p class="text-muted small  bottom-tx">
        By clicking "BOOK NOW", you agree to our
        <a href="#" class="hover-black" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Terms &amp; Conditions</a>
    </p>
        <img src="{{ asset('assets/img/credit-cards.png') }}" alt="Payment methods" class="img-fluid payment-methods last-page-img">
    </div>

    <div id="card-errors" class="mb-2 text-danger small"></div>
</div>



<div id="card-errors" class="mb-2 text-danger small"></div>

{{-- âœ… BUTTON --}}
<button type="submit" id="final-pay-button" class="mt-3 btn btn-primary w-100">
BOOK NOW
</button>

</form>
</div>

@include('booking.right_side_pricing_area')

</div>
</div>

@include('partials.booking_terms_modal')

<script src="https://js.stripe.com/v3/"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const stripe = Stripe("{{ config('services.stripe.key') }}");
    const elements = stripe.elements();
    const card = elements.create('card');
    card.mount('#card-element');

    const form = document.getElementById('payment-form');
    const errorDiv = document.getElementById('card-errors');
    const cardNameInput = document.getElementById('card-name');
    const hiddenPaymentMethod = document.getElementById('payment_method_id');
    const savedRadios = document.querySelectorAll('.saved-card-radio');
    const newCardFields = document.getElementById('new-card-fields');

    function toggleNewCardFields(show) {
        newCardFields.style.display = show ? 'block' : 'none';

        // Enable/disable input based on visibility
        cardNameInput.required = show;   // required only if showing
        cardNameInput.disabled = !show;  // disable if hidden

        // For Stripe Card Element, you can't set disabled, but hiding is enough
        if (!show) cardNameInput.value = '';
    }



    // âœ… INITIAL STATE: SHOW NEW CARD FIELDS
    toggleNewCardFields(true);

    // âœ… WHEN RADIO CHANGES
    savedRadios.forEach(radio => {
        radio.addEventListener('change', function () {
            hiddenPaymentMethod.value = radio.value;

            if (radio.value) {
                // saved card selected â†’ hide new card
                const holderName = radio.dataset.holder || '';
                cardNameInput.value = holderName;
                toggleNewCardFields(false);
            } else {
                // custom card selected â†’ show new card
                toggleNewCardFields(true);
            }

            errorDiv.innerText = '';
        });
    });


    // âœ… IF USER TYPES MANUALLY â†’ SWITCH TO NEW CARD MODE
    cardNameInput.addEventListener('input', function () {
        savedRadios.forEach(r => r.checked = false);
        hiddenPaymentMethod.value = '';
        toggleNewCardFields(true);
    });

    // âœ… FINAL PAYMENT HANDLER
form.addEventListener('submit', async function (event) {
    event.preventDefault();
    errorDiv.innerText = '';

    // If a saved card is selected, submit form directly
    if (hiddenPaymentMethod.value && hiddenPaymentMethod.value !== '') {
        form.submit();
        return;
    }

    // Otherwise, new card â†’ validate and create PaymentMethod
    const cardholder = cardNameInput.value.trim();
    if (!cardholder) {
        errorDiv.innerText = 'Card holder name is required.';
        return;
    }

    const { paymentMethod, error } = await stripe.createPaymentMethod({
        type: 'card',
        card: card,
        billing_details: {
            name: cardholder
        }
    });

    if (error) {
        errorDiv.innerText = error.message;
        return;
    }

    hiddenPaymentMethod.value = paymentMethod.id;
    form.submit();
});

});
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const termsModal = document.getElementById('staticBackdrop');
    if (!termsModal) return;
    termsModal.addEventListener('show.bs.modal', function () {
        document.body.appendChild(termsModal);
    });
});
</script>
@endsection
