<?php

namespace Tests;

use App\Clock;
use App\DigitalClock;
use PHPUnit\Framework\TestCase;

/**
 * Class ObserverPatternTest
 * @package Tests
 */
class ObserverPatternTest extends TestCase
{
    public function test_訂閱一個對的channel執行三秒應有output且內容符合()
    {
        // arrange
        // 預期 output 內容
        $expected = "\n " . date('H : i : s');
        $expected .= "\n " . date('H : i : s', strtotime("+1 second"));
        $expected .= "\n " . date('H : i : s', strtotime("+2 second"));

        // assert
        // expectOutputString method 需要執行前先寫
        $this->expectOutputString($expected);

        // act
        $clock = new Clock();
        $clock->attach('current-time', new DigitalClock());

        // 執行 3 秒
        $limit = 0;
        while ($limit < 3) {
            $clock->onTick();

            $limit++;
            sleep(1);
        }
    }

    public function test_訂閱一個錯的channel執行三秒應沒有output()
    {
        // arrange
        // 預期 output 內容
        $expected = '';

        // assert
        $this->expectOutputString($expected);

        // act
        $clock = new Clock();
        $clock->attach('not-current-time', new DigitalClock());

        // 執行 3 秒
        $limit = 0;
        while ($limit < 3) {
            $clock->onTick();

            $limit++;
            sleep(1);
        }
    }

    public function test_訂閱一個對的channel執行兩秒_然後取消訂閱再執行兩秒_應只有最初兩秒的output且內容符合()
    {
        // arrange
        // 預期 output 內容
        $expected = "\n " . date('H : i : s');
        $expected .= "\n " . date('H : i : s', strtotime("+1 second"));

        // assert
        // expectOutputString method 需要執行前先寫
        $this->expectOutputString($expected);

        // act
        $clock = new Clock();
        $clock->attach('current-time', new DigitalClock());

        // 執行 2 秒
        $limit = 0;
        while ($limit < 2) {
            $clock->onTick();

            $limit++;
            sleep(1);
        }

        // act
        $clock->detach('current-time', new DigitalClock());

        // 執行 2 秒
        $limit = 0;
        while ($limit < 2) {
            $clock->onTick();

            $limit++;
            sleep(1);
        }
    }
}
