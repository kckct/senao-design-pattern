<?php

namespace App\AbstractFactory\AbstractFactory;

use Exception;

/**
 * Class AbstractFactory
 * @package App\AbstractFactory\AbstractFactory
 */
abstract class AbstractFactory
{
    /** @var array 零件 */
    private $parts;

    /**
     * 產生工廠
     * @param string $name
     * @return AbstractFactory
     * @throws Exception
     */
    public static function createFactory(string $name): AbstractFactory
    {
        // 組出完整 namespace
        $className = 'App\\AbstractFactory\\' . $name . '\\' . $name . 'Factory';

        // 若 class 不存在丟 exception
        if (!class_exists($className)) {
            throw new Exception('找不到對應的工廠: ' . $name);
        }

        return new $className;
    }

    /**
     * 加入零件，產生服裝
     * @return array
     */
    public function createCustom(): array
    {
        $this->parts[] = $this->createHat();
        $this->parts[] = $this->createHelmet();
        $this->parts[] = $this->createArmor();
        $this->parts[] = $this->createBoots();
        $this->parts[] = $this->createWeapon();

        return $this->parts;
    }

    /**
     * 產生帽子
     * @return AbstractHat
     */
    protected abstract function createHat(): AbstractHat;

    /**
     * 產生頭盔
     * @return AbstractHelmet
     */
    protected abstract function createHelmet(): AbstractHelmet;

    /**
     * 產生盔甲
     * @return AbstractArmor
     */
    protected abstract function createArmor(): AbstractArmor;

    /**
     * 產生靴子
     * @return AbstractBoots
     */
    protected abstract function createBoots(): AbstractBoots;

    /**
     * 產生武器
     * @return AbstractWeapon
     */
    protected abstract function createWeapon(): AbstractWeapon;
}