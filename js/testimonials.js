(function() {

    const $ = require('jquery')

    const $testimonials = $('.testimonial')
    const quant = document.querySelectorAll('.testimonial').length

    let activeIndex = 0

    function onArrowClick(e, direction) {
        // hide current testimonial
        const opposite = (direction === 'left') ? 'right' : 'left'
        $testimonials[activeIndex].classList.remove('appear-from-left', 'appear-from-right', 'fade-in')
        $testimonials[activeIndex].classList.add(`hide-to-${opposite}`)

        // calculate the index of the next testimonial to show
        let nextIndex;
        if(direction === 'left') {
            nextIndex = (activeIndex - 1 + quant) % quant
        }
        else {
            nextIndex = (activeIndex + 1 + quant) % quant
        }

        // show next testimonial
        $testimonials[nextIndex].classList.remove('hide-to-left', 'hide-to-right', 'fade-out')
        $testimonials[nextIndex].classList.add(`appear-from-${direction}`)

        activeIndex = nextIndex
    }

    $('.left-btn').click((e) => onArrowClick(e, 'left'))
    $('.right-btn').click((e) => onArrowClick(e, 'right'))

    $('.dot').click(function(e) {
        const nextIndex = this.dataset.index

        if(+nextIndex === +activeIndex) return;

        // fade out active testimonial
        $testimonials[activeIndex].classList.remove('appear-from-left', 'appear-from-right', 'fade-in')
        $testimonials[activeIndex].classList.add('fade-out')

        // fade in next testimonial
        $testimonials[nextIndex].classList.remove('hide-to-left', 'hide-to-right', 'fade-out')
        $testimonials[nextIndex].classList.add('fade-in')

        activeIndex = +nextIndex
    })

})()
