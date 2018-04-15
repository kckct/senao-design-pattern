<?php

namespace App\Decorator;

/**
 * Class Taishin
 * @package App\Decorator
 */
class Taishin implements CreditCard
{
    /**
     * 計算價格
     * @param float $price
     * @return float
     */
    public function processPrice(float $price): float
    {
        $origin = ProcessService::calculateDefaultPrice();

        // 全館八折
        $discount = OrderProxy::calculateDiscount($origin);

        return $discount($price);
    }

    /**
     * 處理其他
     * @return string
     */
    public function processOther(): string
    {
        $origin = ProcessService::getDefaultOther();

        // 加一元多一件
        $extra = OrderProxy::getExtra($origin);

        // 送一百元折價券
        $coupon = OrderProxy::getCoupon($extra);

        return $coupon();
    }
}