<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars(strip_tags(trim($_POST['name'])));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(strip_tags(trim($_POST['message'])));

    $errors = [];

    if (empty($name) || strlen($name) < 2) {
        $errors[] = "Name is invalid.";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email is invalid.";
    }

    if (empty($message) || strlen($message) < 10) {
        $errors[] = "Message is too short.";
    }

    if (!empty($errors)) {
        header("Location: index.php?status=error");
        exit();
    }

    $to = "admin@quickpos.com";
    $subject = "New Message from $name";
    $email_content = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    header("Location: thank-you.html");
    exit();

} else {
    header("Location: index.php");
    exit();
}
?>