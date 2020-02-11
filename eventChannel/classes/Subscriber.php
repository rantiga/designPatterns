<?php

namespace app\eventChannel\classes;

use app\eventChannel\interfaces\SubscriberInterface;

class Subscriber implements SubscriberInterface
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function notify($publishData)
    {
        echo "{$this->getName()} оповщен данными {$publishData}";
    }
}