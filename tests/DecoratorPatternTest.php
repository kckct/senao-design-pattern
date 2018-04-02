<?php

namespace Tests;

use App\Decorator\Order;
use PHPUnit\Framework\TestCase;

/**
 * Class DecoratorPatternTest
 * @package Tests
 */
class DecoratorPatternTest extends TestCase
{
    public function test_1000塊使用使用中信卡金額應變為720塊及送一百元折價券()
    {
        // arrange
        $expectPrice = 720;
        $expectOther = '送一百元折價券,';

        // act
        $order = new Order('CTBC');
        $price = $order->getPrice(1000);
        $other = $order->getOther();

        // assert
        $this->assertEquals($expectPrice, $price);
        $this->assertEquals($expectOther, $other);
    }

    public function test_1000塊使用使用台新卡金額應變為720塊及加一元多一件及送一百元折價券()
    {
        // arrange
        $expectPrice = 800;
        $expectOther = '加一元多一件,送一百元折價券,';

        // act
        $order = new Order('Taishin');
        $price = $order->getPrice(1000);
        $other = $order->getOther();

        // assert
        $this->assertEquals($expectPrice, $price);
        $this->assertEquals($expectOther, $other);
    }

    public function test_1000塊使用使用花旗卡金額應變為900塊及紅利點數增加一百點及加一元多一件()
    {
        // arrange
        $expectPrice = 900;
        $expectOther = '紅利點數增加一百點,加一元多一件,';

        // act
        $order = new Order('Citibank');
        $price = $order->getPrice(1000);
        $other = $order->getOther();

        // assert
        $this->assertEquals($expectPrice, $price);
        $this->assertEquals($expectOther, $other);
    }
}