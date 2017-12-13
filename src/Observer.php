<?php

namespace App;

/**
 * Interface Observer
 * @package App
 */
interface Observer
{
    /**
     * 接收 subject 通知後顯示
     * @param int $hours
     * @param int $minutes
     * @param int $seconds
     * @return void
     */
    public function update(int $hours, int $minutes, int $seconds): void;
}