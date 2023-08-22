<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "your@email.com"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    $success = mail($to, $subject, $message, $headers);

    if ($success) {
        echo "Message sent successfully!";
    } else {
        echo "Oops, something went wrong. Please try again later.";
    }
}
?>
