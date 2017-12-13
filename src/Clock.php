<?php

namespace App;

/**
 * Class Clock
 * @package App
 */
class Clock implements Subject
{
    /** @var Observer[] */
    private $observers = [];

    /** @var int 時 */
    private $hours;

    /** @var int 分 */
    private $minutes;

    /** @var int 秒 */
    private $seconds;

    /**
     * 實作 interface - 加入 Observer 物件
     * @param Observer $observer
     * @return void
     */
    public function attach(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    /**
     * 實作 interface - 移除 Observer 物件
     * @param Observer $observer
     * @return void
     */
    public function detach(Observer $observer): void
    {
        foreach ($this->observers as $key => $val) {
            if ($val === $observer) {
                unset($this->observers[$key]);
            }
        }
    }

    /**
     * 實作 interface - 每秒執行
     * @return void
     */
    public function onTick(): void
    {
        $this->hours   = date('H');
        $this->minutes = date('i');
        $this->seconds = date('s');

        $this->notify();
    }

    /**
     * 實作 interface - 通知訂閱者 observer
     * @return void
     */
    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->hours, $this->minutes, $this->seconds);
        }
    }
}