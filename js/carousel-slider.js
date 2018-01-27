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
        $('.carousel').each(function () {
            $carousel = $(this)

            $carousel.mouseover(function(e) {
                $carousel[0].stopAutoSlide()
            })
        })
    }
})
