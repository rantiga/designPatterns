<?php


namespace app\abstractFactory\Factories;


use app\abstractFactory\Classes\SemanticUi\ButtonBootstrap;
use app\abstractFactory\Classes\SemanticUi\CheckBoxBootstrap;
use app\abstractFactory\interfaces\ButtonInterface;
use app\abstractFactory\interfaces\CheckBoxInterface;
use app\abstractFactory\interfaces\GuiFactoryInterface;

class BootstrapFactory implements GuiFactoryInterface
{
    public function buildButton(): ButtonInterface
    {
        return new ButtonBootstrap();
    }

    public function buildCheckBox(): CheckBoxInterface
    {
        return new CheckBoxBootstrap();
    }
}