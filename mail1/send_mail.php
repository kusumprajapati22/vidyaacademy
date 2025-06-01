<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars(trim($_POST['email']));
    
    $to = "syogi020.456@gmail.com";
    $subject = "Receive Newsletter of Vidya Academy";
    
    $email_body = "You have received a new message:\n\n";
    $email_body .= "Email: $email\n";

    $headers = "From: $email\n";
    $headers .= "Reply-To: $email\n";
    
    if (mail($to, $subject, $email_body, $headers)) {
        header("Location: thank_you.php");
        exit();
    } else {
        echo "There was an error sending your message. Please try again.";
    }
} else {
    echo "Invalid request method.";
}
?>
