<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

function cleanform($name, $email, $subject, $message)
{

    $name = preg_replace("/[^a-zA-Z0-9]+/", "", $name);
    $subject = preg_replace("/[^a-zA-Z0-9]+/", "", $subject);
    $message = preg_replace("/[^a-zA-Z0-9]+/", "", $message);

    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) && $name != '' && $subject != '' && $message != '') {

        writetodatabase($name, $email, $message, $subject);
        sendmymail($name, $email, $message, $subject);
    }
}

cleanform($name, $email, $message, $subject);

function sendmymail($name, $email, $message, $subject)
{

    echo 'Your send mail function was activated.';

    echo '<h1>Your name, ' . $name . ' was sent to email.</h1>';
    echo '<h1>Your email, ' . $email . ' was sent to email.</h1>';
    echo '<h1>Your subject, ' . $subject . ' was sent to email.</h1>';
    echo '<h1>Your message, ' . $message . ' was sent to email.</h1>';
}

function writetodatabase($name, $email, $message, $subject)
{

    echo 'Your write to database function was activated.';

    echo '<h1>Your name, ' . $name . ' was written to database.</h1>';
    echo '<h1>Your email, ' . $email . ' was written to database.</h1>';
    echo '<h1>Your subject, ' . $subject . ' was written to database.</h1>';
    echo '<h1>Your message, ' . $message . ' was written to database.</h1>';
}
