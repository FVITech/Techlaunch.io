const $quotesSection = $('section#quotes')
const $quotes = $quotesSection.find('.quote-container')

let quoteIndex = Math.floor( Math.random() * $quotes.length )

function switchQuote() {
    quoteIndex = ++quoteIndex % $quotes.length
    $quotes.hide()
    $($quotes[quoteIndex]).show()
}

switchQuote()

export { switchQuote }
