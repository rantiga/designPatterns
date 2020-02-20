<?php


namespace app\abstractFactory\Factories;


use app\abstractFactory\Classes\SemanticUi\ButtonSemanticUi;
use app\abstractFactory\Classes\SemanticUi\CheckBoxSemanticUi;
use app\abstractFactory\interfaces\ButtonInterface;
use app\abstractFactory\interfaces\CheckBoxInterface;
use app\abstractFactory\interfaces\GuiFactoryInterface;

class SemanticUiFactory implements GuiFactoryInterface
{
    public function buildButton(): ButtonInterface
    {
        return new ButtonSemanticUi();
    }

    public function buildCheckBox(): CheckBoxInterface
    {
        return new CheckBoxSemanticUi();
    }
}