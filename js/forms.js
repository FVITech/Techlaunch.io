const $ = require('jquery')
const { toggleAgreement } = require('./agreement.js')
const escape = require('escape-html')

let rootPath = null
let program = null
let totalCost = null
const $popUpForm = $('#pop-up-form')

function togglePopUpForm(e) {
    $popUpForm.toggleClass('open')
    $popUpForm.find('.user-feedback').removeClass('success error').text('')
    $popUpForm.find('.submit-btn').show()
    $popUpForm.find('input[name="first_name"]').focus()
    $popUpForm.find('.get-info-form')[0].dataset.enroll = 'false'

    if(e && e.target.dataset.enroll === 'true') {
        $popUpForm.find('.get-info-form')[0].dataset.enroll = 'true'
        $popUpForm.find('.title').hide()
        $popUpForm.find('.steps').removeClass('hidden')
        program = e.target.dataset.formProgram
        totalCost = e.target.dataset.totalCost
    } else {
        $popUpForm.find('.title').show()
        $popUpForm.find('.steps').addClass('hidden')
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
        url: `${root}forms/get-info-form.php`,
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

        togglePopUpForm(null)
        resetForm($(e.currentTarget))
        setTimeout(() => {
            toggleAgreement({
                userData: userData,
                program: program,
                totalCost: totalCost,
                rootPath: rootPath
            })
        }, 100)
        return false
    }

    sendForm($(e.currentTarget))
}

$('.get-more-info').click(togglePopUpForm)
$('#navbar .get-info').click(togglePopUpForm)
$('.enroll').click(togglePopUpForm)
$('#pop-up-form .close-btn').click(togglePopUpForm)
$('.pop-up-form-overlay').click(togglePopUpForm)

$('.get-info-form').submit(onFormSubmit)
