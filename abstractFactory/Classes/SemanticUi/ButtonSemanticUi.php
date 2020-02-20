<?php


namespace app\abstractFactory\Classes\SemanticUi;


use app\abstractFactory\interfaces\ButtonInterface;

class ButtonSemanticUi implements ButtonInterface
{
    public function draw()
    {
        return __CLASS__;
    }
}