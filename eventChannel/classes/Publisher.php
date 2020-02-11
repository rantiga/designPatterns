<?php

namespace app\eventChannel\classes;

use app\eventChannel\interfaces\EventChannelInterface;
use app\eventChannel\interfaces\PublisherInterface;

class Publisher implements PublisherInterface
{
    private $publishTheme;
    private $eventChannel;

    public function __construct(string $publishTheme, EventChannelInterface $eventChannel)
    {
        $this->publishTheme = $publishTheme;
        $this->eventChannel = $eventChannel;
    }

    public function publish($publishData)
    {
        $this->eventChannel->publish($this->publishTheme, $publishData);
    }
}