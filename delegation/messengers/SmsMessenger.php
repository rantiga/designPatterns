<?php

namespace app\delegation\messengers;

class SmsMessenger extends AbstractMessenger
{
    public function send(): bool
    {
        echo 'Отправляем сообщение с помощью email';

        return true;
    }
}