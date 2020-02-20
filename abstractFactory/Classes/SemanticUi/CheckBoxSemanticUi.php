<?php


namespace app\abstractFactory\Classes\SemanticUi;


use app\abstractFactory\interfaces\CheckBoxInterface;

class CheckBoxSemanticUi implements CheckBoxInterface
{
    public function draw()
    {
        return __CLASS__;
    }
}