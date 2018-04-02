<?php

namespace App\Decorator;

/**
 * Class Order
 * @package App\Decorator
 */
class Order
{
    /** @var CreditCard */
    private $creditCard;

    /**
     * Order constructor.
     * @param string $bankName
     */
    public function __construct(string $bankName)
    {
        $this->creditCard = CreditCardFactory::create($bankName);
    }

    /**
     * 取得訂單價格
     * @param float $price
     * @return float
     */
    public function getPrice(float $price): float
    {
        return $this->creditCard->processPrice($price);
    }

    /**
     * 取得其他優惠
     * @return string
     */
    public function getOther(): string
    {
        return $this->creditCard->processOther();
    }
}