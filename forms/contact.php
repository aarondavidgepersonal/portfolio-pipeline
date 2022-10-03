<?php


$name = $POST['name'];
$email = $POST['email'];
$subject = $POST['subject'];
$message = $POST['message'];


$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "aarondavidgejob@gmail.com";

if(mail($recipient,$subject,$message,$mailheader)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}





?>