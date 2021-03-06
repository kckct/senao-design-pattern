<?php

namespace App\Factory;

/**
 * Class CTBC 中信銀行
 * @package App\Factory
 */
class CTBC implements Bank
{
    /**
     * 驗證信用卡
     * @param string $cardNo 信用卡號碼
     * @return string 驗證結果
     */
    public function verifyCreditCard(string $cardNo): string
    {
        return '中信銀行 驗證信用卡號碼: ' . $cardNo . ' 成功!';
    }
}