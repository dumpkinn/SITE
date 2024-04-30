<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];
    $title = $_POST['title'] ;
    $message = $_POST['message'];
    $to = "codeecrusaders@gmail.com";
    $subject = "New Contact Form Submission";
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $email_body = "<h2>New Contact Form Submission</h2>";
    $email_body .= "<p><strong>Name:</strong> $name</p>";
    $email_body .= "<p><strong>Email:</strong> $email</p>";
    $email_body .= "<p><strong>Phone:</strong> $phone</p>";
    $email_body .= "<p><strong>Company:</strong> $company</p>";
    $email_body .= "<p><strong>Title:</strong> $title</p>";
    $email_body .= "<p><strong>Message:</strong> $message</p>";
mail($to, $subject, $email_body, $headers)
?>
