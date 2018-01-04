<?php

namespace Tests;

use App\Builder\DesktopBuilder;
use App\Builder\LaptopBuilder;
use App\Builder\Director;
use PHPUnit\Framework\TestCase;

/**
 * Class BuilderPatternTest
 * @package Tests
 */
class BuilderPatternTest extends TestCase
{
    public function test_組裝Desktop應有3個零件()
    {
        // arrange
        $direct = new Director();
        $desktopBuilder = new DesktopBuilder();

        // act
        $direct->construct($desktopBuilder);
        $desktop = $desktopBuilder->getComputer();
        $actual = $desktop->show();

        // assert
        $this->assertEquals(3, count($actual));
    }

    public function test_組裝Laptop應有3個零件()
    {
        // arrange
        $direct = new Director();
        $laptopBuilder = new LaptopBuilder();

        // act
        $direct->construct($laptopBuilder);
        $laptop = $laptopBuilder->getComputer();
        $actual = $laptop->show();

        // assert
        $this->assertEquals(3, count($actual));
    }
}