<?php

namespace App;

/**
 * Class DigitalClock
 * @package App
 */
class DigitalClock implements Observer
{
    /**
     * 實作 interface - 接收 subject 通知後顯示
     * @param int $hours
     * @param int $minutes
     * @param int $seconds
     * @return void
     */
    public function update(int $hours, int $minutes, int $seconds): void
    {
        echo sprintf("\n %02d : %02d : %02d", $hours, $minutes, $seconds);
    }
}