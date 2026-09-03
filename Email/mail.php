<?php
$to = "recipient@email.com";
$subject = "Test Mail";
$message = "This is test email message";

// Additional headers
$headers = "From: sender@example.com\r\n";
$headers .= "Reply-To: sender@example.com\r\n";
$headers .= "CC: cc@example.com\r\n";
$headers .= "BCC: bcc@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n"; // Capitalized 'V' for standard compliance
$headers .= "Content-Type: text/html; charset=UTF-8\r\n"; // Added \r\n and charset

// Send email
$mail_sent = mail($to, $subject, $message, $headers);

if ($mail_sent) {
    echo "Email successfully sent!";
} else {
    echo "Email delivery failed..";
}
?>
