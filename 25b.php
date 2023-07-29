<?php
// Set the recipient email address
$to = 'recipient@example.com';

// Set the subject of the email
$subject = 'Test Email';

// Set the message body
$message = 'This is a test email sent from PHP.';

// Set additional headers (optional)
$headers = 'From: sender@example.com' . "\r\n" .
    'Reply-To: sender@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Send the email
if (mail($to, $subject, $message, $headers)) {
    echo 'Email sent successfully.';
} else {
    echo 'Failed to send email.';
}
