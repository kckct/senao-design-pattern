<?php

namespace App\Factory;

/**
 * Class NCCC
 * @package App\Factory
 */
class NCCC implements Bank
{
    /**
     * 驗證信用卡
     * @param string $cardNo 信用卡號碼
     * @return string 驗證結果
     */
    public function verifyCreditCard(string $cardNo): string
    {
        return 'NCCC 驗證信用卡號碼: ' . $cardNo . ' 成功!';
    }
}