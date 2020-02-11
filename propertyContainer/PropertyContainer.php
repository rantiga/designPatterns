<?php

namespace app\propertyContainer;

use app\propertyContainer\interfaces\PropertyContainerInterface;

class PropertyContainer implements PropertyContainerInterface
{
    private $propertyContainer = [];

    public function getProperty(string $propertyName)
    {
        return $this->propertyContainer[$propertyName] ?? null;
    }

    public function addProperty(string $propertyName, $propertyValue)
    {
        $this->propertyContainer[$propertyName] = $propertyValue;
    }

    public function deleteProperty(string $propertyName)
    {
        unset($this->propertyContainer[$propertyName]);
    }
}