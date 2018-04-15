<?php

namespace App\Decorator;

/**
 * Class Citibank
 * @package App\Decorator
 */
class Citibank implements CreditCard
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

        return $rebate($price);
    }

    /**
     * 處理其他
     * @return string
     */
    public function processOther(): string
    {
        $origin = ProcessService::getDefaultOther();

        // 紅利點數增加一百點
        $point = ProcessDecorator::getPoint($origin);

        // 加一元多一件
        $extra = OrderProxy::getExtra($point);

        return $extra();
    }
}