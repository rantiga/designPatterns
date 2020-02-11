<?php

namespace app\eventChannel\classes;

use app\eventChannel\interfaces\EventChannelInterface;
use app\eventChannel\interfaces\SubscriberInterface;

class EventChannel implements EventChannelInterface
{
    private $publishThemes = [];

    public function subscribe(string $publishTheme, SubscriberInterface $subscriber)
    {
        $this->publishThemes[$publishTheme][] = $subscriber;

        echo "{$subscriber->getName()} подписан на {$publishTheme}";
    }

    public function publish(string $publishTheme, string $publishData)
    {
        if (empty($this->publishThemes[$publishTheme])) {
            return;
        }

        foreach ($this->publishThemes[$publishTheme] as $subscriber) {
            $subscriber->notify($publishData);
        }
    }
}