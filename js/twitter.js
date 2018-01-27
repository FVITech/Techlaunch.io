const rootPath = $('footer').data('rootpath')

$(document).ready(function() {
    $.ajax({
        url: `${rootPath}twitter.php`,
        method: 'GET',
        dataType: 'json'
    })
    .then(res => {
        const tweetDivs = document.querySelectorAll('footer .tweets-list .tweet')
        Array.prototype.forEach.call(tweetDivs, function (el, index) {
            const text = res[index].text.substring(0, 80) + '...'
            $(el).find('.text').text(text)

            const date = new Date(res[index].created_at).toDateString()
            $(el).find('.date').text(date)

            const url = `https://twitter.com/${res[index].user.screen_name}/status/${res[index].id_str}`
            $(el).attr('href', url)
        });
    })
    .fail(err => {
        console.log('failed');
        console.error(err)
    })
})
