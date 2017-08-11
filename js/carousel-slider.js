window.$ = require('jquery')

require('carousel-slider/dist/carousel.js')

$(document).ready(function() {
    // adjust the carousel items for mobile devices when screen is small enough
    if($(window).width() < 768) {
        const $carousel = $('.carousel')
        $carousel.each((index, el) => {
            if(el) {
                el.stackSlides()
            }
        })
    }

    // stop autoslide
    if($('section.testimonials').length > 0) {
        $('.carousel')[0].stopAutoSlide()
    }
})
