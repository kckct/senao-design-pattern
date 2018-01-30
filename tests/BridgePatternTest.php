<?php

namespace Tests;

use App\Bridge\PrintOutput;
use App\Bridge\PrintRandomTimes;
use PHPUnit\Framework\TestCase;

/**
 * Class BridgePatternTest
 * @package Tests
 */
class BridgePatternTest extends TestCase
{
    public function test_輸出文件加列印隨機次數應有檔案產生()
    {
        // arrange
        $fileName = './output.txt';

        // act
        $print = new PrintRandomTimes(new PrintOutput('test'));
        $print->printRandom();

        // assert
        $this->assertFileExists($fileName);

        // 測試完刪除檔案
        unlink($fileName);
    }
}