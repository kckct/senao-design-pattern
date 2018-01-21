<?php

namespace App\AbstractFactory\Pokemon;

use App\AbstractFactory\AbstractFactory\AbstractFactory;
use App\AbstractFactory\AbstractFactory\AbstractHat;
use App\AbstractFactory\AbstractFactory\AbstractHelmet;
use App\AbstractFactory\AbstractFactory\AbstractArmor;
use App\AbstractFactory\AbstractFactory\AbstractBoots;
use App\AbstractFactory\AbstractFactory\AbstractWeapon;

/**
 * Class Pokemon
 * @package App\AbstractFactory\PokemonFactory
 */
class PokemonFactory extends AbstractFactory
{
    /**
     * 產生帽子
     * @return AbstractHat
     */
    protected function createHat(): AbstractHat
    {
        return new PokemonHat();
    }

    /**
     * 產生頭盔
     * @return AbstractHelmet
     */
    protected function createHelmet(): AbstractHelmet
    {
        return new PokemonHelmet();
    }

    /**
     * 產生盔甲
     * @return AbstractArmor
     */
    protected function createArmor(): AbstractArmor
    {
        return new PokemonArmor();
    }

    /**
     * 產生靴子
     * @return AbstractBoots
     */
    protected function createBoots(): AbstractBoots
    {
        return new PokemonBoots();
    }

    /**
     * 產生武器
     * @return AbstractWeapon
     */
    protected function createWeapon(): AbstractWeapon
    {
        return new PokemonWeapon();
    }
}