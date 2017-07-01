const $ = require('jquery')

let program = null
let totalCost = null
let userData = null

function togglePayPalPopUp(data) {
    if($('div.paypal-pop-up').length === 0) return false

    const $payPalPopUp = $('div.paypal-pop-up')
    if(data) {
        userData = data.userData
        program = data.program
        totalCost = data.totalCost
    }

    $payPalPopUp.find('span.program').text(program)
    $payPalPopUp.find('span.total-cost').text(totalCost)

    $payPalPopUp.toggleClass('open')
    $('#paypal-btn').focus()
}

module.exports.togglePayPalPopUp = togglePayPalPopUp

function initPayPalPopUp() {
    if($('div.paypal-pop-up').length === 0) return false

    const $payPalPopUp = $('div.paypal-pop-up')
    initPayPalButton()

    $payPalPopUp.find('.close-btn').click(e => togglePayPalPopUp(null))
    $payPalPopUp.find('.paypal-pop-up-overlay').click(e => togglePayPalPopUp(null))
    $payPalPopUp.find('button.cancel').click(e => togglePayPalPopUp(null))
}

function initPayPalButton() {
    if(!paypal) return false
    if($('#paypal-btn').length === 0) return false

    paypal.Button.render({

        // Pass the client ids to use to create your transaction on sandbox and production environments

        client: {
            sandbox:    'ARUCcOA3HFMvIY8ahJHNP8aqtPSw2mjtZ4oQfPRci1s3jMRghK_QcjkI8T6fCmYBDAF_mS5cnibHtIor', // from https://developer.paypal.com/developer/applications/
            production: 'placeholder'  // from https://developer.paypal.com/developer/applications/
        },

        // Pass the payment details for your transaction
        // See https://developer.paypal.com/docs/api/payments/#payment_create for the expected json parameters

        payment: function(data, actions) {
            return actions.payment.create({
                transactions: [
                    {
                        amount: {
                            total:    '1.00',
                            currency: 'USD'
                        }
                    }
                ]
            });
        },

        // Display a "Pay Now" button rather than a "Continue" button

        commit: true,

        // Pass a function to be called when the customer completes the payment

        onAuthorize: function(data, actions) {
            return actions.payment.execute().then(function(response) {
                console.log('The payment was completed!');

                console.log(userData);
                // const rootPath = e.currentTarget.dataset.rootpath
                // $.ajax({
                //     url: `${rootPath}forms/signatures.php`,
                //     type: 'POST',
                //     data: userData,
                //     cache: false
                // })
                // .done(function(data) {
                //     console.log(data);
                // })
                // .error(function(err) {
                //     console.log(err);
                // })
            });
        },

        // Pass a function to be called when the customer cancels the payment

        onCancel: function(data) {
            console.log('The payment was cancelled!');
        }

    }, '#paypal-btn');
}

initPayPalPopUp()
