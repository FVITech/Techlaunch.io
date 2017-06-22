<?php
    // Check for empty fields
    if(empty($_POST['first_name'])       ||
        empty($_POST['last_name'])     ||
        empty($_POST['phone'])     ||
        empty($_POST['zip_code'])   ||
        !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
        {
            echo "No arguments Provided!";
            return false;
        }
    $name = strip_tags(htmlspecialchars($_POST['first_name']));
    $name = strip_tags(htmlspecialchars($_POST['last_name']));
    $email_address = strip_tags(htmlspecialchars($_POST['email']));
    $phone = strip_tags(htmlspecialchars($_POST['phone']));
    $message = strip_tags(htmlspecialchars($_POST['zip_code']));
    // Create the email and send the message
    $to = 'info@fvi.edu'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
    $email_subject = "Techlaunch.io Contact Form:  $name";
    $email_body = "You have received a new message from the Techlaunch.io contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
    $headers = "From: noreply@Techlaunch.io\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
    $headers .= "Reply-To: $email_address";
    mail($to,$email_subject,$email_body,$headers);
return true;
?>
