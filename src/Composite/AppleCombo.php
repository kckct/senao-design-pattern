<?php

namespace App\Composite;

use Tightenco\Collect\Support\Collection;

/**
 * Class AppleCombo
 * @package App\Composite
 */
class AppleCombo implements Price
{
    /** @var float 折扣 */
    const DISCOUNT = 0.9;

    /** @var Collection 產品清單 */
    private $products;

    /**
     * AppleCombo constructor.
     */
    public function __construct()
    {
        $this->products = collect([
            new MacBookPro(),
            new IPadAir(),
            new AppleWatch(),
        ]);
    }

    /**
     * 取得價錢
     * @return float
     */
    public function getPrice(): float
    {
        return self::DISCOUNT * $this->products->sum(function (Price $product) {
            return $product->getPrice();
        });
    }
}