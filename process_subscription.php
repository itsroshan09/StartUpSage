<?php
$to_email = "patilroshankishor@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi,nn This is test email send by PHP Script";
$headers = "From: yashpatil29148@gmail.com";
 
if (mail($to_email, $subject, $body, $headers)) {
    echo "<script>alert('Email successfully sent to $to_email...');</script>";
} else {
    $lastError = error_get_last();
    echo "<script>alert('Email sending failed: " . $lastError['message'] . "');</script>";
}

    // You can redirect the user or provide a success message here
    
   

?>
