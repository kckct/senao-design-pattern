<?php

namespace App\Decorator;

use InvalidArgumentException;

/**
 * Class CreditCardFactory
 * @package App\Decorator
 */
class CreditCardFactory
{
    /**
     * 產生信用卡物件
     * @param string $name
     * @return CreditCard
     */
    public static function create(string $name): CreditCard
    {
        $namespace = '\\App\\Decorator\\' . $name;

        if (!class_exists($namespace)) {
            throw new InvalidArgumentException();
        }

        return new $namespace;
    }
}