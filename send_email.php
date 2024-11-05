<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Recipient email address (your email)
    $to = "info@welshtownandcountry.co.uk";  // Replace with your actual email address
    
    // Subject of the email
    $subject = "New Message from Contact Form";
    
    // Construct the email body
    $email_body = "You have received a new message from the contact form on your website.\n\n".
                  "Name: $name\n".
                  "Email: $email\n".
                  "Message:\n$message";
    
    // Headers to specify the sender's email
    $headers = "From: info@welshtownandcountry.co.uk"; // Replace with your domain email
    
    // Send the email
    if (mail($to, $subject, $email_body, $headers)) {
        echo "Message sent successfully.";
    } else {
        echo "There was a problem sending the message.";
    }
}
?>
