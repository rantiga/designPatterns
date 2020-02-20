<?php

$guiKit = new \app\abstractFactory\GuiKitFactory();

$factory = $guiKit->getFactory('bootstrap');

$result['bootstrapButton'] = $factory->buildButton()->draw();
$result['bootstrapCheckBox'] = $factory->buildCheckBox()->draw();

$factory = $guiKit->getFactory('semanticUi');

$result['semanticUiButton'] = $factory->buildButton()->draw();
$result['semanticUiCheckBox'] = $factory->buildButton()->draw();