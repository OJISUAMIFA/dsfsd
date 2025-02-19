<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "contact@apexautorentals.rentals"; // Replace with your email address
    $subject = "New Contact Form Submission";

    // Collecting form data and sanitizing it
    $name = htmlspecialchars($_POST['Name']);
    $email = htmlspecialchars($_POST['Email']);
    $phone = htmlspecialchars($_POST['Phone Number']);
    $vehicle = htmlspecialchars($_POST['Vehicle']);
    $state = htmlspecialchars($_POST['State']);
    $starting = htmlspecialchars($_POST['Starting']);

    // Construct the email body
    $body = "Name: $name\nEmail: $email\nPhone Number: $phone\nVehicle: $vehicle\nState: $state\nStarting: $starting";

    // Set the headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
} else {
    echo "Invalid request.";
}
?>