const $ = require('jquery')
const throttle = require('lodash.throttle')

// Add selectors here and they will all have the class 'scroll-visible'
// added to them when they scroll into view
var selectors = [
    $('.graph'),
    $('.appear')
]

var animElements = []

function _populateElements() {
    selectors.forEach(function($selector) {
        $selector.each(function(i, el) {
            animElements.push({element: $(el), position: null})
        })
    })
}

function _getPositions() {
    _populateElements()

    animElements.forEach(function($el) {
        $el.position = $el.element.offset().top
    })
}

const supportPageOffset = window.pageXOffset !== undefined;
const isCSS1Compat = ((document.compatMode || "") === "CSS1Compat");
const windowScroll = supportPageOffset ? window.pageYOffset : isCSS1Compat ? document.documentElement.scrollTop : document.body.scrollTop;
var windowHeight = null
var offset = null

function playAnimations() {
    animElements.forEach(function(el) {
        const triggerPoint = el.position - windowHeight + offset
        if(window.scrollY > triggerPoint) {
            el.element.addClass('scroll-visible')
        } else {
            el.element.removeClass('scroll-visible')
        }
    })
}

function onScroll() {
    playAnimations()
}

function _showItemsInView() {
    windowHeight = $(window).height()
    offset = windowHeight * .1
    _getPositions()
    playAnimations()
}

$(document).ready(function() {
    // make sure items in view when page loads become visible
    setTimeout(_showItemsInView, 300)
    setTimeout(_showItemsInView, 600)
    setTimeout(_showItemsInView, 900)
    setTimeout(_showItemsInView, 1200)

    // re-initialize every 2 seconds in case of page resizing
    setInterval(function() {
        _showItemsInView()
    }, 2000)

    $(document).scroll(throttle(onScroll, 100))
})

module.exports.playAnimations = playAnimations
