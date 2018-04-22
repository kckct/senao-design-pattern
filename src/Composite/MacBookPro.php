<?php

namespace App\Composite;

/**
 * Class MacBookPro
 * @package App\Composite
 */
class MacBookPro implements Price
{
    /**
     * 取得價錢
     * @return float
     */
    public function getPrice(): float
    {
        return 60000.0;
    }
}