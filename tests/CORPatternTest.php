<?php

namespace Tests;

use App\ChainOfResponsibility\FormatChecker;
use App\ChainOfResponsibility\VerificationCodeChecker;
use PHPUnit\Framework\TestCase;

/**
 * Class CORPatternTest
 * @package Tests
 */
class CORPatternTest extends TestCase
{
    public function test_身分證格式正確_驗證成功回傳true()
    {
        // arrange
        $id = 'A123456789';

        // act
        $checker = new FormatChecker();
        $checker->setNextChecker(new VerificationCodeChecker());

        $actual = $checker->check($id);

        // assert
        $this->assertTrue($actual);
    }

    /**
     * @dataProvider errorDataSet
     */
    public function test_身分證格式錯誤_驗證失敗回傳false(string $id)
    {
        // act
        $checker = new FormatChecker();
        $checker->setNextChecker(new VerificationCodeChecker());

        $actual = $checker->check($id);

        // assert
        $this->assertFalse($actual);
    }

    public function errorDataSet()
    {
        // arrange
        return [
            // 英文字母小寫
            ['a123456789'],
            // 第二碼錯誤
            ['A323456789'],
            // 少一碼
            ['A23456789'],
            // 多一碼
            ['A1234567890'],
            // 檢查碼錯誤
            ['A123456788'],
        ];
    }
}