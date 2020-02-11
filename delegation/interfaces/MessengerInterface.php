<?php

namespace app\delegation\interfaces;

interface MessengerInterface
{
    public function setSender(string $sender): MessengerInterface;

    public function setRecipient(string $recipient): MessengerInterface;

    public function setMessage(string $message): MessengerInterface;

    public function send(): bool;
}