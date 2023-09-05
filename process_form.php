<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "tejeshvenna@gmail.com"; // Change this to your email address
    $subject = "New Contact Form Submission";
    $headers = "From: $email";
    
    mail($to, $subject, $message, $headers);
    
    // Redirect the user to a thank you page
    header("Location: thank_you.html");
    exit;
}
?>
