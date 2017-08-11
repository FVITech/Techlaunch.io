const $testimonials = $('section.testimonials .carousel-item')

$testimonials.each(function() {
    const $quote = $(this).find('.quote')

    if($quote.text().length < 300) return;

    const id = $(this).attr('id')
    const link = `<a class="read-more" href="../testimonials/index.php#${id}">Read More</a>`
    const truncated = $quote.text().slice(0, 300) + '... ' + link

    $quote.html(truncated)
})
