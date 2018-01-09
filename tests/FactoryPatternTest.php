<?php

namespace Tests;

use App\Factory\BankFactory;
use PHPUnit\Framework\TestCase;

/**
 * Class FactoryPatternTest
 * @package Tests
 */
class FactoryPatternTest extends TestCase
{
    public function test_NCCC信用卡驗證成功()
    {
        // arrange
        $expected = 'NCCC 驗證信用卡號碼: aaa 成功!';

        // act
        $bank = BankFactory::create('NCCC');
        $actual = $bank->verifyCreditCard('aaa');

        // assert
        $this->assertEquals($expected, $actual);
    }

    public function test_中信信用卡驗證成功()
    {
        // arrange
        $expected = '中信銀行 驗證信用卡號碼: bbb 成功!';

        // act
        $bank = BankFactory::create('CTBC');
        $actual = $bank->verifyCreditCard('bbb');

        // assert
        $this->assertEquals($expected, $actual);
    }

    public function test_國泰信用卡驗證成功()
    {
        // arrange
        $expected = '國泰銀行 驗證信用卡號碼: ccc 成功!';

        // act
        $bank = BankFactory::create('Cathay');
        $actual = $bank->verifyCreditCard('ccc');

        // assert
        $this->assertEquals($expected, $actual);
    }

    public function test_無對應發卡行丟exception()
    {
        // assert
        $this->expectException('Exception');

        // act
        BankFactory::create('xxx');
    }
}