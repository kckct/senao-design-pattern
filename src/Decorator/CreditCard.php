<?php

namespace App\Decorator;

/**
 * Class CreditCard
 * @package App\Decorator
 */
interface CreditCard
{
    /**
     * 計算價格
     * @param float $price
     * @return float
     */
    public function processPrice(float $price): float;

    /**
     * 處理其他
     * @return string
     */
    public function processOther(): string;
}