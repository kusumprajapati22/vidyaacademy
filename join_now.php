<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $class = htmlspecialchars(trim($_POST['class']));
    $course = htmlspecialchars(trim($_POST['course']));
    
    $to = "syogi020.456@gmail.com";
    $subject = "Receive New Mail of Vidya Academy";
    
    $email_body = "Join Now:\n\n";
    $email_body .= "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Class: $class\n";
    $email_body .= "Course: $course\n";


    $headers = "From: $email\n";
    $headers .= "Reply-To: $email\n";
    
    if (mail($to, $subject, $email_body, $headers)) {
        header("Location: thank_you2.php");
        exit();
    } else {
        echo "There was an error sending your message. Please try again.";
    }
} else {
    echo "Invalid request method.";
}
?>
