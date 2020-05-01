<?php
$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_tel = $_POST['tel'];
$field_sub = $_POST['subject'];
$field_message = $_POST['message'];

$mail_to = 'trueway@usa.com';
$subject = $field_sub;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Phone: '.$field_tel."\n";
$body_message .= 'Subject: '.$field_sub."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

