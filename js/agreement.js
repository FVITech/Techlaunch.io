const $ = require('jquery')
const { togglePayPalPopUp } = require('./paypal.js')

let rootPath = null
let userData = null
let program = null
let cost = null

function onNext(e) {
    const $agreement = $('div.agreement')
    const $agreementContent = $agreement.find('.agreement-content')
    if(!$agreement.find('#agreement-accept').is(':checked')) {
        alert('In order to continue forward, you must accept the agreement by clicking the checkbox at the bottom.')
        $agreement.find('#agreement-accept').focus()
        return false
    }

    toggleAgreement(null)
    setTimeout(function() {
        togglePayPalPopUp({
            userData: userData,
            program: program,
            cost: cost,
            rootPath: rootPath
        })
    }, 100)
}

function toggleAgreement(data) {
    if(data) {
        rootPath = data.rootPath
        userData = data.userData
        program = data.program
        cost = data.cost
    }

    const $agreement = $('div.agreement')
    if($agreement.length === 0) return false

    if(userData) {
        $agreement.find('#accept-name').text(`${userData.firstName} ${userData.lastName}`)
    }

    $agreement.toggleClass('open')
    $agreement.find('.next').focus()
}

function initAgreement() {
    const $agreement = $('div.agreement')
    if($agreement.length === 0) return false

    $agreement.find('.agreement-overlay').click(e => toggleAgreement(null))
    $agreement.find('.close-btn').click(e => toggleAgreement(null))
    $agreement.find('button.cancel').click(e => toggleAgreement(null))
    $agreement.find('button.next').click(onNext)
}

$(document).ready(function() {
    initAgreement()
})

module.exports.toggleAgreement = toggleAgreement
