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
    public function test_執行三秒應有output且內容符合()
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
        $clock->attach(new DigitalClock());

        // 執行 3 秒
        $limit = 0;
        while ($limit < 3) {
            $clock->onTick();

            $limit++;
            sleep(1);
        }
    }
}
