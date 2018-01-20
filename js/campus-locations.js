const $ = require('jquery')

const miamiSrc = 'https://www.google.com/maps/embed/v1/place?q=Pipeline%20Doral&key=AIzaSyDaSsFoC1uGHddMd2hFgIKfHiupzPUhZQY'
const miramarSrc = 'https://www.google.com/maps/embed/v1/place?q=3520%20Enterprise%20Way%2C%20Miramar%2C%20FL%2033025&key=AIzaSyDaSsFoC1uGHddMd2hFgIKfHiupzPUhZQY'

const $locationMap = $('#location-map')
const $miamiBtn = $('#miami-in-map')
const $miramarBtn = $('#miramar-in-map')

$miamiBtn.click(() => {
    $locationMap.attr('src', miamiSrc)
})

$miramarBtn.click(() => {
    console.log('foo');
    $locationMap.attr('src', miramarSrc)
})
