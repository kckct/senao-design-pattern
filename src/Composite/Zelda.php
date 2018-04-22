<?php

namespace App\Composite;

/**
 * Class Zelda
 * @package App\Composite
 */
class Zelda implements Price
{
    /**
     * 取得價錢
     * @return float
     */
    public function getPrice(): float
    {
        return 2000.0;
    }
}