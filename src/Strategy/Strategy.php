<?php

namespace App\Strategy;

/**
 * Interface Strategy
 * @package App\Strategy
 */
interface Strategy
{
    /**
     * 計算折扣
     * @param int $price
     * @return int
     */
    public function calculate(int $price): int;
}