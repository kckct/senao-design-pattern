<?php

namespace App\State;

/**
 * Class RedLight
 * @package App\State
 */
class RedLight implements LightStateInterface
{
    /**
     * 控制下個燈號
     * @return LightStateInterface
     */
    public function handle(): LightStateInterface
    {
        return new GreenLight();
    }

    /**
     * 顯示燈號 - 紅燈
     * @return string
     */
    public function showLight(): string
    {
        return Color::RED;
    }
}