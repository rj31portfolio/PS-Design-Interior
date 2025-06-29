<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $message = htmlspecialchars($_POST["message"]);

    // Email details
    $to = "info@dpreetisethidesigns.com"; // Your professional email
    $subject = "New Contact Form Submission from $name";
    $body = "You have received a new message from your website contact form:\n\n".
            "Name: $name\n".
            "Email: $email\n".
            "Phone: $phone\n".
            "Message:\n$message";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        // Alert and redirect
        echo "<script>
                alert('Thank you $name, your message has been sent!');
                window.location.href = 'index.php'; // change to your homepage
              </script>";
    } else {
        echo "<script>
                alert('Sorry $name, we could not send your message. Please try again.');
                window.history.back();
              </script>";
    }
} else {
    // Redirect if accessed directly
    header("Location: index.php"); // or your homepage
    exit();
}
?>
