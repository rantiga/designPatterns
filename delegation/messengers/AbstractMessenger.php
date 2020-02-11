<?php

namespace app\delegation\messengers;

use app\delegation\interfaces\MessengerInterface;

abstract class AbstractMessenger implements MessengerInterface
{
    protected $sender;
    protected $recipient;
    protected $message;

    public function setSender(string $sender): MessengerInterface
    {
        $this->sender = $sender;

        return $this;
    }

    public function setRecipient(string $recipient): MessengerInterface
    {
        $this->recipient = $recipient;

        return $this;
    }

    public function setMessage(string $message): MessengerInterface
    {
        $this->message = $message;

        return $this;
    }

    abstract function send(): bool;
}