<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "nsisk1@student.dallascollege.edu"; // Replace with your email address
    $from = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $headers = "From:" . $from;

    if (mail($to, $subject, $message, $headers)) {
        // Redirect to thank you page
        header("Location: success.html");
        exit();
    } else {
        echo "Mail sending failed.";
    }
