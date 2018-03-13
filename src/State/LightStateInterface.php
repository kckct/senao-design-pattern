<?php

namespace App\State;

/**
 * Interface LightStateInterface
 * @package App\State
 */
interface LightStateInterface
{
    /**
     * 控制下個燈號
     * @return LightStateInterface
     */
    public function handle(): LightStateInterface;

    /**
     * 顯示燈號
     * @return string
     */
    public function showLight(): string;
}