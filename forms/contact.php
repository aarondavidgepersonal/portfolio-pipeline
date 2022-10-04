<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

echo '<h1>'. $name .'</h1>';
echo '<h2>'. $email .'</h2>';
echo '<h3>'. $subject .'</h3>';
echo '<h4>'. $message .'</h4>';

?>