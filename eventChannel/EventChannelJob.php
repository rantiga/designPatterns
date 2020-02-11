<?php

namespace app\eventChannel;

use app\eventChannel\classes\EventChannel;
use app\eventChannel\classes\Publisher;
use app\eventChannel\classes\Subscriber;

class EventChannelJob
{
    public function example()
    {
        $newsChannel = new EventChannel();

        $permNews = new Publisher('perm-news', $newsChannel);
        $phpNews = new Publisher('php-news', $newsChannel);

        $mailNotify = new Subscriber('mail');
        $telegramNotify = new Subscriber('telegram');

        $newsChannel->subscribe('perm-news', $telegramNotify);
        $newsChannel->subscribe('php-news', $mailNotify);

        $permNews->publish('News about Perm');
        $phpNews->publish('New article about PHP 8 features');
    }
}