<?php

namespace App;

/**
 * Interface Subject
 * @package App
 */
interface Subject
{
    /**
     * 取 時
     * @return int
     */
    public function getHours(): int;

    /**
     * 取 分
     * @return int
     */
    public function getMinutes(): int;

    /**
     * 取 秒
     * @return int
     */
    public function getSeconds(): int;

    /**
     * 加入 Observer 物件
     * @param Observer $observer
     * @return void
     */
    public function attach(Observer $observer): void;

    /**
     * 移除 Observer 物件
     * @param Observer $observer
     * @return void
     */
    public function detach(Observer $observer): void;

    /**
     * 每秒執行
     * @return void
     */
    public function onTick(): void;

    /**
     * 通知訂閱者 observer
     * @return void
     */
    public function notify(): void;
}