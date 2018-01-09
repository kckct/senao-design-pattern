<?php

namespace App\Factory;

use Exception;

/**
 * Class BankFactory
 * @package App\Factory
 */
class BankFactory
{
    /**
     * 建立 Bank 物件
     * @param string $bankId
     * @return Bank
     * @throws Exception
     */
    public static function create(string $bankId): Bank
    {
        // 組出完整發卡行 namespace
        $className = 'App\\Factory\\' . $bankId;

        // 若 class 不存在丟 exception
        if (!class_exists($className)) {
            throw new Exception('目前不支援收單行: ' . $bankId);
        }

        return new $className;
    }
}