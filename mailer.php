<?php

    // Get the form fields, removes html tags and whitespace.
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $surname = strip_tags(trim($_POST["surname"]));
    $surname = str_replace(array("\r","\n"),array(" "," "),$surname);
    $phone = strip_tags(trim($_POST["phone"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    // Check the data.
    if (empty($name) OR empty($surname) OR empty($phone) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: http://www.psinfoline.com/Contact.php?success=-1#form");
        exit;
    }

    // Set the recipient email address. Update this to YOUR desired email address.
    $recipient = "enquiry@psinfoline.com";

    // Set the email subject.
    $subject = "New contact from $name $surname";

    // Build the email content.
    $email_content = "Name: $name\n";
    $email_content = "Surname: $surname\n";
    $email_content = "Phone: $phone\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Build the email headers.
    $email_headers = "From: $name $surname <$email>";

    // Send the email.
    mail($recipient, $subject, $email_content, $email_headers);
    
    // Redirect to the index.html page with success code
    header("Location: http://www.psinfoline.com/Contact.php?success=1#form");

?>