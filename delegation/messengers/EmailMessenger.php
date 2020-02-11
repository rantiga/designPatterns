<?php

namespace app\delegation\messengers;

class EmailMessenger extends AbstractMessenger
{
    public function send(): bool
    {
        echo 'Отправляем сообщение с помощью SMS';

        return true;
    }
}