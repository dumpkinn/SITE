<?php
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //$name = $_POST['name'];
    //$email = $_POST['email'];
    //$phone = $_POST['phone'];
    //$company = $_POST['company'];
    //$title = $_POST['title'];
    $message = $_POST['message'];

    $to = "codeecrusaders@gmail.com";
    $subject = "New Contact Form Submission";
    
    mail($to,$subject,$message)
    //$body = "Name: $name\nEmail: $email\nPhone: $phone\nCompany: $company\nTitle: $title\nMessage: $message";


?>
