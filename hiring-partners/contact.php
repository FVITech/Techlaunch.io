<?php
    $fname = strip_tags(htmlspecialchars($_POST['fname']));
    $lname = strip_tags(htmlspecialchars($_POST['lname']));
    $email_address = strip_tags(htmlspecialchars($_POST['email']));
    $phone = strip_tags(htmlspecialchars($_POST['phone']));
    $company = strip_tags($_POST['company']);
    $logo = strip_tags(htmlspecialchars($_POST['logo']));
    $website = strip_tags(htmlspecialchars($_POST['website']));
    $message = strip_tags(htmlspecialchars($_POST['message']));
    // Create the email and send the message
    $to = 'cvazquez@fvi.edu'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
    $email_subject = "Hiring Partners Form:  $subject";
    $email_body = "You have received a new message from the Hiring Partners form.\n\n"."Here are the details:\n\nFirst Name: $fname\n\nLast Name: $lname\n\nEmail: $email_address\n\nPhone: $phone\n\nCompany: $company\n\nLogo: $logo\n\nWebsite: $website\n\nMessage:\n$message";
    $headers = "From: hiring-partners-form@techlaunch.io\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
    $headers .= "Reply-To: $email_address";
    if(mail($to,$email_subject,$email_body,$headers)) {
        echo "mail sent successfully to: $to";
    }
    else {
        echo "mailed failed to send to: $to";
    }
    return true;
?>