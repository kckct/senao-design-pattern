<?php

namespace App\Composite;

/**
 * Class AppleWatch
 * @package App\Composite
 */
class AppleWatch implements Price
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