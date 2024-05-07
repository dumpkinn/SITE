<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];
    $title = $_POST['title'];
    $message = $_POST['message'];
    $to = "codeecrusaders@gmail.com";
    $subject = "New Contact Form Submission";
    
    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Phone: $phone\n";
    $email_message .= "Company: $company\n";
    $email_message .= "Title: $title\n";
    $email_message .= "Message: $message\n";
    
    // Send the email
    header("Location: contact-02.html");
    mail($to, $subject, $email_message);
}
?>
