const $ = require('jquery')
const { toggleAgreement } = require('./agreement.js')
const escape = require('escape-html')

let rootPath = null
let program = null
let cost = null
const $getInfoForm = $('#get-info-form')

function toggleGetInfoForm(e) {
    $getInfoForm.find('.form-input:first-of-type').show(0)
    $getInfoForm.find('.user-feedback').removeClass('success error').text('')
    $getInfoForm.find('.submit-btn').show()
    $getInfoForm.find('input[name="first_name"]').focus()
    $getInfoForm.find('form')[0].dataset.enroll = 'false'
    $getInfoForm.toggleClass('open')

    if(e && e.target.dataset.enroll === 'true') {
        $getInfoForm.find('form')[0].dataset.enroll = 'true'
        $getInfoForm.find('.title').hide()
        $getInfoForm.find('.steps').removeClass('hidden')
        program = e.target.dataset.formProgram
        cost = e.target.dataset.cost
    } else {
        $getInfoForm.find('.title').show()
        $getInfoForm.find('.steps').addClass('hidden')

    }

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
    rootPath = e.currentTarget.dataset.rootpath

    if(e.target.dataset.enroll === 'true') {
        const userData = {
            firstName: escape($(e.target).find('input[name="first_name"]').val()),
            lastName: escape($(e.target).find('input[name="last_name"]').val()),
            phone: escape($(e.target).find('input[name="phone"]').val()),
            email: escape($(e.target).find('input[name="email"]').val()),
            zip: escape($(e.target).find('input[name="zip_code"]').val())
        }

        toggleGetInfoForm(null)
        resetForm($(e.currentTarget))
        setTimeout(() => {
            toggleAgreement({
                userData: userData,
                program: program,
                cost: cost,
                rootPath: rootPath
            })
        }, 100)
        return false
    }

    sendForm($(e.currentTarget))
}

$(document).ready(function() {
    // button click listeners
    $('.get-more-info').click(toggleGetInfoForm)
    $('#navbar .get-info').click(toggleGetInfoForm)
    $('.enroll').click(toggleGetInfoForm)
    $('#get-info-form .close-btn').click(toggleGetInfoForm)
    $('.get-info-form-overlay').click(toggleGetInfoForm)

    // on form submit
    $('#get-info-form form').submit(onFormSubmit)
})
