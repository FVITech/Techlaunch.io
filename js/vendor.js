window.$ = require('jquery')

require('carousel-slider/dist/carousel.js')

// adjust the carousel items for mobile devices when screen is small enough
if($(window).width() < 768) {
    const $carousel = $('.carousel')
    $carousel.each((index, el) => {
        if(el) {
            el.stackSlides()
        }
    })
}

// don't autoSlide the veterans webapge testimonials
if($('section.testimonials.veterans').length > 0) {
    $('.carousel')[0].stopAutoSlide()
}

// stop autoSlide when hover over a video in a carousel
$('.carousel-item .video-container').on('mouseover', e => {
    $(e.currentTarget).closest('.carousel')[0].stopAutoSlide()
})
