const $ = require('jquery')
const { toggleAgreement } = require('./agreement.js')
const escape = require('escape-html')

let program = null
let totalCost = null

function togglePopUpForm(e) {
    const $popUpForm = $('#pop-up-form')
    if($popUpForm.length === 0) {
        console.log('Pop up form doesn\'t exist on this page');
        return false
    }

    $popUpForm.toggleClass('open')
    $popUpForm.find('.user-feedback').removeClass('success error').text('')
    $popUpForm.find('.submit-btn').show()
    $popUpForm.find('input[name="first_name"]').focus()
    if(e) {
        $popUpForm.find('input[name="program"]').val(e.target.dataset.formProgram)
        program = e.target.dataset.formProgram
        totalCost = e.target.dataset.totalCost
    }
    $popUpForm.find('.get-info-form')[0].dataset.enroll = 'false'

    if(e && e.target.dataset.enroll === 'true') {
        $popUpForm.find('.get-info-form')[0].dataset.enroll = 'true'
    }
}

function resetForm($form) {
    if(!$form) return false

    $form.trigger('reset')
    $form.find('.user-feedback').removeClass('success error').text('')
    setTimeout(function() {
        $form.find('.submit-btn').fadeIn(100)
    }, 200)
}

function onFormSubmit(e) {
    e.preventDefault()

    if(e.target.dataset.enroll === 'true') {
        const userData = {
            firstName: escape($(e.target).find('input[name="first_name"]').val()),
            lastName: escape($(e.target).find('input[name="last_name"]').val()),
            phone: escape($(e.target).find('input[name="phone"]').val()),
            email: escape($(e.target).find('input[name="email"]').val()),
            zip: escape($(e.target).find('input[name="zip"]').val())
        }
        togglePopUpForm(null)
        resetForm($(e.currentTarget))
        setTimeout(() => {
            toggleAgreement({
                userData: userData,
                program: program,
                totalCost: totalCost
            })
        }, 100)
        return false
    }

    // temporary code to simulate successful form submission
    $(e.currentTarget).find('.submit-btn').hide(0)
    $(e.currentTarget).find('.user-feedback').addClass('success').text('Message sent successfully!')
    setTimeout(function() {
        resetForm($(e.currentTarget))
    }, 2000)

    // sendForm($(e.currentTarget))
}

module.exports.sendForm = function sendForm($form) {
    const rootPath = $form.data('rootpath')

    $.ajax({
        url: `${rootPath}forms/get-info-form.php`,
        type: 'POST',
        data: $form.serialize(),
        cache: false
    })
    .done(function() {
        $form.find('.submit-btn').hide(0)
        $form.find('.user-feedback').addClass('success').text('Message sent successfully!')
        setTimeout(function() {
            resetForm($form)
        }, 2000)
    })
    .error(function() {
        $form.find('.submit-btn').hide(0)
        $form.find('.user-feedback').addClass('error').text('Sorry! This form is broken...')
        setTimeout(function() {
            resetForm($form)
        }, 2000)
    })
}

$('.get-more-info').click(togglePopUpForm)
$('#navbar .get-info').click(togglePopUpForm)
$('.enroll').click(togglePopUpForm)
$('#pop-up-form .close-btn').click(togglePopUpForm)
$('.pop-up-form-overlay').click(togglePopUpForm)

$('.get-info-form').submit(onFormSubmit)
