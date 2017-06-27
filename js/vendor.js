window.$ = require('jquery')

require('carousel-slider/dist/carousel.js')

if($(window).width() < 768) {
    const $carousel = $('.carousel')
    $carousel.each((index, el) => {
        if(el) {
            el.stackSlides()
        }
    })
}

if($('section.testimonials.veterans').length > 0) {
    $('.carousel')[0].stopAutoSlide()
}

$('.dots, #left-btn, #right-btn').click(e => {
    console.log(e.currentTarget);
    $(e.currentTarget).closest('.carousel')[0].stopAutoSlide()
})

$('.carousel-item .video-container').on('mouseover', e => {
    $(e.currentTarget).closest('.carousel')[0].stopAutoSlide()
})
