<?php

namespace App\Composite;

/**
 * Interface Price
 * @package App\Composite
 */
interface Price
{
    /**
     * 取得價錢
     * @return float
     */
    public function getPrice(): float;
}