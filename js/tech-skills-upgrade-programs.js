const $ = require('jquery')

function _switchPrograms(active) {
    $(`.switchable:not(.${active}-content)`).hide()
    $(`.${active}-content`).show()
    $('.programs-bar button').removeClass('active')
    $(`.programs-bar button[data-program="${active}"]`).addClass('active')
}

function initProgramSwitcher() {
    if($('#tech-skills-upgrade-programs').length === 0) return false

    let active = $('.programs-bar button.active').data('program')
    _switchPrograms(active)

    $('.programs-bar').on('click', 'button', e => {
        active = $(e.currentTarget).data('program')
        _switchPrograms(active)
        location.hash = active
    })

    $('.program-cards').on('click', '.program-card', e => {
        active = $(e.currentTarget).data('program')
        _switchPrograms(active)
        $(window).scrollTop($('section.summary').offset().top)
        location.hash = active
    })
}

function checkUrlAndSwitchProgram() {
    if(
        location.hash.indexOf('#wordpress') === 0 ||
        location.hash.indexOf('#aws') === 0
    ) {
        const program = location.hash.slice(1)
        $(`.programs-bar button[data-program="${program}"]`).click()
    }
}

$(document).ready(function() {
    initProgramSwitcher()
    checkUrlAndSwitchProgram()

    $('.menu-section.tech-skills-upgrade').on('click', 'a', e => {
        setTimeout(function() {
            checkUrlAndSwitchProgram()
        }, 100)
    })

})
