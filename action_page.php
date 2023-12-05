<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Your email address where you want to receive messages
    $to = 'rambalam3@gatech.edu';

    // Email subject
    $subject = 'New message from your website';

    // Email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Additional headers
    $headers = "From: $name <$email>";

    // Sending email
    if (mail($to, $subject, $email_content, $headers)) {
        // Email sent successfully
        echo 'Message sent successfully!';
    } else {
        // Failed to send email
        echo 'Oops! Something went wrong. Please try again later.';
    }
} else {
    // Redirect back to the contact page if accessed directly
    header("Location: contact.html");
}
?>
