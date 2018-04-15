<?php

namespace App\Decorator;

/**
 * Class MemberService
 * @package App\Decorator
 */
class MemberService
{
    /**
     * 是否為會員
     * @param string $memberId
     * @return bool
     */
    public static function isMember(string $memberId): bool
    {
        return $memberId === 'MemberA';
    }

    /**
     * 是否為滿兩年會員
     * @param string $memberId
     * @return bool
     */
    public static function isTwoYearsMember(string $memberId): bool
    {
        return $memberId === 'MemberA';
    }
}