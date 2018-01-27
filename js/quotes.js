const $quotesSection = $('section#quotes')

const $quotes = $quotesSection.find('.quote-container')

let quoteIndex = Math.floor( Math.random() * $quotes.length )
let isSwitched = false

function replaceQuoteText() {
    quoteIndex = ++quoteIndex % $quotes.length
    $quotes.hide()
    $($quotes[quoteIndex]).show()
}

replaceQuoteText()

export function switchQuote() {
    const position = $quotesSection[0].getBoundingClientRect()

    if (position.bottom >= 0) {
        isSwitched = false

        return
    }

    if (isSwitched) {
        return
    }

    replaceQuoteText()

    isSwitched = true
}
