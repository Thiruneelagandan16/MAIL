<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "recipient@example.com"; // Replace with your email address
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email";

    $mailBody = "Name: $name\n";
    $mailBody .= "Email: $email\n";
    $mailBody .= "Message:\n$message";

    if (mail($to, $subject, $mailBody, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Error sending the message. Please try again later.";
    }
}
?>
