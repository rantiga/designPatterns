<?php

namespace app\delegation;

use app\delegation\interfaces\MessengerInterface;
use app\delegation\messengers\EmailMessenger;
use app\delegation\messengers\SmsMessenger;

class AppMessenger implements MessengerInterface
{
    private $messenger;

    public function __construct()
    {
        $this->messenger = new EmailMessenger();
    }

    public function toEmail(): MessengerInterface
    {
        $this->messenger = new EmailMessenger();

        return $this;
    }

    public function toSms(): MessengerInterface
    {
        $this->messenger = new SmsMessenger();

        return $this;
    }

    public function setSender(string $sender): MessengerInterface
    {
        $this->messenger->setSender($sender);

        return $this->messenger;
    }

    public function setRecipient(string $recipient): MessengerInterface
    {
        $this->messenger->setRecipient($recipient);

        return $this->messenger;
    }

    public function setMessage(string $message): MessengerInterface
    {
        $this->messenger->setMessage($message);

        return $this->messenger;
    }

    public function send(): bool
    {
        return $this->messenger->send();
    }
}