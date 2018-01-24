<?php

namespace Tests;

use App\Strategy\DiscountStrategy;
use App\Strategy\RebateStrategy;
use App\Strategy\Order;
use Exception;
use PHPUnit\Framework\TestCase;

/**
 * Class StrategyPatternTest
 * @package Tests
 */
class StrategyPatternTest extends TestCase
{
    public function test_1000塊使用滿千送百策略金額應變為900塊()
    {
        // arrange
        $expect = 900;

        // act
        $order = new Order(1000, new RebateStrategy());
        $actual = $order->getPrice();

        // assert
        $this->assertEquals($expect, $actual);
    }

    public function test_800塊使用滿千送百策略金額應為800塊()
    {
        // arrange
        $expect = 800;

        // act
        $order = new Order(800, new RebateStrategy());
        $actual = $order->getPrice();

        // assert
        $this->assertEquals($expect, $actual);
    }

    public function test_1000使用打八折策略金額應變為800塊()
    {
        // arrange
        $expect = 800;

        // act
        $order = new Order(1000, new DiscountStrategy());
        $actual = $order->getPrice();

        // assert
        $this->assertEquals($expect, $actual);
    }

    public function test_111使用打八折策略金額應變為89塊()
    {
        // arrange
        $expect = 89;

        // act
        $order = new Order(111, new DiscountStrategy());
        $actual = $order->getPrice();

        // assert
        $this->assertEquals($expect, $actual);
    }

    public function test_金額為負應丟exception()
    {
        // assert
        $this->expectException(Exception::class);

        // act
        $order = new Order(-1000, new DiscountStrategy());
        $order->getPrice();
    }
}