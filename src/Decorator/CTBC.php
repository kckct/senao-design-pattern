<?php

namespace App\Decorator;

/**
 * Class CTBC
 * @package App\Decorator
 */
class CTBC implements CreditCard
{
    /**
     * 計算價格
     * @param float $price
     * @return float
     */
    public function processPrice(float $price): float
    {
        $origin = ProcessService::calculateDefaultPrice();

        // 滿千送百
        $rebate = ProcessDecorator::calculateRebate($origin);

        // 全館八折
        $discount = ProcessDecorator::calculateDiscount($rebate);

        return $discount($price);
    }

    /**
     * 處理其他
     * @return string
     */
    public function processOther(): string
    {
        $origin = ProcessService::getDefaultOther();

        // 送一百元折價券
        $coupon = ProcessDecorator::getCoupon($origin);

        return $coupon();
    }
}