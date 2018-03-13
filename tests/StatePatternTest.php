<?php

namespace Tests;

use App\State\RedLight;
use App\State\TrafficLight;
use PHPUnit\Framework\TestCase;

/**
 * Class StatePatternTest
 * @package Tests
 */
class StatePatternTest extends TestCase
{
    public function test_紅燈_未變燈_回傳紅燈()
    {
        // arrange
        $expected = '紅燈';

        // act
        $trafficLight = new TrafficLight(new RedLight());
        $actual = $trafficLight->getLightState();

        // assert
        $this->assertEquals($expected, $actual);
    }

    public function test_紅燈_變燈一次_回傳綠燈()
    {
        // arrange
        $expected = '綠燈';

        // act
        $trafficLight = new TrafficLight(new RedLight());
        $trafficLight->changeLightState();
        $actual = $trafficLight->getLightState();

        // assert
        $this->assertEquals($expected, $actual);
    }

    public function test_紅燈_變燈兩次_回傳黃燈()
    {
        // arrange
        $expected = '黃燈';

        // act
        $trafficLight = new TrafficLight(new RedLight());
        $trafficLight->changeLightState();
        $trafficLight->changeLightState();
        $actual = $trafficLight->getLightState();

        // assert
        $this->assertEquals($expected, $actual);
    }

    public function test_紅燈_變燈三次_回傳紅燈()
    {
        // arrange
        $expected = '紅燈';

        // act
        $trafficLight = new TrafficLight(new RedLight());
        $trafficLight->changeLightState();
        $trafficLight->changeLightState();
        $trafficLight->changeLightState();
        $actual = $trafficLight->getLightState();

        // assert
        $this->assertEquals($expected, $actual);
    }
}