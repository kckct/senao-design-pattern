<?php

namespace App\Composite;

use Tightenco\Collect\Support\Collection;

/**
 * Class SwitchCombo
 * @package App\Composite
 */
class SwitchCombo implements Price
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
            new NintendoSwitch(),
            new Zelda(),
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