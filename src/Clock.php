<?php

namespace App;

/**
 * Class Clock
 * @package App
 */
class Clock implements Subject
{
    /** @var Observer[][] */
    private $observers = [];

    /** @var int 時 */
    private $hours;

    /** @var int 分 */
    private $minutes;

    /** @var int 秒 */
    private $seconds;

    /**
     * 實作 interface - 取 時
     * @return int
     */
    public function getHours(): int
    {
        return $this->hours;
    }

    /**
     * 實作 interface - 取 分
     * @return int
     */
    public function getMinutes(): int
    {
        return $this->minutes;
    }

    /**
     * 實作 interface - 取 秒
     * @return int
     */
    public function getSeconds(): int
    {
        return $this->seconds;
    }

    /**
     * 實作 interface - 加入 Observer 物件
     * @param string $channel
     * @param Observer $observer
     * @return void
     */
    public function attach(string $channel, Observer $observer): void
    {
        $this->observers[$channel][] = $observer;
    }

    /**
     * 實作 interface - 移除 Observer 物件
     * @param string $channel
     * @param Observer $observer
     * @return void
     */
    public function detach(string $channel, Observer $observer): void
    {
        foreach ($this->getChannelObservers($channel) as $key => $val) {
            if ($val instanceof $observer) {
                unset($this->observers[$channel][$key]);
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

        $this->notify('current-time');
    }

    /**
     * 實作 interface - 通知訂閱者 observer
     * @param string $channel
     * @return void
     */
    public function notify(string $channel): void
    {
        foreach ($this->getChannelObservers($channel) as $observer) {
            $observer->update($this->getHours(), $this->getMinutes(), $this->getSeconds());
        }
    }

    /**
     * 取得指定頻道的訂閱者
     * @param string $channel
     * @return array
     */
    private function getChannelObservers(string $channel): array
    {
        return $this->observers[$channel] ?? [];
    }
}