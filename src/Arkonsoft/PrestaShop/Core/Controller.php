<?php

namespace Arkonsoft\Prestashop\Core;

use Module;

abstract class Controller implements IController
{
    protected $module;

    public function __construct(Module $module)
    {
        $this->module = $module;
    }
}
