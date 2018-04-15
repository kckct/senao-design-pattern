<?php

namespace App\Decorator;

use Closure;

/**
 * Class OrderProxy
 * @package App\Decorator
 */
class OrderProxy
{
    /**
     * 全館八折只限滿兩年會員
     * @param Closure $func
     * @return Closure
     */
    public static function calculateDiscount(Closure $func): Closure
    {
        return function ($price) use ($func) {
            if (MemberService::isTwoYearsMember('MemberA')) {
                return ProcessDecorator::calculateDiscount($func)($price);
            }

            return $func($price);
        };
    }

    /**
     * 送一百元折價券只限會員
     * @param Closure $func
     * @return Closure
     */
    public static function getCoupon(Closure $func): Closure
    {
        return function () use ($func) {
            if (MemberService::isMember('MemberA')) {
                return ProcessDecorator::getCoupon($func)();
            }

            return $func();
        };
    }

    /**
     * 加一元多一件只限活動期間
     * @param Closure $func
     * @return Closure
     */
    public static function getExtra(Closure $func): Closure
    {
        return function () use ($func) {
            if (EventService::isDateValid()) {
                return ProcessDecorator::getExtra($func)();
            }

            return $func();
        };
    }
}