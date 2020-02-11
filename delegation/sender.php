<?php

namespace app\delegation;

use app\delegation\AppMessenger;

$messenger = new AppMessenger();

$messenger->setSender('sender@example.com')
    ->setRecipient('recipient@example.com')
    ->setMessage('Message from email')
    ->send();

$messenger->toSms()
    ->setSender('89991112233')
    ->setRecipient('89994445566')
    ->setMessage('Message from SMS')
    ->send();