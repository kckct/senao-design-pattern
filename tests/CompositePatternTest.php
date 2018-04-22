<?php

namespace Tests;

use App\Composite\AppleCombo;
use App\Composite\AppleSwitchCombo;
use App\Composite\SwitchCombo;
use App\Composite\CartService;
use PHPUnit\Framework\TestCase;

/**
 * Class CompositePatternTest
 * @package Tests
 */
class CompositePatternTest extends TestCase
{
    public function test_購買AppleCombo應要72000()
    {
        // arrange
        $expect = 72000.0;

        // act
        $cart = new CartService();
        $cart->addCart(new AppleCombo());
        $actual = $cart->calculatePrice();

        // assert
        $this->assertEquals($expect, $actual);
    }

    public function test_購買SwitchCombo應要10800()
    {
        // arrange
        $expect = 10800.0;

        // act
        $cart = new CartService();
        $cart->addCart(new SwitchCombo());
        $actual = $cart->calculatePrice();

        // assert
        $this->assertEquals($expect, $actual);
    }

    public function test_購買AppleSwitchCombo應要81800()
    {
        // arrange
        $expect = 81800.0;

        // act
        $cart = new CartService();
        $cart->addCart(new AppleSwitchCombo());
        $actual = $cart->calculatePrice();

        // assert
        $this->assertEquals($expect, $actual);
    }
}