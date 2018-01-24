<?php

namespace App\Strategy;

/**
 * Class RebateStrategy
 * @package App\Strategy
 */
class RebateStrategy implements Strategy
{
    /**
     * 計算折扣 - 滿千送百
     * @param int $price
     * @return int
     */
    public function calculate(int $price): int
    {
        if ($price < 1000) {
            return $price;
        }

        return $price - 100;
    }
}