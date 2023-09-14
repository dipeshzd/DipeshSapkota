<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "dipeshz438@gmail.com; // Change this to your email address
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email";
    $messageBody = "Name: $name\nEmail: $email\nMessage:\n$message";

    if (mail($to, $subject, $messageBody, $headers)) {
        echo "<p>Your message has been sent successfully. We will get back to you shortly.</p>";
    } else {
        echo "<p>Sorry, there was an error sending your message. Please try again later.</p>";
    }
} else {
    echo "<p>Invalid request. Please submit the form from the contact page.</p>";
}
?>
