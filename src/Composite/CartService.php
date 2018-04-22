<?php

namespace App\Composite;

use Tightenco\Collect\Support\Collection;

/**
 * Class CartService
 * @package App\Composite
 */
class CartService
{
    /** @var Collection 產品清單 */
    private $products;

    /**
     * CartService constructor.
     */
    public function __construct()
    {
        $this->products = new Collection();
    }

    /**
     * 加入購物車
     * @param Price $product
     * @return void
     */
    public function addCart(Price $product): void
    {
        $this->products->push($product);
    }

    /**
     * 計算價錢
     * @return float
     */
    public function calculatePrice(): float
    {
        return $this->products->sum(function (Price $product) {
            return $product->getPrice();
        });
    }
}