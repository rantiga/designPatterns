<?php


namespace app\abstractFactory\Classes\SemanticUi;


use app\abstractFactory\interfaces\ButtonInterface;

class ButtonBootstrap implements ButtonInterface
{
    public function draw()
    {
        return __CLASS__;
    }
}