<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?html
$to = "recipient@example.com";
$subject = "Test Email from html";
$message = "Hello!\n\nThis is a test email sent using the html mail() function.";

// Headers are crucial to prevent your email from immediately going to spam
$headers = "From: webmaster@yourdomain.com" . "\r\n" .
           "Reply-To: webmaster@yourdomain.com" . "\r\n" .
           "X-Mailer: html/" . htmlversion();

// Send the email and check if it succeeded
if(mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Email delivery failed.";
}
?>

<h2>html Form Validation Example</h2>
<p><span class="error">* required field</span></p>


</body>
</html>