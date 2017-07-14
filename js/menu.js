const $ = require('jquery');

$(document).ready(function() {
    var $menuBtn = $("#menu-button");
    var $menuContainer = $("#menu-container");
    var $overlay = $("#menu-overlay");

    // Open/close menu
    $menuBtn.on("click", function() {
        $menuContainer.toggleClass("visible");
        $menuBtn.toggleClass("close")
        $overlay.toggleClass('visible')
    });
    $menuContainer.on('click', e => {
        if(!$(e.target).hasClass('menu-header') || $(window).width() >= 992) {
            $menuContainer.removeClass('visible')
            $menuBtn.removeClass("close")
            $overlay.removeClass('visible')
        }
    })
    $overlay.on('click', e => {
        $menuContainer.removeClass('visible')
        $overlay.removeClass('visible')
        $menuBtn.removeClass('close')
    })

    // open/close submenus on mobile devices
    $('.menu').on('click', '.dropdown', e => {
        if($(window).width() < 992) {
            e.preventDefault()

            if($(e.currentTarget).hasClass('open')) {
                $(e.currentTarget).removeClass('open')
                $('.menu-list').removeClass('visible')
                $('.menu-header').removeClass('shrunk')
                return false
            }

            $('.menu-header').not(e.currentTarget).addClass('shrunk').removeClass('open')
            $('.menu-list').not($(e.currentTarget).next()).removeClass('visible')

            $(e.currentTarget).toggleClass('open')
            $(e.currentTarget).removeClass('shrunk')
            $(e.currentTarget).next().toggleClass('visible')
        }
    })
});
