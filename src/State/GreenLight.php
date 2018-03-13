<?php

namespace App\State;

/**
 * Class GreenLight
 * @package App\State
 */
class GreenLight implements LightStateInterface
{
    /**
     * 控制下個燈號
     * @return LightStateInterface
     */
    public function handle(): LightStateInterface
    {
        return new YellowLight();
    }

    /**
     * 顯示燈號 - 綠燈
     * @return string
     */
    public function showLight(): string
    {
        return Color::GREEN;
    }
}