<?php

namespace App\Factory;

/**
 * Interface Bank
 * @package App\Factory
 */
interface Bank
{
    /**
     * 驗證信用卡
     * @param string $cardNo 信用卡號碼
     * @return string 驗證結果
     */
    public function verifyCreditCard(string $cardNo): string;
}