<?php

namespace app\eventChannel\interfaces;

interface PublisherInterface
{
    public function publish($publishData);
}