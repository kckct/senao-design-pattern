<?php

namespace App;

/**
 * Interface Subject
 * @package App
 */
interface Subject
{
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