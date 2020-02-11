<?php

namespace app\eventChannel\interfaces;

interface SubscriberInterface
{
    public function getName();

    public function notify($publishData);
}