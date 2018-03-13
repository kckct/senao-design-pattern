<?php

namespace App\State;

/**
 * Class YellowLight
 * @package App\State
 */
class YellowLight implements LightStateInterface
{
    /**
     * 控制下個燈號
     * @return LightStateInterface
     */
    public function handle(): LightStateInterface
    {
        return new RedLight();
    }

    /**
     * 顯示燈號 - 黃燈
     * @return string
     */
    public function showLight(): string
    {
        return Color::YELLOW;
    }
}