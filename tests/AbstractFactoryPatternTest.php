<?php

namespace Tests;

use App\AbstractFactory\AbstractFactory\AbstractFactory;
use App\AbstractFactory\Pokemon\PokemonArmor;
use App\AbstractFactory\Pokemon\PokemonBoots;
use App\AbstractFactory\Pokemon\PokemonHat;
use App\AbstractFactory\Pokemon\PokemonHelmet;
use App\AbstractFactory\Pokemon\PokemonWeapon;
use App\AbstractFactory\Warcraft\WarcraftArmor;
use App\AbstractFactory\Warcraft\WarcraftBoots;
use App\AbstractFactory\Warcraft\WarcraftHat;
use App\AbstractFactory\Warcraft\WarcraftHelmet;
use App\AbstractFactory\Warcraft\WarcraftWeapon;
use Exception;
use PHPUnit\Framework\TestCase;

/**
 * Class AbstractFactoryPatternTest
 * @package Tests
 */
class AbstractFactoryPatternTest extends TestCase
{
    public function test_產生寶可夢服裝應有零件帽子頭盔盔甲靴子及武器()
    {
        // arrange
        $factory = AbstractFactory::createFactory('Pokemon');

        // act
        $custom = $factory->createCustom();

        // assert
        $this->assertInstanceOf(PokemonHat::class, $custom[0]);
        $this->assertInstanceOf(PokemonHelmet::class, $custom[1]);
        $this->assertInstanceOf(PokemonArmor::class, $custom[2]);
        $this->assertInstanceOf(PokemonBoots::class, $custom[3]);
        $this->assertInstanceOf(PokemonWeapon::class, $custom[4]);
    }

    public function test_產生魔獸爭霸服裝應有零件帽子頭盔盔甲靴子及武器()
    {
        // arrange
        $factory = AbstractFactory::createFactory('Warcraft');

        // act
        $custom = $factory->createCustom();

        // assert
        $this->assertInstanceOf(WarcraftHat::class, $custom[0]);
        $this->assertInstanceOf(WarcraftHelmet::class, $custom[1]);
        $this->assertInstanceOf(WarcraftArmor::class, $custom[2]);
        $this->assertInstanceOf(WarcraftBoots::class, $custom[3]);
        $this->assertInstanceOf(WarcraftWeapon::class, $custom[4]);
    }

    public function test_無對應工廠應丟exception()
    {
        // assert
        $this->expectException(Exception::class);

        // arrange
        AbstractFactory::createFactory('xxx');
    }
}