<?php

namespace App\Decorator;

use Closure;

/**
 * Class ProcessDecorator
 * @package App\Decorator
 */
class ProcessDecorator
{
    /**
     * 計算滿千送百 function
     * @param Closure $func
     * @return Closure
     */
    public static function calculateRebate(Closure $func): Closure
    {
        return function ($price) use ($func) {
            return $func($price) - 100;
        };
    }

    /**
     * 計算全館八折 function
     * @param Closure $func
     * @return Closure
     */
    public static function calculateDiscount(Closure $func): Closure
    {
        return function ($price) use ($func) {
            return $func($price) * 0.8;
        };
    }

    /**
     * 送一百元折價券 function
     * @param Closure $func
     * @return Closure
     */
    public static function getCoupon(Closure $func): Closure
    {
        return function () use ($func) {
            return $func() . '送一百元折價券,';
        };
    }


    /**
     * 加一元多一件 function
     * @param Closure $func
     * @return Closure
     */
    public static function getExtra(Closure $func): Closure
    {
        return function () use ($func) {
            return $func() . '加一元多一件,';
        };
    }

    /**
     * 紅利點數增加一百點 function
     * @param Closure $func
     * @return Closure
     */
    public static function getPoint(Closure $func): Closure
    {
        return function () use ($func) {
            return $func() . '紅利點數增加一百點,';
        };
    }
}