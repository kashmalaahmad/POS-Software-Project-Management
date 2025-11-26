<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = htmlspecialchars(strip_tags(trim($_POST['name'])));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(strip_tags(trim($_POST['message'])));

    $errors = [];
    if (empty($name)) $errors[] = "Name is required";
    if (empty($email)) $errors[] = "Email is required";
    if (empty($message)) $errors[] = "Message is required";

    if (!empty($errors)) {
        die("Validation Failed");
    }

    $to = "admin@quickpos.com";
    $subject = "New Contact Form Submission";
    $email_content = "Name: $name\nEmail: $email\nMessage:\n$message";
    
    sleep(1); 

} else {
    header("Location: index.php");
    exit();
}
?>