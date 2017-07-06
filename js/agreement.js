const $ = require('jquery')
const { togglePayPalPopUp } = require('./paypal.js')
const { createPDF } = require('./html2pdf.js')

let rootPath = null
let userData = null
let program = null
let totalCost = null

const pad = document.querySelector("#signature")
let signaturePad = null
if(pad) {
    signaturePad = new SignaturePad(pad, {
        dotSize: 1,
        maxWidth: 2,
        throttle: 5,
        velocityFilterWeight: 0.4
    })
}

function resizeCanvas() {
    var ratio =  Math.max(window.devicePixelRatio || 1, 1)
    pad.width = pad.offsetWidth * ratio
    pad.height = pad.offsetHeight * ratio
    pad.getContext("2d").scale(ratio, ratio)
    signaturePad.clear()
}

function onAccept(e) {
    const $agreement = $('div.agreement')
    const $agreementContent = $agreement.find('.agreement-content')
    if(signaturePad.isEmpty()) {
        $agreementContent.scrollTop(100000)
        return false
    }

    const agreementPDF = createPDF()

    $agreement.find('.agreement-success').removeClass('hidden')
    $agreement.find('.buttons-container').addClass('hidden')

    toggleAgreement(null)
    setTimeout(function() {
        togglePayPalPopUp({
            userData: userData,
            program: program,
            totalCost: totalCost,
            agreement: agreementPDF,
            rootPath: rootPath
        })
    }, 100)
}

function toggleAgreement(data) {
    if(data) {
        rootPath = data.rootPath
        userData = data.userData
        program = data.program
        totalCost = data.totalCost
    }

    const $agreement = $('div.agreement')
    if($agreement.length === 0) return false

    if(userData) {
        $agreement.find('.first-name').text(userData.firstName)
        $agreement.find('.last-name').text(userData.lastName)
    }
    resizeCanvas()

    $agreement.toggleClass('open')
    $agreement.find('.agreement-success').addClass('hidden')
    $agreement.find('.buttons-container').removeClass('hidden')
    $agreement.find('.agreement-content')
    $agreement.find('.accept').focus()
    if(signaturePad) {
        signaturePad.clear()
    }
}

function initAgreement() {
    const $agreement = $('div.agreement')
    if($agreement.length === 0) return false

    $agreement.find('.agreement-overlay').click(e => toggleAgreement(null))
    $agreement.find('.close-btn').click(e => toggleAgreement(null))
    $agreement.find('button.cancel').click(e => toggleAgreement(null))
    $agreement.find('button.accept').click(onAccept)
}

initAgreement()

module.exports.toggleAgreement = toggleAgreement
