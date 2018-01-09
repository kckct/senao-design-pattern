<?php

namespace App\Factory;

/**
 * Class Cathay 國泰銀行
 * @package App\Factory
 */
class Cathay implements Bank
{
    /**
     * 驗證信用卡
     * @param string $cardNo 信用卡號碼
     * @return string 驗證結果
     */
    public function verifyCreditCard(string $cardNo): string
    {
        return '國泰銀行 驗證信用卡號碼: ' . $cardNo . ' 成功!';
    }
}