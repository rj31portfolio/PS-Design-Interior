<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "info@digidigitalsolution.com"; // your email
    $subject = "New Contact Form Enquiry";

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $body = "You have received a new enquiry:\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Message:\n$message\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Contact Soon'); window.location.href='".$_SERVER['PHP_SELF']."';</script>";
        exit;
    } else {
        echo "<script>alert('Failed to send message. Please try again later.');</script>";
    }
}
?>
