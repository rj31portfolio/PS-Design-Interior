<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'includes/PHPMailer/PHPMailer.php';
require 'includes/PHPMailer/SMTP.php';
require 'includes/PHPMailer/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars(trim($_POST["name"]));
    $email   = htmlspecialchars(trim($_POST["email"]));
    $phone   = htmlspecialchars(trim($_POST["phone"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration (Hostinger)
        $mail->isSMTP();
        $mail->Host       = 'smtp.hostinger.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'info@preetisethidesigns.com';   // Your email (created on Hostinger)
        $mail->Password   = 'Preeti@26#';           // Replace with your actual email password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Sender & Recipient
        $mail->setFrom('info@preetisethidesigns.com', 'Preeti Sethi Website');
        $mail->addAddress('info@preetisethidesigns.com');  // Receiving same mail

        // Message
        $mail->isHTML(true);
        $mail->Subject = "New Contact Form Submission from $name";
        $mail->Body    = "
            <h2>New Contact Submission</h2>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Phone:</strong> {$phone}</p>
            <p><strong>Message:</strong><br>{$message}</p>
        ";

        $mail->send();
        echo "<script>
            alert('Our Team Contact You Soon');
            window.location.href = 'index.php';
        </script>";
    } catch (Exception $e) {
        echo "<script>
            alert('Email sending failed: {$mail->ErrorInfo}');
            window.history.back();
        </script>";
    }
}
?>
