<?php

namespace app\abstractFactory;

use app\abstractFactory\Factories\BootstrapFactory;
use app\abstractFactory\Factories\SemanticUiFactory;
use app\abstractFactory\interfaces\GuiFactoryInterface;

class GuiKitFactory
{
    public function getFactory($type): GuiFactoryInterface
    {
        switch ($type) {
            case 'bootstrap':
                $factory = new BootstrapFactory();
                break;
            case 'semanticui':
                $factory = new SemanticUiFactory();
                break;
            default:
                throw new \Exception("Неизвестный тип фабрики {$type}");
        }

        return $factory;
    }
}