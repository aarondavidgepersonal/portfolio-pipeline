<?php


$name = $POST['name'];
$email = $POST['email'];
$subject = $POST['subject'];
$message = $POST['message'];


$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "aarondavidgejob@gmail.com";

mail($recipient,$subject,$message,$mailheader)
or die("Error");

echo'Message Sent';




?>