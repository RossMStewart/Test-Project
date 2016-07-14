<?php
include "Code/bootstrap.php";

$mailer = new Mailer();

$mailer->addRecipient('me@example.com<br>');
$mailer->addRecipient('foo@example.com<br>');
$mailer->addRecipient('bar@example.com');

$mailer->send('This message has been sent to 3 recipients');

    
?>