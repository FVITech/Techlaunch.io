const debounce = require('lodash.debounce')
const { switchQuote } = require('./quotes.js')

// Add selectors here and they will all have the class 'scroll-visible'
// added to them when they scroll into view
let selectors = [
    $('.graph'),
    $('.appear')
]

let animElements = []

function _populateElements() {
    animElements = []

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
let windowScrollCache
let windowHeight
let offset

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

const $quotesSection = $('section#quotes')

function _showItemsInView() {
    if (windowScrollCache === windowScroll) {
        return
    }

    windowScrollCache = windowScroll
    windowHeight = $(window).height()
    offset = windowHeight * .1
    _getPositions()
    playAnimations()
}

$(document).ready(function() {
    // make sure items in view when page loads become visible
    setTimeout(_showItemsInView, 1000)

    $(document).resize(debounce(function () {
        setTimeout(function () {
            _showItemsInView()
        }, 200)
    }), 100)

    $(document).scroll(debounce(function () {
        playAnimations()

        if ($quotesSection.length) {
            switchQuote()
        }
    }, 100))
})

module.exports.playAnimations = playAnimations
