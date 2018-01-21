<?php

namespace App\AbstractFactory\Warcraft;

use App\AbstractFactory\AbstractFactory\AbstractFactory;
use App\AbstractFactory\AbstractFactory\AbstractHat;
use App\AbstractFactory\AbstractFactory\AbstractHelmet;
use App\AbstractFactory\AbstractFactory\AbstractArmor;
use App\AbstractFactory\AbstractFactory\AbstractBoots;
use App\AbstractFactory\AbstractFactory\AbstractWeapon;

/**
 * Class WarcraftFactory
 * @package App\AbstractFactory\Warcraft
 */
class WarcraftFactory extends AbstractFactory
{
    /**
     * 產生帽子
     * @return AbstractHat
     */
    protected function createHat(): AbstractHat
    {
        return new WarcraftHat();
    }

    /**
     * 產生頭盔
     * @return AbstractHelmet
     */
    protected function createHelmet(): AbstractHelmet
    {
        return new WarcraftHelmet();
    }

    /**
     * 產生盔甲
     * @return AbstractArmor
     */
    protected function createArmor(): AbstractArmor
    {
        return new WarcraftArmor();
    }

    /**
     * 產生靴子
     * @return AbstractBoots
     */
    protected function createBoots(): AbstractBoots
    {
        return new WarcraftBoots();
    }

    /**
     * 產生武器
     * @return AbstractWeapon
     */
    protected function createWeapon(): AbstractWeapon
    {
        return new WarcraftWeapon();
    }
}