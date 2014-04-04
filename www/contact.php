<?php

// Blank message to start with so we can append to it.
$message = '';

// Check that name & email aren't empty.
if(empty($_POST['name']) || empty($_POST['email'])){
    die('Please ensure name and email are provided.');
}

// Construct the message
$message .= <<<TEXT
    Name: {$_POST['name']}
    Email: {$_POST['email']}
    Text: {$_POST['text']}
TEXT;

// Email to send to
$to = 'spacia@lookandfeel.pro';

// Email Subject
$subject = 'You have been contacted!';

// Name to show email from
$from = 'Your Site';

// Domain to show the email from
$fromEmail = 'YourSite@domain.com';

// Construct a header to send who the email is from
$header = 'From: ' . $from . '<' . $fromEmail . '>';

// Try sending the email
if(!mail($to, $subject, $message, $header)){
    die('Error sending email.');
}else{
    die('Your email has been sent successfully!');
}