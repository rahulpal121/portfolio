<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Email details
    $to = 'pal.r2n@gmail.com';  // Your email address
    $subject = "New Contact Form Submission from $name";
    $body = "
        Name: $name\n
        Email: $email\n
        Phone: $phone\n
        Message: \n$message\n
    ";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for your message. We will get back to you shortly.";
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
}
?>
