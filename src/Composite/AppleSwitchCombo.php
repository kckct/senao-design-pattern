<?php

namespace App\Composite;

use Tightenco\Collect\Support\Collection;

/**
 * Class AppleSwitchCombo
 * @package App\Composite
 */
class AppleSwitchCombo implements Price
{
    /** @var float 折扣 */
    const DISCOUNT = 1000;

    /** @var Collection 產品清單 */
    private $products;

    /**
     * AppleCombo constructor.
     */
    public function __construct()
    {
        $this->products = collect([
            new AppleCombo(),
            new SwitchCombo(),
        ]);
    }

    /**
     * 取得價錢
     * @return float
     */
    public function getPrice(): float
    {
        return $this->products->sum(function (Price $product) {
            return $product->getPrice();
        }) - self::DISCOUNT;
    }
}