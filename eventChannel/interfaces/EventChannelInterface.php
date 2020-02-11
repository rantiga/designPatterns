<?php

namespace app\eventChannel\interfaces;

interface  EventChannelInterface
{
    public function publish(string $publishTheme, string $publishData);

    public function subscribe(string $publishTheme, SubscriberInterface $subscriber);
}