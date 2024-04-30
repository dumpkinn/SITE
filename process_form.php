<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and assign variables
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
    $company = isset($_POST['company']) ? htmlspecialchars($_POST['company']) : '';
    $title = isset($_POST['title']) ? htmlspecialchars($_POST['title']) : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';

    // Set email parameters
    $to = "your_email@example.com";
    $subject = "New Contact Form Submission";
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Construct email body
    $email_body = "<h2>New Contact Form Submission</h2>";
    $email_body .= "<p><strong>Name:</strong> $name</p>";
    $email_body .= "<p><strong>Email:</strong> $email</p>";
    $email_body .= "<p><strong>Phone:</strong> $phone</p>";
    $email_body .= "<p><strong>Company:</strong> $company</p>";
    $email_body .= "<p><strong>Title:</strong> $title</p>";
    $email_body .= "<p><strong>Message:</strong> $message</p>";

    // Send email
    if (mail($to, $subject, $email_body, $headers)) {
        // Redirect back to HTML file
        header("Location: your_html_file.html");
        exit();
    } else {
        echo "Failed to send email. Please try again later.";
    }
} else {
    echo "Invalid request method.";
}
?>
