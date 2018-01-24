<?php

namespace App\Strategy;

/**
 * Class DiscountStrategy
 * @package App\Strategy
 */
class DiscountStrategy implements Strategy
{
    /**
     * 計算折扣 - 打八折
     * @param int $price
     * @return int
     */
    public function calculate(int $price): int
    {
        return round($price * 0.8);
    }
}