<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "nsisk1@student.dallascollege.edu";
    $from = $_POST['email'];
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $subject = "Form submission";
    $message = $firstname . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $headers = "From:" . $from;

    if (mail($to, $subject, $message, $headers)) {
        // Redirect to thank you page
        header("Location: thank_you.php");
        exit();
    } else {
        echo "Mail sending failed.";
    }
}
?>
