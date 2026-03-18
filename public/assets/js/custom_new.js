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
                spaceBetween: 100
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
    $(".testimonial-slider").each(function () {
        var el = this;
        var paginationEl = el.querySelector(".swiper-pagination");
        var nextEl = el.querySelector(".swiper-button-next");
        var prevEl = el.querySelector(".swiper-button-prev");
        var config = {
            slidesPerView: 1,
            slidesOffsetBefore: 0,
            slidesOffsetAfter: 0,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
        };
        if (paginationEl) {
            config.pagination = { el: paginationEl, clickable: true };
        }
        if (nextEl && prevEl) {
            config.navigation = { nextEl: nextEl, prevEl: prevEl };
        }
        new Swiper(el, config);
    });
});


const input = document.querySelector("#contact_no");

window.intlTelInput(input, {
    initialCountry: "us",
    separateDialCode: true,
    preferredCountries: ["us", "gb", "ca", "pk"],
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js"
});