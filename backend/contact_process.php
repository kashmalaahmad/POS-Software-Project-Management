<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    echo "Script reached. Processing data...";
} else {
    header("Location: index.php");
    exit();
}
?>