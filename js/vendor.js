window.$ = require('jquery')

require('carousel-slider/dist/carousel.js')

if($(window).width() < 768) {
    $('.homepage .carousel')[0].stackSlides()
}
