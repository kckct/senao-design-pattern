<?php

namespace App\Composite;

/**
 * Class NintendoSwitch
 * @package App\Composite
 */
class NintendoSwitch implements Price
{
    /**
     * 取得價錢
     * @return float
     */
    public function getPrice(): float
    {
        return 10000.0;
    }
}