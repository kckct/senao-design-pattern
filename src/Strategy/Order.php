<?php

namespace App\Strategy;

use Exception;

/**
 * Class Order
 * @package App\Strategy
 */
class Order
{
    /** @var int 金額 */
    private $price = 0;

    /** @var Strategy 折扣策略 */
    private $strategy;

    /**
     * Order constructor.
     * @param int $price
     * @param Strategy $strategy
     */
    public function __construct(int $price, Strategy $strategy)
    {
        $this->price    = $price;
        $this->strategy = $strategy;
    }

    /**
     * 取得折扣後金額
     * @return int
     * @throws Exception
     */
    public function getPrice(): int
    {
        if ($this->price <= 0) {
            throw new Exception('金額應為正整數!');
        }

        return $this->strategy->calculate($this->price);
    }
}