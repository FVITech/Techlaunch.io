const $ = require('jquery')
const { toggleAgreement } = require('./agreement.js')
const escape = require('escape-html')

let rootPath = null
let program = null
let cost = null
const $getInfoForm = $('.get-info-form:not(.on-page)')

function toggleGetInfoForm(e) {
    $getInfoForm.find('.user-feedback').removeClass('success error').text('')
    $getInfoForm.find('.submit-btn').show()
    $getInfoForm.find('input[name="first_name"]').focus()
    $getInfoForm.toggleClass('open')

    if(e && e.target.dataset.formProgram) {
        $getInfoForm.find('select[name="program"]').val(e.target.dataset.formProgram)
    }
}

function resetForm($form) {
    if(!$form) return false

    $form.trigger('reset')
    $form.find('.user-feedback').removeClass('success error').text('')
    $form.find('.submit-btn').fadeIn(200)
}

function sendForm($form) {
    const root = $form.data('rootpath')

    $.ajax({
        url: `${root}backend/get-info-form.php`,
        type: 'POST',
        data: $form.serialize(),
        cache: false
    })
    .done(function(response) {
        $form.find('.submit-btn').hide(0)
        $form.find('.user-feedback').addClass('success').text('Message sent successfully!')
        setTimeout(function() {
            resetForm($form)
        }, 2000)
    })
    .fail(function(err) {
        console.log(err);
        $form.find('.submit-btn').hide(0)
        $form.find('.user-feedback').addClass('error').text('Sorry! This form is broken...')
        setTimeout(function() {
            resetForm($form)
        }, 2000)
    })
}
module.exports.sendForm = sendForm

function onFormSubmit(e) {
    e.preventDefault()

    sendForm($(e.currentTarget))
}

$(document).ready(function() {
    // button click listeners
    $('.get-more-info').click(toggleGetInfoForm)
    $('#navbar .get-info').click(toggleGetInfoForm)
    $('.enroll').click(toggleGetInfoForm)
    $('.get-info-form .close-btn').click(toggleGetInfoForm)
    $('.get-info-form-overlay').click(toggleGetInfoForm)

    // on form submit
    $('.get-info-form form').submit(onFormSubmit)
})
