jQuery(document).ready(function ($) {
    // const swiper = new Swiper(".logo-swiper", {
    //     loop: true,
    //     speed: 12000,
    //     direction: "horizontal",
    //     slidesPerView: 5,
    //     spaceBetween: 40,
    //     // allowTouchMove: false,    // optional (for pure auto-scroll)

    //     autoplay: {
    //         delay: 0,
    //         disableOnInteraction: false,
    //         waitForTransition: false,
    //     },

    //     freeMode: true,
    //     freeModeMomentum: false,

    //     loopAdditionalSlides: 8,    // SAME as number of images
    //     watchSlidesProgress: true,
    //     breakpoints: {
    //     // when window width is >= 320px
    //     320: {
    //     slidesPerView: 2
    //     },

    //     // when window width is >= 640px
    //     576: {
    //         slidesPerView: 3
    //     },
    //     768: {
    //         slidesPerView: 4
    //     }
    // }
    // });
    // const swiperEl = document.querySelector(".logo-swiper");

    // swiperEl.addEventListener("mouseenter", () => swiper.autoplay.stop());
    // swiperEl.addEventListener("mouseleave", () => swiper.autoplay.start());
    // -----------------------------
    const marqueSlider = new Swiper(".logo-swiper", {
        slidesPerView: "auto",
        spaceBetween: 150,
        centeredSlides: true,
        loop: true,
        speed: 6000,

        autoplay: {
            delay: 0,
            disableOnInteraction: false,
        },

        // 🚫 Disable dragging/swiping
        allowTouchMove: false,
        simulateTouch: false,

        // ✅ Allow clicks on images/links
        preventClicks: false,
        preventClicksPropagation: false,

        breakpoints: {
            // when window width is >= 320px
            320: {
                spaceBetween: 80
            },
            // when window width is >= 640px
            992: {
                spaceBetween: 120
            },
            1200: {
                spaceBetween: 180
            }
        }
    });
    // ----------------
    const testimonialSwiper = new Swiper(".testimonial-swiper", {
        slidesPerView: 1,
        centeredSlides: true,
        spaceBetween: 30,
        grabCursor: true,
        speed: 2000,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 6000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
        },
    });
    const fleetSwiper = new Swiper(".fleet-swiper", {
        slidesPerView: 1,
        centeredSlides: false,   // ✅ IMPORTANT
        rtl: false,              // ✅ force LTR
        initialSlide: 0,
        spaceBetween: 30,
        grabCursor: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
    });
});


const contactInput = document.querySelector("#contact_no");
if (contactInput) {
    window.intlTelInput(contactInput, {
        initialCountry: "us",
        separateDialCode: true,
        preferredCountries: ["us", "gb", "ca", "pk"],
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js"
    });
}

// Google Maps autocomplete for booking form
function isAirportText(text) {
    if (!text) return false;
    const value = String(text).toLowerCase();
    return value.includes('airport') || value.includes('airfield') || value.includes('terminal');
}
function createSuggestionButton(prediction, onSelect) {
    const button = document.createElement('button');
    button.type = 'button';
    button.className = 'suggestion-item';
    button.textContent = prediction.description;
    button.addEventListener('click', function() { onSelect(prediction); });
    return button;
}
function setupAutocompleteForInput(config, autocompleteService, placesService) {
    const selector = 'input[id^="' + config.inputPrefix + '"]';
    const inputs = document.querySelectorAll(selector);
    inputs.forEach(function(input) {
        if (input.dataset.autocompleteBound === '1') return;
        input.dataset.autocompleteBound = '1';
        const suffix = input.id.slice(config.inputPrefix.length);
        const suggestionsBox = document.getElementById(config.suggestionsPrefix + suffix);
        const airportField = document.getElementById(config.airportPrefix + suffix);
        let debounceTimer = null;
        if (!suggestionsBox) return;
        function clearSuggestions() { suggestionsBox.innerHTML = ''; suggestionsBox.style.display = 'none'; }
        function showSuggestions() { suggestionsBox.style.display = 'block'; }
        function selectPrediction(prediction) {
            input.value = prediction.description;
            if (airportField) airportField.value = isAirportText(prediction.description) ? '1' : '0';
            placesService.getDetails({ placeId: prediction.place_id, fields: ['formatted_address', 'name', 'geometry', 'address_components'] }, function(place) {
                if (config.onPlaceResolved) config.onPlaceResolved(place || null);
            });
            clearSuggestions();
        }
        input.addEventListener('input', function() {
            const query = input.value.trim();
            clearTimeout(debounceTimer);
            if (airportField && query.length === 0) airportField.value = '0';
            if (query.length < 2) { clearSuggestions(); return; }
            debounceTimer = setTimeout(function() {
                autocompleteService.getPlacePredictions({ input: query, componentRestrictions: { country: 'us' }, types: ['geocode'] }, function(predictions, status) {
                    clearSuggestions();
                    if (status !== google.maps.places.PlacesServiceStatus.OK || !predictions || !predictions.length) return;
                    predictions.slice(0, 6).forEach(function(prediction) { suggestionsBox.appendChild(createSuggestionButton(prediction, selectPrediction)); });
                    showSuggestions();
                });
            }, 250);
        });
        input.addEventListener('focus', function() { if (input.value.trim().length >= 2) input.dispatchEvent(new Event('input')); });
        document.addEventListener('click', function(event) { if (!suggestionsBox.contains(event.target) && event.target !== input) clearSuggestions(); });
    });
}
function bindAutocompleteInputs() {
    if (!window.google || !google.maps || !google.maps.places) return;
    const autocompleteService = new google.maps.places.AutocompleteService();
    const placesService = new google.maps.places.PlacesService(document.createElement('div'));
    const fieldConfigs = [
        { inputPrefix: 'pickup-location-hourly', suggestionsPrefix: 'pickup-location-hourly-suggestions', airportPrefix: 'is-airport-hourly', onPlaceResolved: function(place) { window.pickupPlaceHourly = place; } },
        { inputPrefix: 'pickup-location', suggestionsPrefix: 'pickup-suggestions', airportPrefix: 'is-airport', onPlaceResolved: function(place) { window.pickupPlacePoint = place; } },
        { inputPrefix: 'dropoff-location', suggestionsPrefix: 'dropoff-suggestions', airportPrefix: 'is-airport-dropoff', onPlaceResolved: function(place) { window.dropoffPlacePoint = place; } }
    ];
    fieldConfigs.forEach(function(config) { setupAutocompleteForInput(config, autocompleteService, placesService); });
}
window.initAutocomplete = function() {
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', bindAutocompleteInputs, { once: true });
        return;
    }
    bindAutocompleteInputs();
};
document.addEventListener('DOMContentLoaded', function() {
    if (window.google && google.maps && google.maps.places) bindAutocompleteInputs();
});