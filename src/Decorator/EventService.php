<?php

namespace App\Decorator;

/**
 * Class EventService
 * @package App\Decorator
 */
class EventService
{
    /**
     * 是否在活動期間
     * @return bool
     */
    public static function isDateValid(): bool
    {
        return true;
    }
}