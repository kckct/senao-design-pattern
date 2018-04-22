<?php

namespace App\Composite;

/**
 * Class IPadAir
 * @package App\Composite
 */
class IPadAir implements Price
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