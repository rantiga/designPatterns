<?php

namespace app\propertyContainer\interfaces;

interface PropertyContainerInterface
{
    public function getProperty(string $propertyName);

    public function addProperty(string $propertyName, $propertyValue);

    public function deleteProperty(string $propertyName);
}