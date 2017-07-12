<?php
    // Check for empty fields
    // if(empty($_POST['first_name'])       ||
    //     empty($_POST['last_name'])     ||
    //     empty($_POST['phone'])     ||
    //     empty($_POST['zip_code'])   ||
    //     empty($_POST['program'])   ||
    //     !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
    //     {
    //         echo "No arguments Provided!";
    //         return false;
    //     }
    $first_name = strip_tags(htmlspecialchars($_POST['first_name']));
    $last_name = strip_tags(htmlspecialchars($_POST['last_name']));
    $email_address = strip_tags(htmlspecialchars($_POST['email']));
    $phone = strip_tags(htmlspecialchars($_POST['phone']));
    $zip_code = strip_tags(htmlspecialchars($_POST['zip_code']));
    $program = strip_tags(htmlspecialchars($_POST['progam']));
    // Create the email and send the message
    $to = 'ebrodie@nuovometo.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
    $email_subject = "Techlaunch.io Contact Form: $first_name $last_name";
    $email_body = "You have received a new message from the Techlaunch.io contact form.\n\n";
    $email_body .= "Here are the details:\n\nName: $first_name $last_name\n\n";
    $email_body .= "Email: $email_address\n\n";
    $email_body .= "Phone: $phone\n\n";
    $email_body .= "Zip Code: $zip_code\n\n";
    if($program) {
        $email_body .= "Program: $program";
    }
    $headers = "From: noreply@Techlaunch.io\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
    $headers .= "Reply-To: $email_address";
    mail($to,$email_subject,$email_body,$headers);
    return true;
?>
