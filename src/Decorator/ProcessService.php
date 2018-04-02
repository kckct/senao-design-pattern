<?php

namespace App\Decorator;

use Closure;

/**
 * Class ProcessService
 * @package App\Decorator
 */
class ProcessService
{
    /**
     * 計算價格 default function
     * @return Closure
     */
    public static function calculateDefaultPrice(): Closure
    {
        return function ($price) {
            return $price;
        };
    }

    /**
     * 取得其他優惠 default function
     * @return Closure
     */
    public static function getDefaultOther(): Closure
    {
        return function () {
            return '';
        };
    }
}