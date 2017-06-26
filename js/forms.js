const $ = require('jquery')

function togglePopUpForm() {
    const $popUpForm = $('#pop-up-form')
    console.log('Pop up form doesn\'t exist on this page');
    if($popUpForm.length === 0) return false

    $popUpForm.toggleClass('open')
    $popUpForm.find('.user-feedback').removeClass('success error').text('')
    $popUpForm.find('.submit-btn').show()
    $popUpForm.find('input[name="first_name"]').focus()
}

function resetSubmitBtn() {
    const $popUpForm = $('#pop-up-form')
    if($popUpForm.length === 0) return false

    $popUpForm.find('.user-feedback').removeClass('success error').text('')
    setTimeout(function() {
        $popUpForm.find('.submit-btn').fadeIn(100)
    }, 200)
}

function onPopUpFormSubmit(e) {
    e.preventDefault()
    const rootPath = e.currentTarget.dataset.rootpath

    $('#pop-up-form .submit-btn').hide(0)
    $('#pop-up-form .user-feedback').addClass('success').text('Message sent successfully!')
    $(e.currentTarget).trigger("reset")
    setTimeout(resetSubmitBtn, 2000)

    // $.ajax({
    //     url: `${rootPath}mail/pop-up-form.php`,
    //     type: 'POST',
    //     data: $(e.currentTarget).serialize(),
    //     cache: false
    // })
    // .done(function() {
    //     $('#pop-up-form .submit-btn').hide(0)
    //     $('#pop-up-form .user-feedback').addClass('success').text('Message sent successfully!')
    //     $(e.currentTarget).trigger("reset")
    //     setTimeout(resetSubmitBtn, 2000)
    // })
    // .error(function() {
    //     $('#pop-up-form .submit-btn').hide(0)
    //     $('#pop-up-form .user-feedback').addClass('error').text('Sorry! This form is broken...')
    //     setTimeout(resetSubmitBtn, 2000)
    // })
}

$('.get-more-info').click(togglePopUpForm)
$('#navbar .get-info').click(togglePopUpForm)
$('#pop-up-form .close-btn').click(togglePopUpForm)
$('.pop-up-form-overlay').click(togglePopUpForm)

$('#pop-up-form form').submit(onPopUpFormSubmit)
